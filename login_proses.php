<?php
$username = $_POST['username'];
$password = md5($_POST['password']);

include 'config.php';

$user = mysqli_query($conn, "select * from user where username='$username' and password='$password'");
$chek = mysqli_num_rows($user);
if ($chek > 0) {
    header("location:index.php");
} else {
    header("location:login.php");
}
