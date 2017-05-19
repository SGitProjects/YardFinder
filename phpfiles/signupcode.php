<?php
session_start();

include '../dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($first)) {
    header("Location: ../signup.php?error=empty");
    exit();
}
if (empty($last)) {
    header("Location: ../signup.php?error=empty");
    exit();
}
if (empty($email)) {
    header("Location: ../signup.php?error=empty");
    exit();
}
if (empty($password)) {
    header("Location: ../signup.php?error=empty");
    exit();
}
else {
$sql = "SELECT email FROM user WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$emailcheck = mysqli_num_rows($result);
if ($emailcheck > 0) {
    header("Location: ../signup.php?email=empty");
    exit();
}else {

$encrypted_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO user (first, last, email, password) VALUES ('$first', '$last', '$email', '$encrypted_password')";
$result = mysqli_query($conn, $sql);

header("Location: ../index.php");
    }
}
?>