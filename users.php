<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foydalanuvchilar Jadvali</title>

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
        }

        .table-container {
            margin-top: 80px;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .table-container h2 {
            font-size: 24px;
            font-weight: 700;
            color: #495057;
            text-align: center;
        }

        .btn-sm img {
            width: 16px;
            height: 16px;
        }

        .btn-warning {
            color: #fff;
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

    <!-- Jadval -->
    <div class="container table-container" data-aos="fade-up">
        <h2 class="mb-4">Foydalanuvchilar Jadvali</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Ism</th>
                    <th>Familiya</th>
                    <th>Elektron pochta</th>
                    <th>Parol</th>
                    <th>O'chirish</th>
                    <th>Tahrirlash</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('./conection.php');
                $p = crud::Selectdata();
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $e = crud::delete($id);
                }
                if (count($p) > 0) {
                    for ($i = 0; $i < count($p); $i++) {
                        echo '<tr>';
                        foreach ($p[$i] as $key => $value) {
                            if ($key != 'id') {
                                echo '<td>' . htmlspecialchars($value) . '</td>';
                            }
                        }
                        ?>
                        <td>
                            <a href="users.php?id=<?php echo $p[$i]['id'] ?>" class="btn btn-danger btn-sm">
                                <img src="./images/trash.svg" alt="O'chirish">
                            </a>
                        </td>
                        <td>
                            <a href="upDate.php?id_up=<?php echo $p[$i]['id'] ?>" class="btn btn-warning btn-sm">
                                <img src="./images/edit.svg" alt="Tahrirlash">
                            </a>
                        </td>
                        <?php
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
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
