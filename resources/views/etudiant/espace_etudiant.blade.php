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
                 
                      
                  @foreach($etudiant as $etudiant)
                    
                  <div class="dropdown">
                    
                    <button class=""><i class="ti ti-user fs-6"><br> {{$etudiant->firstname}} {{$etudiant->lastname}}  </i></button>
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

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Remplir pour mieux vous connaitre </h6>
             
            
               
               
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="{{url('/infoetud')}}" method="POST" enctype="multipart/form-data">

                @csrf
              <div class="row">

               
                <div class="col-lg-12">
                  
                    <fieldset>
                        <input type="text" name="niveaux_etudes" id="niveaux_etudes" placeholder="votre niveaux d'études..." autocomplete="on" required>
                      </fieldset>
                </div>
                      <div class="col-lg-12">
                    <fieldset>
                    <input type="text" name="spéciatité" id="spéciatité" placeholder="votre spéciatité..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="nomprojet" id="nomprojet"   placeholder="nom de votre projet..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea  name="descriptionprojet" rows="4" cols="50" placeholder="parler un peut  de votre projet..."></textarea>
                    

            
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input  type="text" name="budget" id="budget" placeholder="votre budget maximum de projet">
                  </fieldset>
                </div>
                  
                <div class="col-lg-12">
                    <fieldset>
                      <input  type="text" name="lien_compte_facebook" id="lien_compte_facebook" placeholder="  lien de votre compte facebook">
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <input  type="text" name="lien_compte_instagram" id="lien_compte_instagram" placeholder="  lien de votre compte instagram">
                    </fieldset>
                  </div>  

                  <div class="col-lg-12">
                    <fieldset>
                      <input  type="text" name="lien_compte_linkedin" id="lien_compte_linkedin" placeholder="  lien de votre compte linkedin">
                    </fieldset>
                  </div> 

                  
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                      placeholder="Example: Laravel, Backend, Postgres, etc" value="" />                    </fieldset>
                  </div> 
                  <div class="col-lg-12">
                     
                   
                    <input type="file" name="image" required="">
                  
                 
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">save</button>
                  </fieldset>

                  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>















  <section class="section courses" id="courses" >
    
      
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
             
          </div>
        </div>
      </div>
       
         
      
       
      <ul class="event_filter">
        <li>
          <a class="is_active"  href= "" data-filter="*">profile de {{$etudiant->firstname}} {{$etudiant->lastname}} </a>
        </li>
       
      </ul>
      

    
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a  > <img src="/imagesetudiant/{{$etudiant->image}}" alt=""></a>
              {{-- <span class="category">{{$etudiant->spéciatité}}</span>
              <span class="price"><h6><em>{{$etudiant->budjet}}dt </em>/h</h6></span> --}}
            </div>
            <div class="down-content">
              <h6>age:   {{$etudiant->age}}</h6>
              <h6>adresse:   {{$etudiant->adress}}</h6>
              <h6>numéro de telephone:   {{$etudiant->phone}}</h6>
              <h6 > spécialité:  {{$etudiant->spéciatité}} </h6>
              <h6 > niveau d'etude:  {{$etudiant->niveaux_etudes}} </h6>
              <h6 > nom de projet:  {{$etudiant->nomprojet}} </h6>
              <h6 > description de projet:  {{$etudiant->description}} </h6>
              <h6 > budjet maximum de projet:  {{$etudiant->budjet}} </h6>



            
              
              <a href=" {{$etudiant->lien_compte_facebook}}">
              <i class="fa-brands fa-facebook"></i> 
              </a> 
              &nbsp;
              &nbsp;
              <a href=" {{$etudiant->lien_compte_instagram}}">
              <i class="fa-brands fa-instagram"></i>
                </a> 
                &nbsp;
                &nbsp;
                <a href=" {{$etudiant->lien_compte_linkedin}}">
                    <i class="fa-brands fa-linkedin"></i>
                      </a> 
                      <br>
                    
              
         
             <a href="{{url('modif_etudiant_profil' )}}"> <div>
              <input type="button" class="btn btn-primary" value="modifier profile ">
              </div></a>
            </div>
           
                  
                
              
          </div>
        </div>
     
        </div>
      </div>
    </div>
    @endforeach
    
  </section>
  




 
 

  

   

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