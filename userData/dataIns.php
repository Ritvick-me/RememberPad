<?php

    include('../config.php');

    session_start();

    $val = $_POST['dataVal'];

    $sql = "INSERT INTO ".$_SESSION['User']['dbName']."(Data) VALUES ('$val')";
    $query = mysqli_query($conn, $sql);

    header("location:../notepadUser.php");

?>