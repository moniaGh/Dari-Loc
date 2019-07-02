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
      <link href="{{URL::asset('css/my-style.css')}}" rel="stylesheet">
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="js_front/html5shiv.js"></script>
      <script src="js_front/respond.min.js"></script>
      <![endif]-->
      <title>DARI-LOC | Mon profil</title>
   </head>
   <body id="top">
      <div id="app">
         <!-- begin:navbar -->
         @yield('nav')
         <!-- end:navbar -->
         <!-- begin:content -->
         <div id="content">
            <div class="container">
               <div class="row">
                  <ol class="breadcrumb">
                     <li><a href="/">Accueil</a></li>
                     <li><a href="{{url('/mon-compte')}}">Mon compte</a></li>
                     <li  class="active">Mon profil</li>
                  </ol>
               </div>
               @include('layouts.messages')
               <div class="row" style="margin-top: -25px;">
                  <div class="col-md-6 col-md-offset-3">
                     <form action="{{url('/changeInfo')}} " method="post">
                        {{csrf_field()}}
                        <h3 class="center-text">Informations personnelles</h3>
                        <br>
                        <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control height-element-42px" placeholder="Nom et prénom"><br>
                        <input type="phone" name="phone" value="{{auth()->user()->phone}}" class="form-control height-element-42px" placeholder="Numéro de téléphone"><br>
                        <input type="email" name="email" value="{{auth()->user()->email}}" class="form-control height-element-42px" placeholder="Adresse E-mail"><br>
                        <div class="col-md-6 center-text top-7px">
                           <a id="modifier" data-toggle="modal" data-target="#modifierMotdepasse">Modifier votre mot de passe</a> <br><br>
                        </div>
                        <div class="col-md-6">
                           <button class="btn btn-danger btn-block">Enregistrer la modification</button>
                        </div>
                        <br>
                     </form>
                     <br>
                     @if(auth()->user()->activate == 0)
                     <div class="alert alert-info text-center" role="alert">
                        Merci d'activer votre compte !
                        <form action="{{url('auth/confirmation/email')}}" method="post">
                           {{csrf_field()}}
                           <input type="hidden" name="email" value="{{auth()->user()->email}} ">
                           <button class="link-button">Renvoyer mail de confirmation maintenent !</button>
                        </form>
                     </div>
                     @endif
                  </div>
               </div>
            </div>
         </div>
         <!-- end:content -->
         <!--Begin Model Modifier mot de passe -->
         <div class="modal fade" id="modifierMotdepasse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
               <form action="{{url('/changePassword')}}" method="post">
                  {{csrf_field()}}
                  <div class="modal-content">
                     <div class="modal-header">
                        <h4 class="modal-title center-text color-site">Modifier mot de passe</h4>
                     </div>
                     <div class="modal-body">
                        <div class="form-group">
                           <label for="emailAddress">Ancien mot de passe</label>
                           <input type="password" name="ancien_motpasse" class="form-control input-lg" placeholder="Ancien mot de passe">
                        </div>
                        <div class="form-group">
                           <label for="emailAddress">Nouveau mot de passe</label>
                           <input type="password" name="nouveau_motpasse" class="form-control input-lg" placeholder="Nouveau mot de passe">
                        </div>
                        <div class="form-group">
                           <label for="emailAddress">Confirmer mot de passe</label>
                           <input type="password" name="confirmer_motpasse" class="form-control input-lg" placeholder="Confirmer mot de passe">
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                        <input  type="submit" class="btn btn-danger" value="Enregistrer">
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!--Model Modifier mot de passe -->
         <!-- begin:footer -->
         <div id="footer">
            @yield('footer')
         </div>
         <!-- end:footer -->
         <!-- begin:modal-signin -->
         @yield('signin')
         <!-- end:modal-signin -->
         <!-- begin:modal-signup -->
         @yield('signup')
         <!-- end:modal-signup -->
         <!-- begin:modal-reset -->
         @yield('reset')
         <!-- end:modal-reset -->
      </div>
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
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122658101-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-122658101-1');
      </script>
   </body>
</html>