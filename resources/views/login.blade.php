@extends('template')

@section('content')
<div class="col-md-12">
	<div class="row">
		<div class="col-md-4 offset-4">
			<div class="login-wrapper">
				<form id="login-form" action="/login" method="post">
					 {{ csrf_field() }}
					<div class="form-group">
						<label for="username">Usename</label>
						<input name="username" class="form-control required" type="text" placeholder="Masukkan username...">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input name="password" class="form-control required" type="password" placeholder="Masukkan password...">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Masuk</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop

@section('cstm-script')
<script type="text/javascript">
	
	$(document).ready(function(){

		$('#login-form').validate();

		$('#login-form').submit(function(){

			if(!$("#login-form").valid()){
				return false;
			}

			// event.preventDefault();

			// $.ajax({
   //              url: '/login',
   //              headers: {'X-CSRF-TOKEN': $('[name="_token"]').val()},
   //              type: 'post',
   //              dataType: 'JSON',
   //              data:  $('#login-form').serialize(),
   //              beforeSend: function() {
        			
   //  			},
   //              success: function(resp){

   //              }

   //        	});

		});
	});

</script>
@stop