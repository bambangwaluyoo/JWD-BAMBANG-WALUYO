<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IWA ADYAKSA</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card {
            margin-bottom: 20px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- loader -->
    <div class="bg-loader">
        <div class="loader"></div>
    </div>

    <!-- header -->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fab fa-facebook" style="color: white"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube" style="color: white"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter" style="color: white"></i></a></li>
            </ul>
        </div>
    </div>

    <header>
        <div class="container">
            <h1><a href="index.html" style="color: #148f77">PT. ALAM SEMESTA</a></h1>
            <ul>
                <li class="active"><a href="index.html" style="color: white">HOME</a></li>
                <li><a href="profile.php" style="color: black">PROFILE</a></li>
                <li><a href="visimisi.php" style="color: black">VISI MISI</a></li>
                <li><a href="produk.php" style="color: black">PRODUK KAMI</a></li>
                <li><a href="contact.html" style="color: black">KONTAK KAMI</a></li>
                <li><a href="about.html" style="color: black">ABOUT</a></li>
            </ul>
        </div>
    </header>

    <!-- label -->
    <section class="label">
        <div class="container">
            <img src="img/logo.jpg" width="8%">
            <p>Home / Produk Kami</p>
        </div>
    </section>

    <!-- about -->
    <main>
        <section class="text-center container">
            <h1 class="fw-light">GALERI FOTO</h1>
            <p class="lead" style="text-align: justify;">Selamat datang di Galeri Dokumentasi Partner Bisnis PT.Alam Semesta. Galeri ini merupakan ruang khusus yang didedikasikan untuk menampilkan kerjasama dan kolaborasi kami dengan berbagai partner bisnis yang telah memberikan kontribusi signifikan terhadap kesuksesan perusahaan. Di sini, Anda akan menemukan berbagai dokumentasi, termasuk foto, video, dan artikel yang menggambarkan perjalanan dan pencapaian yang telah kita raih bersama. Setiap item dalam galeri ini adalah bukti nyata dari kemitraan strategis yang telah terjalin, memperlihatkan sinergi dan inovasi yang dihasilkan melalui kolaborasi erat dengan perusahaan, akademisi, dan komunitas global.</p>
            </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <!-- Card 1 -->
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/galeri1.jpeg" width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/galeri2.jpg" width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/galeri3.jpg" width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- More cards... -->
                </div>
            </div>
        </div>
    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".bg-loader").hide();
        });
    </script>
</body>

</html>