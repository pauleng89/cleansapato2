<?php
// Data Layanan Cuci Sepatu
$brand_name = "clean sapato.";
$whatsapp_number = "6282256650156"; // Ganti dengan nomor WhatsApp toko
$services = [
    [
        "title" => "Fast Cleaning",
        "price" => "30.000",
        "desc" => "Pembersihan cepat pada bagian upper dan midsole untuk penggunaan harian.",
        "icon" => "bi-lightning-charge-fill"
    ],
    [
        "title" => "Deep Cleaning",
        "price" => "50.000",
        "desc" => "Pembersihan menyeluruh hingga ke bagian insole, lacing, dan outsole.",
        "icon" => "bi-stars"
    ],
    [
        "title" => "Unyellowing",
        "price" => "65.000",
        "desc" => "Treatment khusus untuk mengembalikan warna midsole yang menguning.",
        "icon" => "bi-brightness-high-fill"
    ],
    [
        "title" => "Repaint / Restorasi",
        "price" => "100.000+",
        "desc" => "Pewarnaan ulang sepatu yang pudar agar tampak seperti baru kembali.",
        "icon" => "bi-palette-fill"
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $brand_name; ?> - Jasa Perawatan & Cuci Sepatu</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --brand-green: #2B8C6E;
            --brand-green-hover: #226F57;
            --brand-dark: #1E1E1E;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .bg-brand { background-color: var(--brand-green) !important; }
        .text-brand { color: var(--brand-green) !important; }
        .btn-brand {
            background-color: var(--brand-green);
            color: #fff;
            border-radius: 50px;
            padding: 10px 28px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-brand:hover {
            background-color: var(--brand-green-hover);
            color: #fff;
            transform: translateY(-2px);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.5rem;
            color: #fff !important;
            letter-spacing: -0.5px;
        }

        .hero-section {
            background: linear-gradient(135deg, rgba(43, 140, 110, 0.08) 0%, rgba(30, 30, 30, 0.03) 100%);
            padding: 90px 0 70px;
        }

        .service-card {
            border: none;
            border-radius: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 25px rgba(43, 140, 110, 0.15);
        }

        .icon-wrapper {
            width: 65px;
            height: 65px;
            background-color: rgba(43, 140, 110, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .cta-box {
            background-color: var(--brand-dark);
            border-radius: 20px;
            color: #fff;
            padding: 40px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-brand sticky-top py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <!-- Ganti logo.png dengan lokasi file logo Anda -->
                <img src="img/logo.jpg" alt="<?= $brand_name; ?>" width="38" height="38" class="rounded-circle">
                <?= $brand_name; ?>
            </a>
            <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="bi bi-list fs-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3 text-center my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="#keunggulan">Keunggulan</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-semibold" href="#lokasi">Lokasi</a></li>
                </ul>
                <div class="text-center ms-lg-3">
                    <a href="https://wa.me/<?= $whatsapp_number; ?>" target="_blank" class="btn btn-light rounded-pill px-4 fw-bold text-brand">
                        <i class="bi bi-whatsapp me-1"></i> Order Now
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 text-center text-lg-start">
                    <span class="badge bg-brand fs-6 mb-3 px-3 py-2 rounded-pill">Premium Shoe Care</span>
                    <h1 class="display-4 fw-bold mb-3">Bikin Sepatu Kesayangan Kembalikan Tampak Baru.</h1>
                    <p class="lead text-muted mb-4">Perawatan profesional untuk sepatu sneakers, formal, hingga leather. Ditangani dengan teknik khusus dan bahan aman untuk semua jenis material.</p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                        <a href="https://wa.me/<?= $whatsapp_number; ?>?text=Halo%20Clean%20Sapato,%20saya%20mau%20cuci%20sepatu" class="btn btn-brand">Cuci Sekarang</a>
                        <a href="#layanan" class="btn btn-outline-dark rounded-pill px-4">Lihat Harga</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="img/logo.jpg" alt="Logo Clean Sapato" class="img-fluid rounded-circle shadow-lg" style="max-width: 320px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Layanan & Pricing -->
    <section id="layanan" class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-brand">Layanan Kami</h2>
                <p class="text-muted">Pilih paket treatment terbaik sesuai kebutuhan sepatu Anda</p>
            </div>
            <div class="row g-4">
                <?php foreach ($services as $s): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card service-card h-100 p-4">
                        <div class="icon-wrapper">
                            <i class="<?= $s['icon']; ?> fs-3 text-brand"></i>
                        </div>
                        <h4 class="fw-bold mb-2"><?= $s['title']; ?></h4>
                        <p class="text-muted small mb-3"><?= $s['desc']; ?></p>
                        <div class="mt-auto pt-3 border-top d-flex align-items-center justify-content-between">
                            <span class="text-muted small">Mulai dari</span>
                            <span class="fw-bold text-brand fs-5">Rp <?= $s['price']; ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="py-4">
        <div class="container">
            <div class="cta-box text-center text-lg-start d-lg-flex align-items-center justify-content-between">
                <div>
                    <h3 class="fw-bold mb-2">Sepatu Kotor Bikin Nggak Pede?</h3>
                    <p class="text-white-50 mb-lg-0">Kirim sepatu Anda sekarang, siap ambil antar-jemput ke lokasi Anda!</p>
                </div>
                <a href="https://wa.me/<?= $whatsapp_number; ?>" target="_blank" class="btn btn-brand btn-lg">
                    <i class="bi bi-whatsapp me-2"></i> Hubungi WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center text-md-between d-md-flex align-items-center">
            <p class="mb-2 mb-md-0 small">&copy; <?= date('Y'); ?> <strong><?= $brand_name; ?></strong>. All rights reserved.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="https://www.instagram.com/cleansapato?igsi=b2Z1eWVrbTh5ODRl" class="text-white fs-5"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white fs-5"><i class="bi bi-tiktok"></i></a>
                <a href="#" class="text-white fs-5"><i class="bi bi-whatsapp"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
