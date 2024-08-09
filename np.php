<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);
    $to="mohammedshuaib4121@gmail.com";
    $subject="message from $name<$email>";
    $headers="From: $email\r\n";
    $headers.="Reply-To: $email\r\n";
    $headers.="Content-type:text/plain;
    charset=UTF-8\r\n";
    if(mail($to,$subject,$message,$headers)){
        echo"Message sent successfully!";
    }else{
        echo"Failed to send message";
    }
}
?>
