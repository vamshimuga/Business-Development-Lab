<?php
 
  $email = filter_input(INPUT_POST, 'email'); //Get the email submited from our ajax form
 
  // HERE YOU HAVE TO INSERT THE EMAIL IN YOUR DATABASE. I suggest just 2 clumns 'email' and 'isVerified' where email = $email and isVerified = false
 
  /* Send the confirmation email */
  $to = $email;
  $subject = 'Email confirmation';
  $message = "Hello! You have succesfully subscribed";
 
  $headers = 'From: mikkosh@hotmail.com' . "rn" .
   'Reply-To: mikkosh@hotmail.com' . "rn" .
   'Content-Type: text/plain; charset=UTF-8' . "rn" .
   'MIME-Version: 1.0' . "rn" .
   'Content-Transfer-Encoding: quoted-printable' . "rn";
 
  mail($to, $subject, $message, $headers) or die ("Mail could not be sent.");

?>
