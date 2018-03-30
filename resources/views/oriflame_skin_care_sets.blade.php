@extends('template')

@section('content')
	<div class="col-md-8 offset-2 text-1">ORIFLAME SKIN CARE SETS</div>
	<div class="row col-md-10 offset-1 step-wrapper"  style="margin-top: 110px;padding-bottom: 15px;">
		<div class="blue-bar" style="height: 2px;"></div>
		<div class="step-type-2-title skin-care-sets-logo"><img width="100%" src="{{ asset('img/Novage-logo.png') }}"></div>
	</div>
	<div class="col-md-8 offset-2 text-1">TEROBOSAN SAINS DALAM ANTI-AGEING</div>
	<div class="col-md-12 step-text-wrapper">
		<div class="text-2">Kulit punya cerita berbeda dari usia. Itu sebabnya NovAge–perawatan kulit anti-ageing advanced performing kami–tidak khawatir dengan usia Anda, karena yang penting
adalah bagaimana Anda merawatnya. NovAge berfokus langsung pada tanda-tanda penuaan kulit spesifik melalui rangkaian dan rutinitas yang tepat.
Setiap rangkaian didorong oleh ilmu pengetahuan yang inovatif, didukung oleh teknologi canggih phytoCELL, dan terbukti oleh studi klinis menyeluruh.
Jangan biarkan kulit mendikte usia Anda. Tampilkan kembali tanda-tanda keremajaan kulit, dan tampil semuda jiwa Anda.</div>
	</div>
	<div class="col-md-8 offset-2 step-text-wrapper">
		<div class="text-5"><center>BUKAN PERKARA USIA – NAMUN BAGAIMANA ANDA MEMBAWAKANNYA</center></div>
	</div>
	<div class="row item-wrapper">
		<div class="item-container">
			<img width="100%" src="{{ asset('img/NovAge-Bright-Sublime.jpg') }}">
			<div class="text-2">NovAge true perfection</div>
			<div class="item-container-hover">
				<div class="text-6">Kulit Tampak Cantik Berkilau Merawat Tanda-Tanda Penuaan</div>
				<button class="btn-info-lengkap" data-toggle="modal" data-target="#modal1">INFO LENGKAP</button>
			</div>
		</div>
		<div class="item-container even-container">
			<img width="100%" src="{{ asset('img/NovAge-Ecollagen.jpg') }}">
			<div class="text-2">NovAge Bright Sublime</div>
			<div class="item-container-hover">
				<div class="text-6">Perawatan Yang Menjaga Sepanjang Waktu</div>
				<button class="btn-info-lengkap" data-toggle="modal" data-target="#modal2">INFO LENGKAP</button>
			</div>
		</div>
		<div class="item-container">
			<img width="100%" src="{{ asset('img/NovAge-True-Perfection.jpg') }}">
			<div class="text-2">NovAge ecollagen</div>
			<div class="item-container-hover">
				<div class="text-6">Samarkan Garis Hingga Halus Dan Kerut*</div>
				<div class="text-7">*Uji konsumen pada 70 perempuan</div>
				<button class="btn-info-lengkap" data-toggle="modal" data-target="#modal3">INFO LENGKAP</button>
			</div>
		</div>
		<div class="item-container even-container">
			<img width="100%" src="{{ asset('img/NovAge-Ultimate-Lift.jpg') }}">
			<div class="text-2">NovAge Ultimate Lift</div>
			<div class="item-container-hover">
				<div class="text-6">Kulit Lebih Kencang Dalam 4 Minggu Teruji Klinis*</div>
				<div class="text-7">*Uji klinis menggunakan krim pagi dan krim malam</div>
				<button class="btn-info-lengkap" data-toggle="modal" data-target="#modal4">INFO LENGKAP</button>
			</div>
		</div>
	</div>
	<div class="row col-md-10 offset-1 step-wrapper"  style="margin-top: 110px;padding-bottom: 15px;">
		<div class="blue-bar" style="height: 2px;"></div>
		<div class="step-type-2-title skin-care-sets-logo optimals-logo"><img width="100%" src="{{ asset('img/Optimals-logo.png') }}"></div>
	</div>
	<div class="col-md-8 offset-2 text-1">AWAL SEGAR UNTUK KULIT ANDA</div>
	<div class="col-md-12 step-text-wrapper">
		<div class="text-2">Salah satu masalah kulit yang dapat dialami orang yang tinggal di iklim tropis adalah dehidrasi. Meskipun terdengar sederhana, namun dehidrasi kulit dapat menjadi kompleks jika diabaikan dan tidak ditangani dengan tepat.</div>
	</div>
	<div class="row item-wrapper">
		<div class="item-container" style="display: inline-block;">
			<img width="100%" src="{{ asset('img/Optimals-Even-Out.jpg') }}">
			<div class="text-2">Optimals Even Out</div>
			<div class="item-container-hover">
				<div class="text-6">Awal Cerah Untuk Kulit Anda</div>
				<button class="btn-info-lengkap" data-toggle="modal" data-target="#modal5">INFO LENGKAP</button>
			</div>
		</div>
		<div class="item-container" style="display: inline-block;">
			<img width="100%" src="{{ asset('img/Optimals-Hydra.jpg') }}">
			<div class="text-2">Optimlas Hydra Radiance</div>
			<div class="item-container-hover">
				<div class="text-6">Kulit Terhidrasi Tampak Berseri Alami</div>
				<button class="btn-info-lengkap" data-toggle="modal" data-target="#modal6">INFO LENGKAP</button>
			</div>
		</div>
	</div>
@stop