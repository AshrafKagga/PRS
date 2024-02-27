<?php
// Connect to database
// $conn = mysqli_connect("localhost", "username", "password", "database");
include 'config.php';
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get file details for the image
if(isset($_POST['img'])){
    $id = $_SESSION['id'];
    $file_name = $_FILES['profilepic']['name'];
    $file_size = $_FILES['profilepic']['size'];
    $file_tmp = $_FILES['profilepic']['tmp_name'];


    // Move uploaded file to desired location
    $target_dir = "assets/img/profilepics/";
    $target_file = $target_dir . basename($file_name);
    move_uploaded_file($file_tmp, $target_file);

    // Update user's profile picture in database
    $sql = "UPDATE tb_user SET profilepic='$target_file' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Profile picture uploaded successfully';)</script>";
    } else {
        // echo "Error updating profile picture: " . mysqli_error($conn);
        echo "<script>alert('Error updating profile picture!';)</script>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
