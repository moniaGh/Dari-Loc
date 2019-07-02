@if(session()->has('success'))
<div class="alert alert-success" role="alert">
   {{Session::get('success')}}
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
   </button>
</div>
@elseif(session()->has('error'))
<div class="alert alert-danger" role="alert">
   {{Session::get('error')}}
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
   </button>
</div>
@elseif(session()->has('warning'))
<div class="alert alert-warning" role="alert">
   {{Session::get('warning')}}
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
   </button>
</div>
@endif