@extends('template')

@section('content')

	<?php
	// foreach ($posts as $post) {
	// 	print_r($post->code);
	// }
	
	// exit;
	?>

	<div class="col-md-8 col-md-offset-2 text-1 stepschallenger-title">#4STEPSXBOOMERANGCHALLENGERS</div>
	<div class="step-text-wrapper ig-post-wrapper">
		{{ csrf_field() }}
		<div class="item-wrapper ig-post" id="ig-wrapper">
			
		</div>
		<div class="col-md-12 col-xs-12" style="text-align: center;">
			<div id="load-more" offset="0" onClick="getIgPost();">Load More</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){

			getIgPost();
			

			var vC = parseInt($('.item-container').css('marginTop'));
			var eC = parseInt($('.even-container').css('marginTop'));
			
			$('.item-container').css('margin-top', vC);
			$('.even-container').css('margin-top', eC);


		});


		function getIgPost(){
			// $('#load-more').attr('offset', '10');
			offset = $('#load-more').attr('offset');

			$.ajax({
                url: '/get-ig-post',
                headers: {'X-CSRF-TOKEN': $('[name="_token"]').val()},
                type: 'post',
                dataType: 'JSON',
                data:  {offset: offset},
                beforeSend: function() {
    				$('#load-more').text('Loading...');
    			},
                success: function(resp){
                	if(resp){
                		$('#ig-wrapper').append(resp);
	                	var nextOffset = parseInt(offset) + 16;
	                	$('#load-more').attr('offset', nextOffset);
	                	$('#load-more').text('Load More');
                	}
                	else if(!resp){
                		$('#load-more').text('No Post');
                	}
                }

          	});
		}


	</script>
@stop