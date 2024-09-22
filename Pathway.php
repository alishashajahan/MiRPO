<?php
// Database connection
$servername = "localhost"; // Replace with your server name
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "specific_pathway"; // Replace with your database name

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
$sql = "SELECT `miRNA`, `Target gene`, `Pathway`, `Pathway in pictorial representation`, `Citation` FROM pathwayalishaaak";
if ($search) {
    $search = $conn->real_escape_string($search);
    $sql .= " WHERE `miRNA` LIKE '%$search%' OR `Target gene` LIKE '%$search%' OR `Pathway` LIKE '%$search%' OR `Citation` LIKE '%$search%'";
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
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<a href="index.php" class="back-link">Back to Home</a> <!-- Back to Home link -->

<h1>Pathway</h1>

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
            <th>miRNA</th>
            <th>Target gene</th>
            <th>Pathway</th>
            <th>Pathway in pictorial representation</th>
            <th>Citation</th>
          </tr>";

    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        // Extract the Pathway in pictorial representation field
        $pathway_image = htmlspecialchars($row["Pathway in pictorial representation"]);
        // Check if the extracted value is a URL
        if (filter_var($pathway_image, FILTER_VALIDATE_URL)) {
            $pathway_image = "<a href='" . $pathway_image . "' target='_blank'>" . $pathway_image . "</a>";
        } else {
            $pathway_image = htmlspecialchars($row["Pathway in pictorial representation"]); // Show as text if not a URL
        }
        
        echo "<tr>
                <td>" . htmlspecialchars($row["miRNA"]) . "</td>
                <td>" . htmlspecialchars($row["Target gene"]) . "</td>
                <td>" . htmlspecialchars($row["Pathway"]) . "</td>
                <td>" . $pathway_image . "</td>
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
