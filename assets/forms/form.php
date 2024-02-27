<!-- <?php
if(isset($_POST["request"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $service = $_POST["service"];
    $message = $_POST["message"];

    //recipiet email
    $toMail = "ashkamhost@gmail.com";

    //Build email header
    $header = "from: " .$name ."<" .$email .">\r\n";

    //send email
    if(mail($tomail, $subject, $message, $header)){
        echo "Mail sent";
    } else{
        echo "Mail not sent";
    }
}
?> -->