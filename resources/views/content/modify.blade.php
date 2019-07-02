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
      <link href="{{URL::asset('css_front/bootstrap.css')}}" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
      <link href="{{URL::asset('css_front/font-awesome.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('css/my-style.css')}}" rel="stylesheet">
      <link href="{{URL::asset('css_front/style.css')}}" rel="stylesheet">
      <link href="{{URL::asset('css_front/responsive.css')}}" rel="stylesheet">
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="js_front/html5shiv.js"></script>
      <script src="js_front/respond.min.js"></script>
      <![endif]-->
      <title>DARI-LOC | Nouveau</title>
   </head>
   <body id="top">
            <form action="{{url('/save-new-ad')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
      <div id="app">
         <!-- begin:navbar -->
         @yield('nav')
         <!-- end:navbar -->
         <!-- begin:content -->
      <div id="content">
            <div class="container" id="step2">
              	<div class="row">
	                <ol class="breadcrumb" style="margin-bottom: 20px;margin-top: -34px;">
	                  <li><a href="/">Accueil</a></li>
	                  <li><a href="{{url('/compte/annonce')}} ">Mes annonces</a></li>
	                  <li class="active">Modifier une annonce </li>
	                </ol>
                </div>
                <div class="row">
                	<div class="col-md-10" style="margin-top: -23px;">
	                  <h3>Description de l'annonce</h3>
	                </div>
                </div>
                  <br>
                <div class="row">
                  	<div class="col-md-12">
                  		<table>
                  			<tr>
                  				@for($i=0; $i< 8; $i++)
                  				<td>
                  					<div class="imgContainer">
			                  			<img src="{{url('ads/house.jpg')}} " style="width: 120px">
			                  			<img class="imgButton" src='https://png.icons8.com/color/260/close-window.png'>
			                  		</div>
                  				</td>
                  				@endfor
                  				<td>
	                  				<div class="row center-text margin-left-8px" id="add-photos">
		                                <img src="{{url('img/add-picture.png')}} " class="width-35px">
		                                <br>
		                                <label class="btn btn-default">
		                                <img src="{{url('img/add.png')}} " class="width-15px">
		                                 Nouveau<input type="file" id="files" name="files[]" accept="image/jpg, image/jpeg" multiple hidden />
		                                </label>
		                             </div>
                  				</td>
                  			</tr>
                  		</table>
                  	</div>
                </div>
                <br>
                <br>
               <div class="row">
                  <div class="col-md-3">
                     <input type="text" name="titre" class="form-control height-element-42px" value="{{$ad->title}} " placeholder="Titre de l'annonce" required="true">
                     <br>
                     <select class="form-control height-element-42px" name="categorie" required="true">
                     	@if($ad->category == "Locations pour les étudiants")
                        <option value="Locations pour les étudiants" selected="true">Locations pour les étudiants</option>
                        <option value="Appartements">Appartements</option>
                        <option value="Maisons et villas">Maisons et villas</option>
                        <option value="Studio">Studio</option>
                        <option value="Locations de vacances">Locations de vacances</option>
                        <option value="Bureaux et Plateaux">Bureaux et Plateaux</option>
                        <option value="Magasins, Commerces et Locaux industriels">Magasins, Commerces et Locaux industriels</option>
                        <option value="Autres">Autres</option>
                     	@elseif($ad->category == "Appartements")
                        <option value="Locations pour les étudiants">Locations pour les étudiants</option>
                        <option value="Appartements" selected="true">Appartements</option>
                        <option value="Maisons et villas">Maisons et villas</option>
                        <option value="Studio">Studio</option>
                        <option value="Locations de vacances">Locations de vacances</option>
                        <option value="Bureaux et Plateaux">Bureaux et Plateaux</option>
                        <option value="Magasins, Commerces et Locaux industriels">Magasins, Commerces et Locaux industriels</option>
                        <option value="Autres">Autres</option>
                     	@elseif($ad->category == "Maisons et villas")
                        <option value="Locations pour les étudiants">Locations pour les étudiants</option>
                        <option value="Appartements">Appartements</option>
                        <option value="Maisons et villas" selected="true">Maisons et villas</option>
                        <option value="Studio">Studio</option>
                        <option value="Locations de vacances">Locations de vacances</option>
                        <option value="Bureaux et Plateaux">Bureaux et Plateaux</option>
                        <option value="Magasins, Commerces et Locaux industriels">Magasins, Commerces et Locaux industriels</option>
                        <option value="Autres">Autres</option>
                     	@elseif($ad->category == "Studio")
                        <option value="Locations pour les étudiants">Locations pour les étudiants</option>
                        <option value="Appartements">Appartements</option>
                        <option value="Maisons et villas">Maisons et villas</option>
                        <option value="Studio" selected="true">Studio</option>
                        <option value="Locations de vacances">Locations de vacances</option>
                        <option value="Bureaux et Plateaux">Bureaux et Plateaux</option>
                        <option value="Magasins, Commerces et Locaux industriels">Magasins, Commerces et Locaux industriels</option>
                        <option value="Autres">Autres</option>
                     	@elseif($ad->category == "Locations de vacances")
                     	<option value="{{$ad->category}}" selected="true">{{$ad->category}} </option>
                        <option value="Locations pour les étudiants">Locations pour les étudiants</option>
                        <option value="Appartements">Appartements</option>
                        <option value="Maisons et villas">Maisons et villas</option>
                        <option value="Studio">Studio</option>
                        <option value="Locations de vacances" selected="true">Locations de vacances</option>
                        <option value="Bureaux et Plateaux">Bureaux et Plateaux</option>
                        <option value="Magasins, Commerces et Locaux industriels">Magasins, Commerces et Locaux industriels</option>
                        <option value="Autres">Autres</option>
                     	@elseif($ad->category == "Bureaux et Plateaux")
                     	<option value="{{$ad->category}}" selected="true">{{$ad->category}} </option>
                        <option value="Locations pour les étudiants">Locations pour les étudiants</option>
                        <option value="Appartements">Appartements</option>
                        <option value="Maisons et villas">Maisons et villas</option>
                        <option value="Studio">Studio</option>
                        <option value="Locations de vacances">Locations de vacances</option>
                        <option value="Bureaux et Plateaux" selected="true">Bureaux et Plateaux</option>
                        <option value="Magasins, Commerces et Locaux industriels">Magasins, Commerces et Locaux industriels</option>
                        <option value="Autres">Autres</option>
                     	@elseif($ad->category == "Magasins, Commerces et Locaux industriels")
                        <option value="Locations pour les étudiants">Locations pour les étudiants</option>
                        <option value="Appartements">Appartements</option>
                        <option value="Maisons et villas">Maisons et villas</option>
                        <option value="Studio">Studio</option>
                        <option value="Locations de vacances">Locations de vacances</option>
                        <option value="Bureaux et Plateaux">Bureaux et Plateaux</option>
                        <option value="Magasins, Commerces et Locaux industriels" selected="true">Magasins, Commerces et Locaux industriels</option>
                        <option value="Autres">Autres</option>
                     	@else
                        <option value="Locations pour les étudiants">Locations pour les étudiants</option>
                        <option value="Appartements">Appartements</option>
                        <option value="Maisons et villas">Maisons et villas</option>
                        <option value="Studio">Studio</option>
                        <option value="Locations de vacances">Locations de vacances</option>
                        <option value="Bureaux et Plateaux">Bureaux et Plateaux</option>
                        <option value="Magasins, Commerces et Locaux industriels">Magasins, Commerces et Locaux industriels</option>
                        <option value="Autres" selected="true">Autres</option>
                     	@endif
                     </select>
                     <br>
                     <select class="form-control height-element-42px" name="emplacement" v-model="emplacement" @change="getCity()" v-bind:disabled="disabledWhenSelect" required="true">
                        <option value="{{$ad->region}}" selected="true">{{$ad->region}} </option>
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
                     <input type="number" min="1" name="surface" value="{{$ad->area}}" class="form-control height-element-42px" placeholder="Surface de local" required="true"><br>

                     <input type="number" min="1" name="nbr_salle" value="{{$ad->numberLiveRoom}}" class="form-control height-element-42px" placeholder="Nombre de salle" required="true"><br>
                     <input type="number" min="1" name="nbr_chambre" value="{{$ad->numberBedRoom}}" class="form-control height-element-42px" placeholder="Nombre de chambre" required="true"><br>
                     <input type="number" min="1" name="nbr_salle_bain" value="{{$ad->numberBathRoom}}" class="form-control height-element-42px" placeholder="Nombre de salle de bain" required="true"><br>
                     <br>
                  </div>
                  <div class="col-md-3">
                     <a href="#localTN_options" class="btn btn-default btn-block height-element-42px" data-toggle="modal" data-target="#localTN_options">Options</a><br>
                     <input type="text" name="adresse" class="form-control height-element-42px" placeholder="Adresse : City - Rue" required="true" value="{{$ad->address}}"><br>
                    <div class="row">
                        <div class="col-md-6">
                           <input type="number" min="0" name="prix" class="form-control height-element-42px width-element-147px" placeholder="Prix en DT" required="true" value="{{$ad->price}}">
                        </div>
                        <div class="col-md-6">
                           <select class="form-control height-element-42px" name="typeDate" required="true">
                           	  @if($ad->typeDate == 0) 
                           	  <option value="0" selected="true">par mois</option>
                           	  <option value="1">par semaine</option>
                              <option value="2">par jour</option>
                              <option value="3">par heure</option>
                           	  @elseif($ad->typeDate == 1)
                           	  <option value="0">par mois</option>
                           	  <option value="1" selected="true">par semaine</option>
                              <option value="2">par jour</option>
                              <option value="3">par heure</option>
                           	  @elseif($ad->typeDate == 2) 
                           	  <option value="0">par mois</option>
                           	  <option value="1">par semaine</option>
                           	  <option value="2" selected="true">par jour</option>
                              <option value="3">par heure</option>
                           	  @else
                           	  <option value="0">par mois</option>
                           	  <option value="1">par semaine</option>
                           	  <option value="2">par jour</option>
                           	  <option value="3" selected="true">par heure</option>
                           	  @endif
                           </select>
                        </div>
                    </div>
                    <br>
                     <a href="#localTN_options_offre" class="btn btn-default btn-block height-element-42px" data-toggle="modal" data-target="#localTN_options_offre">Option d'offre</a>
                     <br>
                  </div>
                  <div class="col-md-3">
                     <textarea rows="8" cols="34" placeholder="Description de votre annonce" name="description" class="form-control" required="true">{{$ad->pubDescription}}</textarea>
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

      </div>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="{{URL::asset('js_front/bootstrap.js')}}"></script>
      <script src="{{URL::asset('js_front/jquery.js')}}"></script>
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
      <script src="{{URL::asset('js/app.js')}}"></script>
      <script src="{{URL::asset('js_front/jquery.easing.js')}}"></script>
      <script src="{{URL::asset('js_front/jquery.jcarousel.min.js')}}"></script>
      <script src="{{URL::asset('js_front/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{URL::asset('js_front/masonry.pkgd.min.js')}}"></script>
      <script src="{{URL::asset('js_front/jquery.backstretch.js')}}"></script>
      <script src="{{URL::asset('js_front/jquery.nicescroll.min.js')}}"></script>
      <script src="{{URL::asset('js_front/script.js')}}"></script>
      <script src="{{URL::asset('js_front/gmap3.min.js')}}"></script>
      <script src="{{URL::asset('js/my-script.js')}}"></script>
   </body>
</html>