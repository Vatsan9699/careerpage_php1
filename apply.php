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

$job_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $resume = $conn->real_escape_string($_POST['resume']);

    $sql = "INSERT INTO applications (job_id, name, email, resume) VALUES ($job_id, '$name', '$email', '$resume')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Application submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch job details
$job_sql = "SELECT * FROM jobs WHERE id = $job_id";
$job_result = $conn->query($job_sql);
$job = $job_result->fetch_assoc();

include 'header.php';
?>

<h2>Apply for: <?php echo htmlspecialchars($job["title"]); ?></h2>

<form action="apply.php?id=<?php echo $job_id; ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="resume">Resume:</label>
    <textarea id="resume" name="resume" required></textarea><br>

    <input type="submit" value="Submit Application">
</form>

<?php
include 'footer.php';
$conn->close();
?>