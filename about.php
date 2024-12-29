<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biz haqimizda - Zerikarli olam</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">


    <style>
        .gradient-text {
            background: linear-gradient(45deg, #6c757d, #495057);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .stat-card {
            transition: transform 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .team-member {
            position: relative;
            overflow: hidden;
        }
        .team-member img {
            transition: filter 0.3s;
        }
        .team-member:hover img {
            filter: brightness(70%);
        }
        .quote-card {
            border-left: 4px solid #6c757d;
        }
        .timeline {
            position: relative;
            padding: 20px 0;
        }
        .timeline::before {
            content: '';
            position: absolute;
            width: 2px;
            background: #6c757d;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1px;
        }
        .timeline-item {
            padding: 20px 30px;
            position: relative;
            background: #fff;
            border-radius: 6px;
            margin: 30px 0;
        }
    </style>
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand gradient-text fw-bold" href="#">Zerikarli dunyo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="home.php">Bosh sahifa</a></li>

                    <li class="nav-item"><a class="nav-link" href="about.php">Biz haqimizda</a></li>
                    <li class="nav-item"><a class="nav-link" href="offers.php">Zerikarli takliflar</a></li>
                    <li class="nav-item"><a class="nav-link" href="memes.php">Memlarni yuborish</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Kirish</a></li>
                    <li class="nav-item"><a class="nav-link" href="signUP.php">Ro‘yxatdan o‘tish</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bosh qismi -->
    <header class="bg-white py-5 mt-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center">
                <h1 class="display-4 gradient-text fw-bold" data-aos="fade-up">2024-yildan beri o‘rtamiyonalikni ulug‘lamoqdamiz</h1>
                <p class="lead text-muted mb-0" data-aos="fade-up" data-aos-delay="200">Chunki kimdir mutlaqo oddiy va e’tiborga loyiq bo‘lmagan narsalarni qayd etishi kerak</p>
            </div>
        </div>
    </header>

    <!-- Muvaffaqiyatimiz xronologiyasi -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center gradient-text mb-5" data-aos="fade-up">Bizning g‘oyat oddiy hikoyamiz</h2>
            <div class="timeline">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="timeline-item shadow-sm" data-aos="fade-right">
                            <h5>2024-yil yanvar oyi</h5>
                            <p>DMVda navbatda kutib turgan paytda ta’sis etilgan</p>
                        </div>
                        <div class="timeline-item shadow-sm" data-aos="fade-left">
                            <h5>2024-yil fevral oyi</h5>
                            <p>Birinchi zerikarli mem biroz mashhur bo‘ldi (12 ta yoqtirish)</p>
                        </div>
                        <div class="timeline-item shadow-sm" data-aos="fade-right">
                            <h5>2024-yil mart oyi</h5>
                            <p>Obunachilari soni 10 taga yetdi (asosan oila a’zolari)</p>
                        </div>
                        <div class="timeline-item shadow-sm" data-aos="fade-left">
                            <h5>2024-yil aprel</h5>
                            <p>Amaliyotchimiz tomonidan "Eng o‘rtacha veb-sayt" deb tan olingan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bizning maqsadimiz -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="https://picsum.photos/600/400" class="img-fluid rounded shadow" alt="Our Mission">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="quote-card p-4">
                        <h3 class="gradient-text">Bizning maqsadimiz</h3>
                        <p class="lead">Hayotimizning 99,9 foizini tashkil etadigan oddiy daqiqalarni qadrlab nishonlash uchun:</p>
                        <ul class="list-unstyled">
                            <li>✓ Navbatda kutish san’atini qayd etish</li>
                            <li>✓ Mukammal esnash san’atini egallash</li>
                            <li>✓ Bo‘yoqning qurishini kuzatish psixologiyasini o‘rganish</li>
                            <li>✓ Majlislarni nima uchun elektron xat bilan almashtirish mumkinligini tadqiq qilish</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bizning jamoamiz -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center gradient-text mb-5" data-aos="fade-up">Bizning oddiy, o‘rtacha jamoamiz</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="card team-member">
                        <img src="https://doodleipsum.com/400x300/flat?i=2bd3af0d2f06a2fa52032589873857fd" class="card-img-top" alt="Team Member">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bahodir "Byurokrat" Azamov</h5>
                            <p class="card-text">Bosh zerikarli lavozim egasi</p>
                            <p class="small text-muted">Mutaxassislik: professional navbatda turish</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card team-member">
                        <img src="https://doodleipsum.com/400x300/outline?i=c6dacd8a3e93f7bb512a3a1204226833" class="card-img-top" alt="Team Member">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sevinch "Oddiy" Ro'zimova</h5>
                            <p class="card-text">O‘rtamiyonalik direktori</p>
                            <p class="small text-muted">Ob-havo haqida oddiy suhbatlashish bo‘yicha mahorat</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card team-member">
                        <img src="https://doodleipsum.com/400x300/outline?i=03560e59e631a5e843a1c91013ea8cd2" class="card-img-top" alt="Team Member">
                        <div class="card-body text-center">
                            <h5 class="card-title">"O‘rtacha" laqabli Hasanjon Odilov</h5>
                            <p class="card-text">Oddiy ishlar bo‘yicha boshliq</p>
                            <p class="small text-muted">Mutaxassislik: bo‘yoqning qurishini kuzatish</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Qiziqarli faktlar -->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center gradient-text mb-5" data-aos="fade-up">Biz haqimizda mutlaqo e’tiborsiz faktlar</h2>
            <div class="row g-4">
                <div class="col-md-3" data-aos="fade-up">
                    <div class="card stat-card text-center">
                        <div class="card-body">
                            <h3 class="counter" data-target="247">0</h3>
                            <p>Iliq qahva finjonlari iste’mol qilindi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card stat-card text-center">
                        <div class="card-body">
                            <h3 class="counter" data-target="1432">0</h3>
                            <p>Liftdagi sukunat ichida o‘tgan daqiqalar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card stat-card text-center">
                        <div class="card-body">
                            <h3 class="counter" data-target="583">0</h3>
                            <p>Suv sovutgich atrofidagi noqulay suhbatlar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card stat-card text-center">
                        <div class="card-body">
                            <h3 class="counter" data-target="892">0</h3>
                            <p>"Orzuda yashayapmiz" degan paytlarimiz</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>© 2024 Zerikarli Dunyo. Barcha huquqlar himoyalangan (ularni hech kim xohlamasligiga qaramay).</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Statistika
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const increment = target / 200;
            
            const updateCounter = () => {
                const count = parseInt(counter.innerText);
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCounter, 1);
                } else {
                    counter.innerText = target;
                }
            };
            
            updateCounter();
        });
    </script>
</body>
</html>