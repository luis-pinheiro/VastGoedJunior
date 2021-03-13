<?php  

// Define variables
$app     = JFactory::getApplication();

$site    = $app->getCfg('sitename');
$from    = $app->getCfg('mailfrom');
$sender  = $app->getCfg('fromname');
$email   = JRequest::getString('mailto', '', 'post');
$subject = JRequest::getString('subject', '', 'post');

// Build the message to send
$msg     = JText::_('COM_HELLO_EMAIL_MSG');
$body    = sprintf($msg, $site, $sender, $from);

COM_HELLO_EMAIL_MSG="Este é um e-mail de (%s) enviado por %s (%s)."

// Clean the email data
$sender  = JMailHelper::cleanAddress($sender);
$subject = JMailHelper::cleanSubject($subject);
$body    = JMailHelper::cleanBody($body);

// Send the email
$return = JFactory::getMailer()->sendMail($from, $sender, $email, $subject, $body);

// Check for an error.
if ($return !== true)
{
    return new JException(JText::_('COM_HELLO_MAIL_FAILED'), 500);
}












?>