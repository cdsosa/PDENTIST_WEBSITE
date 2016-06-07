<?php
$EmailFrom = "Customer";
$EmailTo = "csosa@iogproducts.com";
$Subject = "Preferred Dentist Customer Information";
$Name = Trim(stripslashes($_POST['FullName'])); 
$Email = Trim(stripslashes($_POST['EmailAddress'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

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
$Body .= "Customer Message: ";
$Body .= $Message;
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