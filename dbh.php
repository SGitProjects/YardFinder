<?php

$conn = mysqli_connect("localhost", "root", "", "yardlogin");

if (!$conn) {
    die("Connection failed");
}