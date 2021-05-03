<?php

include('config.php');
session_start();

$mail = $_POST['email'];
$name = $_POST['name'];
$pass = md5($_POST['pass']);

$sql = "INSERT INTO userdatabase(email, name, password) VALUES ('$mail', '$name', '$pass');";
$query = mysqli_query($conn, $sql);

$_SESSION['goodGateway'] = "Registered. Please log in now.";
header("location:LoginPage.php");

?>