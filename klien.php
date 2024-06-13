<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IWA ADYAKSA</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Custom CSS for Client List */
        .client-list {
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
            justify-items: center;
        }

        .client-item {
            margin-bottom: 20px;
            /* Added margin to space out client items */
        }

        .client-logo {
            width: 100%;
            /* Ensure images fill their container */
            height: auto;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .client-logo:hover {
            opacity: 1;
        }
    </style>
</head>

<body>
    <!-- Loader -->
    <div class="bg-loader">
        <div class="loader"></div>
    </div>

    <!-- Header -->
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
            <ul class="nav">
                <li class="nav-item"><a class="nav-link active" href="index.html" style="color: white">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="profile.php" style="color: black">PROFILE</a></li>
                <li class="nav-item"><a class="nav-link" href="visimisi.php" style="color: black">VISI MISI</a></li>
                <li class="nav-item"><a class="nav-link" href="produk.php" style="color: black">PRODUK KAMI</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html" style="color: black">KONTAK KAMI</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html" style="color: black">ABOUT</a></li>
            </ul>
        </div>
    </header>

    <!-- Label -->
    <section class="label">
        <div class="container">
            <img src="img/logo.jpg" width="8%" alt="Logo PT. ALAM SEMESTA">
            <p>Home / Klien Kami</p>
        </div>
    </section>

    <!-- About -->
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">DAFTAR KLIEN</h1>
                    <p class="lead" style="text-align: justify;">
                        Berikut adalah beberapa klien kami yang telah menjadi bagian dari perjalanan kami dalam menciptakan solusi inovatif dan berkelanjutan.
                    </p>
                </div>
            </div>
        </section>

        <!-- Client List -->
        <section class="clients">
            <div class="container">
                <ul class="client-list">
                    <li class="client-item"> PT. PENDAKIAN
                        <img class="client-logo" src="img/klien1.jpg" alt="Client 1">
                    </li>
                    <li class="client-item">PT. INSAN SEJATI
                        <img class="client-logo" src="img/klien2.jpg" alt="Client 2">
                    </li>
                    <li class="client-item">PT. PENCARI CINTA
                        <img class="client-logo" src="img/klien3.jpg" alt="Client 3">
                    </li>
                    <li class="client-item">PT. ALIGATOR GRUB
                        <img class="client-logo" src="img/klien4.jpg" alt="Client 4">
                    </li>
                    <li class="client-item">PT. BURUH TANI
                        <img class="client-logo" src="img/klien5.jpg" alt="Client 5">
                    </li>
                    <li class="client-item">PT. TAMPAN BERANI
                        <img class="client-logo" src="img/klien6.jpg" alt="Client 6">
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            // Hide loader once the page is fully loaded
            document.querySelector(".bg-loader").style.display = "none";
        });
    </script>
</body>

</html>