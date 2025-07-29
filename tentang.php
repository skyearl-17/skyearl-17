<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Samuel Iskandar Muda</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3a0ca3;
            --accent: #f72585;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e2e8f0 100%);
            color: var(--dark);
            min-height: 100vh;
            line-height: 1.6;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        
        header {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }
        
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        
        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 10px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        h2 {
            font-size: 1.5rem;
            font-weight: 400;
            color: var(--gray);
            margin-bottom: 30px;
        }
        
        .highlight {
            color: var(--accent);
            font-weight: 600;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        
        .social-link {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            transform: translateY(-5px);
            color: var(--accent);
        }
        
        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }
        
        .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
        }
        
        .shape-1 {
            width: 300px;
            height: 300px;
            background: var(--primary);
            top: -100px;
            left: -100px;
        }
        
        .shape-2 {
            width: 200px;
            height: 200px;
            background: var(--accent);
            bottom: -50px;
            right: -50px;
        }
        
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            
            h2 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
    </div>
    
    <div class="container">
        <header>
            <!-- Ganti dengan foto profil Anda -->
            <img src="55-986-55.jpg" alt="Samuel Iskandar Muda" class="profile-pic">
            <h1>Samuel Iskandar Muda</h1>
            <h3>Justru itu letak serunya jadi printis, kita gatau arah ga ada yang arahin kalo kita gagal ga ada yang bisa backup karna kita bukan dari keluarga terpandang kenapa? karna motivasi dari orang kaya 
                = bullshit, mereka kalo gagal ada backup harta ortu dan lainnya sedangkan istilah printis itu dari background keluarga yang tidak terpandang atau tidak memiliki aset apapun itu yang disebut printis.
                Back to topic, gw Samuel Iskandar Muda sesuai dengan nama gw, gw Psikolog muda yang berhaasil raih gelar Psi (Psikolog) dan karna itu juga gw bisa ngertiin orang dan sok ngertiin orang wkwkwk.
                Mungkin itu aja perkenalan singkat dari my diri gwe. See you in hospital i gonna touch you
            </h3>
            <h2>Psikolog muda di <span class="highlight">Indonesia</span></h2>

            <a href="index.php" class="btn btn-outline"> Kembali </a>
            
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="https://api.whatsapp.com/send/?phone=6283893047302&text&type=phone_number&app_absent=0" class="social-link"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fas fa-envelope"></i></a>
            </div>
        </header>
    </div>
</body>
</html>