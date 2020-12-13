<?php

$recepient = "alexey.tivonenko@gmail.com";
$sitename = "Paco puzzles";

$email = trim($_POST["email"]);

$message = "Почта: $email";
$pagetitle = "Новый имейл с сайта \"$sitename\"";

mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");