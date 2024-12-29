<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ro'yxatdan o'tish</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- AOS (Animatsiya) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
        }

        .form-container .form-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
            color: #495057;
        }

        .form-container input {
            margin-bottom: 15px;
        }

        .form-container .btn-primary {
            background: linear-gradient(45deg, #6c757d, #495057);
            border: none;
            transition: all 0.3s;
        }

        .form-container .btn-primary:hover {
            background: linear-gradient(45deg, #495057, #6c757d);
        }

        .form-container .login-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #495057;
        }

        .gradient-text {
            background: linear-gradient(45deg, #6c757d, #495057);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body>
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

    <!-- PHP Ro'yxatdan o'tish   -->
    <?php
        require('./conection.php');
        if (isset($_POST['signUP_button'])) {
            $name = $_POST['name'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confPassword = $_POST['confiPassword'];
            
            if (!empty($name) && !empty($lastName) && !empty($email) && !empty($password)) {
                if ($password == $confPassword) {
                    $p = crud::conect()->prepare('INSERT INTO crudtable(name, lastName, email, pass) VALUES(:n, :l, :e, :p)');
                    $p->bindValue(':n', $name);
                    $p->bindValue(':l', $lastName);
                    $p->bindValue(':e', $email);
                    $p->bindValue(':p', $password);
                    $p->execute();
                    echo '<div class="alert alert-success text-center" data-aos="fade-down">Yangi foydalanuvchi muvaffaqiyatli qo\'shildi</div>';
                } else {
                    echo '<div class="alert alert-danger text-center" data-aos="fade-down">Parol noto\'g\'ri</div>';
                }
            }
        }
    ?>

    <!-- Forma bo'limi -->
    <div class="form-container" data-aos="fade-up">
        <div class="form-title">Ro'yxatdan o'tish</div>
        <form action="" method="post">
            <input type="text" name="name" class="form-control" placeholder="Ism" required>
            <input type="text" name="lastName" class="form-control" placeholder="Familiya" required>
            <input type="email" name="email" class="form-control" placeholder="Elektron pochta" required>
            <input type="password" name="password" class="form-control" placeholder="Parol" required>
            <input type="password" name="confiPassword" class="form-control" placeholder="Parolni qayta kiriting" required>
            <button type="submit" name="signUP_button" class="btn btn-primary">Ro'yxatdan o'tish</button>
            <a href="./login.php" class="login-link">Hisobingiz bormi? Kirish</a>
        </form>
    </div>

    <!-- Bootstrap va AOS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>
</html>
