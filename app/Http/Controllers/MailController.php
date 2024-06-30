<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Mail\DemoMail;
use App\Models\etudiant;
use App\Models\teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
     public function index(Request $request)
     {

        $teacher= teacher::all();
        $etudiant=etudiant::all();
        if (Auth::id()){
            $users=auth::user();
            foreach($teacher as $teacher){

                if($teacher->id == $users->id ){
                    
                    $mailData = [
                        'email' => $teacher->email,
                        'name' => $teacher->firstname,
                        'message'  => $request->message,
                    ];
            
                    Mail::to('dawedamine654@gmail.com')->send(new DemoMail($mailData));
            
                   

                   return redirect()->back();
                   
                   
                   
                   
                  
                }

            }
        
        }
        else  if (Auth::id()){
            $users=auth::user();
            foreach($etudiant as $etudiant){

                if($etudiant->id == $users->id ){
                    
                    $mailData = [
                        'email' => $teacher->email,
                        'name' => $teacher->firstname,
                        'message'  => $request->message,
                    ];
            
                    Mail::to('dawedamine654@gmail.com')->send(new DemoMail($mailData));
            
                   

                   return redirect()->back();
                   
                   
                   
                   
                  
                }

            }
        
        }







        
   
    }

     


                    
            
                    
            
    }