<?php
$con = mysqli_connect('localhost', 'root', '');

if ($con) {
    echo "Connection Successful";
} else {
    echo "Connection Failed";
}

mysqli_select_db($con, 'mirpo');

$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['Description'];

$query = "INSERT INTO users (Name, Email, description) VALUES ('$name', '$email', '$description')";

// To check if it works
if (mysqli_query($con, $query)) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

header('Location: index.php');
?>

