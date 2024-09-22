<?php 
// Database connection
$servername = "localhost"; // Replace with your server name
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "explore";       // Replace with your database name

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
$sql = "SELECT `miRNA`, `Action/target description`, `General mechanism`, `Regulatory Impact of miRNAs on Target Genes`, `Target gene`, `Citation` FROM explorealishaaak";
if ($search) {
    $search = $conn->real_escape_string($search);
    $sql .= " WHERE `miRNA` LIKE '%$search%' OR `Action/target description` LIKE '%$search%' OR `General mechanism` LIKE '%$search%' OR `Regulatory Impact of miRNAs on Target Genes` LIKE '%$search%' OR `Target gene` LIKE '%$search%' OR `Citation` LIKE '%$search%'";
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

<h1>Explore</h1>

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
            <th>Target Gene</th>
            <th>Action/target description</th>
            <th>General mechanism</th>
            <th>Regulatory Impact of miRNAs on Target Genes</th>
            <th>Citation</th>
          </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        // Link to pre-mirna.php with miRNA as a parameter
        echo "<td><a href='pre-mirna.php?mirna=" . urlencode($row['miRNA']) . "'>" . htmlspecialchars($row['miRNA']) . "</a></td>";
        // Link to pathway.php with Target gene as a parameter
        echo "<td><a href='pathway.php?Target_gene=" . urlencode($row['Target gene']) . "'>" . htmlspecialchars($row['Target gene']) . "</a></td>";
        echo "<td>" . htmlspecialchars($row['Action/target description']) . "</td>";
        // Convert General mechanism field into clickable link if it contains a URL
        $general_mechanism = htmlspecialchars($row['General mechanism']);
        if (filter_var($general_mechanism, FILTER_VALIDATE_URL)) {
            echo "<td><a href='" . $general_mechanism . "' target='_blank'>" . $general_mechanism . "</a></td>";
        } else {
            echo "<td>" . $general_mechanism . "</td>";
        }
        echo "<td>" . htmlspecialchars($row['Regulatory Impact of miRNAs on Target Genes']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Citation']) . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "No miRNA data available.";
}

$conn->close();
?>

</body>
</html>
