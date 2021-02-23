<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['message']))
   {
   echo "No arguments Provided!";
   return false;
   }
include('Class.SMTP.php'); 
$smtp = new SMTP('portfolio-leuwers-bastien.w2.websr.fr', 'contact@portfolio-leuwers-bastien.w2.websr.fr', 'LA.muette.rieuse13'); 

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'bastienleuwers2@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: contact@portfolio-leuwers-bastien.w2.websr.fr\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
//mail($to,$email_subject,$email_body,$headers);


$smtp->smtp_mail($to, $email_subject, $email_body);// Envoie du mail

if(!$smtp->erreur){
echo '<div style="text-align:center; color:#008000;">Votre mail a bien été envoyé.</div>',"\r\n";
}else{// Affichage des erreurs
echo $smtp->erreur;
}
?>
     
?>