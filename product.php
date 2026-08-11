<?php include 'header.php'; ?>

<!-- CSS KHUSUS HALAMAN PRODUCT -->
<style>
    /* --- 1. PRODUCT HERO BANNER --- */
    .product-hero {
        background: linear-gradient(rgba(26, 59, 43, 0.6), rgba(26, 59, 43, 0.8)), url('https://images.unsplash.com/photo-1596646505708-7243c2005a96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover;
        padding: 100px 5%;
        color: white;
    }

    .product-hero h1 {
        font-size: 54px;
        margin-bottom: 10px;
        font-family: 'Playfair Display', serif;
    }

    .product-hero p {
        font-size: 16px;
        color: #e2e2e2;
        max-width: 600px;
        font-family: 'Inter', sans-serif;
    }

    /* --- 2. PRODUCT CATALOG SECTION --- */
    .catalog-section {
        padding: 100px 5%;
        background-color: var(--bg-light);
        text-align: center;
    }

    .catalog-section h2 {
        font-size: 38px;
        margin-bottom: 60px;
        color: var(--text-dark);
        font-family: 'Playfair Display', serif;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        text-align: left;
    }

    .product-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
        display: flex;
        flex-direction: column;
        padding: 25px;
        border: 1px solid #eaeaea;
        transition: transform 0.3s;
    }

    .product-card:hover {
        transform: translateY(-5px);
    }

    .product-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 20px;
    }

    .product-badge {
        color: var(--light-green);
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 8px;
        display: block;
    }

    .product-card h3 {
        font-family: 'Inter', sans-serif;
        font-size: 20px;
        margin-bottom: 12px;
        color: var(--text-dark);
    }

    .product-card p {
        font-size: 13px;
        color: var(--text-gray);
        line-height: 1.6;
        margin-bottom: 25px;
        flex-grow: 1;
    }

    .btn-detail {
        background-color: var(--light-green);
        color: white;
        padding: 10px 20px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 13px;
        text-decoration: none;
        display: inline-block;
        text-align: center;
        transition: 0.3s;
        align-self: flex-start;
    }

    .btn-detail:hover {
        background-color: #7a9c32;
    }

    /* --- 3. PARTNER LOGOS SECTION --- */
    .partners-section {
        padding: 60px 5%;
        background-color: white;
        text-align: center;
        border-top: 1px solid #eee;
    }

    .partners-grid {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
        flex-wrap: wrap;
        opacity: 0.7;
    }

    .partner-logo {
        font-weight: 800;
        font-size: 20px;
        letter-spacing: 1px;
        color: #555;
        text-transform: uppercase;
    }

    /* Responsif untuk layar kecil / mobile */
    @media (max-width: 900px) {
        .product-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .product-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- 1. PRODUCT HERO BANNER -->
<section class="product-hero" style="background: linear-gradient(rgba(44, 29, 17, 0.65), rgba(44, 29, 17, 0.75)), url('gambar/gbg.png') center/cover; padding: 120px 5%; text-align: left; color: white;">
    <h1 style="font-family: 'Playfair Display', serif; font-size: 54px; margin-bottom: 15px;">Our Product</h1>
    <p style="font-family: 'Inter', sans-serif; font-size: 16px; color: #e2e2e2; max-width: 600px; line-height: 1.6;">Premium Vanilla Derivatives Supporting Global Markets with Authentic Indonesian Quality</p>
</section>

<!-- 2. PRODUCT CATALOG SECTION -->
<section class="catalog-section">
    <h2 style="font-family: 'Playfair Display', serif; font-size: 38px;">Projects Demonstrating Essence Indonesia's Expertise</h2>

    <div class="product-grid container">
        <!-- Produk 1 -->
        <div class="product-card">
            <span class="product-badge">HS Code: 0905.10</span>
            <img src="gambar/pvanila.png" alt="Planifolia Vanilla">
            <h3>Planifolia Vanilla</h3>
            <p>Strong, classic vanilla with a slightly bitter aftertaste and high vanillin content (2% - 3%). Dark brown to black, glossy beans. Ideal for baking, ice cream, chocolate, and extract.</p>
            <a href="contact.php" class="btn-detail">Inquire Now</a>
        </div>

        <!-- Produk 2 -->
        <div class="product-card">
            <span class="product-badge">HS Code: 0905.10</span>
            <img src="gambar/tvanila.png" alt="Tahitensis Vanilla">
            <h3>Tahitensis Vanilla</h3>
            <p>Lighter and sweeter with floral & fruity notes. Softer, more flexible pods. Commonly used in perfumes, gourmet desserts, and premium pastries.</p>
            <a href="contact.php" class="btn-detail">Inquire Now</a>
        </div>

        <!-- Produk 3 -->
        <div class="product-card">
            <span class="product-badge">HS Code: 2106.90.99</span>
            <img src="gambar/gcvanila.png" alt="Crystallized Vanilla">
            <h3>Crystallized Vanilla</h3>
            <p>Firm and glossy, lightly frosted with natural vanillin (>2.5%). 100% pure and natural. Perfect for artisan desserts, chocolates, and culinary displays.</p>
            <a href="contact.php" class="btn-detail">Inquire Now</a>
        </div>

        <!-- Produk 4 -->
        <div class="product-card">
            <span class="product-badge">HS Code: 0905.20.00</span>
            <img src="gambar/gcaviar.png" alt="Vanilla Caviar">
            <h3>Vanilla Caviar</h3>
            <p>Deep black with a natural glossy sheen. Intense, aromatic, and naturally sweet (2% Vanillin). Best for pastry toppings, ice cream, sauces, and bakery decoration.</p>
            <a href="contact.php" class="btn-detail">Inquire Now</a>
        </div>

        <!-- Produk 5 -->
        <div class="product-card">
            <span class="product-badge">HS Code: 0905.20.00</span>
            <img src="gambar/gseed.png" alt="Dried Vanilla Seeds">
            <h3>Dried Vanilla Seeds</h3>
            <p>Fine, dry, free-flowing seeds with low moisture (<10%). Concentrated aromatic flavor. Ideal for baking, confectionery, chocolate, and spice blends.</p>
                    <a href="contact.php" class="btn-detail">Inquire Now</a>
        </div>

        <!-- Produk 6 -->
        <div class="product-card">
            <span class="product-badge">HS Code: 0905.20</span>
            <img src="gambar/gpowder.png" alt="Vanilla Powder">
            <h3>Vanilla Powder</h3>
            <p>Rich, natural brown with fine powder consistency. Intense and naturally sweet. Excellent for dry rubs, beverage mixes, and applications where liquid extract is not suitable.</p>
            <a href="contact.php" class="btn-detail">Inquire Now</a>
        </div>

        <!-- Produk 7 -->
        <div class="product-card">
            <span class="product-badge">HS Code: 1302.19.90</span>
            <img src="gambar/gpaste.png" alt="Vanilla Paste">
            <h3>Vanilla Paste (Natural)</h3>
            <p>Thick paste-like consistency, smooth with visible seeds. 100% natural. Intense, full-bodied vanilla flavor ideal for premium gelato and pastry creams.</p>
            <a href="contact.php" class="btn-detail">Inquire Now</a>
        </div>

        <!-- Produk 8 -->
        <div class="product-card">
            <span class="product-badge">HS Code: 1302.19.90</span>
            <img src="gambar/gextract.png" alt="Vanilla Extract Alcohol">
            <h3>Vanilla Extract Alcohol</h3>
            <p>Natural extract using food-grade ethanol & water. Deep, rich, aromatic liquid with concentrated flavor. Best for premium pastries, gourmet sauces, and luxury gelato.</p>
            <a href="contact.php" class="btn-detail">Inquire Now</a>
        </div>

        <!-- Produk 9 -->
        <div class="product-card">
            <span class="product-badge">HS Code: 1302.19.90</span>
            <img src="gambar/gextractna.png" alt="Vanilla Extract Non-Alcohol">
            <h3>Vanilla Extract Non-Alcohol</h3>
            <p>100% natural, non-alcoholic extract. Syrupy consistency with enhanced sweetness. Perfect for formulations and products that limit or completely exclude alcohol.</p>
            <a href="contact.php" class="btn-detail">Inquire Now</a>
        </div>

        <!-- Produk 10 -->
        <div class="product-card">
            <span class="product-badge">HS Code: 2106.90</span>
            <img src="gambar/gessence.png" alt="Vanilla Essence">
            <h3>Vanilla Essence</h3>
            <p>Concentrated flavoring formulated from pure vanilla blends. Cost-effective with stable shelf life. Ideal for mass-market cakes, cookies, and beverages.</p>
            <a href="contact.php" class="btn-detail">Inquire Now</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>