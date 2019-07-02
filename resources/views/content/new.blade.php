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
      <link href="css_front/bootstrap.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
      <link href="css_front/font-awesome.min.css" rel="stylesheet">
      <link href="css/my-style.css" rel="stylesheet">
      <link href="css_front/style.css" rel="stylesheet">
      <link href="css_front/responsive.css" rel="stylesheet">
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="js_front/html5shiv.js"></script>
      <script src="js_front/respond.min.js"></script>
      <![endif]-->
      <title>DARI-LOC | Nouveau</title>
   </head>
   <body id="top">
      <form action="{{url('/save-new-ad')}}" method="post" enctype="multipart/form-data" name="myForm">
         {{csrf_field()}}
         <div id="app">
            <!-- begin:navbar -->
            @yield('nav')
            <!-- end:navbar -->
            <!-- begin:content -->
            <div id="content">
               <div class="container" id="step1">
                  <ol class="breadcrumb" style="margin-bottom: 0px;margin-top: -34px;margin-left: -26px;">
                     <li><a href="/">Accueil</a></li>
                     <li><a href="{{url('/nouveau-annonce')}}">Déposez votre annonce</a></li>
                     <li class="active">Étape 1 </li>
                  </ol>
                  <div class="row">
                     <div class="col-md-12">
                        <img src="{{url('img/note.png')}}" style="width: 40px;">
                        <span>Merci de vérifier toutes les informations avant de publier votre annonce , <b>vous n'avez pas l'autorisation de modifier le contenu de l'annonce.</b></span>
                     </div>
                  </div>
                  <div>
                     <div class="row">
                        <div class="col-md-5">
                           <h3 style="">je souhaite :</h3>
                           <ul style="margin-left: -45px;">
                              <li class="li-css">
                                 <input type="radio" id="f-option" name="transaction" checked="true" value="0">
                                 <label for="f-option">Louer un immobilier</label>
                                 <div class="check"></div>
                              </li>
                              <li class="li-css">
                                 <input type="radio" id="s-option" name="transaction" value="1">
                                 <label for="s-option">Vendre un immobilier</label>
                                 <div class="check">
                                    <div class="inside"></div>
                                 </div>
                              </li>
                              <li class="li-css">
                                 <input type="radio" id="t-option" name="transaction" value="2">
                                 <label for="t-option">Rechercher quelqu'un</label>
                                 <div class="check">
                                    <div class="inside"></div>
                                 </div>
                              </li>
                           </ul>
                           <br>
                        </div>
                        <div class="col-md-7" style="margin-top: -24px;">
                           <div class="row mobile-row">
                              <br>
                              <h3>Les photos de votre annonce:<span class="fontSize-15px">  (8 photos maximum)</span></h3>
                              <div class="gallery center-text"></div>
                              <div class="row center-text padding-76px" id="add-photos">
                                 <img src="img/add-picture.png" class="width-35px">
                                 <h5>Deposer votre images</h5>
                                 <label class="btn btn-default">
                                 <img src="img/add.png" class="width-15px">
                                 Trouvez votre photos <input type="file" id="files" name="files[]" accept="image/jpg, image/jpeg" multiple hidden />
                                 </label>
                              </div>
                           </div>
                           <br>
                           <div class="row">
                              <div class="col-md-6">
                                 <a href="{{url('/')}}" class="btn btn-default btn-block height-element-42px">
                                 <i class="glyphicon glyphicon-chevron-left back-icon-button"></i>
                                 <span class="back-button">Retour</span></a>
                              </div>
                              <div class="col-md-6">
                                 <a onclick="tostep2()"  class="btn btn-danger btn-block height-element-42px">
                                 <span class="next-button">Suivant</span>
                                 <i class="glyphicon glyphicon-chevron-right next-icon-button"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <br>
               </div>
               <div class="container" id="step2" style="display: none;">
                  <div class="row" style="margin-bottom: -50px;">
                     <div class="row">
                        <ol class="breadcrumb" style="margin-bottom: 20px;margin-top: -34px;">
                           <li><a href="/">Accueil</a></li>
                           <li><a href="{{url('/nouveau-annonce')}} ">Déposez votre annonce</a></li>
                           <li class="active">Étape 2 </li>
                        </ol>
                     </div>
                     <div class="col-md-10" style="margin-top: -23px;">
                        <br>
                        <a onclick="tostep1()" class="btn btn-danger"><i class="glyphicon glyphicon-chevron-left"></i> Retour</a>
                        <h3>Description de l'annonce</h3>
                        <br>
                     </div>
                     <div class="col-md-2 center-text" style="top: -38px;">
                        <img src="http://coalitionavenirquebec.org/wp-content/uploads/2016/09/don-en-ligne.png"  style="width: 132px;">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-3">
                        <input type="text" name="titre" class="form-control height-element-42px" placeholder="Titre de l'annonce" required="true">
                        <br>
                        <select class="form-control height-element-42px" name="categorie" required="true">
                           <option disabled="disabled" selected="true" value="">Catégorie de local</option>
                           <option value="Locations pour les étudiants">Locations pour les étudiants</option>
                           <option value="Appartements">Appartements</option>
                           <option value="Maisons et villas">Maisons et villas</option>
                           <option value="Studio">Studio</option>
                           <option value="Locations de vacances">Locations de vacances</option>
                           <option value="Bureaux et Plateaux">Bureaux et Plateaux</option>
                           <option value="Magasins, Commerces et Locaux industriels">Magasins, Commerces et Locaux industriels</option>
                           <option value="Autres">Autres</option>
                        </select>
                        <br>
                        <select class="form-control height-element-42px" name="emplacement" v-model="emplacement" @change="getCity()" v-bind:disabled="disabledWhenSelect" required="true">
                           <option  disabled="disabled" selected="selected" value="">Sélectionnez votre emplacement</option>
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
                        <br>
                        <select class="form-control height-element-42px" name="ville" v-model="ville" v-bind:disabled="disabledBeforeSelect" required="true">
                           <option disabled="true" selected="true" value="">Sélectionnez votre ville</option>
                           <option v-for="v in villes" :value="v.name">@{{v.name}}</option>
                        </select>
                        <br>
                     </div>
                     <div class="col-md-3">
                        <input type="number" min="1" max="9999" onkeyup="this.value=this.value.replace(/[^\d]/,'')" name="surface" class="form-control height-element-42px" placeholder="Surface de local (m²)" required="true"><br>
                        <input type="number" min="0" max="99" onkeyup="this.value=this.value.replace(/[^\d]/,'')" name="nbr_salle" class="form-control height-element-42px" placeholder="Nombre de salle" required="true"><br>
                        <input type="number" min="0" max="99" onkeyup="this.value=this.value.replace(/[^\d]/,'')" name="nbr_chambre" class="form-control height-element-42px" placeholder="Nombre de chambre" required="true"><br>
                        <input type="number" min="0" max="99" onkeyup="this.value=this.value.replace(/[^\d]/,'')" name="nbr_salle_bain" class="form-control height-element-42px" placeholder="Nombre de salle de bain" required="true"><br>
                        <br>
                     </div>
                     <div class="col-md-3">
                        <a href="#localTN_options" class="btn btn-default btn-block height-element-42px" data-toggle="modal" data-target="#localTN_options">Options</a><br>
                        <input type="text" name="adresse" class="form-control height-element-42px" placeholder="Adresse : City - Rue" required="true"><br>
                        <div class="row">
                           <div class="col-md-6" id="price">
                              <inpt type="number" min="0" name="prix" class="form-control height-element-42px" placeholder="Prix en TND" required="true">
                           </div>
                           <div class="col-md-6">
                              <select class="form-control height-element-42px" name="typeDate" id="typeDate" required="true">
                                 <option value="0">par mois</option>
                                 <option value="1">par semaine</option>
                                 <option value="2">par jour</option>
                                 <option value="3">par heure</option>
                              </select>
                           </div>
                        </div>
                        <br>
                        <a href="#localTN_options_offre" class="btn btn-default btn-block height-element-42px" data-toggle="modal" data-target="#localTN_options_offre">Option d'offre</a>
                        <br>
                     </div>
                     <div class="col-md-3">
                        <textarea style="height: 108px;" cols="34" placeholder="Description de votre annonce" name="description" class="form-control" required="true"></textarea>
                        <br>
                        <input type="phone" name="phone" class="form-control height-element-42px" placeholder="Téléphone" required="true" value="{{auth()->user()->phone}}" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
                        <br>
                        <button type="submit" class="btn btn-danger btn-block height-element-42px">Publier <i class="fa fa-paper-plane" style="margin-left: 14px;margin-top: 3px;position: absolute;"></i></button>
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
            <!--Begin option modal -->
            @yield('optionsOffre')
            <!--end option modal -->
            <!--Begin option modal -->
            @yield('options')
            <!--end option modal -->
      </form>
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
      <script src="js_front/bootstrap.js"></script>
      <script src="js_front/jquery.js"></script>
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
      <script src="js/app.js"></script>
      <script src="js_front/jquery.easing.js"></script>
      <script src="js_front/jquery.jcarousel.min.js"></script>
      <script src="js_front/imagesloaded.pkgd.min.js"></script>
      <script src="js_front/masonry.pkgd.min.js"></script>
      <script src="js_front/jquery.backstretch.js"></script>
      <script src="js_front/jquery.nicescroll.min.js"></script>
      <script src="js_front/script.js"></script>
      <script src="js_front/gmap3.min.js"></script>
      <script src="js/my-script.js"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122658101-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-122658101-1');
      </script>
      
      <script type="text/javascript">
         window.oncontextmenu = function () {
            return false;
         }
         document.onkeydown = function (e) { 
            if (window.event.keyCode == 123 ||  e.button==2)    
               return false;
         }
      </script>
   </body>
</html>