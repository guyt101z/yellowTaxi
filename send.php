<?php
$n=$_POST['name'];
$e=$_POST['email'];
$m=urlencode($_POST['message']);




if (empty($n) == TRUE || empty($e) == TRUE || empty($m) == TRUE) {

Header("Location: ./?name=$n&email=$e&message=$m&output=1");


  } else {

$n=$_POST['name'];
$e=$_POST['email'];
$m=urlencode($_POST['message']);




if (filter_var($e, FILTER_VALIDATE_EMAIL) == false) {
    // $email contains a valid email



Header("Location: ./?name=$n&email=$e&message=$m&output=2");

  } else {
$n=$_POST['name'];
$e=$_POST['email'];
$m=$_POST['message'];  
$to      = 'testing@jackweekes.com';
$subject = $n;
$message =$m;
$headers = 'From: Test Email <test@dataratedesign.com' . "\r\n" .
    'Reply-To:' . $e . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
Header("Location: ./?output=3");
}
}

?>