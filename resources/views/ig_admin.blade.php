@extends('template')

@section('content')
	<div class="col-md-12">
		{{ csrf_field() }}
		<table class="table table-bordered table-hover table-striped">
			<thead>
				<tr>
					<th>Username</th>
					<th>User Avatar</th>
					<th>Taken At</th>
					<th>Image</th>
					<th>Caption</th>
					<th>Likes</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($data as $row)
					<tr id="{{$row->code}}">
						<td>{{ $row->user_name }}</td>
						<td><img width='150px' src="{{ $row->user_photo }}"></td>
						<td>{{ $row->taken_at }}</td>
						<td><img width='200px' src="{{ $row->images }}"></td>
						<td>{{ $row->caption }}</td>
						<td>{{ $row->likes }}</td>
						<?php if($row->is_approved == 'PENDING'){ ?>
							<td>
								<button class="btn btn-primary" onClick="igAction('{{$row->code}}', 'APPROVED')">Approve</button>
								<button class="btn btn-warning" onClick="igAction('{{$row->code}}', 'REJECT')">Reject</button>
							</td>
						<?php } ?>
						<?php if($row->is_approved == 'APPROVED'){ ?>
							<td>
								<button class="btn btn-warning" onClick="igAction('{{$row->code}}', 'REJECT')">Reject</button>
							</td>
						<?php } ?>
						<?php if($row->is_approved == 'REJECT'){ ?>
							<td>
								<button class="btn btn-primary" onClick="igAction('{{$row->code}}', 'APPROVED')">Approve</button>
							</td>
						<?php } ?>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $data->appends($_GET)->links() }}
	</div>
@stop

@section('cstm-script')

<script type="text/javascript">

	function notifIgAction($message, $type) {
		$.notify({
			// options
			icon: 'glyphicon glyphicon-warning-sign',
			title: '',
			message: $message,
			// url: 'https://github.com/mouse0270/bootstrap-notify',
			target: '_blank'
			},{
			// settings
			element: 'body',
			position: null,
			type: $type,
			allow_dismiss: true,
			newest_on_top: false,
			showProgressbar: false,
			placement: {
				from: "top",
				align: "right"
			},
			offset: 20,
			spacing: 10,
			z_index: 1031,
			delay: 3000,
			timer: 1000,
			url_target: '_blank',
			mouse_over: null,
			animate: {
				enter: 'animated fadeInDown',
				exit: 'animated fadeOutUp'
			},
			onShow: null,
			onShown: null,
			onClose: null,
			onClosed: null,
			icon_type: 'class',
			template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
				'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
				'<span data-notify="icon"></span> ' +
				'<span data-notify="title">{1}</span> ' +
				'<span data-notify="message">{2}</span>' +
				'<div class="progress" data-notify="progressbar">' +
					'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
				'</div>' +
				'<a href="{3}" target="{4}" data-notify="url"></a>' +
			'</div>' 
			});
	}

	function igAction($code, $action){
		
		$.ajax({
            url: '/ig-action',
            headers: {'X-CSRF-TOKEN': $('[name="_token"]').val()},
            type: 'post',
            dataType: 'JSON',
            data:  {code: $code, action: $action},
            beforeSend: function() {
    			
			},
            success: function(resp){
            	if(resp.status){
            		notifIgAction('Berhasil Melakukan Perubahan', 'primary');
            		$('#'+$code).hide('slow', function(){ 
            			setTimeout(($('#'+$code).remove(), 2000));
            		});
            	}
            	else{
            		notifIgAction('Gagal Melakukan Perubahan', 'warning');	
            	}
            }

      	});

	}

	$(document).ready(function(){

	});
</script>

@stop