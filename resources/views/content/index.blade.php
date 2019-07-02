<!DOCTYPE html>
@include('layouts.layout')
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
      <meta name="description" content="DARI-LOC PROJECT">
      <meta name="author" content="EL-AWITY Adam">
      <link rel="shortcut icon" href="img/favicon.png">
      <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="{{URL::asset('img/favicon.png')}}">

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('css_front/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css_front/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{URL::asset('css_front/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css_front/responsive.css')}}" rel="stylesheet">
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <title>DARI-LOC | Acceuil</title>
   </head>
   <body id="top">
      <div id="app">
         @yield('nav')
         <!-- begin:header -->
         <div id="header" class="header-slide">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="quick-search">
                        <div class="row">
                           <form role="form" method="post" action="{{url('/')}} ">
                              {{csrf_field()}}
                              <div class="col-md-6 col-sm-6 col-xs-6">
                                 <div class="form-group">
                                    <label for="country">Pays</label>
                                    <select class="form-control">
                                       <option>Tunisie</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="bedroom">Chambre</label>
                                    <select class="form-control">
                                       <option>1</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>+4</option>
                                    </select>
                                 </div>
                              </div>
                              <!-- break -->
                              <div class="col-md-6 col-sm-6 col-xs-6">
                                 <div class="form-group">
                                    <label for="location">Ville</label>
                                    <select class="form-control" name="region">
                                       <option>Ariana</option>
                                       <option>Béja</option>
                                       <option>Ben Arous</option>
                                       <option>Bizerte</option>
                                       <option>Gabès</option>
                                       <option>Gafsa</option>
                                       <option>Jendouba</option>
                                       <option>Kairouan</option>
                                       <option>Kasserine</option>
                                       <option>Kébili</option>
                                       <option>La Manouba</option>
                                       <option>Le Kef</option>
                                       <option>Mahdia</option>
                                       <option>Médenine</option>
                                       <option>Monastir</option>
                                       <option>Nabeul</option>
                                       <option>Sfax</option>
                                       <option>Sidi Bouzid</option>
                                       <option>Siliana</option>
                                       <option>Sousse</option>
                                       <option>Tataouine</option>
                                       <option>Tozeur</option>
                                       <option>Tunis</option>
                                       <option>Zaghouan</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="bathroom">Salle de bains</label>
                                    <select class="form-control">
                                       <option>1</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>+4</option>
                                    </select>
                                 </div>
                              </div>
                              <!-- break -->
                              <div class="col-md-6 col-sm-6 col-xs-6">
                                 <div class="form-group">
                                    <label for="status">Statut</label>
                                    <select class="form-control">
                                       <option>À louer</option>
                                       <option>À vendre</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="minprice">Prix minimum</label>
                                    <input type="text" class="form-control" name="" placeholder="100 DT">
                                 </div>
                              </div>
                              <!-- break -->
                              <div class="col-md-6 col-sm-6 col-xs-6">
                                 <div class="form-group">
                                    <label for="type">Type</label>
                                    <select class="form-control">
                                       <option>Villa</option>
                                       <option>Appartement</option>
                                       <option>Commercial</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="maxprice">Prix maximum</label>
                                    <input type="text" class="form-control" name="" placeholder="999 DT">
                                 </div>
                              </div>
                              <div class="col-md-12 col-sm-12"><input type="submit" name="submit" value="Rechercher" class="btn btn-danger btn-lg btn-block"></div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="col-md-5">
                     <h1>Offre etudiant</h1>
                     <div class="quick-search">
                        <div class="row">
                           <form role="form">

                              <div class="col-md-6 col-sm-6 col-xs-6">
                                 <div class="form-group">
                                    <select class="form-control input-lg">
                                       <option>Ariana</option>
                                       <option>Béja</option>
                                       <option>Ben Arous</option>
                                       <option>Bizerte</option>
                                       <option>Gabès</option>
                                       <option>Gafsa</option>
                                       <option>Jendouba</option>
                                       <option>Kairouan</option>
                                       <option>Kasserine</option>
                                       <option>Kébili</option>
                                       <option>La Manouba</option>
                                       <option>Le Kef</option>
                                       <option>Mahdia</option>
                                       <option>Médenine</option>
                                       <option>Monastir</option>
                                       <option>Nabeul</option>
                                       <option>Sfax</option>
                                       <option>Sidi Bouzid</option>
                                       <option>Siliana</option>
                                       <option>Sousse</option>
                                       <option>Tataouine</option>
                                       <option>Tozeur</option>
                                       <option>Tunis</option>
                                       <option>Zaghouan</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-md-6 col-sm-6 col-xs-6"><input type="submit" name="submit" value="Rechercher" class="btn btn-danger btn-lg btn-block"></div>
                           </form>
                        </div>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
         <!-- end:header -->
      </div>
      <!-- begin:modal-signin -->
      @yield('signin')
      <!-- end:modal-signin -->
      <!-- begin:modal-signup -->
      @yield('signup')
      <!-- end:modal-signup -->
       <!-- begin:modal-reset -->
        @yield('reset')
      <!-- end:modal-reset -->
      <!-- Bootstrap core JavaScript
         ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{URL::asset('js_front/bootstrap.js')}}"></script>
    <script src="{{URL::asset('js_front/jquery.js')}}"></script>
    <script src="{{URL::asset('js/app.js')}}"></script>
    <script src="{{URL::asset('js_front/script.js')}}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="{{URL::asset('js_front/gmap3.min.js')}}"></script>
    <script src="{{URL::asset('js_front/jquery.easing.js')}}"></script>
    <script src="{{URL::asset('js_front/jquery.jcarousel.min.js')}}"></script>
    <script src="{{URL::asset('js_front/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('js_front/masonry.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('js_front/jquery.backstretch.js')}}"></script>
    <script src="{{URL::asset('js_front/jquery.nicescroll.min.js')}}"></script>
    <script src="{{URL::asset('js_front/script.js')}}"></script>
   </body>
</html>