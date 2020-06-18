<?php
if (isSet($_POST['submit'])) {
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $sender_email = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "ibiye4greatness@yahoo.com";
  $subject = "Enquires";
  $headers = "From: ".$sender_email;
  $txt = "You have received a mail form".$firstName." ".$lastName.".\n\n".$message;
  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}


?>
