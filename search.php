<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "careers_new";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get search parameters
$keyword = isset($_GET['keyword']) ? $conn->real_escape_string($_GET['keyword']) : '';
$location = isset($_GET['location']) ? $conn->real_escape_string($_GET['location']) : '';
$experience = isset($_GET['experience']) ? $conn->real_escape_string($_GET['experience']) : '';

// Construct SQL query
$sql = "SELECT * FROM jobs WHERE 1=1";
if (!empty($keyword)) {
    $sql .= " AND (title LIKE '%$keyword%' OR skills LIKE '%$keyword%')";
}
if (!empty($location)) {
    $sql .= " AND location LIKE '%$location%'";
}
if (!empty($experience)) {
    $sql .= " AND experience LIKE '%$experience%'";
}

$result = $conn->query($sql);

// Display results (you can format this as needed)
include 'header.php'; // Create a header.php file with the common HTML head content

echo "<h2>Search Results</h2>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='job-listing'>";
        echo "<h3>" . htmlspecialchars($row["title"]) . "</h3>";
        echo "<p>Company: " . htmlspecialchars($row["company"]) . "</p>";
        echo "<p>Location: " . htmlspecialchars($row["location"]) . "</p>";
        echo "<p>Experience: " . htmlspecialchars($row["experience"]) . "</p>";
        echo "<p>Salary: " . htmlspecialchars($row["salary"]) . "</p>";
        echo "<a href='apply.php?id=" . $row["id"] . "'>Apply</a>";
        echo "</div>";
    }
} else {
    echo "No results found.";
}

include 'footer.php'; // Create a footer.php file with the common closing HTML tags and scripts

$conn->close();
?>