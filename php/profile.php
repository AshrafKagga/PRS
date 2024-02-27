<?php
    include '../config.php';
    if(isset($_POST['update'])){
        // echo "bikola";exit;
    $eid = $_POST['id'];
    //geting the post values
    $name = $_POST['name'];
    $about = $_POST['about'];
    // $company = $_POST['company'];
    $position = $_POST['position'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['Instagram'];
    $linkedin = $_POST['linkedin'];

    // data update query
    $query = mysqli_query($conn, "UPDATE tb_user set name='$name',about='$about',company='Professional Recruitement Service',
    position='$position',country='$country',address='$address',contact='$contact',
    email='$email',twitter='$twitter',facebook='$facebook',Instagram='$instagram',linkedin='$linkedin' WHERE id=$eid");

    if($query){
        echo "<script> alert('You have successfullt updated your information');</script>";
        echo "<script type'text/javascript'> document.location = '../users-profile.php';</script>";
    }
    else{
        echo "<script>alert('something Went Wrong! Please try again');</script>";
    }
    }
?>