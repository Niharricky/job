<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn) {
    echo"Ypu are connected";}

    else {
        echo"You are not connected";
}
?>
