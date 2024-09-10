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
$query = $db->prepare('SELECT * FROM wmsucolleges WHERE college  = :value');

// Bind the value parameter to the query
$query->bindParam(':value', $value);

// Execute the query and fetch the results as an associative array
$query->execute();

$result = [];

while($row = $query->fetch(PDO::FETCH_ASSOC)){
    // echo $row['college'];
    $result[] = $row['dept'];
    // $result['count']++;
}





// Send the results back to the client as JSON
echo json_encode($result);
