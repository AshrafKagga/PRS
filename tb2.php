<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all table names in the database
$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop through each table name and query the table
    while($row = $result->fetch_assoc()) {
        $table_name = $row["Tables_in_" . $dbname];
        $sql_query = "SELECT * FROM " . $table_name;
        $table_result = $conn->query($sql_query);
        
        // Do something with the table result
        // For example, print out the table data
        if ($table_result->num_rows > 0) {
            echo "<h2>" . $table_name . "</h2>";
            echo "<table>";
            while($table_row = $table_result->fetch_assoc()) {
                echo "<tr>";
                foreach ($table_row as $key => $value) {
                    echo "<td>" . $key . "</td>";
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
} else {
    echo "No tables found in the database.";
}

$conn->close();
?>
