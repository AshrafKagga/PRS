<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prs";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql ="SHOW TABLES WHERE `Tables_in_database` IN (SELECT `table_name` FROM `information_schema`.`tables` WHERE `table_schema` = 'database')";

$results = $conn->query($sql);
