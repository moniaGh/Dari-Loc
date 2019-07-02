@section('signin')
<div class="modal fade" id="modal-signin" tabindex="-1" role="dialog" aria-labelledby="modal-signin" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <form role="form"  method="post" action="{{url('/auth/login')}}">
            {{ csrf_field() }}
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title">Connexion</h4>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label for="emailAddress">E-mail</label>
                  <input type="email" name="email" class="form-control input-lg" placeholder="Entrer E-mail">
               </div>
               <div class="form-group">
                  <label for="password">Mot de passe</label>
                  <input type="password" name="password" class="form-control input-lg" placeholder="Mot de passe">
               </div>
            </div>
            <div class="modal-footer">
               <p class="text_signup" style="margin-bottom: 0px !important;"><a href="#modal-reset"  data-toggle="modal" data-target="#modal-reset">Mot de passe oublié ?</a></p>
               <p class="text_signup">Vous n'avez pas encore de compte ? <a href="#modal-signup"  data-toggle="modal" data-target="#modal-signup">S'inscrire gratuitement.</a></p>
               <button class="btn btn-danger btn-block btn-lg"> Se connecter</button>
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