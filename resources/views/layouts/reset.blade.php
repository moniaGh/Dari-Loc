@section('reset')
<div class="modal fade" id="modal-reset" tabindex="-1" role="dialog" aria-labelledby="modal-reset" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <form role="form"  method="post" action="{{url('/auth/reset')}}">
            {{ csrf_field() }}
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title color-site text-center">Réinitialiser</h4>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label for="emailAddress">E-mail</label>
                  <input type="email" name="email" class="form-control input-lg" placeholder="Entrer E-mail">
               </div>
            </div>
            <div class="modal-footer">
               <p class="text_signin">Vous avez déjà un compte ? <br> <a href="#modal-signin" data-toggle="modal" data-target="#modal-signin">Se connecter ici.</a></p>
               <button class="btn btn-danger btn-block btn-lg">Envoyer E-mail</button>
            </div>
         </form>
      </div>
   </div>
</div>
@stop
<style type="text/css">
   .text_signup {
   font-size: 13px;
   text-align: center;
   }
</style>