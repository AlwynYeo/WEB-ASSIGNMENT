<?php
$hostname = "127.0.0.1";

$username = "root";

$password = "";

$database = "HistorySociety";

$conn = new mysqli($hostname, $username, $password,$database);
if($conn -> connect_error) {
    echo "Database Connection Failed!";
}
if(!$conn -> select_db($database)) {
    echo "Database Not Found!";
}