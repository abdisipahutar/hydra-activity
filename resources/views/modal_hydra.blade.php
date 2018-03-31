@if(session()->has('flash_message'))
<div id="modalMessage" class="modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Konfirmasi</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        {{ Session::get('flash_message') }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(window).on('load',function(){
        $('#modalMessage').modal('show');
    });
</script>
@endif


<div id="modal1" class="modal modal-detail-product animated fadeIn" role="dialog" tabindex='-1'>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="modal-body">
        <div class="text-8">NovAge<br>True Perfection</div>
        <div class="col-md-8 col-md-offset-2 product-detail-image">
          <img width="100%" src="{{ asset('img/NovAge-True-Perfection-detail.jpg') }}" />
        </div>
        <div class="col-md-8 col-md-offset-2 text-1">MENGHIDRASI SECARA INTENS HINGGA 83%*</div>
        <div class="content-text-wrapper">
          <div class="col-md-10 col-md-offset-1 step-text-wrapper">
              <div class="text-2">Gaya hidup sibuk seperti kurang tidur, pola makan buruk, dan tekanan lingkungan menyebabkan kotoran menumpuk pada kulit. Akibatnya, timbullah tanda penuaan kulit seperti kusam dan pori tampak besar. Kondisi ini dapat memperlambat proses regenerasi sel dan menghambat optimalisasi fungsi sel. NovAge True Perfection telah melewati uji klinis, mampu membantu merawat kulit sehingga tampak cantik, terhidrasi, bercahaya, dan tampilan pori kulit tampak samar. True Perfection didukung oleh dua teknologi inovatif dengan ekstrak Silk Tree yang dipatenkan dan Açai PhytoCELL. Berbagai paduan formula tersebut membantu menjaga kulit tampak cantik berkilau sekaligus menjaganya dari kerutan dini.</div>
          </div>
          <div class="col-md-10 col-md-offset-1 step-text-wrapper">
              <div class="text-9">*Uji klinis pada 22 perempuan menggunakan krim pagi, krim malam, serum, cleanser dan toner</div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<div id="modal2" class="modal modal-detail-product animated fadeIn" role="dialog" tabindex='-1'>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="modal-body">
        <div class="text-8">NovAge<br>Bright Sublime</div>
        <div class="col-md-8 col-md-offset-2 product-detail-image">
          <img width="100%" src="{{ asset('img/NovAge-Bright-Sublime-detail.jpg') }}" />
        </div>
        <div class="col-md-8 col-md-offset-2 text-1">TERUJI KLINIS: BINTIK GELAP TAMPAK TERSAMAR HINGGA 50%*</div>
        <div class="content-text-wrapper">
          <div class="col-md-10 col-md-offset-1 step-text-wrapper">
              <div class="text-5">Krim Pagi:</div>
              <div class="text-2">
                <ul class="ul-left">
                  <li>Formula krim yang mudah meresap pada kulit. Kulit terasa lembut dan halus.</li>
                  <li>Membantu menjaga kulit dari radiasi sinar UV yang merusak kesehatan kulit.</li>
                  <li>Dengan pemakaian teratur dapat membantu menyamarkan bintik gelap, garis halus, dan kerut pada wajah.**</li>
                </ul>
              </div>
              <div class="text-5">Krim Malam:</div>
              <div class="text-2">
                <ul class="ul-left">
                  <li>Membantu menjaga tampilan kulit tampak bercahaya, warna kulit tampak lebih merata, dan menyamarkan bitnik gelap pada wajah.</li>
                  <li>Gingko Flavonoids membantu menjaga kulit dari radikal bebas pemicu melanin.***</li>
                  <li>Membantu merawat kulit yang lelah akibat tekanan lingkungan saat Anda tidur.</li>
                </ul>
              </div>
          </div>
          <div class="col-md-10 col-md-offset-1 step-text-wrapper">
              <div class="text-9">
                *Telah melewati uji klinis menggunakan serum dan krim pagi<br>
                **Uji klinis pada 42 perempuan menggunakan krim pagi dan serum selama 12 minggu<br>
                ***Berdasarkan kandungan bahan
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="modal3" class="modal modal-detail-product animated fadeIn" role="dialog" tabindex='-1'>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="modal-body">
        <div class="text-8">NovAge<br>ecollagen</div>
        <div class="col-md-8 col-md-offset-2 product-detail-image">
          <img width="100%" src="{{ asset('img/NovAge-Ecollagen-detail.jpg') }}" />
        </div>
        <div class="col-md-8 col-md-offset-2 text-1">MENYAMARKAN KERUT HINGGA 33%*</div>
        <div class="content-text-wrapper">
          <div class="col-md-10 col-md-offset-1 step-text-wrapper">
              <div class="text-5"><center>Menurunnya Level Kolagen – Pemicu Kerut</center></div>
              <div class="text-2">
                Kolagen adalah salah satu komponen paling vital dalam kulit – jaringan protein berserat yang memberi struktur, bentuk dan mempengaruhi kekencangan kulit. Kolagen terletak di matriks ekstraselular – rangkaian jaringan ikat di sekeliling sel kulit yang sangat menentukan bagaimana sebuah jaringan terlihat dan berfungsi. Seiring dengan bertambahnya usia kulit, proses sintesa alami kolagen melambat sehingga sampai pada titik di mana lebih banyak kolagen yang hilang dibandingkan yang diproduksi. Ketidakseimbangan fungsional ini membuat matriks ekstraselular melemah dan membuat kerut semakin jelas terlihat.
              </div>
          </div>
          <div class="col-md-10 col-md-offset-1 step-text-wrapper">
              <div class="text-9">*Uji klinis pada 31 perempuan menggunakan krim pagi dan malam selama 12 minggu</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal4" class="modal modal-detail-product animated fadeIn" role="dialog" tabindex='-1'>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="modal-body">
        <div class="text-8">NovAge<br>Ulitmate Lift</div>
        <div class="col-md-8 col-md-offset-2 product-detail-image">
          <img width="100%" src="{{ asset('img/NovAge-Ultimate-Lift-detail.jpg') }}" />
        </div>
        <div class="col-md-8 col-md-offset-2 text-1">KULIT TERASA LEBIH KENYAL 70%*</div>
        <div class="content-text-wrapper">
          <div class="col-md-10 col-md-offset-1 step-text-wrapper">
              <div class="text-5"><center>APAKAH YANG DIMAKSUD<br>DENGAN KEKENYALAN KULIT?</center></div>
              <div class="text-2">
                Kekenyalan kulit adalah kemampuan kulit memantul kembali pada posisi alaminya setelah ditarik dan direntangkan karena memiliki elastisitas. Sel fibroblas menghasilkan elastin yang membuat kulit terasa kenyal dan elastis. Kerusakan kronologis akibat paparan sinar matahari membuat fibroblas kaku dan kehilangan kemampuan memproduksi elastin. Di laboratorium, Oriflame menemukan bahwa fibroblas yang dirawat dengan aspartolift mengembalikan kemampuan alaminya mereproduksi elastin.**
              </div>
          </div>
          <div class="col-md-10 col-md-offset-1 step-text-wrapper">
              <div class="text-9">
                *Uji klinis menggunakan rangkaian lengkap selama 12 minggu<br>
                **Melewati uji klinis menggunakan serum, krim pagi dan malam
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal5" class="modal modal-detail-product animated fadeIn" role="dialog" tabindex='-1'>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="modal-body">
        <div class="text-8">Optimals<br>Event Out</div>
        <div class="col-md-8 col-md-offset-2 product-detail-image">
          <img width="100%" src="{{ asset('img/Optimals-Even-Out-detail.jpg') }}" />
        </div>
        <div class="col-md-8 col-md-offset-2 text-1">Dikembangkan Di Swedia, Diramu Oleh Oriflame</div>
        <div class="content-text-wrapper">
          <div class="col-md-10 col-md-offset-1 step-text-wrapper">
              <div class="text-2">
                Disempurnakan oleh alam dan dioptimalkan oleh para ilmuwan Oriflame, formula
                EvenOut – dengan paduan bahan alami Swedia dan Lumilight Complex – membantu
                kulit tampak cerah dan bintik gelap tampak samar, untuk warna kulit terlihat mulus
                merata dan bercahaya.
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal6" class="modal modal-detail-product animated fadeIn fade" role="dialog" tabindex='-1'>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="modal-body">
        <div class="text-8">Optimals<br>Hydra Radiance</div>
        <div class="col-md-8 col-md-offset-2 product-detail-image">
          <img width="100%" src="{{ asset('img/Optimals-Hydra-detail.jpg') }}" />
        </div>
        <div class="col-md-8 col-md-offset-2 text-1">Awal Segar Untuk Kulit Anda</div>
        <div class="content-text-wrapper">
          <div class="col-md-10 col-md-offset-1 step-text-wrapper">
              <div class="text-2">
                Disempurnakan oleh alam, diperkuat oleh sains, formula penyejuk kulit Hydra
mengandung campuran bahan alami Swedia dan bahan aktif yang menghidrasi.
Diformulasikan secara khusus untuk melembabkan dan menyegarkan semua
jenis kulit, Rangkaian Optimals Hydra akan memberi Anda kulit yang terasa
segar, tampak bercahaya.
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>