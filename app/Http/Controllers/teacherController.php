<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\teacher;
use App\Mail\MessageTeacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\homecontroller;
use App\Models\categorie;
use App\Models\etudiant;
use App\Models\video;
use Symfony\Contracts\Service\Attribute\Required;


 class teacherController extends Controller
{

        
    public function teacher(){
        $teacher= teacher::all();
        if (Auth::id()){
            $users=auth::user();
            foreach($teacher as $teacher){

                if($teacher->id == $users->id ){
                    $teacher = teacher::where('id','=',$users->id)->get(); 

                    return view ('teacher.espace_teacher',compact('teacher'));
                }

            }
        
        }
        }

       


        public function etudiant(){
            $user= User::all();
            $teacher= teacher::all();
            $etudiant= etudiant::all();
           
            
            if (Auth::id()){
                $users=auth::user();
                foreach($teacher as $teacher){
    
                  
                  
                  
                  
                    if($teacher->id == $users->id ){
                        $teacher = teacher::where('id','=',$users->id)->get(); 
                   
                        foreach($etudiant as $etudiant){
                            $etudiant = etudiant::orderBy('updated_at', 'desc')->paginate(2);


                          
        
                        
        
                            
                                
                            return view ('teacher.espace_etudiant',compact('teacher','etudiant'));
                        }
                                
                                
                        
                    
                    }
    
                }
            
            }
            
            
                   

                   
                        
             
                    
            
                }
    
                public function show_etudiant_list(){
 
                    $user= User::all();
                    $teacher= teacher::all();
                    $etudiant= etudiant::all();
                   

            
                    if (Auth::id()){
                        $users=auth::user();
                        foreach($teacher as $teacher){
            
                          
                          
                          
                          
                            if($teacher->id == $users->id ){
                                $teacher = teacher::where('id','=',$users->id)->get(); 
                           
                                foreach($etudiant as $etudiant){
                                    $etudiant = etudiant::orderBy('updated_at', 'desc')->paginate(2);
        
        


                                           
                                        
                                        
                                    

                                    
                
                                
                
                                    
                                        
                                    return view ('teacher.show_etudiant_list',compact('teacher','etudiant'));
                                }
                                        
                                        
                                
                
                            }
            
                        }
              
            
                        }
                    }

                 
                
            
                public function info_etudiant($id){
 
                    $user= User::all();
                    $teacher= teacher::all();
                    $etudiant= etudiant::all();

                   
            
                    
                    if (Auth::id()){
                        $users=auth::user();
                        foreach($teacher as $teacher){
            
                          
                          
                          
                          
                            if($teacher->id == $users->id ){
                                $teacher = teacher::where('id','=',$users->id)->get(); 
                           
                                foreach($user as $user){
                                    $user = user::where('id','=',$id)->get();

                                    foreach ($etudiant as $etudiant){
                                        $etudiant= etudiant::where('id','=',$id)->get();

                                    }
                
                                
                
                                    
                                        
                                    return view ('teacher.info_etudiant',compact('user','teacher','etudiant'));
                                        
                                        
                                }
                            
                            }
            
                        }
              
            
                        }
                       
                
                        }

                 
                
            
            










     public function infoteach(Request $request){
         if (Auth::id()){
            $user=auth::user()->id;
                    
                       
            $teacher = teacher::where('id','=',$user)->get();
              foreach($teacher as $teacher){
                $teacher-> niveaux_etudes=$request-> niveaux_etudes;
                $teacher-> spéciatité=$request-> spéciatité;
                $teacher-> expérience=$request-> expérience;
                $teacher-> description=$request-> description;
                $teacher-> salaire_par_heure=$request-> salaire_par_heure;
                $teacher-> tags=$request-> tags;
                $teacher-> lien_compte_facebook=$request-> lien_compte_facebook;
                $teacher-> lien_compte_instagram=$request-> lien_compte_instagram;
                $teacher-> lien_compte_linkedin=$request-> lien_compte_linkedin;
                $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('imagesteacher',$imagename);
        
        $teacher->image=$imagename;
                
               $teacher->save();
                return redirect()->back();
       
           
                
                
                 
            }
   
        }
    }
        public function show_profile_teacher(){
            
            if (Auth::id()){
                    $user=auth::user()->id;
                    
                       
                            $teacher = teacher::where('id','=',$user)->get(); 
                        
                           
                            return view ('teacher.show_profile_teacher',compact('teacher'));
                    

            
              
            }
          
        
            }
            public function edit_profile_teacher(){
              
    
                if (Auth::id()){
                    $user=auth::user()->id;
                    
                       
                            $teacher = teacher::where('id','=',$user)->get();
                return view ('teacher.edit_profile_teacher',compact('teacher'));
                }
            }

