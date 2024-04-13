<?php 

$conn = new mysqli("localhost", "root", "", "phone_db");



?>
<!DOCTYPE html>
<html>
<head>
    <title>Phonebook</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .contact-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>

<h2>Phonebook</h2>

<table>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Phone Number</th>
    </tr>
    <?php

    $sql = "SELECT * FROM `contacts`";
    $result = mysqli_query($conn,$sql);


    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
 ?>

 <tbody>

 
    <tr onclick="window.location='details.php?id=<?php echo $id; ?>'">
        <td><img src="<?php echo $row['image']; ?> " class="contact-image" alt=""></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['phone']; ?></td>
    </tr>

<?php } ?>

 </tbody>

</table>

</body>
</html>
