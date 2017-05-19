<?php
session_start();
include '../dbh.php';

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email)) {
    header("Location: ../login.php?succ=empty");
    exit();
}
if (empty($password)) {
    header("Location: ../login.php?password=empty");
    exit();
} else {




$sql = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_password = $row['password'];
$hash = password_verify($password, $hash_password);

if ($hash == 0) {
    header("Location: ../index.php?error=empty");
    exit();


} else {


$sql = "SELECT * FROM user WHERE email='$email' AND password='$hash_password'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    echo "Your email or password is incorrect";
} else {
    $_SESSION['id'] = $row['id'];
}

header ("Location: ../index.php");
exit();
}
}

?>