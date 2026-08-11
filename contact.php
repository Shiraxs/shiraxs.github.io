<?php include 'header.php'; ?>

<!-- CSS KHUSUS HALAMAN CONTACT -->
<style>
    /* --- 1. CONTACT HERO BANNER --- */
    .contact-hero {
        background: linear-gradient(rgba(44, 29, 17, 0.65), rgba(44, 29, 17, 0.75)), url('./gambar/gcontact.png') center/cover;
        padding: 100px 5%;
        color: white;
    }

    .contact-hero h1 {
        font-size: 54px;
        margin-bottom: 10px;
        font-family: 'Playfair Display', serif;
    }

    .contact-hero p {
        font-size: 16px;
        color: #e2e2e2;
        max-width: 600px;
        font-family: 'Inter', sans-serif;
    }

    /* --- 2. INFO CARDS SECTION (4 Kolom) --- */
    .info-cards-section {
        padding: 80px 5%;
        background-color: var(--bg-light);
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        text-align: center;
    }

    .info-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
    }

    /* Garis pemisah antar kolom (opsional agar mirip referensi) */
    .info-item:not(:last-child):after {
        content: '';
        position: absolute;
        right: -15px;
        top: 20%;
        height: 60%;
        width: 1px;
        background-color: #eee;
    }

    .info-icon {
        width: 55px;
        height: 55px;
        background: var(--light-green);
        color: white;
        border-radius: 14px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 22px;
        margin-bottom: 20px;
        box-shadow: 0 4px 10px rgba(137, 176, 62, 0.3);
    }

    .info-item h4 {
        font-family: 'Inter', sans-serif;
        font-size: 18px;
        margin-bottom: 12px;
        color: var(--text-dark);
        font-weight: 700;
    }

    .info-item p {
        font-size: 13px;
        color: var(--text-gray);
        line-height: 1.6;
        margin: 0;
    }

    /* --- 3. MAP & FORM SECTION --- */
    .map-form-section {
        padding: 0 5% 100px;
        background-color: var(--bg-light);
    }

    .map-form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        border: 1px solid #eaeaea;
    }

    .map-container {
        width: 100%;
        height: 100%;
        min-height: 450px;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    .form-container {
        background-color: var(--dark-green);
        padding: 50px;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-subtitle {
        color: var(--light-green);
        font-size: 13px;
        font-weight: 600;
        font-style: italic;
        display: block;
        margin-bottom: 5px;
    }

    .form-container h2 {
        font-size: 32px;
        margin-bottom: 30px;
        font-family: 'Playfair Display', serif;
        line-height: 1.2;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
    }

    .form-group label {
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 8px;
        color: #ddd;
    }

    .form-control {
        width: 100%;
        padding: 14px 16px;
        border-radius: 8px;
        border: none;
        background-color: #f4f6f5;
        color: var(--text-dark);
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        outline: none;
        transition: 0.3s;
    }

    .form-control:focus {
        background-color: white;
        box-shadow: 0 0 0 2px var(--light-green);
    }

    textarea.form-control {
        resize: vertical;
        min-height: 120px;
    }

    .btn-submit {
        background-color: var(--light-green);
        color: white;
        padding: 15px;
        border-radius: 8px;
        border: none;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
        transition: background 0.3s;
        width: 100%;
        margin-top: 10px;
    }

    .btn-submit:hover {
        background-color: #7a9c32;
    }

    /* Responsif untuk layar kecil / mobile */
    @media (max-width: 900px) {
        .info-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .info-item:not(:last-child):after {
            display: none;
        }

        .map-form-grid {
            grid-template-columns: 1fr;
        }

        .form-container {
            padding: 30px;
        }
    }

    @media (max-width: 600px) {
        .info-grid {
            grid-template-columns: 1fr;
        }

        .form-row {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- 1. CONTACT HERO BANNER -->
<section class="contact-hero" style="background: linear-gradient(rgba(44, 29, 17, 0.65), rgba(44, 29, 17, 0.75)), url('./gambar/gcontact.png') center/cover;
        padding: 100px 5%;">
    <h1>Contact</h1>
    <p>Connect With Essence Indonesia For Premium Vanilla Products</p>
</section>

<!-- 2. INFO CARDS SECTION -->
<section class="info-cards-section">
    <div class="info-grid container">
        <!-- Head Office -->
        <div class="info-item">
            <div class="info-icon">🌐</div>
            <h4>Website</h4>
            <p>www.essenceindonesia.com</p>
        </div>

        <!-- Email Support -->
        <div class="info-item">
            <div class="info-icon">✉️</div>
            <h4>Email Support</h4>
            <p>essenceindonesia@gmail.com</p>
        </div>

        <!-- Let's Talk -->
        <div class="info-item">
            <div class="info-icon">📞</div>
            <h4>Let's Talk (Iwan)</h4>
            <p>Phone/WA: (+62) 89-669-241-131</p>
        </div>

        <!-- Social Media -->
        <div class="info-item">
            <div class="info-icon">📱</div>
            <h4>Social Media</h4>
            <p>IG: essence.indonesia<br>FB: essenceindonesia</p>
        </div>
    </div>
</section>

<!-- 3. FORM SECTION -->
<!-- Gunakan form asli Anda di sini. Cukup ubah teks H2 jika perlu -->
<section class="map-form-section" style="padding-top: 50px;">
    <div class="map-form-grid container">
        <div class="map-container">
            <!-- Peta Bebas, atau biarkan peta aslinya -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18..." allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="form-container">
            <span class="form-subtitle">Get in Touch</span>
            <h2 style="font-family: 'Playfair Display', serif; font-size: 32px;">Contact Essence Indonesia for Inquiries & B2B Orders</h2>

            <!-- Paste Form HTML asli Anda di sini -->
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>