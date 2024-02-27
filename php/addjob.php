<?php
include "../config.php";
if(isset($_POST['addjob'])){
    $job = $_POST['job_type'];
    $country = $_POST['country'];
    $position = $_POST['number_positions'];
    $expire = $_POST['expire_date'];
    $editor = $_POST['edited_by'];
    $sql = "INSERT into jobs (job_type, country, number_positions, expire_date, edited_by) 
    VALUES('$job','$country','$position','$expire','$editor')";{
        if(mysqli_query($conn, $sql)){
            echo "<script>alert('Update Sussefull');</script>";
            echo "<script type='text/javascript'> document.location='../tables-data.php'</script>";
        }else{
            echo "<script>alert('Update Failed');</script>";
            echo "<script type='text/javascrit'>document.location='../tables-data.php'</script>";
        }
    }
}
