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
      <link href="{{URL::asset('css/my-style.css')}}" rel="stylesheet">
      <link href="{{URL::asset('css_front/responsive.css')}}" rel="stylesheet">
      <title>DARI-LOC | Confirmation E-mail</title>
      <style type="text/css">
         body {
         background-color:#f4f4f4;
         }
      </style>
   </head>
   <body>
      <div style="margin-top: 50px;">
         <!-- begin:navbar -->
         @yield('nav')
         <!-- end:navbar -->
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
               @include('layouts.messages')
            </div>
         </div>
         <div class="modal-dialog" style="margin-bottom: 193px;">
            <div class="modal-content">
               <form role="form"  method="post" action="{{url('/reset/'.$token)}}">
                  {{ csrf_field() }}
                  <div class="modal-header">
                     <h4 class="modal-title color-site text-center">Réinitialiser votre mot de passe</h4>
                  </div>
                  <div class="modal-body">
                     <div class="form-group">
                        <label for="passowrd">Nouveau mot de passe</label>
                        <input type="password" name="password" class="form-control input-lg" placeholder="Entrer votre nouveau mot de passe">
                     </div>
                     <div class="form-group">
                        <label for="passowrd">Confirmer mot de passe</label>
                        <input type="password" name="confPassword" class="form-control input-lg" placeholder="Confirmer votre mot de passe">
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button class="btn btn-danger btn-block btn-lg">Confirmer</button>
                  </div>
               </form>
            </div>
         </div>
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
      </div>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="{{URL::asset('js_front/bootstrap.js')}}"></script>
      <script src="{{URL::asset('js_front/jquery.js')}}"></script>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="jquery.redirect.js"></script>
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
      <script src="{{URL::asset('js/my-script.js')}}"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122658101-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-122658101-1');
      </script>   </body>
</html>