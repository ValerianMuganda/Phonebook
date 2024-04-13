<!DOCTYPE html>
<html>
<head>
    <title>Contact Details</title>
</head>
<body>

<h2>Contact Details</h2>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


$sql = "SELECT * FROM `students` WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);

// <div class="card">
//   <img src="https://via.placeholder.com/300x200" class="card-image" alt="Card Image">
//   <div class="card-content">
//     <div class="card-title">Interactive Card with Photo</div>
//     <div class="card-description">This is an example of an interactive styled card with a photo.</div>
//     <a href="#" class="card-button">Learn More</a>
//   </div>
// </div>