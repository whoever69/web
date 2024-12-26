<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV. Rental Mobil</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header-bg {
            height: 300px;
            color: white;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }
        .feature-card img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
   

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">CV. Rental Mobil rakhi arwaa sheva</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cars">Mobil</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
 <!-- Header Section -->
 <header class="header-bg d-flex align-items-center justify-content-center flex-column">
    <h1 class="text-center">Selamat Datang di</h1>
    <h1 class="text-center mt-3">CV. Rental Mobil Rakhi Arwaa Sheva</h1>
</header>

  
    <!-- Cars Section -->
    <section id="cars" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Pilihan Mobil</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card feature-card">
                        <img src="1.jpg" class="card-img-top" alt="Toyota Avanza">
                        <div class="card-body">
                            <h5 class="card-title">Toyota Avanza</h5>
                            <p class="card-text">Harga Sewa: Rp 500.000/hari</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card feature-card">
                        <img src="2.jpg" class="card-img-top" alt="Honda Brio">
                        <div class="card-body">
                            <h5 class="card-title">Honda Brio</h5>
                            <p class="card-text">Harga Sewa: Rp 400.000/hari</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card feature-card">
                        <img src="3.jpg" class="card-img-top" alt="Mitsubishi Pajero">
                        <div class="card-body">
                            <h5 class="card-title">Mitsubishi Pajero</h5>
                            <p class="card-text">Harga Sewa: Rp 800.000/hari</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form method="POST" action="rental.php" >
    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            
                    <button type="submit" class="btn btn-primary">pesan sekarang</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 CV. Rental Mobil. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>