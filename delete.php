<?php
    $conn = new mysqli("localhost", "root", "", "phone_db");

    $id = $_GET['id'];
    $sql = "DELETE FROM `contacts` WHERE `id` = '$id'";

    $res = mysqli_query($conn, $sql);

    if(!$res){
        die("Failed To Delete");
    }else{
        header("location:index.php");
    }


?>