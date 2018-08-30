<?php
echo "k8-deployment 3.0.0 yaml";

echo "<pre>";
echo "======================================================================";
echo "</pre>";

echo "connecting to mysql";
echo "<pre></pre>";


$servername = getenv('DEV_DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

// $servername = "127.0.0.1";
// $username = "proxyuser";
// $password = "rebate1234";

echo $servername;
echo "<pre></pre>";
echo $username;
echo "<pre></pre>";
echo $password;
echo "<pre></pre>";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
