<?php
session_start();

$valid_credentials = [
    'user@example.com' => 'password'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if (empty($username) || empty($password)) {
        header('Location: giris.php?error=Kullanıcı adı ve şifre giriniz.');
        exit;
    }

    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        header('Location: giris.php?error=Kullanıcı adınız email formatında olmalıdır.');
        exit;
    }

    if (!isset($valid_credentials[$username]) || $valid_credentials[$username] !== $password) {
        header('Location: giris.php?error=Geçersiz kullanıcı adı veya şifre.');
        exit;
    }

    $_SESSION['username'] = $username;
    header('Location: home.php');
    exit;
}
?>
