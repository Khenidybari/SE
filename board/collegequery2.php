<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "alumni";
// Retrieve the value parameter from the query string
$value = $_GET['value'];

// Create a new PDO object to connect to your database
$db = new PDO('mysql:host=localhost;dbname=' . $dbName, 'root', '');

// Prepare a SQL query to retrieve data from your database
$query = $db->prepare('SELECT * FROM college WHERE dategraduated = :value');

// Bind the value parameter to the query
$query->bindParam(':value', $value);

// Execute the query and fetch the results as an associative array
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);

// Send the results back to the client as JSON
echo json_encode($results);
