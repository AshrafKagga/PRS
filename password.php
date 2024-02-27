<?php 
session_start();
    include "config.php";
    if(isset($_POST["changep"])){
    $id = $_SESSION['id'];
    // $id = $_GET['id'];
        $currentpassword = $_POST["currentpassword"];
        $npassword = $_POST["npassword"];
        $cpassword = $_POST["cpassword"];
        $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE ID= '$id'");
        // $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username like 'ashikam'");
        $row = mysqli_fetch_assoc($result);
            if($currentpassword == $row["password"]){
                if($npassword == $cpassword){
                    $sql=  "UPDATE tb_user SET password ='$npassword' where id='$id'";
                    if(mysqli_query($conn, $sql)){
                      echo "<script> alert('Password Update Is Successful')</script>";
                      echo "<script type'text/javascript'> document.location = 'users-profile.php';</script>";
                    }else{
                      echo "<script> alert('Update Failed')</script>";
                    }
                  }
            }else{
                session_destroy();
                $_SESSION['login'] = false;
                      echo "<script type'text/javascript'>
                      alert('Wrong Current Password');
                      document.location = 'login.php';</script>";

            }
    }

?>