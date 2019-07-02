@section('optionsOffre')
<div class="modal fade" id="localTN_options_offre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-center color-site">Options d'annonce</h4>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-12">
                  <h4>Local disponible :</h4>
               </div>
            </div>
            <div class="row" style="margin-left: 56px;">
               <div class="col-md-6 optionsCheckBoxTwo">
                  <input type="checkbox" value="Pour les étudiants" name="offre_etudiants" style="margin-bottom: 17px;"> Pour les étudiants <br>
                  <input type="checkbox" value="Pour les étrangaires" name="offre_etrangaires" style="margin-bottom: 17px;"> Pour les étrangaires <br>
                  <input type="checkbox" value="Pour les familles" name="offre_famille" style="margin-bottom: 17px;"> Pour les familles <br>
               </div>
               <div class="col-md-6 optionsCheckBoxTwo">
                  <input type="checkbox" value="Pour les hommes" name="offre_hommes" style="margin-bottom: 17px;"> Pour les hommes<br>
                  <input type="checkbox" value=" Pour les femmes" name="offre_femmes" style="margin-bottom: 17px;"> Pour les femmes  <br>
                  <input type="checkbox" value="Pour tous" name="offre_pour_tous" style="margin-bottom: 17px;"> Pour tous <br>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <img src="{{url('img/note.png')}} " style="width: 35px;">
                  <span> Par défaut l'annonce est déposée pour tous ! </b></span>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" onclick="uncheckAllOptions('optionsCheckBoxTwo')" class="btn btn-secondary" data-dismiss="modal">Retour</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Enregistrer</button>
         </div>
      </div>
   </div>
</div>
@stop