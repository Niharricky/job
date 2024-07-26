<?php
include 'config.php';

$keyword = $_POST['keyword'];
$location = $_POST['location'];
$category = $_POST['category'];
$salary_range = $_POST['salary-range'];

$sql = "SELECT * FROM jobs WHERE (title LIKE '%$keyword%' OR description LIKE '%$keyword%')
AND location LIKE '%$location%'
AND requirements LIKE '%$category%'
AND salary LIKE '%$salary_range%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Title: " . $row["title"]. " - Location: " . $row["location"]. " - Salary: " . $row["salary"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
