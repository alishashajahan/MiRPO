<?php
// Database connection
$servername = "localhost"; // Replace with your server name
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "secondarystructure"; // Replace with your database name

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
$sql = "SELECT `miRNA`, `SECONDARY STRUCTURE`, `LINK TO RNAFOLD` FROM secondarystructure";
if ($search) {
    $search = $conn->real_escape_string($search);
    $sql .= " WHERE `miRNA` LIKE '%$search%' OR `SECONDARY STRUCTURE` LIKE '%$search%' OR `LINK TO RNAFOLD` LIKE '%$search%'";
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
        a {
            color: blue;
            text-decoration: underline;
        }
        a:hover {
            color: darkblue;
        }
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

<h1>miRNA Secondary Structures</h1>

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
            <th>SECONDARY STRUCTURE</th>
            <th>LINK TO RNAFOLD</th>
          </tr>";

    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        // Process SECONDARY STRUCTURE field
        $secondary_structure = htmlspecialchars($row["SECONDARY STRUCTURE"]);
        if (filter_var($secondary_structure, FILTER_VALIDATE_URL)) {
            $secondary_structure = "<a href='" . $secondary_structure . "' target='_blank'>" . $secondary_structure . "</a>";
        }

        // Process LINK TO RNAFOLD field
        $link_to_rnafold = htmlspecialchars($row["LINK TO RNAFOLD"]);
        if (filter_var($link_to_rnafold, FILTER_VALIDATE_URL)) {
            $link_to_rnafold = "<a href='" . $link_to_rnafold . "' target='_blank'>" . $link_to_rnafold . "</a>";
        }

        echo "<tr>
                <td>" . htmlspecialchars($row["miRNA"]) . "</td>
                <td>" . $secondary_structure . "</td>
                <td>" . $link_to_rnafold . "</td>
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
