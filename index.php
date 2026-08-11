<?php include 'header.php'; ?>

<!-- CSS KHUSUS HALAMAN INDEX -->
<style>
    /* --- 1. HERO SECTION --- */
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
        font-family: 'Playfair Display', serif;
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
        text-decoration: none;
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

    /* --- 2. WHO WE ARE --- */
    .who-we-are {
        padding: 100px 5%;
        background-color: var(--bg-light);
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
        font-family: 'Playfair Display', serif;
    }

    .who-text p {
        color: var(--text-gray);
        margin-bottom: 30px;
        font-size: 15px;
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
        font-weight: 700;
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
        border: 1px solid #eaeaea;
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
        font-weight: 700;
    }

    .feature-box p {
        font-size: 13px;
        color: var(--text-gray);
    }

    /* --- 3. WHY CHOOSE US & VIDEO BANNER --- */
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
        color: white;
    }

    .video-banner h2 {
        font-size: 36px;
        margin-bottom: 20px;
        font-family: 'Playfair Display', serif;
    }

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
        font-family: 'Playfair Display', serif;
    }

    .why-highlight {
        border-left: 3px solid var(--light-green);
        padding-left: 20px;
        margin-bottom: 30px;
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

    /* --- 4. RELIABLE SERVICES SECTION --- */
    .experience-section {
        padding: 100px 5%;
        display: grid;
        grid-template-columns: 1fr 1.2fr 1fr;
        gap: 40px;
        align-items: start;
        background-color: var(--bg-light);
    }

    .exp-left .subtitle {
        color: var(--light-green);
        font-style: italic;
        font-weight: 600;
        display: block;
        margin-bottom: 10px;
    }

    .exp-left h2 {
        font-size: 38px;
        line-height: 1.2;
        margin-bottom: 20px;
        font-family: 'Playfair Display', serif;
    }

    .exp-left p {
        color: var(--text-gray);
        margin-bottom: 30px;
        font-size: 14px;
    }

    .exp-mid img {
        width: 100%;
        border-radius: 20px;
        object-fit: cover;
        height: 500px;
    }

    .exp-right {
        padding-top: 20px;
    }

    .yellow-badge {
        background-color: var(--lime-yellow);
        padding: 30px;
        border-radius: 20px;
        display: inline-block;
        margin-left: -50px;
        position: relative;
        z-index: 2;
        margin-bottom: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .yellow-badge h3 {
        font-size: 48px;
        margin: 0;
        line-height: 1;
        color: var(--text-dark);
    }

    .yellow-badge span {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        color: var(--text-dark);
        font-weight: 600;
    }

    .exp-right p {
        font-size: 14px;
        color: var(--text-gray);
        margin-bottom: 20px;
    }

    .service-list {
        list-style: none;
        padding: 0;
    }

    .service-list li {
        border-bottom: 1px solid #eee;
        padding: 15px 0;
        font-size: 14px;
        color: var(--text-dark);
        font-weight: 500;
    }

    .production-gallery {
        padding: 0 5% 100px;
        background-color: var(--bg-light);
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .production-gallery img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 15px;
    }

    /* --- 5. OUR SOLUTIONS --- */
    .solutions {
        padding: 100px 5%;
        background-color: #f7f9f8;
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
        max-width: 450px;
        font-family: 'Playfair Display', serif;
    }

    .solutions-header p {
        max-width: 450px;
        color: var(--text-gray);
        font-size: 14px;
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
        font-weight: 700;
    }

    .sol-card p {
        font-size: 13px;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    .btn-card {
        padding: 10px 20px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 13px;
        align-self: flex-start;
        text-decoration: none;
    }

    .yellow .btn-card {
        background-color: var(--dark-green);
        color: white;
    }

    .green .btn-card {
        background-color: var(--light-green);
        color: white;
    }

    /* --- 6. SPECIFICATIONS --- */
    .specifications {
        padding: 100px 5%;
        background-color: var(--bg-light);
        text-align: center;
    }

    .specifications .subtitle {
        justify-content: center;
        display: flex;
        color: var(--light-green);
        font-style: italic;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .specifications h2 {
        font-size: 38px;
        margin-bottom: 60px;
        font-family: 'Playfair Display', serif;
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
        color: #aaa;
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

    /* --- 7. OUR VALUES & STATS --- */
    .values-section {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1596646505708-7243c2005a96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover;
        padding: 100px 5%;
        text-align: center;
        color: white;
    }

    .values-section .subtitle {
        color: var(--light-green);
        font-style: italic;
        font-weight: 600;
        display: block;
        margin-bottom: 10px;
    }

    .values-section h2 {
        font-size: 42px;
        margin-bottom: 60px;
        font-family: 'Playfair Display', serif;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .value-card {
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 40px 30px;
        border-radius: 20px;
        text-align: left;
        transition: transform 0.3s;
    }

    .value-card:hover {
        transform: translateY(-5px);
    }

    .value-icon {
        background: var(--light-green);
        width: 60px;
        height: 60px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        border-radius: 12px;
        font-size: 24px;
        margin-bottom: 20px;
        color: white;
    }

    .value-card h3 {
        font-size: 24px;
        margin-bottom: 15px;
        font-family: 'Playfair Display', serif;
    }

    .value-card p {
        font-size: 14px;
        color: #ddd;
        line-height: 1.6;
    }

    .stats-section {
        background-color: var(--dark-green);
        padding: 80px 5%;
        color: white;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
    }

    .stat-box h2 {
        font-size: 48px;
        margin-bottom: 10px;
        color: white;
        font-family: 'Playfair Display', serif;
    }

    .stat-box h4 {
        font-family: 'Inter', sans-serif;
        font-size: 18px;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .stat-box p {
        font-size: 13px;
        color: #ccc;
        line-height: 1.6;
    }

    @media (max-width: 900px) {

        .who-grid,
        .solutions-header,
        .experience-section {
            flex-direction: column;
            display: block;
        }

        .who-images,
        .solutions-grid,
        .spec-grid,
        .values-grid,
        .stats-section {
            grid-template-columns: 1fr;
        }

        .production-gallery {
            grid-template-columns: 1fr;
        }

        .exp-mid img {
            height: 300px;
            margin-bottom: 20px;
        }

        .yellow-badge {
            margin-left: 0;
        }
    }
</style>

<!-- 1. HERO SECTION -->
<section class="hero" style="background: linear-gradient(rgba(59, 35, 20, 0.4), rgba(59, 35, 20, 0.7)), url('gambar/gindex.png') center/cover;">
    <h1>Pure Vanilla.<br>Rich Heritage.</h1>
    <p>The True Essence of Indonesia in Every Batch. Harvested from optimal tropical soils, our vanilla possesses a signature rich aroma and naturally high vanillin concentration.</p>
    <a href="product.php" class="btn-learn">Explore Products</a>
    <div class="hero-stats">
        <div>
            <h3>100%</h3>
            <p>Authentic Indonesian Origin</p>
        </div>
        <div>
            <h3>Top</h3>
            <p>Quality Craftsmanship</p>
        </div>
        <div>
            <h3>Global</h3>
            <p>Export Ready Standards</p>
        </div>
    </div>
</section>

<!-- 2. WHO WE ARE SECTION -->
<section class="who-we-are container">
    <div class="who-grid">
        <div class="who-text">
            <span class="subtitle">Who We Are</span>
            <h2>Bringing the Authentic Taste of Vanilla to the World</h2>
            <p>Evolving from a trusted family business, every batch of our vanilla is meticulously hand-selected, naturally cured, and rigorously tested to ensure uniform sizing, proper moisture levels, and zero contamination.</p>
            <a href="profile.php" class="btn-learn">Discover more</a>
        </div>
        <div class="who-images">
            <img src="gambar/gfarmer.png" alt="Vanilla Farmer" class="img-tall">
            <div class="yellow-card">
                <h4>Fresh and Natural</h4>
                <p>100% Pure and Natural, No additives, preservatives, or artificial flavorings.</p>
            </div>
            <img src="gambar/gvbeans.png" alt="Vanilla Beans" class="img-small">
        </div>
    </div>

    <div class="features-3">
        <div class="feature-box">
            <div class="feature-icon">🌿</div>
            <div>
                <h4>Premium Natural Quality</h4>
                <p>Our vanilla products are naturally cured to ensure a signature rich aroma, moist texture, and high vanillin concentration.</p>
            </div>
        </div>
        <div class="feature-box">
            <div class="feature-icon">🤝</div>
            <div>
                <h4>Direct Sourcing</h4>
                <p>By eliminating unnecessary intermediaries, we offer competitive B2B pricing and transparent traceability back to the farm.</p>
            </div>
        </div>
        <div class="feature-box">
            <div class="feature-icon">🏅</div>
            <div>
                <h4>Export-Ready Standards</h4>
                <p>Processed and packaged to meet strict international food safety and import regulations for seamless customs clearance.</p>
            </div>
        </div>
    </div>
</section>

<!-- 3. WHY CHOOSE US -->
<section class="video-banner-section">
    <div class="video-banner container" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('gambar/vanilla-banner.jpg') center/cover;">
        <h2>Discover Our Premium Vanilla<br>Products Collection</h2>
        <a href="contact.php" class="btn-learn">Contact Us Now!</a>
    </div>
</section>

<section class="why-choose">
    <div class="why-col">
        <span class="subtitle">Why Choose Us?</span>
        <h2>Why Essence Indonesia is the Right Choice</h2>
        <div class="why-highlight">
            <h4>100% Authentic Indonesian Origin</h4>
            <p>Harvested from optimal tropical soils, our vanilla possesses a signature rich aroma, moist texture, and naturally high vanillin concentration unique to Indonesia.</p>
        </div>
    </div>
    <div class="why-col">
        <img src="gambar/gvpack.png" alt="Vanilla Processing" class="why-img">
        <div class="why-list-item" style="border:none; padding-top:0;">
            <h4>Craftsmanship & Strict Quality Control</h4>
            <p>Every batch is meticulously hand-selected, naturally cured, and rigorously tested to ensure uniform sizing, proper moisture levels, and zero contamination.</p>
        </div>
    </div>
    <div class="why-col">
        <div class="why-list-item">
            <h4>Export-Ready & International Standards</h4>
            <p>We understand global market compliance. Our products meet strict international food safety and import regulations.</p>
        </div>
        <div class="why-list-item">
            <h4>Direct Sourcing & Sustainable Supply</h4>
            <p>Eliminating unnecessary intermediaries ensures competitive B2B pricing, guaranteed supply continuity, and transparent traceability.</p>
        </div>
    </div>
</section>

<!-- 5. OUR SOLUTIONS SECTION -->
<section class="solutions container">
    <div class="solutions-header">
        <div>
            <span class="subtitle">Our Products</span>
            <h2 style="font-family: 'Playfair Display', serif; font-size: 42px;">Premium Vanilla Derivative Products</h2>
        </div>
        <p>From gourmet beans to extracts and powders, we provide reliable and efficient vanilla solutions designed to support different business needs.</p>
    </div>

    <div class="solutions-grid">
        <!-- Produk 1 -->
        <div class="sol-card yellow">
            <h3>🌱 Planifolia Vanilla</h3>
            <img src="gambar/pvanila.png" alt="Planifolia Vanilla">
            <p>Strong, classic vanilla with a slightly bitter aftertaste and high vanillin content (2%-3%). Ideal for baking and ice cream.</p>
            <a href="product.php" class="btn-card">Learn more</a>
        </div>

        <!-- Produk 2 -->
        <div class="sol-card green">
            <h3>🌸 Tahitensis Vanilla</h3>
            <img src="gambar/tvanila.png" alt="Tahitensis Vanilla">
            <p>Lighter and sweeter with floral & fruity notes. Commonly used in perfumes, gourmet desserts, and premium pastries.</p>
            <a href="product.php" class="btn-card">Learn more</a>
        </div>

        <!-- Produk 3 -->
        <div class="sol-card green">
            <h3>❄️ Crystallized Vanilla</h3>
            <img src="gambar/gcvanila.png" alt="Crystallized Vanilla">
            <p>Rare and high quality. Naturally crystallized vanilla beans with aromatic vanillin frost (>2.5%) for artisan desserts.</p>
            <a href="product.php" class="btn-card">Learn more</a>
        </div>

        <!-- Produk 4 -->
        <div class="sol-card green">
            <h3>✨ Vanilla Caviar</h3>
            <img src="gambar/gcaviar.png" alt="Vanilla Caviar">
            <p>Deep black with a natural glossy sheen. 100% pure vanilla seeds extracted from ripe pods for pastry toppings.</p>
            <a href="product.php" class="btn-card">Learn more</a>
        </div>

        <!-- Produk 5 -->
        <div class="sol-card yellow">
            <h3>🌰 Dried Vanilla Seeds</h3>
            <img src="gambar/gseed.png" alt="Dried Vanilla Seeds">
            <p>Fine, dry, free-flowing seeds with low moisture. Concentrated aromatic flavor ideal for chocolate and spice blends.</p>
            <a href="product.php" class="btn-card">Learn more</a>
        </div>

        <!-- Produk 6 -->
        <div class="sol-card green">
            <h3>💨 Vanilla Powder</h3>
            <img src="gambar/gpowder.png" alt="Vanilla Powder">
            <p>Fine powder made from dried premium vanilla beans. Excellent for dry rubs and applications where liquid extract is not suitable.</p>
            <a href="product.php" class="btn-card">Learn more</a>
        </div>

        <!-- Produk 7 -->
        <div class="sol-card green">
            <h3>🍯 Vanilla Paste (Natural)</h3>
            <img src="gambar/gpaste.png" alt="Vanilla Paste">
            <p>Thick paste-like consistency with visible seeds. 100% natural, ideal for premium gelato and pastry creams.</p>
            <a href="product.php" class="btn-card">Learn more</a>
        </div>

        <!-- Produk 8 -->
        <div class="sol-card green">
            <h3>🧪 Vanilla Extract Alcohol</h3>
            <img src="gambar/gextract.png" alt="Vanilla Extract Alcohol">
            <p>Natural extract using food-grade ethanol & water. Deep, rich, aromatic liquid for gourmet sauces and luxury gelato.</p>
            <a href="product.php" class="btn-card">Learn more</a>
        </div>

        <!-- Produk 9 -->
        <div class="sol-card yellow">
            <h3>💧 Vanilla Extract Non-Alcohol</h3>
            <img src="gambar/gextractna.png" alt="Vanilla Extract Non-Alcohol">
            <p>100% natural, non-alcoholic extract. Perfect for formulations and products that limit or completely exclude alcohol.</p>
            <a href="product.php" class="btn-card">Learn more</a>
        </div>

        <!-- Produk 10 -->
        <div class="sol-card green">
            <h3>🥣 Vanilla Essence</h3>
            <img src="gambar/gessence.png" alt="Vanilla Essence">
            <p>Concentrated flavoring formulated for mass-market bakery and beverages where cost efficiency is key.</p>
            <a href="product.php" class="btn-card">Learn more</a>
        </div>
    </div>
</section>

<!-- 6. EXPORT SPECIFICATIONS -->
<section class="specifications">
    <span class="subtitle">Export Standard</span>
    <h2>Order Policy & Specifications</h2>

    <div class="spec-grid container">
        <div class="spec-item">
            <div class="spec-icon">📦</div>
            <span>Packaging</span>
            <h4>Vacuum Sealed</h4>
            <span style="display:block; margin-top:5px; text-transform:none;">1kg, 5kg, 10kg boxes or HDPE Bottles (1L)</span>
        </div>
        <div class="spec-item">
            <div class="spec-icon">⚖️</div>
            <span>Minimum Order</span>
            <h4>1 KG / 1 L</h4>
            <span style="display:block; margin-top:5px; text-transform:none;">Trial Orders Welcome</span>
        </div>
        <div class="spec-item">
            <div class="spec-icon">🏭</div>
            <span>Production Capacity</span>
            <h4>5-10 Tons</h4>
            <span style="display:block; margin-top:5px; text-transform:none;">Per Harvest Season (Gourmet Beans)</span>
        </div>
        <div class="spec-item">
            <div class="spec-icon">⏱️</div>
            <span>Lead Time</span>
            <h4>7-10 Days</h4>
            <span style="display:block; margin-top:5px; text-transform:none;">Ready Stock / After payment confirmation</span>
        </div>
        <div class="spec-item">
            <div class="spec-icon">🚢</div>
            <span>Shipping Terms</span>
            <h4>FOB / CIF / EXW</h4>
            <span style="display:block; margin-top:5px; text-transform:none;">Semarang Port / Air Freight via DHL/FedEx</span>
        </div>
        <div class="spec-item">
            <div class="spec-icon">📜</div>
            <span>Quality Standard</span>
            <h4>Food-Grade</h4>
            <span style="display:block; margin-top:5px; text-transform:none;">HACCP-compliant, 100% Pure, No additives</span>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>