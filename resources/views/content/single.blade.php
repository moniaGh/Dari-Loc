<!DOCTYPE html>
@include('layouts.layout')
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
      <meta name="description" content="DARI-LOC PROJECT">
      <meta name="author" content="EL-AWITY Adam">
      <link rel="shortcut icon" href="{{URL::asset('img/favicon.png')}}">
      <title>DARI-LOC | {{$ad->title}}</title>
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
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
   </head>
   <body id="top">
      <!-- begin:navbar -->
      @yield('nav')
      <!-- end:navbar -->
      <!-- begin:content -->
      <div id="content">
         <div class="container">
            <div class="row">
               <ol class="breadcrumb">
                  <li><a href="/">Accueil</a></li>
                  <li><a href="{{url('/')}} ">Liste des annonces</a></li>
                  <li><a href="{{url($href)}} ">{{$transaction}}</a></li>
                  <li class="active">{{$nameCategory}}</li>
               </ol>
            </div>
            @include('layouts.messages')
            <div class="row">
               <!-- begin:article -->
               <div class="col-md-9 col-md-push-3">
                  <div class="row">
                     <div class="col-md-12 single-post">
                        <!--   <ul id="myTab" class="nav nav-tabs nav-justified">
                           <li class="active"><a href="#detail" data-toggle="tab"><i class="fa fa-university"></i> Détails de l'annonce</a></li>
                           <li><a href="#location" data-toggle="tab"><i class="fa fa-paper-plane-o"></i> Contactez l'annonceur</a></li> 
                           </ul>
                           -->
                        <div id="myTabContent" class="tab-content">
                           <div class="tab-pane fade in active" id="detail">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div id="slider-property" class="carousel slide" data-ride="carousel">
                                       <ol class="carousel-indicators">
                                          @if($ad->picture02)
                                          <li data-target="#slider-property" data-slide-to="2">
                                             <img src="{{asset('ads/'.$ad->picture02 )}}" alt="">
                                          </li>
                                          @endif
                                          @if($ad->picture03)
                                          <li data-target="#slider-property" data-slide-to="3">
                                             <img src="{{asset('ads/'.$ad->picture03 )}}" alt="">
                                          </li>
                                          @endif
                                          @if($ad->picture04)
                                          <li data-target="#slider-property" data-slide-to="4">
                                             <img src="{{asset('ads/'.$ad->picture04 )}}" alt="">
                                          </li>
                                          @endif
                                          <li data-target="#slider-property" data-slide-to="1" class="active">
                                             <img src="{{asset('ads/'.$ad->picture01)}}" alt="">
                                          </li>
                                          @if($ad->picture05)
                                          <li data-target="#slider-property" data-slide-to="5">
                                             <img src="{{asset('ads/'.$ad->picture05 )}}" alt="">
                                          </li>
                                          @endif
                                          @if($ad->picture06)
                                          <li data-target="#slider-property" data-slide-to="6">
                                             <img src="{{asset('ads/'.$ad->picture06 )}}" alt="">
                                          </li>
                                          @endif
                                          @if($ad->picture07)
                                          <li data-target="#slider-property" data-slide-to="7">
                                             <img src="{{asset('ads/'.$ad->picture07 )}}" alt="">
                                          </li>
                                          @endif
                                          @if($ad->picture07)
                                          <li data-target="#slider-property" data-slide-to="7">
                                             <img src="{{asset('ads/'.$ad->picture07 )}}" alt="">
                                          </li>
                                          @endif
                                       </ol>
                                       </ol>
                                       <div class="carousel-inner">
                                          @if($ad->picture02)
                                          <div class="item">
                                             <img src="{{asset('ads/'.$ad->picture02 )}}" alt="">
                                          </div>
                                          @endif
                                          @if($ad->picture03)
                                          <div class="item">
                                             <img src="{{asset('ads/'.$ad->picture03 )}}" alt="">
                                          </div>
                                          @endif
                                          @if($ad->picture04)
                                          <div class="item">
                                             <img src="{{asset('ads/'.$ad->picture04 )}}" alt="">
                                          </div>
                                          @endif
                                          @if($ad->picture01)
                                          <div class="item active">
                                             <img src="{{asset('ads/'.$ad->picture01)}}" alt="">
                                          </div>
                                          @endif
                                          @if($ad->picture05)
                                          <div class="item">
                                             <img src="{{asset('ads/'.$ad->picture05 )}}" alt="">
                                          </div>
                                          @endif
                                          @if($ad->picture06)
                                          <div class="item">
                                             <img src="{{asset('ads/'.$ad->picture06 )}}" alt="">
                                          </div>
                                          @endif
                                          @if($ad->picture07)
                                          <div class="item">
                                             <img src="{{asset('ads/'.$ad->picture07 )}}" alt="">
                                          </div>
                                          @endif
                                       </div>
                                       <a class="left carousel-control" href="#slider-property" data-slide="prev">
                                       <span class="glyphicon glyphicon-chevron-left"></span>
                                       </a>
                                       <a class="right carousel-control" href="#slider-property" data-slide="next">
                                       <span class="glyphicon glyphicon-chevron-right"></span>
                                       </a>
                                    </div>
                                    <h3>Aperçu de la propriété</h3>
                                    <table class="table table-bordered">
                                       <tr>
                                          <td width="20%"><strong>Titre annonce</strong></td>
                                          <td>{{$ad->title}} </td>
                                       </tr>
                                       <tr>
                                          <td><strong>Prix</strong></td>
                                          <td>{{$ad->price}} TND
                                             @if($ad->typeDate == 0) 
                                             <span>par moins</span>
                                             @elseif($ad->typeDate == 1)
                                             <span>par semaine</span>
                                             @elseif($ad->typeDate == 2)
                                             @else
                                             <span>par jour</span>
                                             @endif
                                          </td>
                                       </tr>
                                       <tr>
                                          <td><strong>Type</strong></td>
                                          <td>{{$ad->category}}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Contract</strong></td>
                                          <td>
                                             @if($ad->transaction == 0) 
                                             <span>À louer</span>
                                             @elseif($ad->transaction == 1)
                                             <span>À vendre</span>
                                             @else
                                             <span>Rechercher quelqu'un</span>
                                             @endif
                                          </td>
                                       </tr>
                                       <tr>
                                          <td><strong>Adresse</strong></td>
                                          <td>{{$ad->address}}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Salon</strong></td>
                                          <td>{{$ad->numberLiveRoom}}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Les salles de bains</strong></td>
                                          <td>{{$ad->numberBathRoom}}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Chambres</strong></td>
                                          <td>{{$ad->numberBedRoom}}</td>
                                       </tr>
                                       <tr>
                                          <td><strong>Surface</strong></td>
                                          <td>{{$ad->area}} m<sup>2</sup> </td>
                                       </tr>
                                    </table>
                                    @if(! $ad->transaction == 1 )
                                    <h3>Les options</h3>
                                    <div class="row">
                                       <div class="col-md-4 col-sm-4">
                                          <ul>
                                             @if($ad->meuble)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->meuble}}
                                             </li>
                                             @endif
                                             @if($ad->internet)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->internet}}
                                             </li>
                                             @endif
                                             @if($ad->gas_a_ville)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->gas_a_ville}}
                                             </li>
                                             @endif
                                             @if($ad->climatisation)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->climatisation}}
                                             </li>
                                             @endif
                                             @if($ad->ordinateur)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->ordinateur}}
                                             </li>
                                             @endif
                                             @if($ad->presse_agrumes)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->presse_agrumes}}
                                             </li>
                                             @endif
                                             @if($ad->ascenseur)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->ascenseur}}
                                             </li>
                                             @endif
                                             @if($ad->four_micro_onde)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->four_micro_onde}}
                                             </li>
                                             @endif
                                             @if($ad->four)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->four}}
                                             </li>
                                             @endif
                                             @if($ad->balcon)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->balcon}}
                                             </li>
                                             @endif
                                             @if($ad->cable_TV)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->cable_TV}}
                                             </li>
                                             @endif
                                             @if($ad->nettoyage_apres_la_sortie)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->nettoyage_apres_la_sortie}}
                                             </li>
                                             @endif
                                             @if($ad->cafetiere)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->cafetiere}}
                                             </li>
                                             @endif
                                             @if($ad->radio)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->radio}}
                                             </li>
                                             @endif
                                             @if($ad->terrasse_sur_le_toit)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->terrasse_sur_le_toit}}
                                             </li>
                                             @endif
                                             @if($ad->autorisation_de_fumer)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->autorisation_de_fumer}}
                                             </li>
                                             @endif
                                             @if($ad->terrasse)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->terrasse}}
                                             </li>
                                             @endif
                                             @if($ad->grille_pain)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->grille_pain}}
                                             </li>
                                             @endif
                                             @if($ad->parking)
                                             <li>
                                                <i class="fa fa-check"></i>
                                                {{$ad->parking}}
                                             </li>
                                             @endif
                                          </ul>
                                       </div>
                                    </div>
                                    <h3>Local destiné </h3>
                                    <ul>
                                       @if($ad->offre_etudiants)
                                       <li> <b>{{$ad->offre_etudiants}}</b></li>
                                       @endif
                                       @if($ad->offre_etrangaires)
                                       <li><b>{{$ad->offre_etrangaires}}</b></li>
                                       @endif
                                       @if($ad->offre_famille)
                                       <li><b>{{$ad->offre_famille}}</b></li>
                                       @endif
                                       @if($ad->offre_hommes)
                                       <li><b>{{$ad->offre_hommes}}</b></li>
                                       @endif
                                       @if($ad->offre_femmes)
                                       <li><b>{{$ad->offre_femmes}}</b></li>
                                       @endif
                                       @if($ad->offre_couples)
                                       <li><b>{{$ad->offre_couples}}</b></li>
                                       @endif
                                       @if($ad->offre_pour_tous)
                                       <li><b>{{$ad->offre_pour_tous}}</b></li>
                                       @endif
                                    </ul>
                                    @endif
                                    <h3>Description de propiétere</h3>
                                    <p>{{$ad->pubDescription}}.</p>
                                 </div>
                              </div>
                           </div>
                           <!-- break -->
                           <div class="tab-pane fade" id="location">
                              <div class="row">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div id="map-property"></div>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <h3>Contact Agent</h3>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6 col-sm-6">
                                    <div class="team-container team-dark">
                                       <div class="team-image">
                                          <img src="{{URL::asset('img/team01.jpg')}}" alt="the team - mikha realestate theme">
                                       </div>
                                       <div class="team-description">
                                          <h3>Katty Sharon</h3>
                                          <p><i class="fa fa-phone"></i> Office : 021-234-5678<br>
                                             <i class="fa fa-mobile"></i> Mobile : +62-3456-78910<br>
                                             <i class="fa fa-print"></i> Fax : 021-234-5679
                                          </p>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                             tempor incididunt ut labore et dolore magna aliqua.
                                          </p>
                                          <div class="team-social">
                                             <span><a href="#" title="Twitter" rel="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a></span>
                                             <span><a href="#" title="Facebook" rel="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a></span>
                                             <span><a href="#" title="Google Plus" rel="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a></span>
                                             <span><a href="#" title="Email" rel="tooltip" data-placement="top"><i class="fa fa-envelope"></i></a></span> 
                                             <span><a href="#" title="LinkedIn" rel="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a></span> 
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6">
                                    <form>
                                       <div class="form-group">
                                          <label for="name">Name</label>
                                          <input type="text" class="form-control input-lg" placeholder="Enter name : ">
                                       </div>
                                       <div class="form-group">
                                          <label for="email">Email address</label>
                                          <input type="email" class="form-control input-lg" placeholder="Enter email : ">
                                       </div>
                                       <div class="form-group">
                                          <label for="telp">Telp.</label>
                                          <input type="text" class="form-control input-lg" placeholder="Enter phone number : ">
                                       </div>
                                       <div class="form-group">
                                          <label for="message">Message</label>
                                          <textarea class="form-control input-lg" rows="7" placeholder="Type a message : "></textarea>
                                       </div>
                                       <div class="form-group">
                                          <input type="submit" name="submit" value="Send Message" class="btn btn-danger btn-lg">
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end:article -->
               <!-- begin:sidebar -->
               <div class="col-md-3 col-md-pull-9 sidebar" style="margin-bottom: -30px;">
                  <div class="widget-white favorite" >
                     <a href="#"><i class="fa fa-clock-o"></i><b><?php $date = ($ad->created_at)->modify('+1 hours'); ?><time class="timeago" datetime="<?php echo $date ?>"></time></b></a>
                  </div>
               </div>
               <div class="col-md-3 col-md-pull-9 sidebar" style="margin-bottom: -18px;margin-top: 12px;">
                  <div class="widget-white favorite" >
                     <a href="#"><i class="fa fa-user"></i><b>{{$ad->user->name}}</b></a>
                  </div>
               </div>
               <div class="col-md-3 col-md-pull-9 sidebar">
                  <div class="widget-white favorite">
                     <a href="#"><i class="fa fa-phone"></i><b class="phone-letter-spacing">(+216) {{$ad->phone}}</b></a>
                  </div>
               </div>
               <!-- break -->
               @yield('rightNav')
               <!-- break -->
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
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="{{URL::asset('js_front/bootstrap.js')}}"></script>
      <script src="{{URL::asset('js_front/jquery.js')}}"></script>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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