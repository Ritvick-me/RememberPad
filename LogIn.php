<?php

    include('config.php');
    session_start();

    $mail = $_POST['email'];
    $pass = md5($_POST['pass']);

    $sql = "SELECT password FROM userdatabase WHERE email = '$mail'";
    $query = mysqli_query($conn, $sql);
    $data =  mysqli_fetch_array($query);

    if ($data['password'] === $pass)
    {
        $sqlGetTable = "SELECT * FROM userdatabase WHERE email = '$mail'";
        $query2 = mysqli_query($conn, $sqlGetTable);
        $_SESSION['User'] = mysqli_fetch_array($query2);
        header("location:notepadUser.php");

        $_SESSION['UserName'] = $_SESSION['User']['name'];
    }
    else{
        $_SESSION['badGateway'] = "Incorrect Username or Password.";
        header("location:LoginPage.php");
    }
?>