<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $caller=$_POST['message'];
    $from = "Caffa Website";
    $body= "Від: ".$_POST['name']."<br> Телефон: ".$_POST['phone']."<br> Повідомлення: ".$_POST['message'];
    $to = 'shevchukmisha2412@gmail.com';//insert mail
    $mail = array(
        'to' => $to,
        'subject' => "Caffa Website Order",
        'message' => $body,
        'headers' => "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n"."From: Rubicon website\r\n");  

    mail($mail['to'], $mail['subject'], $mail['message'], iconv ('utf-8', 'windows-1251', $mail['headers']));
    header('Location: /index.html');
?>
