<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Athena Florist</title>
    
    <!-- Link ke Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Love+Ya+Like+A+Sister&display=swap" rel="stylesheet">
    
    <style>
        /* Gaya Umum */
        body {
            font-family: 'Love Ya Like A Sister', sans-serif;
            background-color: #fdfdfd;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Header */
        header {
            background-color: #f8bbd0; /* Header Merah Muda */
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: 'Italianno', cursive;
        }
        header h1 {
            margin: 0;
            font-size: 48px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-family: 'Love Ya Like A Sister', sans-serif;
        }

        /* Hero Section */
        .hero {
            background-image: url('Background.jpeg');
            background-size: cover;
            background-position: center bottom;
            height: 600px;
            color: rgb(235, 153, 153);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 50px;
        }
        .hero h2 {
            font-size: 48px;
            font-family: 'Italianno', cursive;
        }
        .hero p {
            font-size: 24px;
            font-family: 'Love Ya Like A Sister', sans-serif;
        }
        .hero .btn {
            background-color: #e91e63;
            padding: 15px 30px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 20px;
            font-family: 'Love Ya Like A Sister', sans-serif;
        }
        .hero .btn-secondary {
            background-color: white;
            color: #e91e63;
        }

        /* Fitur Section */
        .feature-section {
            display: flex;
            flex-direction: column; /* Mengatur fitur menjadi kolom */
            align-items: center; /* Mengatur konten ke tengah */
            padding: 50px;
            background-color: #f8bbd0; /* Latar Belakang Pink untuk Fitur */
        }
        .feature-section h2 {
            margin-bottom: 30px;
            color: #e91e63; /* Judul Section Merah Muda */
            font-family: 'Love Ya Like A Sister', sans-serif;
            text-align: center;
        }
        .feature-cards {
            display: flex;
            justify-content: space-around; /* Menjajarkan kartu secara horizontal */
            flex-wrap: wrap; /* Membungkus jika tidak muat */
        }
        .feature-card {
            background-color: white; /* Latar belakang putih untuk kartu */
            color: #333;
            text-align: center;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            width: 250px; /* Lebar tetap untuk semua kartu */
            margin: 10px; /* Spasi antar kartu */
            position: relative;
        }
        .feature-card:hover {
            transform: translateY(-5px); /* Mengangkat kartu saat hover */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        .feature-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
            font-family: 'Love Ya Like A Sister', sans-serif;
        }
        .feature-card p {
            font-size: 14px;
            font-family: 'Love Ya Like A Sister', sans-serif;
            color: #666;
        }

        /* Produk Section */
        .product-section {
            padding: 50px;
            background-color: #f4f4f4;
        }
        .product-section h2 {
            text-align: center;
            margin-bottom: 50px;
            color: #e91e63; /* Judul Section Merah Muda */
            font-family: 'Love Ya Like A Sister', sans-serif;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .product-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .product-card img {
            width: 100%;
            border-radius: 10px;
        }
        .product-card h3 {
            font-size: 18px;
            margin: 10px 0;
            color: black;
        }
        .product-card p {
            font-size: 16px;
            color: black;
        }
        .product-card .price {
            font-size: 18px;
            color: #e91e63;
        }

        /* Footer */
        footer {
            background-color: #f8bbd0;
            color: white;
            padding: 20px;
            text-align: left;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-left {
            flex: 1;
        }

        .footer-left h2 {
            margin: 0;
            font-family: 'Italianno', cursive;
            font-size: 32px;
        }

        .footer-left p {
            margin: 5px 0;
            font-size: 16px;
        }

        .footer-right {
            flex: 1;
            text-align: right;
        }

        .footer-right h3 {
            margin: 0;
            font-size: 20px;
        }

        .footer-right p {
            margin: 5px 0;
            font-size: 16px;
        }

        .social-media {
            margin-top: 10px;
        }

        .social-media a {
            margin-left: 10px;
        }

        .social-media img {
            width: 24px;
            height: 24px;
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <h1>Athena Florist</h1>
    <nav>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="produk.html">Produk</a></li>
            <li><a href="custom_order.html">Pemesanan</a></li>
            <li><a href="tentangkami.html">Tentang Kami</a></
            li>
            <li><a href="kontak.html">Kontak</a></li>
        </ul>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero">
    <div>
        <h2>Bunga Segar, Pesona Sempurna</h2>
        <p>Beli bunga untuk setiap momen spesial Anda</p>
        <a href="produk.html" class="btn">Lihat Produk</a>
        <a href="kontak.html" class="btn btn-secondary">Hubungi Kami</a>
    </div>
</section>

<!-- Fitur Section -->
<section class="feature-section">
    <h2>Layanan Unggulan Kami</h2>    
    <div class="feature-cards">
        <div class="feature-card">
            <h3>Pengiriman Cepat</h3>
            <p>Kami mengirim bunga Anda dengan cepat, sehingga tetap segar saat diterima.</p>
        </div>
        <div class="feature-card">
            <h3>Produk Berkualitas</h3>
            <p>Bunga-bunga pilihan dengan kualitas terbaik untuk setiap momen istimewa.</p>
        </div>
        <div class="feature-card">
            <h3>Hadiah Personalisasi</h3>
            <p>Beri sentuhan personal pada bunga Anda dengan kartu ucapan atau dekorasi khusus.</p>
        </div>
    </div>
</section>

<!-- Produk Section -->
<section class="product-section">
    <h2>Produk Terbaik Kami</h2>
    <div class="product-grid">
        <div class="product-card">
            <img src="gambar/mawar.jpeg" alt="Mawar">
            <h3>Bunga Mawar</h3>
            <p>Keindahan mawar merah yang mempesona untuk menyampaikan cinta Anda.</p>
            <p class="price">Rp. 80.000</p>
        </div>
        <div class="product-card">
            <img src="gambar/Wedding Stand.jpeg" alt="Wedding Stand">
            <h3>Wedding Stand Flower</h3>
            <p>Wedding stand, sempurna untuk menghiasi pernikahanmu.</p>
            <p class="price">Rp. 100.000</p>
        </div>
        <div class="product-card">
            <img src="gambar/lily.jpeg" alt="Lily">
            <h3>Bunga Lily</h3>
            <p>Pesona elegan bunga lily putih yang menenangkan.</p>
            <p class="price">Rp. 70.000</p>
        </div>
        <div class="product-card">
            <img src="gambar/matahari.jpeg" alt="Matahari">
            <h3>Bunga Matahari</h3>
            <p>Pesona elegan bunga matahari yang ceria.</p>
            <p class="price">Rp. 55.000</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-left">
            <h2>Athena Florist</h2>
            <p>Alamat: Jl. Bunga No. 123, Jakarta, Indonesia</p>
        </div>
        <div class="footer-right">
            <h3>Kontak Kami</h3>
            <p>Email: info@athenaflorist.com</p>
            <p>Telepon: +62 812-3456-7890</p>
            <div class="social-media">
                <a href="#" aria-label="Facebook"><img src="gambar/facebook logo.jpg" alt="Facebook" /></a>
                <a href="#" aria-label="Instagram"><img src="gambar/instagram logo.png" alt="Instagram" /></a>
                <a href="#" aria-label="Twitter"><img src="gambar/twitter logo.png" alt="Twitter" /></a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
