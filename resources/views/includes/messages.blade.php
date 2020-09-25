@if(count($errors)>0)
	
	@foreach($errors->all() as $error)
		<div class="alert alert-danger"> <div class="fa fa-exclamation-triangle"></div> {{$error}} </div>
	@endforeach

@endif

@if(session('success'))
	<div class="alert alert-success"> <div class="fa fa-check"></div> {{session('success')}} </div>
@endif

@if(session('error'))
	<div class="alert alert-danger"> <div class="fa fa-exclamation-triangle"></div> {{session('error')}} </div>
@endif

