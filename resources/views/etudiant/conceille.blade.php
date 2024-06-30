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
                      <li class="scroll-to-section"><a href="{{url('/etudiantprofile')}}" >espace des etudiants</a></li>
                      <li class="scroll-to-section"><a href="{{url('/show_teacher_list')}}" class="active">espace des dévéloppeur</a></li>
                      
                      <li class="scroll-to-section"><a href="{{url('/about')}}" >about</a></li>
                      
                        
                       @foreach ($etudiant as $etudiant)  
                      <div class="dropdown">
    
                        <button style="background-color: #fff"><i class="ti ti-user fs-6"> <br> {{$etudiant->firstname}} {{$etudiant->lastname}}  </i></button>
                        <div class="dropdown-options">
                          
                          <a href="edit_profile_teacher">Setting</a>
                          <a href="logout">Logout</a>
                        </div>
                        @endforeach  
                      </div>
                  </ul>   
                  
                  
                  
                
              
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
            <div class="item item-1">
              <div class="header-text">
                <span class="category">espace des etudiants</span>
                <h2>Avec PFE HELP tu peux devenir le meilleurs, touts chose est simple avec nous.  </h2>
                <p>La partie espace des etudiants permet a tous personnes qui ont un PFE et qu'ils ne savent pas quoi faire ou comment commencer. On vous faires un encadrement pendant la période de stage et ons vous montrez le bon chemain pour réussir votre PFE  .</p>
                <div class="buttons">
                  
                  
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category"> espace des dvéloppeur  </span>
                <h2>Avec PFE HELP tu peux trouvez des nouvelles oportunités pour montrer et améliorer nos skills.</h2>
                <p>C'est un chance pour Chaque développeur qui a des skills et peut aider des etudiants pour devenir mieux en son domaine et pour faire quelques argents.</p>
                <div class="buttons">
                
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">PFE HELP</span>
                <h2>PFE HELP est le mailleurs sites pour etudiants.</h2>
                <p> Notres site web permet au etudiants de resoler ses problémes avec des personnes qualifiés.</p>
                <div class="buttons">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<br>

 {{--  liste des etudiant --}}

        
    </head>
   
    <a href="{{url('show_teacher_list')}}" class="inline-block text-black ml-4 mb-4"
                 ><i class="fa-solid fa-arrow-left"></i> Back
             </a>
                
     <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"  >
        @foreach($vid as $vid)


        <h1> nom de catégorie: {{$vid->category_name}}</h1>
        <br>
       <h2> nom de vidéo:{{$vid->video_name}}<h2>
        <br>
        
      
      
        <video width="320" height="240" controls>
          {{-- <source src="PFE-help\storage\app\videos{{ $vid->video }}" type="video/mp4"> --}}
            <source src="{{asset('upload')}}/{{$vid['video']}}" type="video/mp4">
          Your browser does not support the video tag.
      </video>
      <br>
      <a href="{{url('/modif',$vid->id)}}"> <div>
        <input type="button" class="btn btn-primary" value="modifier video ">
        </div></a>
      <br>
      <br>
      <br>
      @endforeach
    
              </div>
                

         {{--     end liste des etudiant --}}

         {{$vid->paginate(3)}}

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

  
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
      tailwind.config = {
          theme: {
              extend: {
                  colors: {
                      laravel: "#ef3b2d",
                  },
              },
          },
      };
  </script>

  </body>
</html>