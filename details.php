<!DOCTYPE html>
<html>
<head>
    <title>Contact Details</title>
    <style>
    .card {
      width: 800px;
      border: 1px solid #ccc;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      margin-left:250px;
      text-align: center;
      background-color: #f1f1f1;
      padding: 10px;
    }
    img{
        border-radius: 50%;
        width: 300px;
        height: 300px;
    }
    </style>
    
</head>
<body>

<h2>Contact Details</h2>
<?php

$conn = new mysqli("localhost", "root", "", "phone_db");


$id = $_GET["id"];


$sql = "SELECT * FROM `contacts` WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);


$image =  $row['image'];
$name =  $row['name'];
$phone = $row['phone'];
echo   <<<ROW
<div class = "card">

    <img src="$image" alt="Profile Picture">
    <h2>$name</h2>
    <p>$phone:</p>


</div>
ROW;



?>

<input type="button" value="delete" onclick="window.location.href='delete.php?id=<?php echo $row['id']; ?>'" >
<?php





?>
