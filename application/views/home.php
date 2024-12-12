<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Poliklinik</title>
    <!-- Menggunakan Bootstrap CDN dan Font Awesome untuk icon -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        /* Gambar Latar Belakang dengan Efek Parallax */
        .hero-section {
            background: url('https://via.placeholder.com/1920x1080?text=') center center no-repeat;
            background-size: cover;
            height: 100vh;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            position: relative;
            background-attachment: fixed;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .navbar {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 999;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .navbar-brand {
            font-weight: bold;
        }

        .card-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .card {
            border: none;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-title {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .btn-custom {
            width: 100px;
            font-size: 1.2rem;
            border-radius:200px;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* Animasi fade-in untuk konten */
        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Poliklinik</a>
            <div class="ml-auto">
                <a href="<?= site_url('login') ?>" class="btn btn-primary btn-custom">Login</a>
                <a href="<?= site_url('pasien/register') ?>" class="btn btn-outline-primary btn-custom ml-2">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section fade-in">
        <h1>Selamat Datang di Poliklinik Kami</h1>
        <p>Solusi Kesehatan Terpercaya di Tangan Anda</p>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Poliklinik. All Rights Reserved.</p>
    </div>

    <!-- Script untuk Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
