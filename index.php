<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkenalan Diri | Samuel Iskandar Muda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #6C63FF;
            --secondary: #4A44B5;
            --accent: #FF6584;
            --dark: #2A2A3C;
            --light: #F8F9FF;
            --gray: #7B7B9D;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            color: var(--light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header & Navigation */
        header {
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            background: rgba(26, 26, 46, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Montserrat', sans-serif;
            font-size: 28px;
            font-weight: 800;
            color: var(--light);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: var(--light);
            text-decoration: none;
            font-weight: 500;
            font-size: 18px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--accent);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--accent);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 100px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(108, 99, 255, 0.1) 0%, rgba(26, 26, 46, 0) 70%);
            z-index: -1;
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .hero-text {
            flex: 1;
            max-width: 600px;
        }

        .greeting {
            font-size: 22px;
            color: var(--accent);
            margin-bottom: 15px;
            display: block;
        }

        .hero-text h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 60px;
            line-height: 1.2;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .hero-text h1 span {
            color: var(--accent);
        }

        .hero-text p {
            font-size: 20px;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.8);
        }

        .hero-btns {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
            transition: all 0.3s ease;
            display: inline-block;
            border: 2px solid transparent;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            box-shadow: 0 10px 20px rgba(108, 99, 255, 0.3);
        }

        .btn-primary:hover {
            background: var(--secondary);
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(108, 99, 255, 0.4);
        }

        .btn-outline {
            border-color: var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: rgba(108, 99, 255, 0.1);
            transform: translateY(-5px);
        }

        .hero-image {
            flex: 1;
            display: flex;
            justify-content: flex-end;
            position: relative;
        }

        .profile-card {
            width: 380px;
            height: 450px;
            background: linear-gradient(145deg, rgba(74, 68, 181, 0.3), rgba(42, 42, 60, 0.3));
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            overflow: hidden;
            position: relative;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
            transform: perspective(1000px) rotateY(5deg);
            transition: transform 0.5s ease;
        }

        .profile-card:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        .profile-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 40%;
            background: var(--primary);
            z-index: 1;
        }

        .profile-photo {
            position: absolute;
            top: 80px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            width: 160px;
            height: 160px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid var(--dark);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-info {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 120px 30px 30px;
            text-align: center;
            z-index: 3;
        }

        .profile-info h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .profile-info p {
            color: var(--gray);
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-5px);
        }

        /* About Section */
        .section {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 42px;
            display: inline-block;
            position: relative;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }

        .about-content {
            display: flex;
            gap: 50px;
            align-items: center;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 32px;
            margin-bottom: 20px;
            color: var(--accent);
        }

        .about-text p {
            font-size: 18px;
            margin-bottom: 20px;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.8);
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .stat-item {
            background: rgba(255, 255, 255, 0.05);
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .stat-item:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.08);
        }

        .stat-item i {
            font-size: 40px;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .stat-item h4 {
            font-size: 48px;
            margin-bottom: 5px;
            color: var(--accent);
        }

        .stat-item p {
            color: var(--gray);
            margin: 0;
        }

        /* Skills Section */
        .skills {
            background: rgba(0, 0, 0, 0.1);
        }

        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .skill-category {
            background: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: transform 0.3s ease;
        }

        .skill-category:hover {
            transform: translateY(-10px);
        }

        .skill-category h3 {
            font-size: 24px;
            margin-bottom: 25px;
            color: var(--accent);
            display: flex;
            align-items: center;
        }

        .skill-category h3 i {
            margin-right: 15px;
            background: rgba(108, 99, 255, 0.2);
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 24px;
            color: var(--primary);
        }

        .skill-item {
            margin-bottom: 25px;
        }

        .skill-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .skill-header span {
            font-weight: 600;
        }

        .skill-bar {
            height: 10px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: var(--primary);
            border-radius: 5px;
            position: relative;
        }

        .skill-progress::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: progressGlow 2s infinite;
        }

        @keyframes progressGlow {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        /* Contact Section */
        .contact-content {
            display: flex;
            gap: 50px;
        }

        .contact-info {
            flex: 1;
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.05);
            padding: 40px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .contact-item {
            display: flex;
            margin-bottom: 30px;
        }

        .contact-item i {
            font-size: 24px;
            color: var(--primary);
            width: 60px;
            height: 60px;
            background: rgba(108, 99, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-right: 20px;
        }

        .contact-text h4 {
            font-size: 22px;
            margin-bottom: 5px;
        }

        .contact-text p, .contact-text a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-text a:hover {
            color: var(--accent);
        }

        .contact-form {
            flex: 1;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            color: white;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(108, 99, 255, 0.05);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background: rgba(0, 0, 0, 0.3);
            padding: 40px 0;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .footer-logo {
            font-family: 'Montserrat', sans-serif;
            font-size: 28px;
            font-weight: 800;
            color: var(--light);
            margin-bottom: 20px;
            display: inline-block;
        }

        .footer-logo span {
            color: var(--accent);
        }

        .copyright {
            color: var(--gray);
            margin-top: 20px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero-content {
                flex-direction: column;
                text-align: center;
            }
            
            .hero-text {
                margin-bottom: 50px;
            }
            
            .hero-btns {
                justify-content: center;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .contact-content {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .hero-text h1 {
                font-size: 42px;
            }
            
            .nav-links {
                display: none;
            }
            
            .about-stats {
                grid-template-columns: 1fr;
            }
            
            .mobile-menu-btn {
                display: block;
            }
        }

        @media (max-width: 480px) {
            .hero-text h1 {
                font-size: 36px;
            }
            
            .hero-btns {
                flex-direction: column;
                gap: 15px;
            }
            
            .btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container nav-container">
            <a href="#" class="logo">Sam<span>uel</span></a>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="obat.php">Obat kalo capek</a></li>
                <li><a href="Kontak.php">Kontak</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <span class="greeting">Halo, Saya</span>
                <h1>Samuel <span>Iskandar</span></h1>
                <p>Seorang Mahasiswa di Universitas Ngawi Timor Selatan</p>
                <div class="hero-btns">
                    <a href="Contact.html" class="btn btn-primary">Hubungi Saya</a>
                    <a href="gatau.php" class="btn btn-outline">Click ini jika anda merasa capek</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="profile-card">
                    <div class="profile-bg"></div>
                    <div class="profile-photo">
                        <img src=""> 
                    </div>
                    <div class="profile-info">
                        <h2>Samuel Iskandar</h2>
                        <p>Psikolog tingkat 8</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://api.whatsapp.com/send/?phone=6283893047302&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Tentang Saya</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Perkenalan Singkat</h3>
                    <p>Saya adalah seorang Psikolog tingkat 8 yang bisa tau client lagi kenapa</p>
                    
                    <div class="about-stats">
                        <div class="stat-item">
                            <i class="fas fa-code"></i>
                            <h4>2+</h4>
                            <p>Tahun Pengalaman</p>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-project-diagram"></i>
                            <h4>29+</h4>
                            <p>Calling</p>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-users"></i>
                            <h4>49+</h4>
                            <p>Klien Puas</p>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-award"></i>
                            <h4>9</h4>
                            <p>Penghargaan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section skills">
        <div class="container">
            <div class="section-title">
                <h2>Psikologis</h2>
            </div>
            <div class="skills-container">
                <div class="skill-category">
                    <h3><i class="fas fa-laptop-code"></i> Teknis</h3>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span>Motivasi</span>
                            <span>78%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span>Pikiran</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span>Emosi</span>
                            <span>76%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span>Tingkah laku</span>
                            <span>70%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                     
                <div class="skill-category">
                    <h3><i class="fas fa-comments"></i> Soft Skills</h3>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span>Komunikasi</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 94%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span>Pengertian</span>
                            <span>94%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 92%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span>Manajemen Waktu</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 88%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span>Problem Solving</span>
                            <span>95%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Kontak Saya</h2>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-card">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="contact-text">
                                <h4>Lokasi</h4>
                                <p>Jakarta, Indonesia</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div class="contact-text">
                                <h4>Email</h4>
                                <a href="Samuel.muda@gmail.com">Samuel.muda@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div class="contact-text">
                                <h4>Telepon</h4>
                                <a href="wa.me/6283893047302">+62 838 9304 7302</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div class="contact-text">
                                <h4>Jam Kerja</h4>
                                <p>Senin - Jumat: 10:00 - 15:00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" class="form-control" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Masukkan email Anda">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" id="subject" class="form-control" placeholder="Subjek pesan">
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" class="form-control" placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-logo">Sam<span>uel</span></div>
            <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <p class="copyright">© 2025 Samuel Iskandar. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script>
        // Animasi untuk progress bar saat scroll
         document.addEventListener('DOMContentLoaded', function() {
            // Animasi untuk section saat scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                    }
                });
            }, {
                threshold: 0.1
            });
            
            document.querySelectorAll('.section, .hero-text, .profile-card').forEach(el => {
                observer.observe(el);
            });
            
            // Smooth scrolling untuk anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>