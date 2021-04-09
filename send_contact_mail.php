<?php
if(!empty($_POST["SEND"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    $toEmail = "admin@phppot_samples.com"; //hier moet mijn eigen email vgm
    $mailHeaders = "From: " . $name . "<" . $email .">\r\n";
    if(mail($toEmail, $subject, $content, $mailHeaders)) {
        $message = "Je contactinfo is verzonden!";
        $type = "succes";
    }

}
require_once "contact-view.php";
?>