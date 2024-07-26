<?php
include 'config.php';

$apply_method = $_POST['apply-method'];

$sql = "INSERT INTO applications (apply_method) VALUES ('$apply_method')";

if ($conn->query($sql) === TRUE) {
    echo "Application submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
