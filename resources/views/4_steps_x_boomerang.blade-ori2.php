@extends('template')

@section('content')
	<img class="web" width="100%;" src="{{ asset('img/MH.jpg') }}">
	<img class="mobile" width="100%;" src="{{ asset('img/Masthead-p3-mobile.jpg') }}">
	<div class="col-md-8 col-md-offset-2 text-1">MEKANISME KONTES</div>
	<div class="row col-md-8 col-md-offset-2 step-text-wrapper boomerang-step">
		<div class="col-md-2 col-xs-2 text-10 text-right inline-midle step-min-margin">1</div>
		<div class="col-md-9 col-xs-9 text-2 text-left inline-midle">
			<span style="font-weight: bolder;">#4stepsXBoomerang</span> terbuka bagi seluruh konsultan dan non-konsultan Oriflame di seluruh Indonesia
		</div>
	</div>

	<div class="col-md-8 col-md-offset-2 step-text-wrapper step-min-margin">
		<div class="col-md-9 col-xs-9 text-2 text-right inline-midle">
			Buat video <span style="font-weight: bolder;">boomerang</span> sekreatif mungkin dengan menunjukkan salah satu gerakan 4 langkah perawatan wajah
		</div>
		<div class="col-md-2 col-xs-2 text-10 text-right inline-midle step-min-margin">2</div>
	</div>
	<div class="row item-wrapper step-min-half-margin">
		<div class="item-container video-container">
			<video controls autoplay loop>
			  <source width="100%;" src="{{ asset('img/WhatsApp Video 2018-02-21 at 2.10.11 PM.mp4') }}" type="video/mp4">
			  Your browser does not support the video tag.
			</video>
		</div>
		<div class="item-container video-container even-container">
			<video controls autoplay loop>
			  <source width="100%;" src="{{ asset('img/WhatsApp Video 2018-04-02 at 6.53.54 AM.mp4') }}" type="video/mp4">
			  Your browser does not support the video tag.
			</video>
		</div>
		<div class="item-container video-container">
			<video controls autoplay loop>
			  <source width="100%;" src="{{ asset('img/WhatsApp Video 2018-02-21 at 2.11.38 PM.mp4') }}" type="video/mp4">
			  Your browser does not support the video tag.
			</video>
		</div>
        <div class="item-container video-container">
			<video controls autoplay loop>
			  <source width="100%;" src="{{ asset('img/WhatsApp Video 2018-04-02 at 6.54.04 AM.mp4') }}" type="video/mp4">
			  Your browser does not support the video tag.
			</video>
		</div>
	</div>
	<div class="row col-md-8 col-md-offset-2 step-text-wrapper boomerang-step">
		<div class="col-md-2 col-xs-2 text-10 text-right inline-midle step-min-margin step-3-tit-mobile">3</div>
		<div class="col-md-9 col-xs-9 text-2 text-left inline-midle">
			Upload video Boomerang kreasimu di Instagram dengan Hastag #4stepsXBoomerang, tag &amp; mention akun resmi <a class="soc-med-link" href="https://www.instagram.com/id.oriflame" target="_blank">Instagram Oriflame</a> dan tag juga 3 teman kamu yang lain ajak mereka untuk join di Kompetisi ini
		</div>
	</div>
	<div class="col-md-8 col-md-offset-2 step-text-wrapper step-min-margin">
		<div class="col-md-9 col-xs-9 text-2 text-right inline-midle">
			Periode kontes 2 – 30 April 2018
		</div>
		<div class="col-md-2 col-xs-2 text-10 text-right inline-midle step-min-margin">4</div>
	</div>
	
	<div class="col-md-8 col-md-offset-2 step-text-wrapper blue-backgroud">
		<div class="col-md-8 col-md-offset-2 text-1 white-color">KETENTUAN PEMENANG</div>
		<div class="col-md-12 step-text-wrapper">
			<div class="row col-md-10 col-md-offset-1 step-text-wrapper boomerang-step">
				<div class="col-md-2 col-xs-2 text-10 text-right inline-midle step-min-margin white-color">1</div>
				<div class="col-md-8 col-xs-8 text-2 text-left inline-midle white-color">
					Pengumuman pemenang di minggu kedua bulan Mei 2018
				</div>
			</div>
		</div>
		<div class="col-md-12 step-text-wrapper step-min-margin">
			<div class="col-md-8 col-xs-8 text-2 text-right inline-midle white-color">
				Tim Oriflame akan memilih 5 orang pemenang dengan video boomerang yang paling kreatif dan menarik
			</div>
			<div class="col-md-2 col-xs-2 text-10 text-right inline-midle step-min-margin white-color">2</div>
		</div>
		<div class="col-md-12 step-text-wrapper step-min-margin">
			<div class="row col-md-10 col-md-offset-1 step-text-wrapper boomerang-step">
				<div class="col-md-3 col-xs-3 text-10 text-right inline-midle step-min-margin white-color">3</div>
				<div class="col-md-8 col-xs-8 text-2 text-left inline-midle white-color">
					Pemenang berhak mendapatkan hadiah buka Bersama Rossa - Novage Brand Ambassador dan Hampers menarik dari Oriflame, minggu ketiga bulan Mei 2018
				</div>
			</div>
		</div>
        <!--
		<div class="col-md-12 step-text-wrapper step-min-margin">
			<div class="col-md-8 col-xs-8 text-2 text-right inline-midle white-color">
				Bagi pemenang yang berasal dari luar Jabodetabek akan mendapatkan tiket pesawat PP & menginap di Hotel Berbintang selama 1 malam
			</div>
			<div class="col-md-2 col-xs-2 text-10 text-right inline-midle step-min-margin white-color">4</div>
		</div>
        -->
	</div>
@stop