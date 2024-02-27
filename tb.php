<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prs";
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "prs");

// Query table names in database
$sql = "show Tables";
$results = $conn->query($sql);
if($results->num_rows >0){
    //loop through each table name and print them out
    while($row = $results->fetch_assoc()){
        echo $row["Tables_in_".$dbname] . "<br>";
    }
}else{
    echo "notable found in the database.";
}
$conn->close();

?>
