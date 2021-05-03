<?php
    include('../config.php');

    session_start();

    $mail = $_SESSION['User']['email'];

    $sql = "DROP TABLE ".$_SESSION['User']['dbName'];
    $query1 = mysqli_query($conn, $sql);

    $sqlUpdate = "UPDATE userdatabase SET tbl = 0, dbName = '' WHERE email = '$mail'";
    $query2 = mysqli_query($conn, $sqlUpdate);

    $sqlGetTable = "SELECT * FROM userdatabase WHERE email = '$mail'";
    $query3 = mysqli_query($conn, $sqlGetTable);
    $_SESSION['User'] = mysqli_fetch_array($query3);

    header("location: ../notepadUser.php");
?>