<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use App\Models\User;


use App\Models\teacher;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class homecontroller extends Controller
{
    public function index()
    {
        $teacher= teacher::all();
        $etudiant=etudiant::all();
        $user=user::all();
        $totalteach = 0 ;
        $totaletud =0;

        foreach($user as $user){
            if($user->type == 2){
                $totaletud= $totaletud + 1 ; 
            }
        }


            
            

        

        
        

        if (Auth::id()){
            $users=auth::user();
            
            foreach($teacher as $teacher){
                $totalteach=teacher::all()->count();
                $totalutilisateur=$totalteach +  $totaletud ;

                if($teacher->id == $users->id ){
                    $teacher = teacher::where('id','=',$users->id)->get(); 
                    
                    

                    return view ('teacher.index',compact('teacher','totalteach','totalutilisateur','totaletud'));
                }
            }
   
        if ($users->type == 2){

            foreach($etudiant as $etudiant){
                $etudiant = etudiant::where('id','=',$users->id)->get();


            
            foreach($teacher as $teacher){
                $totalteach=teacher::all()->count();
                $totalutilisateur=$totalteach +  $totaletud ;
            
            return view ('etudiant.visitinterface',compact('etudiant','totalteach','totalutilisateur','totaletud'));
            }
        }

         } 
          
       
        }
    }       

        
 }



   

       

        

    





    




