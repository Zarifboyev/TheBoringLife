<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yangilash</title>

    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 350px;
        }

        .form-container .form-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-container input {
            margin-bottom: 15px;
        }

        .form-container .btn-primary {
            width: 100%;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 20px;
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

    <!-- Update  -->
    <div class="form-container">
        <div class="form-title">Foydalanuvchi ma'lumotlarini yangilash</div>
        <?php
            require('./conection.php');
            if (isset($_GET['id_up'])) {
                $id_up = $_GET['id_up'];
                $data = crud::userDataPerId($id_up);
            }
            if (isset($_POST['signUP_button'])) {
                $name = $_POST['name'];
                $lastName = $_POST['lastName'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                if (!empty($name) && !empty($lastName) && !empty($email) && !empty($password)) {
                    $p = crud::conect()->prepare('UPDATE crudtable SET name=:n, lastName=:l, email=:e, pass=:p WHERE id=:id');
                    $p->bindValue(':id', $id_up);
                    $p->bindValue(':n', $name);
                    $p->bindValue(':l', $lastName);
                    $p->bindValue(':e', $email);
                    $p->bindValue(':p', $password);
                    $p->execute();
                    echo '<div class="alert alert-success text-center">Yangilandi!</div>';
                }
            }
        ?>
        <form action="" method="post">
            <input type="text" name="name" class="form-control" placeholder="Ism" value="<?php if (isset($data)) { echo $data['name']; } ?>" required>
            <input type="text" name="lastName" class="form-control" placeholder="Familiya" value="<?php if (isset($data)) { echo $data['lastName']; } ?>" required>
            <input type="email" name="email" class="form-control" placeholder="Elektron pochta" value="<?php if (isset($data)) { echo $data['email']; } ?>" required>
            <input type="password" name="password" class="form-control" placeholder="Parol" value="<?php if (isset($data)) { echo $data['pass']; } ?>" required>
            <button type="submit" name="signUP_button" class="btn btn-primary">Yangilash</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
