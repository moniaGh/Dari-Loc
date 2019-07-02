@section('signup')
<div class="modal fade" id="modal-signup" tabindex="-1" role="dialog" aria-labelledby="modal-signup" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Inscription</h4>
         </div>
         <div class="modal-body">
            <form  action="{{url('/auth/register')}}" method="post">
               {{ csrf_field() }}
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <select class="form-control input-lg" name="type" required="required" value="{{ old('type') }}">
                           <option value="">Type de compte</option>
                           <option value="Particulier">Particulier</option>
                           <option value="Entreprise">Entreprise</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <input type="text" name="name" class="form-control input-lg" placeholder="Nom et prénom" required="required" value="{{ old('name') }}">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <input type="text" name="phone" class="form-control input-lg" placeholder="Téléphone" required="required"  onkeyup="this.value=this.value.replace(/[^\d]/,'')" pattern=".{8,8}" title="Exactement 8 chiffres" >
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <select class="form-control input-lg" name="region" required="required">
                           <option>Sélectionnez une région</option>
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
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <input type="email" name="email" class="form-control input-lg" placeholder="E-mail" required="required" value="{{ old('email') }}">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <input type="password" name="password" class="form-control input-lg" placeholder="Mot de passe" required="required" minlength="6">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <input type="password" name="confirmPassword" class="form-control input-lg" placeholder="Confirmer mot de passe" required="required" minlength="6">
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <p class="text_signin">Vous avez déjà un compte ? <a href="#modal-signin" data-toggle="modal" data-target="#modal-signin">Se connecter ici.</a></p>
                  <button class="btn btn-danger btn-block btn-lg">S'inscrire</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@stop
<style type="text/css">
   .text_signin {
   font-size: 13px;
   text-align: center;
   }
</style>