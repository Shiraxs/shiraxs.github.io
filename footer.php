<!-- CSS KHUSUS FOOTER DAN BANTUAN -->
<style>
    /* --- SUPPORT SECTION (BANTUAN) --- */
    .support-section {
        padding: 80px 5%;
        background-color: var(--bg-light);
        text-align: center;
    }

    .support-section .subtitle {
        color: var(--light-green);
        font-style: italic;
        font-weight: 600;
        display: block;
        margin-bottom: 10px;
    }

    .support-section h2 {
        font-size: 38px;
        margin-bottom: 50px;
        line-height: 1.2;
        color: var(--text-dark);
    }

    .support-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        text-align: left;
    }

    .support-card {
        background: #f8f9fa;
        border: 1px solid #eaeaea;
        padding: 40px 30px;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.02);
        transition: transform 0.3s;
    }

    .support-card:hover {
        transform: translateY(-5px);
    }

    /* Kartu tengah berwarna hijau gradasi */
    .support-card.featured {
        background: linear-gradient(135deg, var(--light-green), var(--dark-green));
        color: white;
        border: none;
    }

    .support-icon {
        width: 50px;
        height: 50px;
        background: var(--light-green);
        color: white;
        border-radius: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 22px;
        margin-bottom: 25px;
    }

    .support-card.featured .support-icon {
        background: var(--lime-yellow);
        color: var(--text-dark);
    }

    .support-card h3 {
        font-family: 'Inter', sans-serif;
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .support-card p {
        font-size: 14px;
        color: var(--text-gray);
        margin-bottom: 25px;
        line-height: 1.6;
        flex-grow: 1;
    }

    .support-card.featured p {
        color: #f0f0f0;
    }

    .btn-support {
        background-color: var(--light-green);
        color: white;
        padding: 10px 25px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 13px;
        text-decoration: none;
        transition: 0.3s;
    }

    .btn-support:hover {
        opacity: 0.9;
    }

    .support-card.featured .btn-support {
        background-color: white;
        color: var(--text-dark);
    }

    /* --- PRE-FOOTER BANNER --- */
    .pre-footer-banner {
        background: linear-gradient(rgba(26, 59, 43, 0.7), rgba(26, 59, 43, 0.7)), url('https://images.unsplash.com/photo-1596646505708-7243c2005a96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover;
        padding: 80px 5%;
        text-align: center;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .pre-footer-banner .play-btn-small {
        width: 60px;
        height: 60px;
        background: white;
        color: var(--light-green);
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .pre-footer-banner h2 {
        font-size: 42px;
        margin-bottom: 15px;
        line-height: 1.2;
    }

    .pre-footer-banner p {
        max-width: 600px;
        font-size: 15px;
        color: #eee;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    /* --- SOCIAL MEDIA BAR & MAIN FOOTER --- */
    .footer-social {
        background-color: var(--light-green);
        text-align: center;
        padding: 20px;
        color: white;
        font-weight: 600;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
    }

    .social-icons {
        display: flex;
        gap: 10px;
    }

    .social-icons a {
        background: white;
        color: var(--light-green);
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        font-weight: bold;
        font-size: 14px;
        transition: 0.3s;
    }

    .social-icons a:hover {
        background: var(--dark-green);
        color: white;
    }

    footer {
        background-color: var(--dark-green);
        color: white;
        padding: 60px 5% 20px;
    }

    .footer-main {
        display: flex;
        justify-content: space-between;
        gap: 40px;
        flex-wrap: wrap;
        margin-bottom: 40px;
    }

    .footer-col {
        flex: 1;
        min-width: 200px;
    }

    .footer-col.brand {
        flex: 1.5;
    }

    .footer-col .logo {
        color: white;
        font-size: 22px;
        font-weight: bold;
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 15px;
    }

    .footer-col p {
        font-size: 14px;
        color: #ccc;
        line-height: 1.6;
        max-width: 350px;
    }

    .footer-col h4 {
        font-family: 'Inter', sans-serif;
        margin-bottom: 20px;
        font-size: 16px;
        color: var(--lime-yellow);
    }

    .footer-col ul {
        list-style: none;
        padding: 0;
    }

    .footer-col ul li {
        margin-bottom: 12px;
    }

    .footer-col ul li a {
        color: #ccc;
        font-size: 14px;
        transition: 0.3s;
        text-decoration: none;
    }

    .footer-col ul li a:hover {
        color: var(--lime-yellow);
    }

    .newsletter input {
        width: 100%;
        padding: 15px;
        border-radius: 8px;
        border: none;
        margin-bottom: 10px;
        font-family: 'Inter', sans-serif;
        outline: none;
    }

    .newsletter button {
        width: 100%;
        padding: 15px;
        border-radius: 8px;
        border: none;
        background-color: var(--light-green);
        color: white;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .newsletter button:hover {
        background-color: #7a9c32;
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 12px;
        color: #999;
        flex-wrap: wrap;
        gap: 15px;
    }

    .footer-bottom-links a {
        color: #999;
        text-decoration: none;
        margin-right: 20px;
        transition: 0.3s;
    }

    .footer-bottom-links a:hover {
        color: white;
    }

    @media (max-width: 900px) {
        .support-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
<!-- SOCIAL MEDIA BAR -->
<div class="footer-social">
    Follow our social :
    <div class="social-icons">
        <a href="#">fb</a> <!-- Sesuai PDF: essenceindonesia -->
        <a href="#">ig</a> <!-- Sesuai PDF: essence.indonesia -->
    </div>
</div>

<!-- MAIN FOOTER -->
<footer>
    <div class="footer-main">
        <div class="footer-col brand">
            <div class="logo">
                <img src="gambar/logo.png" alt="Logo" style="height:35px;">
                <span style="color:white; font-size: 22px; font-weight: bold; margin-left: 8px;">Essence Indonesia</span>
            </div>
            <p>Pure Vanilla. Rich Heritage. Evolving from a trusted family business, we provide 100% authentic Indonesian origin vanilla with strict quality control and global export standards.</p>
        </div>
        <div class="footer-col">
            <h4>Company</h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="product.php">Our Product</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="footer-col newsletter">
            <h4>Subscribe Newsletter</h4>
            <input type="email" placeholder="Email">
            <button>Subscribe Newsletter</button>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-bottom-links">
            <a href="#">Terms & Conditions</a>
            <a href="#">Privacy Policy</a>
        </div>
        <div>
            Copyright &copy;2026 Essence Indonesia, All rights reserved.
        </div>
    </div>
</footer>

<!-- Floating WA -->
<a href="https://wa.me/6289669241131" target="_blank" class="wa-float">💬</a>

</body>

</html>