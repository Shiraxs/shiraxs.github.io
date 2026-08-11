<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essence Indonesia - Authentic Taste of Vanilla Indonesia</title>
    <link rel="icon" href="gambar/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        /* --- GLOBAL VARIABLES & RESET --- */
        :root {
            --dark-green: #3B2314;
            /* Cokelat Espresso */
            --light-green: #C68B59;
            /* Karamel / Gold */
            --lime-yellow: #D4A373;
            /* Gold Terang / Cream Mewah */
            --bg-light: #FDFBF7;
            /* Krem Hangat / Ivory */
            --text-dark: #2C1D11;
            /* Cokelat Sangat Gelap */
            --text-gray: #6B5B52;
            /* Cokelat Abu-abu */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            background-color: var(--bg-light);
            line-height: 1.6;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Playfair Display', serif;
        }

        a {
            text-decoration: none;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 5%;
        }

        /* --- TOP BAR & HEADER --- */
        header {
            background-color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 1%;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .logo {
            font-size: 30px;
            font-weight: bold;
            color: var(--dark-green);
            display: flex;
            align-items: center;
            gap: 5px;
            /* Jarak antara logo dan teks diperlebar sedikit */
        }

        .logo img {
            height: 100px;
            /* Ubah dari 40px menjadi 75px agar lebih besar */
            width: auto;
            /* Menjaga agar proporsi/rasio gambar tidak gepeng */
            object-fit: contain;
            /* Memastikan gambar tidak terpotong */
        }

        nav {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        nav a {
            color: var(--text-dark);
            font-weight: 500;
            font-size: 14px;
            transition: 0.3s;
        }

        nav a:hover,
        nav a.active {
            color: var(--light-green);
        }

        .btn-consult {
            background-color: var(--light-green);
            color: white !important;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
        }

        /* --- STYLING HALAMAN UTAMA (INDEX) --- */
        .hero {
            background: linear-gradient(rgba(26, 59, 43, 0.5), rgba(26, 59, 43, 0.8)), url('https://images.unsplash.com/photo-1596646505708-7243c2005a96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover;
            padding: 120px 5%;
            color: white;
            position: relative;
        }

        .hero h1 {
            font-size: 60px;
            line-height: 1.1;
            margin-bottom: 20px;
            max-width: 600px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            max-width: 550px;
            color: #eee;
        }

        .btn-learn {
            background-color: var(--light-green);
            color: white;
            padding: 15px 35px;
            border-radius: 30px;
            font-weight: 600;
            display: inline-block;
        }

        .hero-stats {
            display: flex;
            gap: 50px;
            margin-top: 50px;
        }

        .hero-stats h3 {
            font-family: 'Inter', sans-serif;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .hero-stats p {
            font-size: 13px;
            color: #ddd;
            max-width: 150px;
        }

        .who-we-are {
            padding: 100px 5%;
        }

        .who-grid {
            display: flex;
            gap: 50px;
            align-items: center;
        }

        .who-text {
            flex: 1;
        }

        .subtitle {
            color: var(--light-green);
            font-style: italic;
            font-weight: 600;
            margin-bottom: 10px;
            display: block;
        }

        .who-text h2 {
            font-size: 42px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .who-text p {
            color: var(--text-gray);
            margin-bottom: 30px;
        }

        .who-images {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .img-tall {
            grid-row: span 2;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }

        .yellow-card {
            background-color: var(--lime-yellow);
            padding: 30px;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .yellow-card h4 {
            font-family: 'Inter', sans-serif;
            font-size: 18px;
            margin: 10px 0;
        }

        .yellow-card p {
            font-size: 13px;
            color: #444;
        }

        .img-small {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 15px;
        }

        .features-3 {
            display: flex;
            gap: 20px;
            margin-top: 80px;
        }

        .feature-box {
            background: #f5f7f5;
            padding: 30px;
            border-radius: 15px;
            flex: 1;
            display: flex;
            gap: 15px;
        }

        .feature-icon {
            background: var(--light-green);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            flex-shrink: 0;
        }

        .feature-box h4 {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .feature-box p {
            font-size: 13px;
            color: var(--text-gray);
        }

        .video-banner-section {
            padding: 50px 5%;
            background-color: var(--dark-green);
        }

        .video-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('https://images.unsplash.com/photo-1505963507020-f47285c54d19?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80') center/cover;
            height: 400px;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .play-btn {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            border: 1px solid white;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .video-banner h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .solutions {
            padding: 100px 5%;
            background-color: var(--bg-light);
            text-align: center;
        }

        .solutions-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            text-align: left;
            margin-bottom: 50px;
        }

        .solutions-header h2 {
            font-size: 42px;
            max-width: 400px;
        }

        .solutions-header p {
            max-width: 400px;
            color: var(--text-gray);
        }

        .solutions-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            text-align: left;
        }

        .sol-card {
            padding: 30px;
            border-radius: 20px;
            color: white;
            display: flex;
            flex-direction: column;
        }

        .sol-card.yellow {
            background-color: var(--lime-yellow);
            color: var(--text-dark);
        }

        .sol-card.green {
            background-color: var(--dark-green);
        }

        .sol-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin: 20px 0;
        }

        .sol-card h3 {
            font-family: 'Inter', sans-serif;
            font-size: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sol-card p {
            font-size: 14px;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .btn-card {
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 13px;
            align-self: flex-start;
        }

        .yellow .btn-card {
            background-color: var(--dark-green);
            color: white;
        }

        .green .btn-card {
            background-color: var(--light-green);
            color: white;
        }

        /* --- STYLING FOOTER --- */
        .footer-social {
            background-color: var(--light-green);
            text-align: center;
            padding: 15px;
            color: white;
            font-weight: bold;
        }

        footer {
            background-color: var(--dark-green);
            color: white;
            padding: 60px 5%;
            display: flex;
            justify-content: space-between;
            gap: 40px;
            flex-wrap: wrap;
        }

        .footer-col {
            flex: 1;
            min-width: 200px;
        }

        .footer-col p {
            font-size: 14px;
            color: #ccc;
            margin-top: 15px;
        }

        .footer-col h4 {
            font-family: 'Inter', sans-serif;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            color: #ccc;
            font-size: 14px;
            transition: 0.3s;
        }

        .footer-col ul li a:hover {
            color: var(--lime-yellow);
        }

        .newsletter input {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            border: none;
            margin-bottom: 10px;
        }

        .newsletter button {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            border: none;
            background-color: var(--light-green);
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .wa-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #25d366;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        /* --- WHY CHOOSE US (PENJELASAN PRODUK) --- */
        .why-choose {
            padding: 100px 5%;
            background-color: var(--dark-green);
            color: white;
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
        }

        .why-col {
            flex: 1;
            min-width: 280px;
        }

        .why-col .subtitle {
            color: var(--light-green);
        }

        .why-col h2 {
            font-size: 42px;
            margin: 10px 0 40px;
            line-height: 1.2;
        }

        .why-highlight {
            border-left: 3px solid var(--light-green);
            padding-left: 20px;
        }

        .why-highlight h4 {
            font-family: 'Inter', sans-serif;
            font-size: 18px;
            margin-bottom: 10px;
            color: #fff;
        }

        .why-highlight p,
        .why-list-item p {
            font-size: 14px;
            color: #dcdcdc;
            line-height: 1.6;
        }

        .why-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .why-list-item {
            margin-bottom: 25px;
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            padding-top: 20px;
        }

        .why-list-item:first-child {
            border-top: none;
            padding-top: 0;
        }

        .why-list-item h4 {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            margin-bottom: 10px;
            color: #fff;
        }

        /* --- SPECIFICATIONS (SPESIFIKASI PRODUK) --- */
        .specifications {
            padding: 100px 5%;
            background-color: var(--bg-light);
            text-align: center;
        }

        .specifications .subtitle {
            justify-content: center;
            display: flex;
        }

        .specifications h2 {
            font-size: 38px;
            margin-bottom: 60px;
        }

        .spec-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 60px 20px;
        }

        .spec-item {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .spec-icon {
            font-size: 36px;
            color: #ccc;
            margin-bottom: 15px;
        }

        .spec-item span {
            font-size: 13px;
            color: var(--text-gray);
            margin-bottom: 5px;
            font-weight: 600;
        }

        .spec-item h4 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: var(--text-dark);
            margin: 0;
        }

        @media (max-width: 768px) {
            .spec-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .why-choose {
                flex-direction: column;
            }

            .solutions-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <!-- HEADER / NAVIGASI -->
    <header>
        <a href="index.php" class="logo">
            <img src="gambar/logo.png" alt="Essence Indonesia Logo">
            Essence Indonesia
        </a>
        <nav>
            <a href="index.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="product.php">Product</a>
            <a href="blog.php">Blog</a>
            <a href="contact.php">Contact</a>
            <a href="contact.php" class="btn-consult">Free Consultations</a>
        </nav>
    </header>