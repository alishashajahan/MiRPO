<?php
// Database connection
$servername = "localhost"; // Replace with your server name
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "evolution";    // Replace with your database name

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
$sql = "SELECT `SI no:`, `miRNA`, `Action/target description`, `Evolution`, `Citation` FROM evolutionalishaaak";
if ($search) {
    $search = $conn->real_escape_string($search);
    $sql .= " WHERE `miRNA` LIKE '%$search%' OR `Action/target description` LIKE '%$search%' OR `Evolution` LIKE '%$search%' OR `Citation` LIKE '%$search%'";
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
            margin: 0;
            padding: 0;
            height: 100vh;
            background: linear-gradient(to bottom right, #ccffcc 25%, transparent 25%) top left,
                        linear-gradient(to top left, #ccffcc 25%, transparent 25%) top right,
                        linear-gradient(to bottom left, #ccffcc 25%, transparent 25%) bottom left,
                        linear-gradient(to top right, #ccffcc 25%, transparent 25%) bottom right,
                        linear-gradient(to bottom, #ccffcc 20%, transparent 20%) top;
            background-size: 50% 50%;
            background-repeat: no-repeat;
        }
        /* Basic styling for links */
        a {
            color: blue;
            text-decoration: underline;
        }
        /* Styling for links on hover */
        a:hover {
            color: darkblue;
        }
        .back-link {
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
            margin: 20px;
            display: inline-block;
        }
    </style>
</head>
<body>

<a href="index.php" class="back-link">Back to Home</a> <!-- Back to Home link -->

<h1>Evolution</h1>

<!-- Search Form -->
<form method="POST" action="">
    <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Type to search...">
    <input type="submit" value="Search">
</form>

<?php
if ($result->num_rows > 0) {
    // Output data for each miRNA
    echo "<table border='1'>";
    echo "<tr>
            <th>SI no:</th>
            <th>miRNA</th>
            <th>Action/target description</th>
            <th>Evolution</th>
            <th>Citation</th>
          </tr>";

    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row["SI no:"]) . "</td>
                <td>" . htmlspecialchars($row["miRNA"]) . "</td>
                <td>" . htmlspecialchars($row["Action/target description"]) . "</td>
                <td>" . htmlspecialchars($row["Evolution"]) . "</td>
                <td>" . htmlspecialchars($row["Citation"]) . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No miRNA data available.";
}

$conn->close();
?>

</body>
</html>
