<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\etudiant;
use App\Models\teacher;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class etudiantController extends Controller
{
    public function etudiant(){
        $etudiant= etudiant::all();
        if (Auth::id()){
            $users=auth::user();
            foreach($etudiant as $etudiant){

                if($etudiant->id == $users->id ){
                    $etudiant = etudiant::where('id','=',$users->id)->get(); 
                    

                    return view ('etudiant.espace_etudiant',compact('etudiant'));
                }

            }
        
        }
        }
        public function show_teacher_list(){
            $user= user::all();
            $etudiant= etudiant::all();
            $teacher= teacher::all();
            if (Auth::id()){
              
                $users=auth::user();
                $etudiant = etudiant::where('id','=',$users->id)->get(); 
                foreach($etudiant as $etudiant){
    
                    
                        
    
                       
                       
                        foreach($teacher as $teacher){
                            
                          
                            $teacher = teacher::orderBy('updated_at', 'desc')->paginate(2);
               
                
                            $etudiant = etudiant::where('id','=',$users->id)->get(); 


                        
                   
                 

                return view ('etudiant.show_teasher_list',compact('etudiant','teacher'));
            
        
        

    }
}
            }
            }

        public function infoetud(Request $request){
            if (Auth::id()){
               $user=auth::user()->id;
                       
                          
               $etudiant = etudiant::where('id','=',$user)->get();
                 foreach($etudiant as $etudiant){
                   $etudiant-> niveaux_etudes=$request-> niveaux_etudes;
                   $etudiant-> spéciatité=$request-> spéciatité;
                   $etudiant-> nomprojet=$request-> nomprojet;
                   $etudiant-> description=$request-> descriptionprojet;
                   $etudiant-> budjet=$request-> budget;
                   $etudiant-> lien_compte_facebook=$request-> lien_compte_facebook;
                   $etudiant-> lien_compte_instagram=$request-> lien_compte_instagram;
                   $etudiant-> lien_compte_linkedin=$request-> lien_compte_linkedin;
                   $image=$request->image;
           $imagename=time().'.'.$image->getClientOriginalExtension();
           $request->image->move('imagesetudiant',$imagename);
           
           $etudiant->image=$imagename;
                   
                  $etudiant->save();
                   return redirect()->back();
          
              
                   
                   
                    
               }
      
           }
       }

       public function modif_etudiant_profil(){
            
        if (Auth::id()){
                $user=auth::user()->id;
                
                   
                        $etudiant = etudiant::where('id','=',$user)->get(); 
                    
                       
                        return view ('etudiant.profile_etudiant',compact('etudiant'));
                

        
          
        }
      
    
        }

        public function update_info_etudiant(  Request $request){
            if (Auth::id()){
                $user=auth::user()->id;
                
                   
         $etudiant = etudiant::where('id','=',$user)->get();
           foreach($etudiant as $etudiant){
            $etudiant-> niveaux_etudes=$request-> niveaux_etudes;
            $etudiant-> spéciatité=$request-> spéciatité;
            $etudiant-> nomprojet=$request-> nomprojet;
            $etudiant-> description=$request-> description;

            $etudiant-> budjet=$request-> budjet;
            $etudiant-> lien_compte_facebook=$request-> lien_compte_facebook;
            $etudiant-> lien_compte_instagram=$request-> lien_compte_instagram;
            $etudiant-> lien_compte_linkedin=$request-> lien_compte_linkedin;
            $etudiant->email = $request->email;
            $etudiant-> firstname=$request-> firstname;
            $etudiant-> lastname=$request-> lastname;
            $etudiant-> password=$request->password;
            $etudiant-> configpassword=$request->configpassword;
            $etudiant-> phone=$request->phone;
            $etudiant-> adress=$request->adresse;
            $etudiant-> age=$request->age;
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('imagesetudiant',$imagename);
    
            $etudiant->image=$imagename;
            $etudiant->save();
            return redirect()->back();

           }
            
        
        }




}  

public function info_teacher($id){
 
    $user= User::all();
    $etudiant= etudiant::all();
    $teacher= teacher::all();

   

    
    if (Auth::id()){
        $users=auth::user();
        foreach($etudiant as $etudiant){

          
          
          
          
            if($etudiant->id == $users->id ){
                $etudiant = etudiant::where('id','=',$users->id)->get(); 
           
                foreach($user as $user){
                    $user = user::where('id','=',$id)->get();

                foreach ($teacher as $teacher ){


                    $teacher = teacher::where('id','=',$id)->get();

                    
                        
                   
                        
                
                   

                        return view ('etudiant.info_teacher',compact('user','etudiant','teacher'));

                    }
                    }



                }




            
            }

        }


        }
       

        

 
public function conceille($id){
    $vid=video::all();
    $etudiant=etudiant::all();
    if (Auth::id()){
        $users=auth::user();
        foreach($vid as $vid){
            foreach($etudiant as $etudiant){

          
          
          
          
                
                    $etudiant = etudiant::where('id','=',$users->id)->get(); 

            $vid = video::where('user_id','=',$id)->paginate(3);
            return view('etudiant.conceille',compact('vid','etudiant'));
        }
    }

    
    }
}


        


        
    


}
