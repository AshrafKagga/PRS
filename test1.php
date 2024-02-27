<!-- was  the profile php secion -->
<?php
    if(isset($_POST['img'])){
      $file_name = $_FILES['profilepic']['name'];
      $file_size = $_FILES['profilepic']['size'];
      $file_tmp = $_FILES['profilepic']['tmp_name'];

      // Extract file extension
      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));
        

      //renaminig the profile img
      $newFileName = $id . '.' . $fileActualExt;

      // Move uploaded file to desired location
      $target_dir = "assets/img/profilepics/";
      $target_file = $target_dir . basename($newFileName);
      move_uploaded_file($file_tmp, $target_file);

      // Update user's profile picture in database
      $sql = "UPDATE tb_user SET profilepic='$target_file' WHERE id='$id'";
      if (mysqli_query($conn, $sql)) {
        unlink($row['profilepic']);
          echo "<script>alert('Profile picture uploaded successfully';)</script>";
      } else {
          echo "Error updating profile picture: " . mysqli_error($conn);
      }
    }
    ?>