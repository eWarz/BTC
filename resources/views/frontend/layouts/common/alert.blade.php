<div class="flash-container">
	@if(Session::has('message'))
	  <div class="alert {{ Session::get('alert-class') }} text-center" style="margin-bottom:10px;" role="alert">
	    {{ Session::get('message') }}
	    <a href="#" style="float:right;" class="alert-close" data-dismiss="alert">&times;</a>
	  </div>
	@endif

		@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif
	@if (session('warning'))
	    <div class="alert alert-warning">
	        {{ session('warning') }}
	    </div>
	@endif
</div>