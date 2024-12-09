<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="style.css?v=<?= filemtime('style.css') ?>">
</head>
<body>
    <div class="container">
        <nav>
            <a href="home.php">Home</a>
            <a href="dataBarang.php">Data Barang</a>
            <a href="dataCustomer.php">Data Customer</a>
        </nav>

        <h1>Selamat Datang di Sistem Pencatatan Barang</h1>
        <p>Ini adalah halaman utama dari aplikasi. Gunakan menu navigasi di atas untuk mengelola data barang atau data pelanggan.</p>

        <div class="info-section">
            <h2>Fitur Utama</h2>
            <ul>
                <li>Manajemen data barang</li>
                <li>Manajemen data pelanggan</li>
            </ul>
        </div>

        <div class="cta-section">
            <h2>Mulai Sekarang!</h2>
            <p>Pilih menu yang tersedia untuk mengelola data Anda dengan mudah dan cepat.</p>
        </div>
    </div>
</body>
</html>
