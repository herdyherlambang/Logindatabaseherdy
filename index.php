<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Titik Putih</title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
  </head>
  <body class="theme-red">

    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

          <a href="#home" class="navbar-brand page-scroll">Titik Putih Indonesia</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#tentang" class="page-scroll">Tentang</a></li>
          <li><a href="#dokumentasi" class="page-scroll">Dokumentasi</a></li>
          <li><a href="#kontak" class="page-scroll">Kontak & Saran</a></li>
        </ul>
      </div>



      </div>
    </nav>
    <!-- Akhir Navbar -->
   
   <!-- jumbotron -->
   <div class="jumbotron text-center">
     <img src="<?= base_url('assets/'); ?>img/7.jpg" class="img-circle">
     <h1>Titik Putih Indonesia</h1>
     <p>Membantu | Mengabdi | Untuk Masyarakat</p>
   </div>
   <!-- akhir jumbotron-->

   <!-- About -->

   <section class="tentang" id="tentang">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <h2 class="text-center">Tentang</h2>
           <hr>
         </div>
       </div>

       <div class="row">
         <div class="col-md-5 col-md-offset-1">
           <p>Titik Putih adalah sebuah komunitas yang didirikan pada 22 November 2019 oleh sekelompok mahasiswa dengan peranannya sebagai agen perubahan. Komunitas Titik Putih Bergerak sebagai relawan kemanusiaan di bidang pendidikan. Kami memiliki tujuan untuk menumbuhkan kesadaran akan pentingnya pendidikan kepada masyarakat secara menyeluruh dimulai dari pendekatan emosional. Selain itu komunitas ini juga dijadikan sebagai wadah bagi mahasiswa yang memiliki pemikiran yang sama untuk berkontribusi nyata melaksanakan peranannya sebagai putera puteri terbaik bangsa untuk menjaga, membantu, dan memberikan wadah demilahirnya tunas baru bangsa yang mampu mengembangkan kualitas pendidikan di indonesia melalui pendekatan secara langsung.<p>
         </div>
         <div class="col-md-5">
           <p>Kualitas pendidikan sangatlah penting bagi anak-anak negeri ini, yaitu Indonesia. Namun sayangnya menurut Departemen Pendidikan dan Kebudayaan mencatat tidak kurang dari 4,1 juta anak usia 6-21 tahun tidak bersekolah. Pendidikan yang berkualitas tentu perlu menciptakan masyarakat Indonesia yang kompetitif dan produktif, dan juga dapat bersaing di panggung dunia. Di Indonesia sendiri kualitas pendidikan masih harus di tingkatkan dengan adanya kurikulum yang baru, hal tersebut di harapakn bisa meningkatkan kualitas pendidikan di Indonesia.   Untuk mewujudkan kualitas pendidikan, Indonesia tidak hanya diam, ada banyak hal yang dilakukan oleh pemerintah seperti pemberian bantuan operasional sekolah (BOS) yang dilakukan sejak tahun 2005 terkait dengan pendidikan dengan hasil yang nyata, yaitu adanya kartu pintar indonesia</p>
         </div>
       </div>
     </div>
   </section>
   <!-- Akhir About -->

   <!-- portfolio -->
   <section class="dokumentasi" id="dokumentasi">
     <div class="container">
       <div class="row">
         <div class="col-md-12 text-center">
           <h2>Dokumentasi</h2>
           <hr>
         </div>
       </div>

       <div class="row">
         <div class="col-xs-4">
          <a href="" class="thumbnail">
           <img src="<?= base_url('assets/'); ?>img/foto/1.jpg">
          </a>
         </div>
          <div class="col-xs-4">
          <a href="" class="thumbnail">
           <img src="<?= base_url('assets/'); ?>img/foto/2.jpg">
          </a>
         </div>
          <div class="col-xs-4">
          <a href="" class="thumbnail">
           <img src="<?= base_url('assets/'); ?>img/foto/3.jpg">
          </a>
         </div>
          <div class="col-xs-4">
          <a href="" class="thumbnail">
           <img src="<?= base_url('assets/'); ?>img/foto/4.jpg">
          </a>
         </div>
          <div class="col-xs-4">
          <a href="" class="thumbnail">
           <img src="<?= base_url('assets/'); ?>img/foto/5.jpg">
          </a>
         </div>
          <div class="col-xs-4">
          <a href="" class="thumbnail">
           <img src="<?= base_url('assets/'); ?>img/foto/6.jpg">
          </a>
         </div>

       </div>

     </div>
   </section>
   <!-- Akhir Portofolio -->

   <!-- Contact -->
   <section class="kontak" id="kontak">
    <div class="container">
      <div class="row">
          <div class="col-sm-12 text-center">
          <h2>Kontak & Saran</h2>
          <hr>
      </div>
     </div>

     <div class="row">
       <div class="col-md-6 col-sm-offset-3">
         <form>

           <div class="form-group">
             <label class="nama">Nama</label>
             <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama">
           </div>

           <div class="form-group">
             <label class="email">Email</label>
             <input type="email" id="email" class="form-control" placeholder="Email">
           </div>

           <div class="form-group">
             <label class="telp">No Telepon</label>
             <input type="telp" id="telp" class="form-control" placeholder="Masukkan No Telepon">
           </div>
          <select class="form-control">
            <option>-- Pilih Kategori --</option>
            <option>Donasi</option>
            <option>Sistem</option>
            <option>Pendidikan</option>
          </select>
          <div class="form-group">
            <label for="pesan">Pesan</label>
             <textarea class="form-control" rows="10" placeholder="Masukkan Pesan"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim Pesan</button>

         </form>
       </div>
     </div>
    </div>
   </section>
   <!-- Akhir Contact -- >


    <!-- Footer -->
    <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <p><i class="glyphicon glyphicon-copyright-mark"></i> Copyright 2021 | Built By <a href="http://instagram.com/herdydioo">Herdy Herlambang <i class="glyphicon glyphicon-pushpin"></i></a>
          </p>
        </div>
      </div>
      <div class="col-sm-12">
        <a href="https://www.facebook.com/aduhsiherdi1" class="btn btn-primary">Facebook</a>
      </div>
    </div>
    </footer>
    <!-- Akhir Footer -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
  </body>
</html>