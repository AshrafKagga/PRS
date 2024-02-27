<?php
include "../config.php";
if(isset($_POST['payment'])){
    $names = $_POST['names'];
    $pay_type = $_POST['pay_type'];
    // $date = $_POST['date'];
    $reason = $_POST['reason'];
    $amount = $_POST['amount_payied'];
    $recieved_by = $_POST['recieved_by'];

    $sql = "INSERT into payment (names, pay_type, reason, amount_payied, recieved_by) 
    VALUES ('$names', '$pay_type', '$reason', '$amount', '$recieved_by')";{
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Payment Recieved');</script>";
        echo "<script type='text/javascript'> document.location='../tables-data.php'</script>";
    }else{
        echo "<script>alert('Update Failed');</script>";
        echo "<script type='text/javascrit'>document.location='../tables-data.php'</script>";
    }
    }
}