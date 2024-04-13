<!DOCTYPE html>
<html>
<head>
    <title>Contact Details</title>
</head>
<body>

<h2>Contact Details</h2>

<?php
// Sample data for contact details
$contacts = array(
    1 => array(
        'name' => 'John Doe',
        'phone' => '123-456-7890',
        'email' => 'john@example.com'
    ),
    2 => array(
        'name' => 'Jane Smith',
        'phone' => '456-789-0123',
        'email' => 'jane@example.com'
    ),
    3 => array(
        'name' => 'Bob Johnson',
        'phone' => '789-012-3456',
        'email' => 'bob@example.com'
    )
);

// Get the ID from the URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Display contact details if ID is valid
if (isset($contacts[$id])) {
    echo "<p><strong>Name:</strong> " . $contacts[$id]['name'] . "</p>";
    echo "<p><strong>Phone:</strong> " . $contacts[$id]['phone'] . "</p>";
    echo "<p><strong>Email:</strong> " . $contacts[$id]['email'] . "</p>";
} else {
    echo "<p>Contact not found.</p>";
}
?>

<a href="index.php">Back to Phonebook</a>

</body>
</html>