            public function update_profil_teacher(  Request $request){
                if (Auth::id()){
                    $user=auth::user()->id;
                    
                       
             $teacher = teacher::where('id','=',$user)->get();
               foreach($teacher as $teacher){
                $teacher-> niveaux_etudes=$request-> niveaux_etudes;
                $teacher-> spéciatité=$request-> spéciatité;
                $teacher-> expérience=$request-> expérience;
                $teacher-> description=$request-> description;
                $teacher-> salaire_par_heure=$request-> salaire_par_heure;
                $teacher-> tags=$request-> tags;

                $teacher-> lien_compte_facebook=$request-> lien_compte_facebook;
                $teacher-> lien_compte_instagram=$request-> lien_compte_instagram;
                $teacher-> lien_compte_linkedin=$request-> lien_compte_linkedin;
                $teacher->email = $request->email;
                $teacher-> firstname=$request-> firstname;
                $teacher-> lastname=$request-> lastname;
                $teacher-> password=$request->password;
                $teacher-> configpassword=$request->configpassword;
                $teacher-> phone=$request->phone;
                $teacher-> adress=$request->adresse;
                $teacher-> age=$request->age;
                $image=$request->image;
                $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('imagesteacher',$imagename);
        
                $teacher->image=$imagename;
                $teacher->save();
                return redirect()->back();

               }
                
            
            }
 



    }  
    public function conseilles(){
        $vid=video::all();
        $teacher=teacher::all();

        if (Auth::id()){
            $user=auth::user()->id;
            
               
                    
                
                foreach($teacher as $teacher){
                    foreach ($vid as $vid){
                    

                        
                            $vid =  video::where('user_id','=',$user)->orderby('category_name','asc')->paginate(2);
                            $teacher = teacher::where('id','=',$user)->get(); 
                            return view ('teacher.conseilles',compact('teacher','vid'));
                        
            


                
                   
                    


                    


                    }
                }
               

                   
                    
            

    
      
    }

       
    }

    public function ajout_video( Request $request){
    $teacher =teacher::all();
   

        if (Auth::id()){
            $user=auth::user()->id;
            
               
     
            $categorie = categorie::all(); 
            $video = video::all(); 
            $totalcat=categorie::all()->count();
            $totalvideo=video::all()->count();

            

        foreach($teacher as $teacher) {

        if($teacher->id == $user){

         
            
             if( ($totalcat == 0 ) ){
                

                
                $categorie= new categorie ;
               
        
                $categorie-> category_name=$request-> cat;
                $categorie->save();
                $video= new video ;
                
                       
                        
                  

                        $request->validate([
                            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
                        ]);
                 
                        $file=$request->file('video');
                        $file->move('upload',$file->getClientOriginalName());
                        $file_name=$file->getClientOriginalName();
                 
                        
                        $video->video = $file_name;

                        $video-> category_name=$request-> cat;
                        $video-> video_name=$request-> name_video;
                        $video-> user_id=$teacher-> id;


                        $video->save();
                     
                        return redirect()->back();
              
               

                

               

            } 

            
            $categorie = categorie::all(); 
            $video = video::all(); 
                
            foreach($categorie as $categorie){
               

             if(  ($categorie->category_name == $request->cat)){
                


                $video= new video ;
        
                $video-> category_name=$request-> cat;
                $video-> video_name=$request-> name_video;
                $video-> user_id=$teacher-> id;
                $request->validate([
                    'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
                ]);
         
                $file=$request->file('video');
                $file->move('upload',$file->getClientOriginalName());
                $file_name=$file->getClientOriginalName();
         
                
                $video->video = $file_name;

                $video-> category_name=$request-> cat;
                $video-> video_name=$request-> name_video;
                $video->save();
                return redirect()->back();
                
          

            }

        }



        foreach($categorie as $categorie){
           
                $categorie = categorie::where('category_name','=',$request->cat)->get(); 
               

            if (  ($categorie )) {
                $categorie= new categorie ;
               
        
                $categorie-> category_name=$request-> cat;
                $categorie->save();
                $video= new video ;
        
                $video-> category_name=$request-> cat;
                $video-> video_name=$request-> name_video;
                $video-> user_id=$teacher-> id;
                $request->validate([
                    'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
                ]);
         
                $file=$request->file('video');
                $file->move('upload',$file->getClientOriginalName());
                $file_name=$file->getClientOriginalName();
         
                
                $video->video = $file_name;

                $video-> category_name=$request-> cat;
                $video-> video_name=$request-> name_video;
                $video->save();
                return redirect()->back();
                       


            }
        
        
        } 
        }
      
    }
    }

     
         
  
       
       
        
            
    

       
        
    
    }

    public function modif_video($id){
       $teacher=teacher::all();
       $vid=video::all();
        if (Auth::id()){
            $user=auth::user()->id;
            foreach ($teacher as $teacher){

                foreach ($vid as $vid){
                    $vid = video::where('id','=',$id)->get();
                    $teacher = teacher::where('id','=',$user)->get();
                    return view ('teacher.modif_video',compact('vid','teacher'));


                    }



                }

            }
               
      
    }

    


    public function update_video( $id, Request $request){
        if (Auth::id()){
            $user=auth::user()->id;
            $teacher=teacher::all();
               
     $vid = video::where('id','=',$id)->get();
     

     foreach($vid as $vid){
       

      
        $vid-> category_name = $request-> catname;
                $vid-> video_name = $request-> vidname;
                
                $request->validate([
                    'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
                ]);
         
                $file=$request->file('video');
                $file->move('upload',$file->getClientOriginalName());
                $file_name=$file->getClientOriginalName();
         
                
                $vid->video = $file_name;

                
                $vid->save();
        return redirect()->back();
       
    
    }

    }




}  

    

    
     
        public function forgotpass()
        {
            $teacher = [
                'title' => 'Mail from Webappfix',
                'body' => 'This is for testing email usign smtp',
            ];
    
            Mail::to('dawedamine654@gmail.com')->send(new MessageTeacher($teacher));
    
            dd('Email send successfully.');
        }
        
    
}

    



    
    

    

    




    
 
       






