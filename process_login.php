<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'password') {
        header('Location: welcome.php');
        exit;
    } else {
        echo 'Invalid username or password.';
    }
}
?>
