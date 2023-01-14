<?php

if($_POST["submit"]) {
    $recipient="martinlubowa@outlook.com";
    $subject="New Booking From Website";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $people=$_POST["people"];
    $phone=$_POST["phone"];
    $date=$_POST["date"];

    $mailBody="Name: $sender\nEmail: $senderEmail\nPhone: $phone\n Depature date: $date\nNumber of travellers: $people\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your booking has been successfully made.</p>";
}

?>