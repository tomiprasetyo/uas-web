<?php include 'layout/header.php'?>

<!--Navbar -->    
<nav
    class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
  >
    <div class="container ">
      <a class="navbar-brand" href="#DPK PPNI RSUPN DR. CIPTO MANGUNKUSUMO">
        DPK PPNI RSUPN DR. CIPTO MANGUNKUSUMO</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarText"
        aria-controls="navbarText"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tentang kami">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#staff">Staff</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <!-- Akhir Navbar -->    


      <!-- Jumbotron-->
      
         <div class="container text-center  text-center mt-5 pt-xl-5 pb-5">
            <img src="img/ppni.png" alt="PPNI" class="rounded-circle img-thumbnail">
              <h4 class="display-6">Selamat datang Di Website Kami</h4>
              <h3 class="display-5">DPK PPNI RSUPN Dr. Cipto Mangunkusumo </h3>
              <a href="#layanan">
                  <button type="button" class="btn btn-danger btn-lg" id="jumbotron">Cek Layanan</button>
              </a>
          </div>
        
          <!--Akhir Jumbroton-->





<!--Layanan-->
<div class="container-fluid layanan pt-5 pb-5">
            <div class="container text-center">
              <h2 class="display-3" id="layanan">Layanan</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate,
                doloribus.
              </p>
          <div class="row pt-4">
            <div class="col-md-4">
              <span class="lingkaran" ><i class="fas fa-code fa-5x"   ></i></span>
              <h3  class="mt-3"  class="btn btn-primary" role="button"><a href="./folder/keanggotaan.php" >Anggota</a></h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat,
                a!
              </p>
            </div>
  
            <div class="col-md-4">
              <span class="lingkaran"><i class="fas fa-palette fa-5x"></i></span>
              <h3 class="mt-3">STR</h3>
              <a href=""></a>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat,
                a!
              </p>
            </div>
  
            <div class="col-md-4">
              <span class="lingkaran"
                ><i class="fas fa-network-wired fa-5x"></i
              ></span>
              <h3 class="mt-3">SIP</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat,
                a!
              </p>
            </div>
          </div>
        </div>
      </div>
                        
      <!--Layanan-->
          


<!-- Berita -->
<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
    <h2 class="display-3" id="berita">Berita</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti,
      dolorum quasi? Neque consectetur odio placeat inventore perferendis
      quibusdam omnis deleniti.
    </p>
    <div class="row pt-4 gx-4 gy-4">
      <div class="col-md-4">
        <div class="card crop-img">
          <img
            src="img/pemilihan ketua.jpg"
            class="card-img-top"
            width="200"
            height="200"
          />
          <div class="card-body">
            <h5 class="card-title">PEMILIHAN KETUA DPK RSCM PERIODE 2018-2023</h5>
            <p class="card-text">
              Pemilihan Ketua DPK PPNI RSCM Periode 2018-2023 Yang Dilaksanakan di 
              Auditorium Gedung A Lt.8 
              RSUPN Dr. Cipto Mangunkusumo
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card crop-img">
          <img
            src="img/5.Penandatangan SK.jpg"
            class="card-img-top"
            width="200"
            height="200"
          />
          <div class="card-body">
            <h5 class="card-title">PENANDATANGAN SK PELANTIKAN DPK RSCM</h5>
            <p class="card-text">
              Penandatanganan SK Pelantikan  Ketua Dan Pengurus DPK PPNI RSCM 
              Terpilih Periode Tahun 2018-2023 Yang Di Hadiri Oleh Ketua 
              Dan Sekertaris DPD PPNI Jakarta Pusat
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card crop-img">
          <img
            src="img/1.Pelantikan.jpg"
            class="card-img-top"
            width="200"
            height="200"
          />
          <div class="card-body">
            <h5 class="card-title">PELANTIKAN PENGURUS DPK PPNI RSCM</h5>
            <p class="card-text">
              Pelantikan DPK PPNI RSCM Yang Di Hadiri Oleh Ketua DPK PPNI 
              Jakarta Pusat Dan Di Rektur Utama RSCM
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card crop-img">
          <img
            src="img/3.Stoma.jpg"
            class="card-img-top"
            width="200"
            height="200"
          />
          <div class="card-body">
            <h5 class="card-title">SEMINAR STOMA</h5>
            <p class="card-text">
              Seminar Stoma Yang Di Selengarakan Oleh Himpunan Perawatan Luka 
              Inwocna DKI Jakarta Bekerjasama Dengan DPK PPNI RSCM 
                  Yang Di Selengarakan Di Auditorium Gedung A RSCM
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card crop-img">
          <img
            src="img/Nurse day.jpg"
            class="card-img-top"
            width="200"
            height="200"
          />
          <div class="card-body">
            <h5 class="card-title ">NURSE DAY</h5>
            <p class="card-text">
              Acara Nurse Day Yang Di Adakan Oleh DPK PPNI RSCM Mengundang Anggota Dan Pengurus
                   DPK PPNI RSCM Dalam Acara Sosialisasi PKB Online Dan Buka Puasa Bersama 
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card crop-img">
          <img
            src="img/Futsal.jpg"
            class="card-img-top"
            width="200"
            height="200"
          />
          <div class="card-body">
            <h5 class="card-title">FUTSAL PERAWAT JAKARTA PUSAT</h5>
            <p class="card-text">
              Turnamen Futsal Yang Di Adakan Oleh DPD PPNI Jakarta Pusat Dalam Rangkat HUT PPNI ke-74 
                  Yang Di Ikuti Oleh Perawat Rumah Sakit Se-Jakarta Pusat
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Akhir Berita-->

