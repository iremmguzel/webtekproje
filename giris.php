<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giriş Yap</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">

    <style>
        body {
            padding-top: 3rem;
            padding-bottom: 3rem;
            color: #000000;
            background-color: rgb(9, 2, 2);
            font-family: "Poppins", sans-serif;
            background: url(images/haller.jpg);
            background-size: cover;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        .navbar {
            font-size: 1.25rem;
            color: #fafafa;
            background-color: #2a2d30;
        }

        .dropdown-item {
            color: #ffffff;
            font-size: 1.25rem;
        }

        .dropdown-menu {
            background-color: #343a40;
            border-radius: 0;
        }

        .nav-item-margin {
            margin-left: 10px;
            margin-right: 10px;
        }

        /***login addition css****/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            font-weight: 600;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
        }

        .box {
            width: 450px;
            height: 500px;
            background: #fff;
            backdrop-filter: blur(20px);
            border-radius: 30px;
            padding: 40px;
            box-shadow: 2px 2px 15px 2px rgba(0, 0, 0, 0.1),
                -2px -0px 15px 2px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .header {
            margin-bottom: 50px;
        }

        .header header {
            display: flex;
            justify-content: right;
        }

        header img {
            width: 25px;
        }

        .header p {
            font-size: 25px;
            font-weight: 800;
            margin-top: 10px;
            text-align: center;
        }

        .input-box {
            display: flex;
            flex-direction: column;
            margin: 10px 0;
            position: relative;
        }

        i {
            font-size: 22px;
            position: absolute;
            top: 35px;
            right: 12px;
            color: #595b5e;
        }

        input {
            height: 40px;
            border: 2px solid rgb(153, 157, 158);
            border-radius: 7px;
            margin: 7px 0;
            outline: none;
        }

        .input-field {
            font-weight: 500;
            padding: 0 10px;
            font-size: 17px;
            color: #333;
            background: transparent;
            transition: all .3s ease-in-out;
        }

        .input-field:focus {
            border: 2px solid rgb(89, 53, 180);
        }

        .input-field:focus~i {
            color: rgb(89, 53, 180);
        }

        .input-submit {
            margin-top: 20px;
            background: #1e263a;
            border: none;
            color: #fff;
            cursor: pointer;
            transition: all .3s ease-in-out;
        }

        .input-submit:hover {
            background: #122b71;
        }

        .error {
            background-color: red;
            color: white;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .bottom {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 25px;
        }

        .bottom span a {
            color: #727374;
            text-decoration: none;
        }

        .bottom span a:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand nav-item-margin" href="hakkimda.html">Hakkımda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link nav-item-margin" aria-current="page" href="ozgecmis.html">Özgeçmiş</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-item-margin" href="ilgi.html">İlgi Alanlarım</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-item-margin dropdown-toggle" href="sehrim.html" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <a class="nav-link nav-item-padding" href="giris.php">Giriş Yap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-item-padding" href="iletisim.html">İletişim</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="box">
            <div class="header">
                <p>Giriş Yap</p>
            </div>
            <?php if (isset($_GET['error'])): ?>
                <div class="error">
                    <?php echo htmlspecialchars($_GET['error']); ?>
                </div>
            <?php endif; ?>
            <form action="login.php" method="post">
                <div class="input-box">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="username" name="username" class="input-field" id="username">
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <label for="password">Şifre</label>
                    <input type="password" name="password" class="input-field" id="password">
                    <i class="bx bx-lock"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="input-submit" value="GİRİŞ YAP">
                </div>
            </form>
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