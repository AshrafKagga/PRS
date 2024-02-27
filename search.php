<?php
// Establish a connection to the database
include 'config.php';   

if(isset($_GET['search'])){
    // Retrieve the employee name from a form or user input
    $emp_name = $_GET['Names'];

    // Execute the query to search for the employee by name
    $sql = "SELECT * FROM emp WHERE name LIKE '%$emp_name%'";

    $result = mysqli_query($conn, $sql);

    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        // Output the results in a table format
        echo "<table><tr><th>select</th><th>No.</th><th>Name</th><th>Posotion</th><th>Age</th><th>Email</th><th>status</th><th>Action</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["Posotion"]."</td><td>".$row["Age"]."</td><td>".$row["email"]."</td><td>".$row["status"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }
}

// Close the database connection
mysqli_close($conn);
?>
