<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

$username = $_SESSION['username'];
$password = 'password'; // Bu değeri gerçek veri tabanından çekmelisiniz.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anasayfa</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <style>
        body {
            padding-top: 3rem;
            padding-bottom: 3rem;
            color: #343a40; /* Yazı rengini değiştirdik */
            background-color: #f8f9fa; /* Arka plan rengini değiştirdik */        }

        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        .navbar {
            font-size: 1.25rem;
        }

        .dropdown-item {
            color: #ffffff;
            font-size: 1.25rem;
        }

        .dropdown-menu {
            background-color: #343a40;
            border-radius: 0;
        }

        .carousel {
            margin-bottom: 4rem;
        }

        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        .carousel-item {
            height: 32rem;
        }

        .carousel-item>img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 32rem;
        }

        .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .marketing h2 {
            font-weight: 400;
        }

        .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
        }

        .featurette-divider {
            margin: 5rem 0;
        }

        .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -.05rem;
        }

        @media (min-width: 40em) {

            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }

        /**** cv için additon css ***/
        body {
            font-family: "Poppins", sans-serif;
            background-color: #f8f9fa;
            height: 100vh;
            margin: 0;
            padding: 5rem;
        }

        .resume-section {
            padding: 20px;
            font-size: 0.9rem;
        }

        .profile-pic {
            width: 100%;
            border-radius: 50%;
        }

        .contact-info i {
            margin-right: 10px;
        }

        .name {
            text-align: right;
            margin-top: 5px;
        }

        .section-title {
            font-size: 1.1rem;
            color: #343a40;
            border-bottom: 2px solid #343a40;
            display: inline-block;
        }

        .content-section {
            margin-bottom: 20px;
        }

        .contact-info,
        .content-section {
            text-align: left;
        }

        .left-section {
            padding: 20px;
        }

        .right-section {
            padding: 40px 20px;
        }

        .container {
            margin: 0 auto;
            max-width: 1100px;
            padding: 0 30px;
        }

        /***************home için css addition*********/

        .box {
            background-color: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Hafif bir gölge ekle */
        }

        .box p {
            margin-bottom: 10px;
        }

        .container {
            max-width: 1100px;
            padding: 0 30px;
        }

    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="hakkimda.html">Hakkımda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Özgeçmiş</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ilgi.html">İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="sehrim.html" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Şehrim
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="sehrim.html">Memleketim Eskişehir</a></li>
                            <li><a class="dropdown-item" href="eses.html">Mirasımız Eskişehirspor</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="giris.php">Giriş Yap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.html">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="box">
            <p>Başarılı giriş</p>
        </div>
        <div class="box">
            <p>Merhaba <?php echo htmlspecialchars($username); ?>, hoş geldiniz.</p>
        </div>
        <div class="box">
            <p>Mail adresiniz: <?php echo htmlspecialchars($username); ?></p>
            <p>Şifreniz: <?php echo htmlspecialchars($password); ?></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>

</body>

</html>