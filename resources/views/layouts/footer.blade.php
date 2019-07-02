@section('footer')
<div class="container">
   <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="widget">
            <a href="{{url('/aide/conseils') }} ">
               <h4 style="color: #fff;">Aide et conseils</h4>
            </a>
         </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="widget">
            <a href="{{url('/conditions/utilisation')}} ">
               <h4 style="color: #fff;">Conditions d'utilisation</h4>
            </a>
         </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="widget">
            <a href="{{url('/contactez/nous')}} ">
               <h4 style="color: #fff;">Contactez nous</h4>
            </a>
         </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="widget">
            <a href="{{url('/qui/nous/somme')}} ">
               <h4 style="color: #fff;">Qui sommes-nous ?</h4>
            </a>
         </div>
      </div>
   </div>
   <!-- break -->
   <!-- begin:copyright -->
   <div class="row">
      <div class="col-md-12 copyright">
         <p>Copyright &copy; 2018, Tous droits réservés pour DARI-LOC.</p>
         <a href="#top" class="btn btn-danger scroltop"><i class="fa fa-angle-up"></i></a>
      </div>
   </div>
   <!-- end:copyright -->
</div>
@stop