<?php
// Database connection
$servername = "localhost"; // Replace with your server name
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "pre-mirna";     // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize search query
$search = "";
if (isset($_POST['search'])) {
    $search = $_POST['search'];
}

// Prepare the SQL query with search functionality
$sql = "SELECT `miRNA`, `Pre miRNA` FROM `pre-microrna`";
if ($search) {
    $search = $conn->real_escape_string($search);
    $sql .= " WHERE `miRNA` LIKE '%$search%' OR `Pre miRNA` LIKE '%$search%'";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore miRNAs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .back-link {
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
            color: blue;
            text-decoration: underline;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<a href="index.php" class="back-link">Back to Home</a> <!-- Back to Home link -->

<h1>Pre-miRNAs</h1>

<!-- Search Form -->
<form method="POST" action="">
    <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Type to search...">
    <input type="submit" value="Search">
</form>

<?php
if ($result->num_rows > 0) {
    // Output data for each miRNA
    echo "<table border='1'>";
    echo "<tr><th>miRNA</th><th>Pre miRNA</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['miRNA']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Pre miRNA']) . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "No miRNA data available.";
}

// Close connection
$conn->close();
?>

</body>
</html>
