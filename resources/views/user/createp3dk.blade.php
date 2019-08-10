@extends('layouts.layout')

@section('nav')
<<<<<<< HEAD
<nav class="site-navigation d-flex justify-content-end align-items-center">
    <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
        <li><a href="/">Home</a></li>
        <li><a href="/aboutus">About us</a></li>
        <li><a href="/news">News</a></li>
        <li><a href="/organisasi">Organization</a></li>
        <li class="current-menu-item"><a href="/downloadcenter">Download Center</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav><!-- .site-navigation -->
=======
@include('layouts.navbar')<!-- .site-navigation -->
>>>>>>> 347b7a24fff05996f83026e3dc1dc7522ef76163
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
            <h2>Formulir Membuat P3DK</h2><br/>
      <form method="post" action="{{url('storep3dk')}}" onsubmit="return validasi(this)">
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
              <label for="namaKontak">Nama Contact Person P3DK :</label>
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
              <label for="nominal">Nominal Dana yang Ditetapkan :</label>
              <input type="text" class="form-control" name="nominal" id="nominal">
            </div> <div class="form-group col-md-4"><p><i>**Contoh : 5.000.000</p></i></div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
              <label for="terbilang">Terbilang Nominal Dana yang Ditetapkan :</label>
              <input type="text" class="form-control" name="terbilang" id="terbilang">
            </div> <div class="form-group col-md-4"><p><i>**Contoh : lima juta rupiah</p></i></div>
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
            <input type="submit" value="Buat P3DK" class="tombol"></button>
          </div>
        </div>
      </form>
            </div>

            @include('layouts.sidebar')
        </div>
    </div>
</div>

@endsection
@section('scripting')
<script type="text/javascript">
	function validasi(form) {
		if (form.proker.value == "" || form.namaOK.value =="" || form.nama.value =="" || form.nomorKontak.value =="" || form.nominal.value =="" || form.terbilang.value =="" || form.nimKetuaProker.value =="" || form.ketuaProker.value =="" || form.nimSekreProker.value =="" || form.sekreProker.value =="" || form.ketuaOK.value =="" || form.nimKetuaOK.value =="" ) {
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