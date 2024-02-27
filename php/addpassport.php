<?php
// Establish database connection
include "../config.php";

if(isset($_POST['addpassport'])){
    // Get user input
    $names = $_POST['names'];
    $pass_number = $_POST['pass_number'];
    $editor = $_POST['edited_by'];
    
    // Get image file information
    $fileName = $_FILES['pass-img']['name'];
    $fileTmpName = $_FILES['pass-img']['tmp_name'];
    $fileSize = $_FILES['pass-img']['size'];
    $fileError = $_FILES['pass-img']['error'];
    $fileType = $_FILES['pass-img']['type'];
    
    // Extract file extension
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    // Generate new file name
    $newFileName = $pass_number . '.' . $fileActualExt;
    
    // Set upload directory
    $uploadDir = '../assets/img/passports/';
    
    // Set file path
    $filePath = $uploadDir . $newFileName;
    
    // Upload file
    move_uploaded_file($fileTmpName, $filePath);
    
    // Insert data into database
    $sql = "INSERT INTO passport (names, pass_number, pass_img, edited_by)
    VALUES ('$names', '$pass_number', '$newFileName', '$editor')";
    
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Update Sussefull');</script>";
        echo "<script type='text/javascript'> document.location='../tables-data.php'</script>";
    }else{
        echo "<script>alert('Update Failed');</script>";
        echo "<script type='text/javascrit'>document.location='../tables-data.php'</script>";
    }
}

// Close database connection
mysqli_close($conn);
?>
