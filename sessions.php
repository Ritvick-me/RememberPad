<?php 

include_once('config.php');

session_start();

if(!isset($_SESSION['UserName']))
{
    header("location:index.php");
    die();
}
//mysqli_num_rows() to give the number of rows in a table.
//mysqli_error();

?>