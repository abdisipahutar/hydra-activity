@extends('template')

@section('content')

	<?php
	// foreach ($posts as $post) {
	// 	print_r($post->code);
	// }
	
	// exit;
	?>

	<div class="col-md-8 offset-2 text-1">#4STEPSXBOOMERANGCHALLENGERS</div>
	<div class="step-text-wrapper ig-post-wrapper">
		<div class="row item-wrapper ig-post">
			<?php
				$i = 1;
				foreach ($posts as $post) { ?>
					<div class="item-container video-container {{$i%2==0 ? 'even-container' : ''}}">
						@if($post->is_video)
							<video controls="" autoplay="" loop="">
							  <source width="100%;" src="{{$post->images}}" type="video/mp4">
							  Your browser does not support the video tag.
							</video>
						@elseif(!$post->is_video)
							<img width="100.5%;" src="{{$post->images}}">
						@endif
						<div class="ig-post-text-wrapper">
							<div class="text-2 text-left">
								{{$post->caption}}
							</div>
							<div class="poster-wrapper">
								<img class="avatar-ig-post" src="{{$post->user_photo}}">
								<div class="poster-text-wrapper">
									by <span style="color: #87bce6;">{{$post->user_name}}</span> onto Instagram <img class="love-icon" width="100%;" src="{{ asset('img/love.png') }}"> {{$post->likes}}
									<br>
									<?php echo(date("F j, Y, g:i a", strtotime($post->taken_at))); ?>
								</div>
							</div>
						</div>
					</div>
					
			<?php $i++; } ?>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			var vC = parseInt($('.item-container').css('marginTop'));
			var eC = parseInt($('.even-container').css('marginTop'));
			
			$('.item-container').css('margin-top', vC);
			$('.even-container').css('margin-top', eC);
		});
	</script>
@stop