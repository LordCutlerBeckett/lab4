<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if(!empty($email) && !empty($message)) {
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $receiver = "vip.shomorov911@mail.ru";
    $subject = "From: $name <$email>";

    $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage: $message\n\nRegards,\n$name";
    $sender = "From: $email";
    if(mail($receiver, $subject, $body, $sender)){
        echo "Ваше сообщение было отправлено!";
    } else{
        echo "Извините, не удалось отправить ваше сообщение!";
    }
}else{
    echo "Введите действительный адрес электронной почты!";
    }
}else{
        echo "Поле электронной почты и пароля является обязательным!";
    }

?>