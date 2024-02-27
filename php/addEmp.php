<?php
include '../config.php';
if(isset($_POST["addEMP"])){
    $name = $_POST["name"];
    $position = $_POST["position"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $duplicate = mysqli_query($conn, "select *from EMP where email like'$email' or position like '$position'");
    if(mysqli_num_rows($duplicate)>0){
        echo "<script> alert('User or postion already taken');</script>";
    }
    else{
        $sql = "INSERT INTO emp (name, position, age, email) VALUES('$name', '$position', '$age', '$email')";
        if(mysqli_query($conn, $sql)){
            echo "<script> alert('Employee Add Successful.');</script>";
            echo "<script tpye='text/javascript'>document.location= '../tables-general.php';</script>";
        }
        else{
            echo "<script> alert('Error ocured.');</script>";
            echo "<script tpye='text/javascript'>document.location= '../tables-general.php';</script>";
         }
    }
}mysqli_close($conn);
?>