<?php
include 'config.php';

$title = $_POST['title'];
$description = $_POST['description'];
$requirements = $_POST['requirements'];
$location = $_POST['location'];
$salary = $_POST['salary'];
$employment_type = $_POST['employment-type'];
$employer_id = 1; 

$sql = "INSERT INTO jobs (title, description, requirements, location, salary, employment_type, employer_id)
VALUES ('$title', '$description', '$requirements', '$location', '$salary', '$employment_type', '$employer_id')";

if ($conn->query($sql) === TRUE) {
    echo "New job posted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
