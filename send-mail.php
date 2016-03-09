<?php

session_start();
$to = 'amira@omniphics.com, kfchoong@omniphics.com, info@omniphics.com'; // Change your email address
// $to = 'amira@omniphics.com'; // Change your email address

$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$message = $_POST['message'];
$captcha_code = $_POST['captcha'];
$subject = "Inquiry from Screenplify Website";

// echo $to.", ".$name.", ".$tel.", ".$email.", ".$message.", ".$subject;
// exit;
// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
 if ( isset($email) && isset($name) && isset($subject) && isset($message) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {

/*captcha code*/
if(empty($_SESSION['6_letters_code'] ) ||
strcasecmp($_SESSION['6_letters_code'], $captcha_code) != 0)
{
    //Note: the captcha code is compared case insensitively.
    //if you want case sensitive match, update the check above to
    // strcmp()
  $errors .= "\n The captcha code does not match!";
}
 
  if(empty($errors))
  { 
  // detect & prevent header injections
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_POST as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }

$body = <<<EMAIL
  
My name is $name.

$message

From : $name
Email : $email
Contact : $tel

EMAIL;
  
  
$header = 'From: ' . $_POST["name"] . '<' . $_POST["email"] . '>' . "\r\n" .
    'Reply-To: ' . $_POST["email"] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  //
 // mail( $to , $_POST['subject'], $_POST['message'], $headers );
mail($to, $subject, $body, $header);
  //      ^
  //  Replace with your email 
    echo "email success";
}
else{
  echo "captcha fail";
}
}
?>