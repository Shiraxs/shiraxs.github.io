<?php include 'header.php'; ?>

<!-- CSS KHUSUS HALAMAN PROFILE -->
<style>
    /* --- 1. PROFILE HERO BANNER --- */
    .profile-hero {
        background: linear-gradient(rgba(26, 59, 43, 0.6), rgba(26, 59, 43, 0.8)), url('https://images.unsplash.com/photo-1596646505708-7243c2005a96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover;
        padding: 100px 5%;
        color: white;
    }

    .profile-hero h1 {
        font-size: 54px;
        margin-bottom: 10px;
        font-family: 'Playfair Display', serif;
    }

    .profile-hero p {
        font-size: 18px;
        color: #e2e2e2;
        max-width: 600px;
        font-family: 'Inter', sans-serif;
    }

    /* --- 2. EMPOWERING FARMERS SECTION --- */
    .farmers-section {
        padding: 100px 5%;
        background-color: var(--bg-light);
    }

    .farmers-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .farmers-left h2 {
        font-size: 38px;
        line-height: 1.2;
        margin-bottom: 20px;
        color: var(--text-dark);
    }

    .farmers-left-img {
        width: 100%;
        height: 350px;
        object-fit: cover;
        border-radius: 20px;
        margin-bottom: 20px;
    }

    .farmers-left p {
        font-size: 14px;
        color: var(--text-gray);
        line-height: 1.7;
    }

    .farmers-right h3 {
        font-size: 26px;
        font-family: 'Playfair Display', serif;
        margin-bottom: 15px;
        color: var(--text-dark);
    }

    .farmers-right p {
        font-size: 14px;
        color: var(--text-gray);
        line-height: 1.7;
        margin-bottom: 25px;
    }

    .btn-group {
        display: flex;
        gap: 15px;
        margin-bottom: 40px;
    }

    .btn-outline {
        background: transparent;
        border: 1px solid var(--light-green);
        color: var(--light-green);
        padding: 10px 25px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        transition: 0.3s;
    }

    .btn-outline:hover {
        background: var(--light-green);
        color: white;
    }

    .farmers-sub-images {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .farmers-sub-images img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 15px;
    }

    /* --- 3. MEET OUR TEAM SECTION --- */
    .team-section {
        padding: 100px 5%;
        background-color: #f7f9f8;
        text-align: center;
    }

    .team-section .subtitle {
        color: var(--light-green);
        font-style: italic;
        font-weight: 600;
        display: block;
        margin-bottom: 10px;
        font-size: 14px;
    }

    .team-section h2 {
        font-size: 38px;
        margin-bottom: 60px;
        color: var(--text-dark);
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
        text-align: left;
    }

    .team-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
        display: flex;
        flex-direction: column;
    }

    .team-card img {
        width: 100%;
        height: 280px;
        object-fit: cover;
    }

    .team-info {
        padding: 20px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        justify-content: space-between;
    }

    .team-info h4 {
        font-family: 'Inter', sans-serif;
        font-size: 18px;
        margin-bottom: 5px;
        color: var(--text-dark);
    }

    .team-info p {
        font-size: 13px;
        color: var(--text-gray);
        margin-bottom: 20px;
    }

    .social-links {
        display: flex;
        gap: 8px;
    }

    .social-links a {
        width: 28px;
        height: 28px;
        background: var(--light-green);
        color: white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 12px;
        text-decoration: none;
        transition: 0.3s;
    }

    .social-links a:hover {
        background: var(--dark-green);
    }

    /* Responsif untuk layar kecil / mobile */
    @media (max-width: 900px) {
        .farmers-grid {
            grid-template-columns: 1fr;
        }

        .team-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .team-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- 1. PROFILE HERO BANNER -->
<section class="profile-hero" style="background: linear-gradient(rgba(59, 35, 20, 0.6), rgba(59, 35, 20, 0.8)), url('gambar/hero-profile.jpg') center/cover;">
    <h1>Profile</h1>
    <p>Pure Vanilla. Rich Heritage. Our Experts Driving Authentic Indonesian Vanilla Forward.</p>
</section>

<!-- 2. EMPOWERING FARMERS SECTION -->
<section class="farmers-section container">
    <div class="farmers-grid">
        <!-- Kolom Kiri -->
        <div class="farmers-left">
            <h2>Empowering Vanilla Farmers Behind Our Heritage</h2>
            <img src="gambar/vanilla-plantation.jpg" alt="Vanilla Farmer" class="farmers-left-img">
            <p>Our farmers use sustainable and responsible farming practices, ensuring that every vanilla orchid is grown in harmony with nature. Evolving from a trusted family business, the tradition of meticulous hand-pollination and natural curing is reflected in the quality of the products we deliver.</p>
        </div>

        <!-- Kolom Kanan -->
        <div class="farmers-right">
            <h3>Sustainably grown, responsibly sourced.</h3>
            <p>Our vanilla beans are cultivated using methods that respect the tropical environment of Indonesia. We are committed to direct sourcing—eliminating unnecessary intermediaries to work directly with local farmers who share our values of craftsmanship, strict quality control, and integrity.</p>

            <div class="btn-group">
                <a href="contact.php" class="btn-consult">Contact Us</a>
                <a href="product.php" class="btn-outline">View Products</a>
            </div>

            <div class="farmers-sub-images">
                <img src="gambar/vanilla-flower.jpg" alt="Vanilla Orchid">
                <img src="gambar/vanilla-curing.jpg" alt="Curing Vanilla">
            </div>
        </div>
    </div>
</section>

<!-- 3. MEET OUR TEAM SECTION -->
<section class="team-section">
    <span class="subtitle">Meet Our Team</span>
    <h2 style="font-family: 'Playfair Display', serif; font-size: 38px;">Meet the Visionaries Behind Our<br>Strict Quality Control</h2>

    <!-- Bagian grid tim sama persis dengan aslinya -->
    <div class="team-grid container">
        <!-- Paste block anggota tim (Budi Santoso dkk) dari file asli di sini -->
        <!-- Karena tidak ada perubahan nama khusus dari PDF, Anda dapat menggunakan data template asli Anda -->
    </div>
</section>

<?php include 'footer.php'; ?>