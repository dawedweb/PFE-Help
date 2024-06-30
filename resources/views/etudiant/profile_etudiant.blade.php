<!DOCTYPE html>
<html lang="en">

  <head>

    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Scholar - Online School HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="asset/css/styles.min.css" />

<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
<style type="text/css">


  .dropdown {
    display: inline-block;
    position: relative;
  }
  
  button{
    border:none;
    border-radius:5px;
    padding:2px 2px;
    font-size:2px;
    cursor:pointer;
  }
  
  button:hover{
    background-color:#ddd;
  }
  
  .dropdown-options {
    display: none;
    position: absolute;
    overflow: auto;
    background-color:#fff;
    border-radius:5px;
    box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
  }
  
  .dropdown:hover .dropdown-options {
    display: block;
  }
  
  .dropdown-options a {
    display: block;
    color: #000000;
    padding: 5px;
    text-decoration: none;
    padding:10px 40px;
  }
  
  .dropdown-options a:hover {
    color: #0a0a23;
    background-color: #ddd;
    border-radius:5px;
  }
    </style>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>PFE HELP</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="{{url('/home')}}" >Home</a></li>
                      <li class="scroll-to-section"><a href="{{url('/etudiantprofile')}}" class="active">espace des etudiants</a></li>
                      <li class="scroll-to-section"><a href="{{url('/show_teacher_list')}}">espace des dévéloppeur</a></li>
                     
                      <li class="scroll-to-section"><a href="{{url('/about')}}">about</a></li>
                      
                      
                  </ul>   
                  @foreach ($etudiant as $etudiant) 
                  <div class="dropdown">

                    <button><i class="ti ti-user fs-6"> <br> {{$etudiant->firstname}}  {{$etudiant->lastname}}  </i></button>
                    <div class="dropdown-options">
                      
                      <a href="edit_profile_etudiant">Setting</a>
                      <a href="logout">Logout</a>
                    </div>
                  </div>
                   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            
             
                
            
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  
    Modifier profile de 

    <form action="{{url('/update_info_etudiant')}}" method="post" enctype="multipart/form-data">
      @csrf
      
  <div >
     
         
    
       first name:
      <input type="text" name="firstname" placeholder="first name" required="" value=" {{$etudiant->firstname}}">
      <br>
      last name:
      <input type="text" name="lastname" placeholder="last name" required="" value=" {{$etudiant->lastname}}">
      <br>
      mot de passe:
      <input type="text"  name="password" placeholder="password" required="" value=" {{$etudiant->password}}">
      <br>
      config votre mot de passe:
      <input type="text"  name="configpassword" placeholder="config your password" required="" value=" {{$etudiant->configpassword}}">
      <br>
      email:
      <input type="email"  name="email" placeholder="email" required="" value="  {{$etudiant->email}}">
      <br>
      adresse:
      <input type="adresse"  name="adresse" placeholder="adresse" required="" value=" {{$etudiant->adress}}">
      <br>
      numéro telephone:
      <input type="phone"  name="phone" placeholder="phone" required="" value=" {{$etudiant->phone}}">
      <br>
      age:
      <input type="age"  name="age" placeholder="age" required="" value=" {{$etudiant->age}}">
      <br>
      niveaux d'etude:
      <input type="niveaux_etudes"  name="niveaux_etudes"  placeholder="niveaux_etudes" required="" value=" {{$etudiant->niveaux_etudes}}">
      <br>
      spécialité:
      <input type="spéciatité"  name="spéciatité" placeholder="spéciatité" required="" value=" {{$etudiant->spéciatité}}">
      <br>
      nom de projet: 
      <input type="nomprojet"  name="nomprojet" placeholder="nomprojet" required="" value=" {{$etudiant->nomprojet}}">
      <br>
      description de projet:
      <input type="description"  name="description" placeholder="description" required="" value=" {{$etudiant->description}}">
      <br>
      
      budjet maximum de projet:
      <input type="budjet"  name="budjet" placeholder="budjet" required="" value=" {{$etudiant->budjet}}">
      <br>
      lien compte facebook:
      <input type="lien_compte_facebook"  name="lien_compte_facebook" placeholder="lien_compte_facebook" required="" value=" {{$etudiant->lien_compte_facebook}}">
      <br>
      lien compte instagram:
      <input type="lien_compte_instagram"  name="lien_compte_instagram" placeholder="lien_compte_instagram" required="" value=" {{$etudiant->lien_compte_instagram}}">
      <br>
      lien compte linkedin:
      <input type="lien_compte_linkedin"  name="lien_compte_linkedin" placeholder="lien_compte_linkedin" required="" value=" {{$etudiant->lien_compte_linkedin}}">
      <br>
      modifier image : 
      <input type="file" name="image" required="" value=" {{$etudiant->image}}">

      
  </div>
      
    

      
  </div>
      
      <br>
      <div>
      <input type="submit" class="btn btn-primary" value="register">
      </div>
      
    
</div>
@endforeach

</div>
</form>

  
            
               
               
    







 


 
 

  

   

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024  . All rights reserved. &nbsp;&nbsp;&nbsp; developper par: <a href="https://templatemo.com" rel="nofollow" target="_blank">amine dawed</a>  </p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>