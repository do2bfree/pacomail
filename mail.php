<?php

$recepient = "alexey.tivonenko@gmail.com";
$sitename = "Zizoo board";

$fio = trim($_POST["fio"]);
$email = trim($_POST["email"]);
$tel = trim($_POST["tel"]);
$date = trim($_POST["date"]);
$time = trim($_POST["time"]);
$notes = trim($_POST["notes"]);
$message = "Имя: $fio \nПочта: $email \nТелефон: $tel \nДата: $date \nВремя: $time \nТекст: $notes";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");