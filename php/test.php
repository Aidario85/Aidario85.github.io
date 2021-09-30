<?php

$email = $_REQUEST['user_email'];
$phone = $_REQUEST['user_phone'];
$radio = $_REQUEST['radios'];
$check = $_REQUEST['check'];

echo "Скрипт сработал! <br>". $email . " <br>" . $phone . " <br>" . $radio . " <br>" . $check;

?>