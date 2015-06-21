<?php

$frm_name  = "Обратный звонок";
$recepient = 'max_on.89@mail.ru';
$sitename  = "Пиломатериалы";
$subject   = "Новая заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$tel = trim($_POST["tel"]);

$message = '
            <p>Заявка: '.$frm_name.'</p>
            <p>Контактное лицо: '.$name.'</p>
            <p>Телефон: '.$tel.'</p>
        ';

mail($recepient, $subject, $message, "From: $frm_name <$recepient>" . "\r\n" . "Reply-To: $recepient" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
