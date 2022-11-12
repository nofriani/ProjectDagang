<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="../utils/style.css" />
    <title>My Fashion</title>
  </head>

  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">My Fashion</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>

        <a href="#" class="btn btn-outline-success mr-3">Login</a>
        <a href="#" class="btn btn-outline-danger">Register</a>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Home -->
    <section class="jumbotron text-center">
      <img src="../image/fashion-logo.jpg" alt="Logo Fashion" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4 fs-2">My Fashion</h1>
      <p class="lead">“I have always believed that fashion was not only to make women more beautiful, but also to reassure them, give them confidence”<br /></p>
      <p>~Yves Saint Laurent~</p>
    </section>
    <!-- Akhir Home -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="container2 row text-center mb-3">
          <div class="col">
            <h2>About</h2>
          </div>
        </div>

        <div class="row justify-content-center fs-6 text-center">
          <div class="col-md-6">
            <p>
              My Fashion merupakan toko online yang sengaja dibuat untuk melakukan pemasaran dan penjualan fashion secara online. Aplikasi ini diberi nama My Fashion karena untuk membantu Anda dalam berpenampilan secara fashionable yang
              dilakukan secara sistematis melalui halaman web.
            </p>
          </div>
          <div class="col-md-5">
            <p>Tampil anggun dan menawan serta fashionable adalah idaman setiap wanita. Kami hadir dengan koleksi fashion dengan warna ceria dan menawan sesuai keinginan Anda.</p>
          </div>
        </div>

        <div>
          <h2> Alamat </h2>
          <table id="customtable">
             <tr>
                <th>Outlet</th>
                <th>Alamat</th>
                <th>Jam Operasional</th>
             </tr>
             <tr>
                <td>Jakarta</td>
                <td>Jl.Ahmad Yani No.16, Pondok Indah, Jakarta Timur</td>
                <td>Senin - Sabtu (10:00 - 22:00)</td>
             </tr>
            </table> 
      </div>
    </section>
    <!-- Akhir About -->

    <!-- Product 1-->
   <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Pakaian Pria</span>
      </div>
    </nav>

    <div class="row">
      <div class="card1 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets1/kaos distro.jpg" class="card-img-top" alt="Kaos Distro">
          <div class="card-body">
            <h5 class="card-title">Kaos Distro</h5>
            <a href="#" class="btn btn-primary">Rp.35.000</a>
          </div>
        </div>
      </div>
      <div class="card1 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets1/keneja pria.jpg" class="card-img-top" alt="Kemeja">
          <div class="card-body">
            <h5 class="card-title">Kemeja Pria</h5>
            <a href="#" class="btn btn-primary">Rp.25.000</a>
          </div>
        </div>
      </div>
      <div class="card1 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets1/batik pria.jpg" class="card-img-top" alt="Batik">
          <div class="card-body">
            <h5 class="card-title">Batik Pria</h5>
            <a href="#" class="btn btn-primary">Rp.50.000</a>
          </div>
        </div>
      </div>
      <div class="card2 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets1/cargo pants.jpg" class="card-img-top" alt="Cargo Pants">
          <div class="card-body">
            <h5 class="card-title">Cargo Pants Pria</h5>
            <a href="#" class="btn btn-primary">Rp.100.000</a>
          </div>
        </div>
      </div>
      <div class="card2 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets1/celana distro.jpg" class="card-img-top" alt="Celana Distro">
          <div class="card-body">
            <h5 class="card-title">Celana Distro</h5>
            <a href="#" class="btn btn-primary">Rp.20.000</a>
          </div>
        </div>
      </div>
      <div class="card2 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets1/celana chino.jpg" class="card-img-top" alt="Celana Chino">
          <div class="card-body">
            <h5 class="card-title">Celana Chino</h5>
            <a href="#" class="btn btn-primary">Rp.55.000</a>
          </div>
        </div>
      </div>
    </div> 

    <!-- Product 2 -->
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Pakaian Wanita</span>
      </div>
    </nav>

    <div class="row">
      <div class="card1 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets2/gamis syar'i.jpg" class="card-img-top" alt="Gamis">
          <div class="card-body">
            <h5 class="card-title">Gamis Syar'i</h5>
            <a href="#" class="btn btn-primary">Rp.180.000</a>
          </div>
        </div>
      </div>
      <div class="card1 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets2/kemeja.jpg" class="card-img-top" alt="Kemeja">
          <div class="card-body">
            <h5 class="card-title">Kemeja Wanita</h5>
            <a href="#" class="btn btn-primary">Rp.55.000</a>
          </div>
        </div>
      </div>
      <div class="card1 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets2/blouse.jpg" class="card-img-top" alt="Blouse">
          <div class="card-body">
            <h5 class="card-title">Blouse Wanita</h5>
            <a href="#" class="btn btn-primary">Rp.150.000</a>
          </div>
        </div>
      </div>
      <div class="card2 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets2/kulot.jpg" class="card-img-top" alt="Kulot pants">
          <div class="card-body">
            <h5 class="card-title">Kulot Pants</h5>
            <a href="#" class="btn btn-primary">Rp.30.000</a>
          </div>
        </div>
      </div>
      <div class="card2 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets2/rok.jpg" class="card-img-top" alt="Rok">
          <div class="card-body">
            <h5 class="card-title">Rok Wanita</h5>
            <a href="#" class="btn btn-primary">Rp.40.000</a>
          </div>
        </div>
      </div>
      <div class="card2 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets2/baggy pants.jpg" class="card-img-top" alt="Baggy pants">
          <div class="card-body">
            <h5 class="card-title">Baggy pants</h5>
            <a href="#" class="btn btn-primary">Rp.55.000</a>
          </div>
        </div>
      </div>
    </div> 

    <!-- Product 3 -->
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Accessoris</span>
      </div>
    </nav>

    <div class="row">
      <div class="card1 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets3/sepatu.jpg" class="card-img-top" alt="Sepatu">
          <div class="card-body">
            <h5 class="card-title">Sepatu</h5>
            <a href="#" class="btn btn-primary">Rp.100.000</a>
          </div>
        </div>
      </div>
      <div class="card1 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets3/sepatu sandal.jpeg" class="card-img-top" alt="Sepatu Sandal">
          <div class="card-body">
            <h5 class="card-title">Sepatu Sandal</h5>
            <a href="#" class="btn btn-primary">Rp.50.000</a>
          </div>
        </div>
      </div>
      <div class="card1 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets3/tas.jpg" class="card-img-top" alt="Tas">
          <div class="card-body">
            <h5 class="card-title">Tas</h5>
            <a href="#" class="btn btn-primary">Rp.90.000</a>
          </div>
        </div>
      </div>
      <div class="card2 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets3/jam tangan.jpg" class="card-img-top" alt="Jam Tangan">
          <div class="card-body">
            <h5 class="card-title">Jam Tangan</h5>
            <a href="#" class="btn btn-primary">Rp.30.000</a>
          </div>
        </div>
      </div>
      <div class="card2 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets3/topi.jpg" class="card-img-top" alt="Topi">
          <div class="card-body">
            <h5 class="card-title">Topi</h5>
            <a href="#" class="btn btn-primary">Rp.20.000</a>
          </div>
        </div>
      </div>
      <div class="card2 col-md-4 mb-5">
        <div class="card" style="width: 15rem;">
          <img src="assets3/dompet.jpg" class="card-img-top" alt="Dompet">
          <div class="card-body">
            <h5 class="card-title">Dompet</h5>
            <a href="#" class="btn btn-primary">Rp.55.000</a>
          </div>
        </div>
      </div>
    </div> 

    <!-- Akhir Product -->

    <!-- Contact Us -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Us</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>

              <div class="mb-3">
                <label for="saran" class="form-label">Saran</label>
                <textarea class="form-control" id="saran" rows="3"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-facebook"></span></a>
    <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-whatsapp"></span></a>
    <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-instagram"></span></a>

    <!-- Footer -->
    <footer class="footer text-danger text-center pb-3">
      <p>Created code with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https://www.instagram.com/noni_azizah23/" class="text-primary fw-bold">Nofriani Azizaturrohmah</a></p>
    </footer>
    <!-- Akhir Footer -->

  </body>
</html>
