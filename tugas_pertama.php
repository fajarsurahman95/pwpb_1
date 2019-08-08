
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Tugas Pertama</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/pricing/pricing.css" rel="stylesheet">
    <style>
    .user {
        display: inline-block;
        width: 150px;
        height: 150px;
        border-radius: 50%;

        object-fit: cover;
    }
    </style>
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Tugas PWPB</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Tugas Pertama</a>
        <a class="p-2 text-dark" href="#">Tugas Kedua</a>
        <a class="p-2 text-dark" href="#">Tugas Ketiga</a>
        <a class="p-2 text-dark" href="#">Tugas Keempat</a>
      </nav>
      <a class="btn btn-outline-primary" href="index.php">Beranda</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Tugas Pertama</h1>
      <p class="lead">Hai! Di tugas pertama ini, kami ingin memperkenalkan diri 🙈</p>
    </div>
        <?php
        $nama_satu = "Adam Levine";
        $umur_satu = 40;
        $tinggi_satu = 182;

        $nama_dua = "Akhdiyat Duta Modjo";
        $umur_dua = 39;
        $tinggi_dua = 180;

        $nama_tiga = "Raisa";
        $umur_tiga = 29;
        $tinggi_tiga = 170;

        $rata_rata = ($tinggi_satu + $tinggi_dua + $tinggi_tiga) / 3;
        ?>
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><img src="jono.jpg" alt="" class="user"></h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li>Nama Lengkap: <?=$nama_satu?></li>
              <li>Umur: <?=$umur_satu?> Tahun</li>
              <li>Tinggi Badan: <?=$tinggi_satu?> cm</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Lihat selengkapnya</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><img src="duta.jpg" alt="" class="user"></h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li>Nama Lengkap: <?=$nama_dua?></li>
              <li>Umur: <?=$umur_dua?> Tahun</li>
              <li>Tinggi Badan: <?=$tinggi_dua?> cm</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Lihat selengkapnya</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><img src="raisa.jpg" alt="" class="user"></h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li>Nama Lengkap: <?=$nama_tiga?></li>
              <li>Umur: <?=$umur_tiga?> Tahun</li>
              <li>Tinggi Badan: <?=$tinggi_tiga?> cm</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Lihat selengkapnya</button>
          </div>
        </div>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <p class="lead">Rata rata tinggi kami = <?php echo printf("%.2f", $rata_rata)?> cm</p>
        </div>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <!-- <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24"> -->
           Made with ❤ <small class="d-block mb-3 text-muted">&copy; <?=date('Y')?></small>
          </div>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
