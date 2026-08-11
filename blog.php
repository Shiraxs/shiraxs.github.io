<?php include 'header.php'; ?>

<!-- CSS KHUSUS HALAMAN BLOG -->
<style>
    /* --- 1. BLOG HERO BANNER --- */
    .blog-hero {
        background: linear-gradient(rgba(26, 59, 43, 0.6), rgba(26, 59, 43, 0.8)), url('https://images.unsplash.com/photo-1596646505708-7243c2005a96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover;
        padding: 100px 5%;
        color: white;
    }

    .blog-hero h1 {
        font-size: 54px;
        margin-bottom: 10px;
        font-family: 'Playfair Display', serif;
    }

    /* --- 2. BLOG LIST SECTION --- */
    .blog-section {
        padding: 100px 5%;
        background-color: var(--bg-light);
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .blog-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
        display: flex;
        flex-direction: column;
        border: 1px solid #eaeaea;
        transition: transform 0.3s;
        position: relative;
    }

    .blog-card:hover {
        transform: translateY(-5px);
    }

    .blog-img-container {
        position: relative;
    }

    .blog-card img {
        width: 1005;
        height: 220px;
        object-fit: cover;
        width: 100%;
    }

    .blog-badge-news {
        position: absolute;
        top: 15px;
        right: 15px;
        background-color: var(--dark-green);
        color: white;
        font-size: 11px;
        font-weight: 600;
        padding: 4px 12px;
        border-radius: 20px;
        letter-spacing: 0.5px;
    }

    .blog-content {
        padding: 25px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .blog-content h3 {
        font-family: 'Inter', sans-serif;
        font-size: 18px;
        margin-bottom: 12px;
        color: var(--text-dark);
        line-height: 1.4;
        font-weight: 700;
    }

    .blog-content p {
        font-size: 13px;
        color: var(--text-gray);
        line-height: 1.6;
        margin-bottom: 25px;
        flex-grow: 1;
    }

    .blog-meta {
        border-top: 1px solid #eee;
        padding-top: 15px;
        display: flex;
        justify-content: space-between;
        font-size: 12px;
        color: #888;
        font-weight: 500;
    }

    /* Responsif untuk layar kecil / mobile */
    @media (max-width: 900px) {
        .blog-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .blog-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- 1. BLOG HERO BANNER -->
<section class="blog-hero" style="background: linear-gradient(rgba(59, 35, 20, 0.6), rgba(59, 35, 20, 0.8)), url('gambar/hero-blog.jpg') center/cover;">
    <h1>Article & News</h1>
</section>

<!-- 2. BLOG LIST SECTION -->
<section class="blog-section">
    <div class="blog-grid container">
        <!-- Artikel 1 -->
        <div class="blog-card">
            <div class="blog-img-container">
                <span class="blog-badge-news">NEWS</span>
                <img src="gambar/blog-1.jpg" alt="Planifolia vs Tahitensis">
            </div>
            <div class="blog-content">
                <h3>Planifolia vs. Tahitensis: Understanding the Profiles</h3>
                <p>Discover the difference between Planifolia's strong, classic vanillin profile and the lighter, floral-fruity notes of Tahitensis vanilla grown in Indonesian tropical soils...</p>
                <div class="blog-meta">
                    <span>March 20, 2026</span>
                    <span>No Comments</span>
                </div>
            </div>
        </div>

        <!-- Artikel 2 -->
        <div class="blog-card">
            <div class="blog-img-container">
                <span class="blog-badge-news">NEWS</span>
                <img src="gambar/blog-2.jpg" alt="Vanilla Curing">
            </div>
            <div class="blog-content">
                <h3>The Craftsmanship of Natural Vanilla Curing</h3>
                <p>The journey from a green pod to a dark, aromatic vanilla bean is a meticulous process. Learn how strict quality control and natural curing ensure zero contamination...</p>
                <div class="blog-meta">
                    <span>March 20, 2026</span>
                    <span>No Comments</span>
                </div>
            </div>
        </div>

        <!-- Artikel 3 -->
        <div class="blog-card">
            <div class="blog-img-container">
                <span class="blog-badge-news">NEWS</span>
                <img src="gambar/blog-3.jpg" alt="Direct Sourcing">
            </div>
            <div class="blog-content">
                <h3>Direct Sourcing: How We Empower Local Farmers</h3>
                <p>By eliminating unnecessary intermediaries, Essence Indonesia offers competitive B2B pricing while ensuring transparent traceability back to our dedicated local farmers...</p>
                <div class="blog-meta">
                    <span>March 15, 2026</span>
                    <span>No Comments</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>