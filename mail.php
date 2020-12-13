<?php

$recepient = "alexey.tivonenko@gmail.com";
$sitename = "Paco";


$email = trim($_POST["email"]);

$message = "Почта: $email";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");