<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zerikarli Hayot - Hayotning Eng Oddiy Haqiqatlari</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.css" rel="stylesheet">

    <style>
        /* CSS */
        :root {
            --gradient-start: #6c757d;
            --gradient-end: #495057;
        }

        .navbar {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .fact-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 15px;
        }

        .fact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .swiper {
            width: 100%;
            padding: 50px 0;
        }

        .swiper-slide {
            height: auto;
        }

        .swiper .card {
            height: 100%;
            border-radius: 15px;
            overflow: hidden;
        }

        .swiper .card img {
            height: 200px;
            object-fit: cover;
        }

        .boring-counter {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--gradient-start);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .gradient-text {
            background: linear-gradient(45deg, var(--gradient-start), var(--gradient-end));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-section {
            padding-top: 80px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .counter {
            color: var(--gradient-start);
            font-weight: bold;
        }

        #stats .card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        #stats .card:hover {
            transform: translateY(-5px);
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
                    <li class="nav-item"><a class="nav-link active" href="home.php">Bosh sahifa</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">Biz haqimizda</a></li>
                    <li class="nav-item"><a class="nav-link" href="offers.php">Zerikarli takliflar</a></li>
                    <li class="nav-item"><a class="nav-link" href="memes.php">Memlarni yuborish</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Kirish</a></li>
                    <li class="nav-item"><a class="nav-link" href="signUP.php">Ro'yxatdan o'tish</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bosh bo'limi -->
    <header class="hero-section min-vh-100 d-flex align-items-center">
        <div class="container text-center">
            <h1 class="display-3 fw-bold gradient-text mb-4" data-aos="fade-up">Zerikarli voqelikka xush kelibsiz</h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="200">Bu yerda biz kundalik hayotning miyani aynituvchi darajada oddiy tomonlarini nishonlaymiz.</p>
            <div class="boring-counter mb-4" data-aos="fade-up" data-aos-delay="400">
                Buni o'qishga ketgan vaqt: <span id="timeCounter">0</span> soniya
            </div>
        </div>
    </header>

    <!-- Faktlar bo'limi -->
    <section id="facts" class="py-5">
        <div class="container">
            <h2 class="text-center gradient-text mb-5" data-aos="fade-up">Aqlni karaxt qiladigan zerikarli faktlar</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="card fact-card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">O'rtacha hayot haqida ma'lumotlar</h5>
                            <p class="card-text">O'rtacha inson umrining 6 oyini svetoforning qizil chirog'idan yashilga o'tishini kutish bilan o'tkazadi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card fact-card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Ishdagi hayoti</h5>
                            <p class="card-text">Odamlar hech qachon tushunmaydigan atama va shartlarni o'qishga yiliga o'rtacha 13 soatini sarflaydi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card fact-card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Raqamli hayot</h5>
                            <p class="card-text">O'rtacha inson striming xizmatlarida nimani tomosha qilishni tanlash uchun hayotining ikki yilini sarflaydi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Memlar  -->
    <section id="memes" class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center gradient-text mb-5" data-aos="fade-up">Zerikarli memlar to'plami</h2>
            <div class="swiper memeSwiper" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXzFXiqKlQbL6oInUqxsELdLFSF_MCABY_Vg&s" class="card-img-top" alt="Dushanba yig'ilishlari">
                            <div class="card-body">
                                <h5>Dushanba yig'ilishlari</h5>
                                <p>"Bu elektron xat bo'lsa bo'lardi-ku" - Hamma, har joyda</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <img src="https://i.imgflip.com/5s1jx8.jpg" class="card-img-top" alt="Yuklanish jarayoni">
                            <div class="card-body">
                                <h5>Yuklanish jarayoni ko'rsatkichlari</h5>
                                <p>99% tugallandi... 20 daqiqadan beri</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm">
                            <img src="https://www.wikihow.com/images/thumb/d/da/Create-a-Secure-Password-Step-3-Version-2.jpg/v4-460px-Create-a-Secure-Password-Step-3-Version-2.jpg" class="card-img-top" alt="Parol talablari">
                            <div class="card-body">
                                <h5>Parol talablari</h5>
                                <p>Iyeroglif va buvingizning sir saqlangan retsepti albatta bo'lishi shart</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Statistika  -->
    <section id="stats" class="py-5">
        <div class="container">
            <h2 class="text-center gradient-text mb-5" data-aos="fade-up">Kundalik statistika</h2>
            <div class="row g-4">
                <div class="col-md-3" data-aos="fade-up">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <h3 class="counter" data-target="42000">0</h3>
                            <p>Umr davomida yo'l tirbandligida o'tkazilgan soatlar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <h3 class="counter" data-target="1460">0</h3>
                            <p>Oziq-ovqat xarid qilishga sarflangan kunlar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <h3 class="counter" data-target="8760">0</h3>
                            <p>Yo'qolgan narsalarni izlashga ketgan soatlar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <h3 class="counter" data-target="29200">0</h3>
                            <p>Ijtimoiy tarmoqlarni aylantirib o'tkazilgan soatlar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">© 2024 Zerikarli Dunyo. Barcha huquqlar himoyalangan.</p>
        </div>
    </footer>

    <!-- Skript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>

    <script>
        //  AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Initialize Swiper
        new Swiper(".memeSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });

        // Vaqt sanagichi
        setInterval(() => {
            const counter = document.getElementById('timeCounter');
            counter.textContent = parseInt(counter.textContent) + 1;
        }, 1000);

        // Statisikalar animatsiyasi
        const observerOptions = {
            threshold: 0.5
        };

        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        statsObserver.observe(document.querySelector('#stats'));

        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const increment = target / speed;
                
                function updateCounter() {
                    const count = parseInt(counter.innerText);
                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCounter, 1);
                    } else {
                        counter.innerText = target.toLocaleString();
                    }
                }
                
                updateCounter();
            });
        }
    </script>
</body>
</html>