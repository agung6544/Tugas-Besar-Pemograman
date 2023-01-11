<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RiaAgungStore</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
     <link rel="stylesheet" href="style.css">
</head>
<body>
        <!-- ini navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-fm fixed-top">
        <div class="container-md">
          <a class="navbar-brand" href="#">
            <img src="https://seeklogo.com/images/P/pubg-mobile-logo-28E182F8A8-seeklogo.com.png" alt="" width="30" height="24" class="d-inline-block align-text-top" />
            PUBG STORE
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#order">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Log in</a>
              </li>
          </div>
        </div>
    </nav>
    <div class="card-body" style="background: url(https://cdn.antaranews.com/cache/800x533/2022/08/16/pubg-mobile-77-merdeka-dinner.png); background-size: cover; background-position: center; background-attachment: fixed;">
    <!-- ini slide img -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="https://cdn.midasbuy.com/images/1920-240.321b317e.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="https://cdn.midasbuy.com/images/1920_240.7dbdd97f.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://cdn.midasbuy.com/images/1920_240.0271ce31.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div><br>
    <center>
    <section id="order">
    <form>
    <input type="text" placeholder="Masukkan ID Pemain"><br>
    <p style="color: #df1919;">*Id Pemain Diperlukan</p>
  
        <div class="card-body" style="background: linear-gradient(to bottom, #3e3c3c, transparent);">

     <legend style="color: hwb(0 94% 4%);">Metode Pembayaran</legend>
     <input type="radio" class="btn-check" name="drone" id="ovo" >
     <label class="btn btn-outline-dark" for="ovo">OVO</label>
     
     <input type="radio" class="btn-check" name="drone" id="spay" >
     <label class="btn btn-outline-dark" for="spay">ShopeePay</label>
     
     <input type="radio" class="btn-check" name="drone" id="dana" >
     <label class="btn btn-outline-dark" for="dana">DANA</label>

     <input type="radio" class="btn-check" name="drone" id="gopay" >
     <label class="btn btn-outline-dark" for="gopay">Gopay</label>
    </div><br>
    
    <div class="card-body" style="background: linear-gradient(to top, #3e3c3c, transparent)">

<legend style="color: hwb(0 94% 4%);">Pilih Nominal</legend>
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
  <label class="btn btn-outline-dark" for="btnradio1">263 UC = Rp. 50.000</label><br><br>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
  <label class="btn btn-outline-dark" for="btnradio2">525 UC = Rp. 96.000</label><br><br>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
  <label class="btn btn-outline-dark" for="btnradio3">788 UC = Rp. 138.000</label><br><br>
  
  <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
  <label class="btn btn-outline-dark" for="btnradio4">1375 UC = Rp. 228.000</label><br><br>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
  <label class="btn btn-outline-dark" for="btnradio5">1900 UC = Rp. 320.000</label><br><br>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
  <label class="btn btn-outline-dark" for="btnradio6">2425 UC = Rp. 406.000</label><br><br>



  <a href="login.php" class="btn btn-dark
  " style="background: #3e3c3c;">KIRIM</a>
      </div>
      </form>
      <br>
      <footer>
        <br>
            <h3>PUBG STORE</h3>
            <p>Terimakasih sudah mengunjungi store kami</p>
            <h2>RiaAgungSTORE</h2>
            <ul class="socials">
                <li><a href="https://instagram.com/_mhrndiva?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.instagram.com/agungderiko_nainggolan/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/agung.deriko"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://github.com/agung6544"><i class="fa fa-github"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UClK0lkjzPcxi96gvHqiaZ9g"><i class="fa fa-youtube"></i></a></li>
            </ul>
        <footer class="bottom">
          <p>copyright 2023 <span></span></p>
      </footer>
        </footer>
</div>

  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="sc.js"></script>
      </body>
</html>