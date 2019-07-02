@section('nav')
<!-- begin:navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
   <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="{{url('/')}}"><img src="{{URL::asset('img/logo.png')}}"></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-top">
         <ul class="nav navbar-nav navbar-right">
            <!--<li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{url('/')}}">Accueil</a></li> -->
            <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{url('/')}}">Les annonces publiées</a></li>
            @auth
            <li class="dropdown {{ Request::path() == 'mon-compte' ? 'active' : '' }}">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon compte <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{url('/mon-compte')}}">Mon profil</a></li>
                  <li><a href="{{url('/compte/annonces')}}">Mes annonces</a></li>
                  <li><a href="{{'/logout'}}">Déconnexion</a></li>
               </ul>
            </li>
            @else
            <li><a href="#modal-signin" class="signin" data-toggle="modal" data-target="#modal-signin">Se connecter</a></li>
            @endauth
            <li class="{{ Request::path() == 'aide/conseils' ? 'active' : '' }}"><a href="{{url('aide/conseils')}}">Aide et conseils</a></li>
            @auth
            <li>
            <li><a href="{{url('nouveau-annonce')}} " class="signup">Déposez votre annonce</a></li>
            </li>
            @else
            <li><a href="#modal-signin" class="signup" data-toggle="modal" data-target="#modal-signin">Déposez votre annonce</a></li>
            @endauth
         </ul>
      </div>
      <!-- /.navbar-collapse -->
   </div>
   <!-- /.container -->
</nav>
<!-- end:navbar -->
@stop