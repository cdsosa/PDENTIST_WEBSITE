<?php
$EmailFrom = "Customer";
$EmailTo = "info@preferreddentist.com";
$Subject = "Add to Preferred Dentist Mailing List";
$Name = Trim(stripslashes($_POST['FullName'])); 
$Email = Trim(stripslashes($_POST['EmailAddress'])); 
$MailingAddress = Trim(stripslashes($_POST['MailingAddress'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Full Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email Address: "; 
$Body .= $Email;
$Body .= "\n";
$Body .= "Mailing Address: ";
$Body .= $MailingAddress;
$Body .= "\n";



// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://preferreddentist.com/contactusthanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}

?>