@extends('layouts.layout')

@section('nav')
<nav class="site-navigation d-flex justify-content-end align-items-center">
    <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
        <li><a href="/">Home</a></li>
        <li><a href="about.html">About us</a></li>
        <li><a href="/news">News</a></li>
        <li><a href="portfolio.html">Organization</a></li>
        <li class="current-menu-item"><a href="/downloadcenter">Download Center</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav><!-- .site-navigation -->
@endsection

@section('bodyclass', 'single-page news-page')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Download Center</h1>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header -->

<div class="news-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 b-background">
            <span> <a href="/downloadcenter">&#8592 Kembali</a></span> <br> <br>
            <h2>Formulir Membuat LPJ</h2><br/>
      <form method="post" action="{{url('storelpj')}}" onsubmit="return validasi(this)">
        @csrf
        <div class="row">
          <div class="form-group col-md-7">
            <label for="Proker">Nama Program Kerja:</label>
            <input type="text" class="form-control" name="proker" id="proker">
          </div> <div class="form-group col-md-4"><p><i>**Contoh penulisan : "Latihan Rutin"</p></i></div>
        </div>
        <div class="row">
            <div class="form-group col-md-5">
              <label for="bentukKegiatan">Bentuk Kegiatan :</label>
              <input type="text" class="form-control" name="bentukKegiatan" id="bentukKegiatan">
            </div><div class="form-group col-md-4"><p><i>**Contoh : Menunjang kelengkapan dan keperluan dalam latihan rutin</p></i></div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
              <label for="tema">Tema Kegiatan :</label>
              <input type="text" class="form-control" name="tema" id="tema">
            </div><div class="form-group col-md-4"><p><i>**Kosongkan jika tidak ada tema</p></i></div>
        </div>
        <div class="row">
            <div class="form-group col-md-7">
              <label for="NamaOK">Nama Organisasi / Lembaga Kemahasiswaan):</label>
              <input type="text" class="form-control" name="namaOK" id="namaOK">
            </div> <div class="form-group col-md-4"><p><i>**Contoh penulisan : Badan Eksekutif Mahasiswa Universitas Kristen Duta Wacana</p></i></div>
          </div>
        <div class="row">
            <div class="form-group col-md-5">
              <label for="namaKontak">Nama Contact Person LPJ :</label>
              <input type="text" class="form-control" name="namaKontak" id="namaKontak">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
              <label for="nomorKontak">Nomor Kontak :</label>
              <input type="text" class="form-control" name="nomorKontak" id="nomorKontak">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
              <label for="tanggal">Tanggal Pengesahan :</label>
              <input type="date" date-format="d M Y" class="form-control" id="tanggal" name="tanggal">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
              <label for="wakilDekan">Nama Wakil Dekan :</label>
              <input type="text" class="form-control" name="wakilDekan" id="wakilDekan">
            </div> <div class="form-group col-md-4"><p><i>**Contoh : Ir. Joko Purwadi  *** UKM / UKKb / UKKr tidak perlu mengisi nama WD</p></i></div>
        </div>
        <div class="row">
            <div class="form-group col-md-5">
              <label for="ketuaProker">Nama Lengkap Ketua Proker :</label>
              <input type="text" class="form-control" name="ketuaProker" id="ketuaProker">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
              <label for="nimKetuaProker">NIM Ketua Proker :</label>
              <input type="text" class="form-control" name="nimKetuaProker" id="nimKetuaProker">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-5">
              <label for="sekreProker">Nama Sekretaris Proker :</label>
              <input type="text" class="form-control" name="sekreProker" id="sekreProker">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
              <label for="nimSekreProker">NIM Sekretaris Proker :</label>
              <input type="text" class="form-control" name="nimSekreProker" id="nimSekreProker">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-5">
              <label for="ketuaOK">Nama Ketua Organisasi / Lembaga Kemahasiswaan :</label>
              <input type="text" class="form-control" name="ketuaOK" id="ketuaOK">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
              <label for="nimKetuaOK">NIM Ketua Organisasi / Lembaga Kemahasiswaan :</label>
              <input type="text" class="form-control" name="nimKetuaOK" id="nimKetuaOK">
            </div>
        </div>
        <br>
        <div class="row">
          <div class="form-group col-md-4">
            <input type="submit" value="Buat LPJ" class="tombol"></button>
          </div>
        </div>
      </form>
            </div>

            <div class="col-12 col-lg-4">
                <div class="sidebar">
                    <div class="search-widget">
                        <form class="flex flex-wrap align-items-center">
                            <input type="search" placeholder="Search...">
                            <button type="submit" class="flex justify-content-center align-items-center">GO</button>
                        </form><!-- .flex -->
                    </div><!-- .search-widget -->

                    <div class="popular-posts">
                        <h2>Popular Posts</h2>

                        <ul class="p-0">
                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="images/p-1.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">A new cause to help</a></h3>

                                    <div class="posted-date">MArch 12, 2018</div>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="images/p-2.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">We love to help people</a></h3>

                                    <div class="posted-date">MArch 10, 2018</div>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="images/p-3.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">The new ideas for helping</a></h3>

                                    <div class="posted-date">MArch 09, 2018</div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .cat-links -->

                    <div class="upcoming-events">
                        <h2>Upcoming Events</h2>

                        <ul class="p-0">
                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="images/u-1.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">Fundraiser for Kids</a></h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <span class="posted-date"><a href="#">Aug 25, 2018</a></span>
                                        <span class="event-location"><a href="#">Ball Room New York</a></span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="images/u-2.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">The childrens</a></h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <span class="posted-date"><a href="#">Aug 25, 2018</a></span>
                                        <span class="event-location"><a href="#">Ball Room New York</a></span>
                                    </div>

                                    <p>Consectetur adipiscing elit. Mauris tempus vestib ulum.</p>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="images/u-3.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">Bring water </a></h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <span class="posted-date"><a href="#">Aug 25, 2018</a></span>
                                        <span class="event-location"><a href="#">Ball Room New York</a></span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .cat-links -->

                    
                </div><!-- .sidebar -->
            </div><!-- .col -->
        </div>
    </div>
</div>

@endsection
@section('scripting')
<script type="text/javascript">    
    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("#tanggal").value = today;
	function validasi(form) {
		if (form.proker.value == "" || form.namaOK.value =="" || form.nama.value =="" || form.nomorKontak.value =="" || form.nimKetuaProker.value =="" || form.ketuaProker.value =="" || form.nimSekreProker.value =="" || form.sekreProker.value =="" || form.ketuaOK.value =="" || form.nimKetuaOK.value =="" ) {
			alert('Anda harus mengisi data dengan lengkap !');
      return (false);
		}
      if(form.tema.value ==""){
        form.tema.value == " ";
      }
			return (true);
		
	}
</script>
@endsection