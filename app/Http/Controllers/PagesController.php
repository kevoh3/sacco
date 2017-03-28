<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
use App\Member;
use DB;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
class PagesController extends Controller
{
    public function index(){
    	return view('index');
    }
    public function login(){
    	return view('login');
    }
    public function signin(Request $request){
$this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
 try
 {
     if(Sentinel::authenticate($request->all())){
         $slug= Sentinel::getUser()->roles()->first()->slug;
         if($slug=='admin'){
             return redirect('/dashboard');
         }
         elseif($slug=='employee'){
             return redirect('/employee');
         }
         elseif($slug=='member'){
             return redirect('/member');
         }
     }
     else{
         return redirect()->back()->with('error','wrong credentials!');
     }
 }
 catch(ThrottlingException $e){
 $delay=$e->getDelay();
     return redirect()->back()->with('error',"you are banned for $delay seconds.");

 }
 catch(NotActivatedException $e){
     return redirect()->back()->with('error',"your account is not activated yet.");

 }

    }
public function getLogout()
    {
     Sentinel::logout();
        return redirect('/login');

    }
    
    public function register(){
    	return view('register');
    }
      public function create(Request $request){
    $this->validate($request,[
  'fname'=>'required',
  'lname'=>'required',
  'nid'=>'required|unique:members',
  'dob'=>'required',
  'phone'=>'required',
  'email'=>'required|unique:members',
  'residence'=>'required',
  'nok'=>'required',
  'relationship'=>'required',
  'password'=>'required|confirmed'
    ]);
    DB::transaction(function() use($request){
        $name=$request->fname.' '.$request->lname;
        $credentials=[
            'name'=>$name,
            'email'=>$request->email,
            'password'=>$request->password,
            ];
         
      $user=Sentinel::registerAndActivate($credentials);
        $role=Sentinel::findRoleBySlug('member');
        $role->users()->attach($user);

        $member=new Member;
           $member->user_id=$user->id;
           $member->fname=$request->fname;
           $member->lname=$request->lname;
           $member->nid=$request->nid;
           $member->dob=$request->dob;
           $member->phone=$request->phone;
           $member->email=$request->email;
           $member->residence=$request->residence;
           $member->nok=$request->nok;
           $member->relationship=$request->relationship;
           $member->save();
       });
        return redirect('/login')->with('success','Member Account Created Successfully!.');

}

    
    public function products(){
    	return view('products');
    }
      public function signup(){
    	return view('admin.signup');
    }
      public function adminSignup(Request $request){
    	   $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|confirmed',
        ]);
        $user=Sentinel::registerAndActivate($request->all());
        $role=Sentinel::findRoleBySlug('admin');
        $role->users()->attach($user);
       return  redirect('/login')->with('success','Registration successful!');
    }
}
