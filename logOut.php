<?php

    include('config.php');

    session_start();

    session_regenerate_id();

    session_destroy();

    $_SESSION['User'] = "";

    header("location: index.php");

?>