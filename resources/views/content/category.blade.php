<!DOCTYPE html>
@include('layouts.layout')
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

      <title>DARI-LOC | Louez vos locaux en toute tranquillité</title>
      <meta property="og:title" content="DARI-LOC |  Louez vos locaux en toute tranquillité" />
      <meta property="og:type" content="website" />
      <meta property="og:url" content="http://www.dariloc.tn/" />
      <meta property="og:image" content="{{url('img/a-louer.png')}}" />
      <meta property="og:image" content="{{url('img/recherche.png')}}" />
      <meta property="og:image" content="{{url('img/vendre.png')}}" />
      <meta property="og:image:width" content="520" />
      <meta property="og:image:height" content="384" />
      <meta name="description" content="Louer et vendre des locaux - Rechercher un binôme. Dans toute la TUNISIE">
      <meta name="keywords" content="Louer,vendre des locaux,Tunisie, DARI-LOC, Dariloc">
      <link rel="shortcut icon" href="img/favicon.png">
      <!-- Bootstrap core CSS -->
      <link rel="shortcut icon" href="{{URL::asset('img/favicon.png')}}">
      <!-- Bootstrap core CSS -->
      <!-- Bootstrap core CSS -->
      <link href="{{URL::asset('css_front/bootstrap.css')}}" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
      <link href="{{URL::asset('css_front/font-awesome.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('css/my-style.css')}}" rel="stylesheet">
      <link href="{{URL::asset('css_front/style.css')}}" rel="stylesheet">
      <link href="{{URL::asset('css_front/responsive.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

      
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
                  <!-- begin:article -->
                  <div class="col-md-9 col-md-push-3">
                     <div class="row">
                        <div class="col-md-9 col-md-offset-3">
                        </div>
                     </div>
                     @include('layouts.messages')
                     <!-- begin:sorting -->
                     <div class="row">
                        <div class="col-md-8">
                           <div class="form-group">
                              {!! Form::open(['url' => '/', 'method' => 'GET', 'role' => 'search']) !!}
                              {!! Form::text('term', Request::get('term'), ['class' => 'form-control height-element-42px', 'placeholder' => 'Chercher dans toutes les catégories ...', 'id' => 'term']) !!}
                              {!! Form::close() !!}
                           </div>
                        </div>
                        <div class="col-md-4">
                           <form  role="form">
                              <div class="form-group">
                                 <select class="form-control height-element-42px" id="trie">
                                    <option selected="selected" disabled="true" value="">Trié par </option>
                                    <option value="plus-recent-annonces">Le plus récent</option>
                                    <option value="prix-le-plus-bas">Prix le plus bas</option>
                                    <option value="prix-le-plus-eleve">Prix le plus Elevé</option>
                                 </select>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="row">
                        <ol class="breadcrumb">
                           <li><a href="/">Accueil</a></li>
                           <li><a href="{{url('/')}} ">Liste des annonces</a></li>
                           <li class="active">{{$nameCategory}}</li>
                        </ol>
                     </div>
                     <!-- end:sorting -->
                     <!-- begin:product -->
                     <div class="row container-realestate">
                        @if(count($ads) < 1)
                        <h3>Aucun annonce publiées pour cette catégorie</h3>
                        @else
                        @foreach($ads as $ad)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="property-container">
                              <div class="property-image">
                                 <img src="{{asset('ads/'.$ad->picture01)}}" alt="">
                                 <div class="property-price">
                                    <span>{{$ad->price}} TND</span>
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
                                 </div>
                                 <div class="property-status">
                                    @if($ad->transaction == 0)
                                    <span>À louer</span>
                                    @elseif($ad->transaction == 1)
                                    <span>À vendre</span>
                                    @else
                                    <span>Rechercher un binôme</span>
                                    @endif
                                 </div>
                              </div>
                              <div class="property-features">
                                 <span><i class="fa fa-home"></i> {{$ad->area}} m<sup>2</sup></span>
                                 <span><i class="fa fa-tv"></i> {{$ad->numberLiveRoom}} S</span>
                                 <span><i class="fa fa-hdd-o"></i> {{$ad->numberBedRoom}} Chamb</span>
                              </div>
                              <div class="property-content">
                                 <?php $titleWithoutSpace = str_replace(' ', '-', $ad->title); ?>
                                 <h3><a href="{{url('annonce/'.$ad->id.'/'.$titleWithoutSpace)}}">{{$ad->title}}</a><small> {{$ad->city}} de {{$ad->region}}</small><span class="seen-style">{{ Counter::show('page'.$ad->id) }} <i class="fa fa-eye"></i> </span>
                                    </small><span style="font-size: 15px;color: #c60b3a;" ><i class="fa fa-clock-o" style="margin-right: 2px;"></i> 
                                    <?php $date = ($ad->created_at)->modify('+1 hours'); ?>
                                    <time class="timeago" datetime="<?php echo $date ?>"></time>
                                    </span>
                                 </h3>
                              </div>
                           </div>
                        </div>
                        @endforeach
                        @endif
                        <!-- break -->
                     </div>
                     <!-- end:product -->
                     <!-- begin:pagination -->
                     <div class="row center-text">
                        <div class="col-md-12">
                           <ul class="pagination">
                              {{$ads->links()}}
                           </ul>
                        </div>
                     </div>
                     <!-- end:pagination -->
                  </div>
                  <!-- end:article -->
                  <!-- begin:sidebar -->
                  @yield('rightNav')
                  <!-- end:sidebar -->
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