<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\MailController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\etudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('log.login');
});
 
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/newregister', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
    route::get('/forgotpassword',[AuthController::class,'forgotpassword']);
    route::get('/verifemail',[AuthController::class,'verifemail']);
    route::post('/forgotpass',[AuthController::class,'forgotpass']);
    
   
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [homecontroller::class, 'index']);
    route::get('/logout',[AuthController::class,'logout']);
    Route::get('/send_mail',[MailController::class,'index']);
    
//teacher route//
    route::POST('/infoteach', [teacherController::class,'infoteach']);
    route::get('/teacher', [teacherController::class,'teacher']);
    route::get('/show_profile_teacher', [teacherController::class,'show_profile_teacher']);
    route::get('/edit_profile_teacher', [teacherController::class,'edit_profile_teacher']);
    route::POST('/update_profil_teacher', [teacherController::class,'update_profil_teacher']);
    route::get('/etudiant', [teacherController::class,'etudiant']);
    route::get('/show_etudiant_list', [teacherController::class,'show_etudiant_list']);
    route::get('/info_etudiant/{id}', [teacherController::class,'info_etudiant']);
    route::get('/conseilles', [teacherController::class,'conseilles']);
    route::post('/ajout_video', [teacherController::class,'ajout_video']);
    route::get('/modif/{id}', [teacherController::class,'modif_video']);
    route::post('/modif_video/{id}', [teacherController::class,'update_video']);

  
   //etudiant route//
   route::get('/etudiantprofile', [etudiantController::class,'etudiant']);
  // route::get('/teacher_list', [etudiantController::class,'teacher_list']);
   route::POST('/infoetud', [etudiantController::class,'infoetud']);
   route::get('/show_profile_etudiant', [etudiantController::class,'show_profile_etudiant']);
   route::get('/modif_etudiant_profil', [etudiantController::class,'modif_etudiant_profil']);
   route::post('/update_info_etudiant', [etudiantController::class,'update_info_etudiant']);
   route::get('/show_teacher_list', [etudiantController::class,'show_teacher_list']);
   route::get('/info_teacher/{id}', [etudiantController::class,'info_teacher']);
   route::get('/conceille/{id}', [etudiantController::class,'conceille']);


    






   // route::get('/etudiant',[teacherController::class,'etudiant']);



//route::get('/conseilles', [teacherController::class,'conseilles']);
//route::get('/about', [teacherController::class,'about']);
    
    
    /* route::get('/editprofile', [HomeController::class,'editprofile']);
    route::post('/update_profil/{id}', [HomeController::class,'update_profil']); */

/*     Route::get('/verif', [teachercontroller::class, 'verif']);
 */
/* route::get('/etudiant', [teacherController::class,'etudiant']);

route::get('/conseilles', [teacherController::class,'conseilles']);
route::get('/about', [teacherController::class,'about']);
route::POST('/infoteach', [teacherController::class,'infoteach']);
//route::get('/profileteach', [teacherController::class,'profileteach']);
route::get('/show_profile_teacher', [teacherController::class,'show_profile_teacher']);
route::get('/edit_profile_teacher/{id}', [teacherController::class,'edit_profile_teacher']);
route::POST('/update_profil_teacher/{id}', [teacherController::class,'update_profil_teacher']); */



    
});






