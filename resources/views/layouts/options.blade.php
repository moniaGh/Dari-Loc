@section('options')
<div class="modal fade" id="localTN_options" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-center color-site">Options immobilières</h4>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-6 optionsCheckBox">
                  <input type="checkbox" value="Meubles" name="meuble"> Meubles <b style="font: 23px">(آثاث)</b> <br>
                  <input type="checkbox" value="Internet" name="internet"> Internet <b style="font: 23px">(أنترنات)</b><br>
                  <input type="checkbox" value="Gas à ville" name="gas_a_ville"> Gaz à ville <b style="font: 23px">(آثاث)</b><br>
                  <input type="checkbox" value="Climatisation" name="climatisation"> Climatisation<b style="font: 23px">(تكييف
                  )</b> <br>
                  <input type="checkbox" value="Balcon" name="balcon"> Balcon<b style="font: 23px">(شرفة)</b> <br>
                  <input type="checkbox" value="Cable TV" name="cable_TV"> Cable TV<b style="font: 23px">(تلفزيون )</b> <br>
                  <input type="checkbox" value="Nettoyage apres la sortie" name="Nettoyage_apres_la_sortie"> Nettoyage après la sortie<b style="font: 23px">(تنظيف بعد الخروج)</b> <br>
                  <input type="checkbox" value="Cafetière" name="cafetiere"> Cafetière<b style="font: 23px">(صانع القهوة الكهربائية)</b> <br>
                  <input type="checkbox" value="Ordinateur" name="ordinateur"> Ordinateur <b style="font: 23px">(حاسوب)</b><br>
                  <input type="checkbox" value="Lit bébé" name="Lit_bebe"> Lit bébé <b style="font: 23px">(سرير اطفال)</b><br>
               </div>
               <div class="col-md-6 optionsCheckBox">
                  <input type="checkbox" value="Presse-agrumes" name="presse_agrumes"> Presse-Fruits <b style="font: 23px">(عصارة الفاكهة)</b><br>
                  <input type="checkbox" value="Ascenseur" name="ascenseur"> Ascenseur<b style="font: 23px">(مصعد)</b> <br>
                  <input type="checkbox" value="Four micro onde" name="Four_micro_onde"> Four micro onde <b style="font: 23px">(آثاث)</b><br>
                  <input type="checkbox" value="Four" name="four"> Four <b style="font: 23px">(فرن)</b><br>
                  <input type="checkbox" value="Radio" name="radio"> Radio <b style="font: 23px">(راديو)</b><br>
                  <input type="checkbox" value="Terrasse sur le toit" name="terrasse_sur_le_toit"> Terrasse sur le toit <b style="font: 23px">(شرفة على السطح)</b><br>
                  <input type="checkbox" value="Autorisation_de fumer" name="autorisation_de_fumer"> Autorisation de fumer <b style="font: 23px">(التدخين مسموح به)</b><br>
                  <input type="checkbox" value="Terrasse" name="terrasse"> Terrasse <b style="font: 23px">(سطيحة)</b><br>
                  <input type="checkbox" value="Grille pain" name="grille_pain"> Grille-pain<b style="font: 23px">(محمصة خبز كهربائية)</b> <br>
                  <input type="checkbox" value="Parking" name="Parking"> Parking <b style="font: 23px">(موقف سيارات)</b><br>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" onclick="uncheckAllOptions('optionsCheckBox')" class="btn btn-secondary" data-dismiss="modal">Retour</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Enregistrer</button>
         </div>
      </div>
   </div>
</div>
@stop