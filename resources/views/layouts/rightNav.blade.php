@section('rightNav')
<div class="col-md-3 col-md-pull-9 sidebar">
   <!-- break -->
   <div class="widget widget-sidebar widget-white">
      <div class="widget-header">
         <h3>Les Catégories</h3>
      </div>
      <ul class="list-check">
         <li> <a href="{{url('local/a-vendre')}} "><b>Local à vendre</b> <span class="pull-right">({{$a_vendre}})</span></a></li>
         <li> <a href="{{url('local/a-louer')}} "><b>Local à louer</b> <span class="pull-right">({{$a_louer}})</span></a></li>
         <li> <a href="{{url('/rechercher-quelqu-un')}} "><b>Rechercher quelqu'un</b> <span class="pull-right">({{$recherche}})</span></a></li>
      </ul>
   </div>
   <!-- break -->
</div>
<br>
<div class="col-md-3 col-md-pull-9 sidebar">
   <!-- break -->
   <div class="widget widget-sidebar widget-white">
      <div class="widget-header">
         <h3>Les villes</h3>
      </div>
      <ul class="list-check">
         <li> <a href="{{url('/ville/Ariana')}}">Ariana <span class="pull-right">({{$ariana}})</span></a></li>
         <li> <a href="{{url('/ville/Béja')}}">Béja <span class="pull-right">({{$beja}})</span></a></li>
         <li> <a href="{{url('/ville/Ben Arous')}}">Ben Arous <span class="pull-right">({{$ben_arous}})</span></a></li>
         <li> <a href="{{url('/ville/Bizerte')}}">Bizerte <span class="pull-right">({{$bizerte}})</span></a></li>
         <li> <a href="{{url('/ville/Gabès')}}">Gabès <span class="pull-right">({{$gabes}})</span></a></li>
         <li> <a href="{{url('/ville/Gafsa')}}">Gafsa <span class="pull-right">({{$gafsa}})</span></a></li>
         <li> <a href="{{url('/ville/Jendouba')}}">Jendouba <span class="pull-right">({{$jendouba}})</span></a></li>
         <li> <a href="{{url('/ville/Kairouan')}}">Kairouan <span class="pull-right">({{$kairouan}})</span></a></li>
         <li> <a href="{{url('/ville/Kasserine')}}">Kasserine <span class="pull-right">({{$kasserine}})</span></a></li>
         <li> <a href="{{url('/ville/Kébili')}}">Kébili <span class="pull-right">({{$kbili}})</span></a></li>
         <li> <a href="{{url('/ville/La Manouba ')}}">La Manouba <span class="pull-right">({{$manouba}})</span></a></li>
         <li> <a href="{{url('/ville/Le Kef')}}">Le Kef <span class="pull-right">({{$kef}})</span></a></li>
         <li> <a href="{{url('/ville/Mahdia')}}">Mahdia <span class="pull-right">({{$mahdia}})</span></a></li>
         <li> <a href="{{url('/ville/Médenine')}}">Médenine <span class="pull-right">({{$mednine}})</span></a></li>
         <li> <a href="{{url('/ville/Monastir')}}">Monastir <span class="pull-right">({{$monastir}})</span></a></li>
         <li> <a href="{{url('/ville/Nabeul')}}">Nabeul <span class="pull-right">({{$nabeul}})</span></a></li>
         <li> <a href="{{url('/ville/Sfax')}}">Sfax <span class="pull-right">({{$sfax}})</span></a></li>
         <li> <a href="{{url('/ville/Sidi Bouzid')}}">Sidi Bouzid <span class="pull-right">({{$sidi_bouzid}})</span></a></li>
         <li> <a href="{{url('/ville/Siliana')}}">Siliana <span class="pull-right">({{$siliana}})</span></a></li>
         <li> <a href="{{url('/ville/Sousse')}}">Sousse <span class="pull-right">({{$sousse}})</span></a></li>
         <li> <a href="{{url('/ville/Tataouine')}}">Tataouine <span class="pull-right">({{$tataouine}})</span></a></li>
         <li> <a href="{{url('/ville/Tozeur')}}">Tozeur <span class="pull-right">({{$tozeur}})</span></a></li>
         <li> <a href="{{url('/ville/Tunis')}}">Tunis <span class="pull-right">({{$tunis}})</span></a></li>
         <li> <a href="{{url('/ville/Zaghouan')}}">Zaghouan <span class="pull-right">({{$zaghouan}})</span></a></li>
      </ul>
   </div>
   <!-- break -->
</div>
@stop