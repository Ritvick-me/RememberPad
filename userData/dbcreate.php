<?php
    include('../config.php');

    session_start();

    $dbName = $_POST['dbName'];

    $mail = $_SESSION['User']['email'];

    $tableName = md5($dbName.$_SESSION['User']['email']);

    $sql = "UPDATE userdatabase SET tbl = 1, dbName = '$tableName' WHERE email = '$mail'";
    $query = mysqli_query($conn, $sql);

    $sqlGetTable = "SELECT * FROM userdatabase WHERE email = '$mail'";
    $query2 = mysqli_query($conn, $sqlGetTable);
    $_SESSION['User'] = mysqli_fetch_array($query2);

    $sqlCreateTable = "CREATE TABLE ".$tableName." ( 
        Data VARCHAR(10000) NOT NULL
    ) ENGINE = InnoDB ";
    $query3 = mysqli_query($conn, $sqlCreateTable);

    header("location: ../notepadUser.php");
    
?>