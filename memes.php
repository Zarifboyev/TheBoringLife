<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Memingizni yuboring - Zerikarli dunyo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- AOS Kutubxonasi -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/styles/memes.css">

    <style>
        .gradient-text {
            background: linear-gradient(45deg, #6c757d, #495057);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .submit-section {
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }
        .btn-primary {
            background: linear-gradient(45deg, #6c757d, #495057);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(45deg, #495057, #6c757d);
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
        <div class="container text-center">
            <h1 class="display-4 gradient-text fw-bold" data-aos="fade-up">Memingizni yuboring</h1>
            <p class="lead text-muted" data-aos="fade-up" data-aos-delay="200">Zerikarli dunyoga ijodingizni ulashing</p>
        </div>
    </header>

    <!-- Memlarni jo'natish formasi -->
    <section class="py-5">
        <div class="container">
            <div class="submit-section mx-auto" style="max-width: 700px;" data-aos="fade-up">
                <h2 class="text-center gradient-text mb-4">Mem yuborish formasi</h2>
                <form action="submit_meme.php" method="POST" enctype="multipart/form-data" class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Ismingiz</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ismingizni kiriting" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Elektron pochta</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Elektron pochta manzilingizni kiriting" required>
                    </div>
                    <div class="col-12">
                        <label for="memeTitle" class="form-label">Mem sarlavhasi</label>
                        <input type="text" class="form-control" id="memeTitle" name="memeTitle" placeholder="Memingizga nom bering" required>
                    </div>
                    <div class="col-12">
                        <label for="memeFile" class="form-label">Memingizni yuklang</label>
                        <input type="file" class="form-control" id="memeFile" name="memeFile" accept="image/*" required>
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label">Meme tavsifi</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Memingizni tasvirlang (ixtiyoriy)"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">Mem yuborish</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>© 2024 Zerikarli Dunyo. Barcha huquqlar himoyalangan (ularni hech kim istamasa ham).</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        //  AOS
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>
