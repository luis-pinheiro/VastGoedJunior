<?php 

$user = 'profitcreations@live.com',

//Fetch the Mail Object 
$mailer = JFactory::getMailer();

//add sender
$sender = array( 
     	'mailfrom' ,
   		'fromname' );
$mailer->setSender($sender);

// Deze Gebruiken voor single person
$recipient = $user->email;

 //		OF
// Deze voor meerdere person
$recipient = array( 'person1@domain.com', 'person2@domain.com', 'person3@domain.com' );
$mailer->addRecipient($recipient);

//Set de body
$body   = '<h2>Contact Test</h2>'
    . '<div>'$message'</div>';
$mailer->isHTML(true);
$mailer->Encoding = 'base64';
$mailer->setBody($body);
// Optionally add embedded image
// $mailer->AddEmbeddedImage( JPATH_COMPONENT.'/assets/logo128.jpg', 'logo_id', 'logo.jpg', 'base64', 'image/jpeg' );

//send
$send = $mailer->Send();
if ( $send !== true ) {
    echo 'Error sending email: ' . $send->__toString();
} else {
    echo 'Mail sent';
}





 ?>