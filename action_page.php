<html>
<body>
<?php $name = $_POST['name'];
$email = $_POST['email'];
$subject=$_POST['subject'];  
$comment = $_POST['comment'];
$formcontent="From: $name \n Comment: $comment";
$recipient = "omfamilyfoundation@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
  ?>

