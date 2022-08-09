<?php



$email_function = "kacper.borowiec1999@gmail.com";

$to         = '';
$subject    = '';
$body       = '';
$header     = '';

if (isset($_POST['submit'])) {
  $to         = $email_function;
  $subject    = wordwrap($_POST['name'], 70);
  $body       = $_POST['subject'];
  $header     = "From: " . $_POST['email'];
}

mail($to, $subject , $body, $header);

 ?>
