<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\etudiant;
use App\Models\teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\CssSelector\Node\ElementNode;

class AuthController extends Controller
{
    public function register()
    {
        return view('log.register');
    }
 
    public function registerPost(Request $request)
    {
        $user= new User ;
       $user-> firstname=$request-> firstname;
       $user-> lastname=$request-> lastname;
       $user->password = Hash::make($request->password);
       if(($request->password) == ($request->configpassword)){
       $user-> configpassword=Hash::make($request->configpassword);
       }
       else{
        
        return redirect()->back()->with('message', 'vrify your password')  ;
         
       }
       $user-> email=$request->email;
       $user-> phone=$request->phone;
       $user-> adress=$request->adresse;
       $user-> age=$request->age;
       if ( $request->v1 == 1  ){
        $user-> type= 2 ;

       }
       else {
        $user-> type= 1 ;
       }
       
       $user->save();

      if($user->type == 1){
        $teacher= new teacher() ;
       
        $teacher->id = $user->id  ;
        $teacher->email = $user->email;
        
        $teacher->firstname = $user->firstname  ; 
        $teacher->lastname = $user->lastname  ; 
        $teacher->password = $user->password  ;
        $teacher->configpassword = $user->configpassword  ;

        $teacher->phone = $user->phone  ; 
        $teacher->adress = $user->adress  ; 
        $teacher->age = $user->age  ; 
        $teacher->save();
      }
      else if ($user->type == 2){
        $etudiant= new etudiant() ;
       
        $etudiant->id = $user->id  ;
        $etudiant->email = $user->email;
        
        $etudiant->firstname = $user->firstname  ; 
        $etudiant->lastname = $user->lastname  ; 
        $etudiant->password = $user->password  ;
        $etudiant->configpassword = $user->configpassword  ;

        $etudiant->phone = $user->phone  ; 
        $etudiant->adress = $user->adress  ; 
        $etudiant->age = $user->age  ; 
        $etudiant->save();
    }
   
        return view('log.login');
 
        return back()->with('success', 'Register successfully');
      
    }
 
    public function login()
    {
        return view('log.login');
    }
 
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials))  {
            return redirect('/home')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password');
    }
 
    public function logout()
    {
        Auth::logout();
 
        return view('log.login');
    }
}