<!-- tentang -->
<div class="container-fluid pt-5 pb-5">
  <div class="container">
    <h2 class="display-3 text-center" id="tentang kami">Tentang Kami</h2>
    <p class="text-center">
      DPK PPNI RSUPN Dr. Cipto Mangunkusumo
    </p>
    <div class="clearfix pt-5">
      <img
        src="img/RSCM PPNI.JPG"
        class="col-md-6 float-md-end mb-3 crop-img"
        width="300"
        height="300"
      />
      <p>
        Selamat datang di Web Komisariat PPNI RSCM.
      </p>
      <p>
        Web ini dibuat sebagai langkah awal "bangkitnya" peran organisasi profesi
         keperawatan di Rumah Sakit dr. Cipto Mangunkusumo (RSCM) Jakarta.
      </p>
      <p>
        Selain itu juga blog ini dibuat seiring dengan terpilihnya 
          ketua baru pada tanggal 20 Juli 2018, yang kemudian akan dilantik bulan 
          September bersama pengurus
           lainnya dan bertugas sampai dengan tahun 2023. 
      </p>
      <p>
        Harapan dari web ini adalah menjadi media komunikasi
            antar perawat khususnya di RSCM dan umumnya dengan perawat di seluruh Indonesia.
      </p>
      <p>VISI DAN MISI <br>
        Visi: <br>
        1.Menuju Komisariat PPNI yang Terbaru Terdaftar dan Terpercaya tahun 2018 <br>
        Misi: <br>
        1.Memberikan dan memfasilitasi penyampaian informasi TERBARU/TERKINI tentang
         perkembangan keperawatan di RSCM dan di Indonesia; <br>
        2.Memfasilitasi PENDAFTARAN seluruh perawat RSCM menjadi Anggota PPNI; <br>
        3.Menumbuhkan KEPERCAYAAN anggota terhadap organisasi profesi 
      </p>
    </div>
  </div>
</div>
<!--Akhir tentang -->


<!-- Staff -->
<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
    <h2 class="display-3" id="staff">Staff Kami </h2>
    <p>
      Berikut Staff Harian Yang Bertugas Di DPK PPNI RSCM 
    </p>
    <div class="row pt-4 gx-4 gy-4">
      <div class="col-md-4 text-center tim">
        <img
          src="img/ppni.png"
          class="rounded-circle mb-3"
        />
        <h4>Abdul Azis</h4>
        <p>Admin DPK PPNI RSCM </p>
        <p>
          <a href="" class="social"><i class="fab fa-twitter"></i></a>
          <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="" class="social"><i class="fab fa-instagram"></i></a>
        </p>
      </div>
      <div class="col-md-4 text-center tim">
        <img
          src="img/ppni.png"
          class="rounded-circle mb-3"
        />
        <h4>Ns. Hendra Firmansyah, S.Kep</h4>
        <p>Ketua DPK PPNI RSCM </p>
        <p>
          <a href="" class="social"><i class="fab fa-twitter"></i></a>
          <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="" class="social"><i class="fa-instagram"></i></a>
        </p>
      </div>
      <div class="col-md-4 text-center tim">
        <img
          src="img/ppni.png"
          class="rounded-circle mb-3"
        />
        <h4>Tomi</h4>
        <p>Admin DPK PPNI RSCM</p>
        <p>
          <a href="" class="social"><i class="fab fa-twitter"></i></a>
          <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="" class="social"><i class="fab fa-instagram"></i></a>
        </p>
      </div>
    </div>
  </div>
</div>

<!--Akhir Staff -->

<!-- kontak -->
<div class="container-fluid  pt-5 pb-5 kontak">
  <div class="container">
    <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
    <p class="text-center">
      Jl. Diponegoro No.71 RSUPN Dr. Cipto Mangunkusumo Gedung Administrasi Lt.5 
    </p>
    <div class="row pb-3">
      <div class="col-md-6">
        <input
          class="form-control form-control-lg mb-3"
          type="text"
          placeholder="Nama"
        />
        <input
          class="form-control form-control-lg mb-3"
          type="text"
          placeholder="Email"
        />
        <input
          class="form-control form-control-lg"
          type="text"
          placeholder="No. Phone"
        />
      </div>
      <div class="col-md-6">
        <textarea class="form-control form-control-lg" rows="5"></textarea>
      </div>
    </div>
    <div class="col-md-3 mx-auto text-center">
      <button type="button" class="btn btn-danger btn-lg">
        Kirim Pesan
      </button>
    </div>
  </div>
</div>
<div class="container text-center pt-5 pb-5">
  All Rights Reserved &copy; 2021
</div>
<!--Akhir kontak -->

<?php include 'layout/footer.php'?>