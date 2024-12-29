<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>G‘oyatda zerikarli takliflar - Zerikarli olam</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/styles/offers.css">

    <style>
        .gradient-text {
            background: linear-gradient(45deg, #6c757d, #495057);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .offer-card {
            transition: all 0.3s ease;
            border: none;
            overflow: hidden;
        }
        .offer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #6c757d;
            transition: transform 0.3s ease;
        }
        .offer-card:hover .feature-icon {
            transform: rotate(360deg);
        }
        .price-tag {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #6c757d;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
        }
        .boring-badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background: #f8f9fa;
            color: #6c757d;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
        }
        .testimonial-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 2rem;
            margin: 1rem 0;
        }
        .subscription-features {
            list-style: none;
            padding: 0;
        }
        .subscription-features li {
            margin: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
        }
        .subscription-features li::before {
            content: "→";
            position: absolute;
            left: 0;
            color: #6c757d;
        }
    </style>
</head>
<body class="bg-light">
    <!-- Navbar bo'limi -->
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

    <!-- Bosh Bo'limi -->
    <header class="bg-white py-5 mt-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center">
                <h1 class="display-4 gradient-text fw-bold" data-aos="fade-up">G‘oyat oddiy takliflar</h1>
                <p class="lead text-muted mb-0" data-aos="fade-up" data-aos-delay="200">O‘zingizga ma’qul bo‘lgan oddiy ko‘ngil ochish darajasini tanlang</p>
            </div>
        </div>
    </header>

    <!-- Premium Obunalar -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center gradient-text mb-5" data-aos="fade-up">O‘rta darajadagi mukofotli tarif rejalari</h2>
            <div class="row g-4">
                <!-- Basic Plan -->
                <div class="col-md-4" data-aos="fade-up">
                    <div class="card offer-card h-100">
                        <div class="boring-badge">Eng o‘rtacha variant</div>
                        <div class="card-body text-center">
                            <i class="material-icons feature-icon">coffee</i>
                            <h3 class="card-title">Oddiy zerikarlilik</h3>
                            <div class="price-tag">49,000 so‘m/oy</div>
                            <ul class="subscription-features">
                                <li>Biroz qiziqarli faktlarga yo‘l ochish</li>
                                <li>Bo‘yoq qurishiga oid haftalik axborot byulleteni</li>
                                <li>Oddiy kutish xonasi simulator dasturi</li>
                                <li>Haftasiga 3 ta oddiy va kundalik mem</li>
                            </ul>
                            <button class="btn btn-outline-secondary mt-3">Zerikarli bo‘lishni boshlang</button>
                        </div>
                    </div>
                </div>

                <!-- Pro Plan -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card offer-card h-100">
                        <div class="boring-badge">Muharrirning tanlovi</div>
                        <div class="card-body text-center">
                            <i class="material-icons feature-icon">schedule</i>
                            <h3 class="card-title">Professional prokrastinator</h3>
                            <div class="price-tag">99,000 so‘m/oy</div>
                            <ul class="subscription-features">
                                <li>Barcha asosiy zerikarli xususiyatlar</li>
                                <li>Yuqori sifatli yo‘l tirbandligi ovozlari</li>
                                <li>Eksklyuziv DYHX kutish imitatsiya o‘yini</li>
                                <li>Oylik "O‘tning o‘sishini kuzatish" jonli efiri</li>
                            </ul>
                            <button class="btn btn-secondary mt-3">Yanada zerikarli darajaga ko‘tarilish</button>
                        </div>
                    </div>
                </div>

                <!-- Ultimate Plan -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card offer-card h-100">
                        <div class="boring-badge">Yuqori zerikarlik</div>
                        <div class="card-body text-center">
                            <i class="material-icons feature-icon">hotel</i>
                            <h3 class="card-title">Oliy darajadagi uyquchi</h3>
                            <div class="price-tag">119,000 so‘m/oy</div>
                            <ul class="subscription-features">
                                <li>Barcha professional xususiyatlar</li>
                                <li>Lift musiqasiga VIP darajadagi kirish ruxsati</li>
                                <li>Yuqori sifatli kutish musiqasi to‘plami</li>
                                <li>"Bo‘yoqning qurishini kuzatish" bo‘yicha ekskluziv mahorat darsi</li>
                            </ul>
                            <button class="btn btn-secondary mt-3">Zerikishning cho‘qqisiga erishing</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Foydalanuvchi fikrlari -->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center gradient-text mb-5" data-aos="fade-up">Mutlaqo o‘rtacha taqrizlar</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="testimonial-card">
                        <p class="mb-3">"Men haqiqatan ham foydalangan eng o‘rtamiyona xizmat. Aynan men izlayotgan narsa ekan!"</p>
                        <small class="text-muted">- Doniyor K., Professional Navbatda turuvchi</small>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <p class="mb-3">"Ularning DMV simulyatori meni haqiqiy sinovga yaxshi tayyorladi. 10 balldan 5 ball berib, tavsiya qilgan bo‘lardim."</p>
                        <small class="text-muted">- Muxlisa H., lift musiqasining muxlisi</small>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <p class="mb-3">"Men bundan ortiq hayratlanmagan bo‘lardim. Juda ajoyib."</p>
                        <small class="text-muted">- Nodirbek R., Sertifikatlangan bo‘yoq kuzatuvchisi</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Bo'limi -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center gradient-text mb-5" data-aos="fade-up">Ko‘p so‘raladigan (biroq zerikarli) savollar</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item" data-aos="fade-up">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Zerikish uchun nima uchun pul to‘lashim kerak?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                Chunki ehtiyotkorlik bilan tanlangan zerikish tasodifiy zerikishdan afzalroq. Bizning mutaxassislar jamoamiz sizga iloji boricha eng oddiy tajribalarni taqdim etish uchun tinmay mehnat qiladi.                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-aos="fade-up">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Bu xizmat rostdan ham va’da qilinganidek zerikarli ekanmi?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                Xizmatimiz aynan reklama qilingani kabi zerikarli ekanligiga kafolat beramiz. Agar tasodifan bizning biror mazmunimizni qiziqarli deb topsangiz, sizni qo‘shimcha lift musiqasi bilan tovon to‘laymiz.                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Footer -->
        <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>© 2024 Zerikarli Dunyo. Barcha huquqlar himoyalangan.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // AOS kutubxonasi initsizalatsiyasi
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>