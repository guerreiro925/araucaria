<?php # Is the OS Windows or Mac or Linux 
if (strtoupper(substr(PHP_OS,0,3)=='WIN')) { 
  $eol="\r\n"; 
} elseif (strtoupper(substr(PHP_OS,0,3)=='MAC')) { 
  $eol="\r"; 
} else { 
  $eol="\n"; 
} ?> 

<?php 
# File for Attachment 
# To Email Address 
$emailaddress="matheus.henrique.25@hotmail.com"; 
# Message Subject 
$emailsubject="Teste Email 1".date("Y/m/d H:i:s"); 
# Message Body 
ob_start(); 

       // i made a simple & pretty page for showing in the email 
$body=ob_get_contents(); ob_end_clean(); 

# Common Headers 
$headers .= 'From: Jonny $email'.$eol; 

# Boundry for marking the split & Multitype Headers 
$mime_boundary=md5(time()); 
$headers .= 'MIME-Version: 1.0'.$eol; 
$headers .= "Content-Type: multipart/related; boundary=\"".$mime_boundary."\"".$eol; 
$msg = ""; 

$msg .= "Content-Type: multipart/alternative".$eol; 

# Text Version 
$msg .= "--".$mime_boundary.$eol; 
$msg .= "Content-Type: text/plain; charset=iso-8859-1".$eol; 
$msg .= "Content-Transfer-Encoding: 8bit".$eol; 
$msg .= "This is a multi-part message in MIME format.".$eol; 
$msg .= "If you are reading this, please update your email-reading-software.".$eol; 
$msg .= "+ + Text Only Email from Genius Jon + +".$eol.$eol; 

# HTML Version 
$msg .= "--".$mime_boundary.$eol; 
$msg .= "Content-Type: text/html; charset=iso-8859-1".$eol; 
$msg .= "Content-Transfer-Encoding: 8bit".$eol; 
$msg .= $body.$eol.$eol; 

# Finished 
$msg .= "--".$mime_boundary."--".$eol.$eol;   // finish with two eol's for better security. see Injection. 

# SEND THE EMAIL 
ini_set(sendmail_from,'matheus.henrique.25@hotmail.com');  // the INI lines are to force the From Address to be used ! 
 mail($emailaddress, $emailsubject, $msg, $headers); 
ini_restore(sendmail_from); 

if(ini_restore(sendmail_from) == true){
	
	echo "Enviado";
	
}else{
	
	echo "Não enviado";
	
}

?>