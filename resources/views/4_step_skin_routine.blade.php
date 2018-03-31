@extends('template')

@section('content')
	<div class="col-md-8 col col-xs-12 col-md-offset-2 text-1">4 LANGKAH PERAWATAN RUTIN<br>KECANTIKAN KULIT - MENGAPA ANDA<br>MEMBUTUHKANNYA?</div>
	<div class="col-md-8 col-xs-12 col-md-offset-2 text-2">Seringkali kita abai merawat kulit dan lebih memprioritaskan hal lainya. Padahal, kulit adalah perisai utama untuk melindungi orangn tubul lainnya dan menjadi hal pertama yang terlihat pada penampilan kita, sehingga perawatan rutin yang tepat dan efektif sangatlah penting. Kunci dari kulit segar dan cantik adalah merawatnya dengan benar sesuai kebutuhannya. Karenanya, berinvestasi pada rutinitas perawatan kulit yang tepat dapat kami jamin merupakan salah satu keputusan terbaik untuk hidup yang berkualitas dan masa depan yang lebih bersinar. Mari simak langkah-lagkahnya:</div>
	
	<div class="row col-md-10 col-xs-12 col-md-offset-1 step-wrapper">
		<div class="col-md-6 col-xs-12">
			<img class="web" width="100%" src="{{ asset('img/Pembersih-dan-Toner-1.png') }}">
			<img class="mobile" width="100%" src="{{ asset('img/Pembersih-dan-Toner-mobile.png') }}">
		</div>
		<div class="col-md-6">
			<div class="step-title-1 web">
				<div class="left-bar"></div>
				<span class="text-3">LANGKAH 1</span>
			</div>
			<div class="step-title-mobile-conteiner mobile">
				<div class="blue-bar"></div>
				<span class="text-3 step-title-text">LANGKAH 1</span>
			</div>

			<div class="col-md-12 step-text-wrapper">
				<div class="text-4">PEMBERSIH & TONER</div>
				<div class="text-2 text-left">Setiap langkah dalam rutinitas perawatan mempersiapkan kulit untuk menerima langkah selanjutnya dengan maksimal,– menggunakan pembersih dan toner yang tepat adalah langkah awal terbaik!</div>
			</div>
			<div class="col-md-12 step-text-wrapper">
				<div class="text-4">MENGAPA PEMBERSIH?</div>
				<div class="text-2 text-left">Membersihkan kulit - mengangkat kotoran serta minyak dapat membantu kulit menjaga keseimbangan dan kelembapan.</div>
			</div>
		</div>
		<div class="row col-md-12 step-text-wrapper">
			<div class="col-md-12 text-4">MENGAPA TONER?</div>
			<div class="col-md-10 text-2 text-left">Toner merupakan dasar dalam tahap pembersihan dan merupakan kunci untuk mempersiapkan kulit menyerap produk perawatan selanjutnya dengan lebih baik. Toner menjaga keseimbangan tingkat pH kulit Anda dan  memastikan kulit siap menyerap krim dan serum yang akan diaplikasikan. Jadi pastikan, jangan lewatkan langkah penting ini untuk hasil perawatan maksimal.</div>
		</div>
	</div>

	<div class="row col-md-10 col-md-offset-1 step-wrapper">
		<div class="step-type-2-wrapper web">
			<div class="blue-bar"></div>
			<div class="step-type-2-title text-3">Langkah 2</div>
		</div>
		<div class="step-title-mobile-conteiner mobile">
			<div class="blue-bar"></div>
			<span class="text-3 step-title-text">LANGKAH 2</span>
		</div>
		<div class="web" style="margin-top: 45px;">
			<img width="100%" src="{{ asset('img/MATA-1.png') }}">
		</div>
		<div class="mobile">
			<img class="mobile" width="100%" src="{{ asset('img/MATA-mobile.png') }}">
		</div>

		<div class="col-md-8 col-md-offset-2 step-text-wrapper">
			<div class="text-4"><center>MATA</center></div>
			<div class="text-2">Berikan perhatian ekstra pada kulit di sekitar mata bila, dimana awal tanda-tanda penuaan biasanya muncul.</div>
		</div>
		<div class="col-md-8 col-md-offset-2 step-text-wrapper">
			<div class="text-4"><center>MENGAPA KRIM MATA?</center></div>
			<div class="text-2">Kulit di sekitar mata begitu halus dan sensitif sehingga lebih rentan terhadap iritasi, garis halus dan kerut, oleh karena itu menggunakan krim khusus area mata dengan formula spesifik sangatlah penting—bukan krim pagi atau malam biasa. </div>
		</div>
	</div>

	<div class="row col-md-10 col-md-offset-1 step-wrapper">
		<div class="col-md-6" style="z-index: 99;">
			<div class="step-title-1 step-title-3 web">
				<span class="text-3">LANGKAH 3</span>
				<div class="left-bar"></div>
			</div>
			<div class="step-title-mobile-conteiner mobile">
				<div class="blue-bar"></div>
				<span class="text-3 step-title-text">LANGKAH 3</span>
			</div>
			<div class="col-md-12 step-text-wrapper">
				<div class="text-4 right-text web">BOOST</div>
				<div class="text-4 mobile">BOOST</div>
				<div class="text-2 right-text web">Patikan penggunaan serum atau esens untuk mendapatkan hasil maksimal!</div>
				<div class="text-2 mobile">Patikan penggunaan serum atau esens untuk mendapatkan hasil maksimal!</div>
			</div>
			<div class="col-md-12 step-text-wrapper">
				<div class="text-4 right-text web">MENGAPA SERUM?</div>
				<div class="text-4 mobile">MENGAPA SERUM?</div>
				<div class="text-2 right-text web">Dengan formula terkonsentrasi dan mudah meyerap ke dalam kulit lebih dengan teknologi mutakhir, untuk memaksimalkan hasil dari krim pagi dan krim malam Anda.</div>
				<div class="text-2 mobile">Dengan formula terkonsentrasi dan mudah meyerap ke dalam kulit lebih dengan teknologi mutakhir, untuk memaksimalkan hasil dari krim pagi dan krim malam Anda.</div>
			</div>
		</div>
		<div class="col-md-6 web" style="z-index: 9;">
			<img width="100%" src="{{ asset('img/boost-1.png') }}">
		</div>
		<div class="mobile">
			<img class="mobile" width="100%" src="{{ asset('img/Boost-mobile.png') }}" style="margin-top: 20px;">
		</div>
	</div>

	<div class="row col-md-10 col-md-offset-1 step-wrapper">
		<div class="step-type-2-wrapper web">
			<div class="blue-bar"></div>
			<div class="step-type-2-title text-3">LANGKAH 4</div>
		</div>
		<div class="step-title-mobile-conteiner mobile">
			<div class="blue-bar"></div>
			<span class="text-3 step-title-text">LANGKAH 4</span>
		</div>
		<div style="margin-top: 45px;" class="web">
			<img width="100%" src="{{ asset('img/pelembab1.png') }}">
		</div>
		<div class="mobile">
			<img class="mobile" width="100%" src="{{ asset('img/pelembab-mobile.png') }}" style="margin-top: 20px;">
		</div>
		<div class="col-md-8 col-md-offset-2 step-text-wrapper">
			<div class="text-4"><center>PELEMBAP </center></div>
			<div class="text-2">Untuk menyempurnakan perawatan, rawat kelembapkan kulit dengan krim pagi dan malam.</div>
		</div>
		<div class="col-md-8 col-md-offset-2 step-text-wrapper">
			<div class="text-4"><center>MENGAPA KRIM PAGI?</center></div>
			<div class="text-2">Krim pagi merawat hidrasi kulit sepanjang hari dan menjaga kulit dari pengaruh buruk lingkungan, sinar UV yang berbahaya dan polusi.</div>
		</div>
		<div class="col-md-8 col-md-offset-2 step-text-wrapper">
			<div class="text-4"><center>MENGAPA KRIM MALAM?</center></div>
			<div class="text-2">Krim malam yang kaya memberikan kulit nutrisi ekstra. Seperti halanya tubuh Anda, regenerasi sel kulit berada dipuncak saat kulit beristirahat di malam hari, oleh sebab itu mengoptimalkan proses pembaharuan alami kulit alami dengan bantuan krim malam adalah proses yang pantang Anda lewatkan.</div>
		</div>
		<div class="col-md-8 col-md-offset-2 step-text-wrapper">
			<div class="text-5"><center>Jadi, mari berinvestasi sedini mungkin dengan rutin merawat kulit mulai sekarag, untuk hari esok yang lebih bersinar!</center></div>
		</div>
	</div>
@stop