<?php
echo "k8-deployment 8.0.0 yaml";

echo "<pre>";
echo "======================================================================";
echo "</pre>";

echo "connecting to mysql";
echo "<pre></pre>";

$servername = getenv('DEV_DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');


// $servername = $_ENV['DEV_DB_HOST'];
// $username = $_ENV['DB_USER'];
// $password = $_ENV['DB_PASSWORD'];

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

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
