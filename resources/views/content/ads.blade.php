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
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="js_front/html5shiv.js"></script>
      <script src="js_front/respond.min.js"></script>
      <![endif]-->
      <title>DARI-LOC | Mes annonces</title>
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
                     <li><a href="{{url('/mon-compte')}} ">Mon compte</a></li>
                     <li  class="active">Mes annonces</li>
                  </ol>
               </div>
               @include('layouts.messages')
               <div class="row">
                  <h3 class="center-text" style="margin-top: -8px;">Mes annonces publiées</h3>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-12">
                     @if(count($ads) > 0)
                     @foreach($ads as $ad)
                     <div class="col-md-6">
                        <div class="property-container">
                           <div class="property-content-list">
                              <div class="property-image-list">
                                 <img src="{{asset('ads/'.$ad->picture01)}}" alt="">
                                 <div class="property-price">
                                    <span>{{$ad->price}} DT
                                    @if($ad->transaction == 0 || $ad->transaction == 2)
                                    @if($ad->typeDate == 0)
                                    <small>/moins</small>
                                    @elseif($ad->typeDate == 1)
                                    <small>/semaine</small>
                                    @elseif($ad->typeDate == 2)
                                    <small>/jour</small>
                                    @else
                                    <small>/heure</small>
                                    @endif
                                    @endif
                                    </span>
                                 </div>
                                 <div class="property-status">
                                    @if($ad->transaction == 0)
                                    <span>À louer</span>
                                    @elseif($ad->transaction == 1)
                                    <span>À vendre</span>
                                    @else
                                    <span>Rechercher quelqu'un</span>
                                    @endif
                                 </div>
                                 <div class="property-features">
                                    <span><i class="fa fa-hdd-o"></i> {{$ad->numberBedRoom}} Chamb</span>
                                    <span><i class="fa fa-male"></i> {{$ad->numberBathRoom}} Salle.B</span>
                                 </div>
                              </div>
                              <div class="property-text">
                                 <p class="trash-ad"><a href="{{url('/deleteAd/'.$ad->id)}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i> </a></p>
                                 <!-- <p class="edit-ad"><a href="{{url('/compte/'.$ad->id.'/modifier-mon-annonce')}}" class="btn btn-info"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> </a></p> -->
                                 <?php $titleWithoutSpace = str_replace(' ', '-', $ad->title); ?>
                                 <h3><a href="{{url('annonce/'.$ad->id.'/'.$titleWithoutSpace)}}">{{$ad->title}}</a><small><b>Catégorie :</b> {{$ad->category}}</small> <small><b>Lieu</b> : {{$ad->city}} de {{$ad->region}}</small> <small><b>Prix</b> : {{$ad->price}} TND</small> <small><b>Téléphone</b> : {{$ad->phone}}</small>   <span class="my-ads-seen-style">{{ Counter::show('page'.$ad->id) }} <i class="fa fa-eye"></i> </span>
                                    </small><span class="time-style"><i class="fa fa-clock-o" style="margin-right: 2px;"></i> 
                                    <?php $date = ($ad->created_at)->modify('+1 hours'); ?>
                                    <time class="timeago" datetime="<?php echo $date ?>"></time>
                                    </span>
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                     @else
                     <div class="alert alert-warning" role="alert">
                        Aucun annonce pour vous dans notre base de données !
                     </div>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     @endif
                  </div>
               </div>
            </div>
         </div>
         <!-- end:content -->
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
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="jquery.redirect.js"></script>
      <script type="text/javascript" src="{{URL::asset('js_front/jquery.timeago.js')}}"></script>
      <script type="text/javascript">
         var $j = jQuery.noConflict();
         $j(document).ready(function() {
             $j("time.timeago").timeago();
         });
      </script>
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
      </script>
   </body>
</html>