<?php

    include('../config.php');

    session_start();

    $val = $_POST['dataVal'];

    $sql = "DELETE FROM ".$_SESSION['User']['dbName']." WHERE data = '$val'";
    $query = mysqli_query($conn, $sql);

    header("location:../notepadUser.php");

?>