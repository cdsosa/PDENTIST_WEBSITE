<?php
$EmailFrom = "Customer";
$EmailTo = "info@preferreddentist.com";
$Subject = "Preferred Dentist Dental Appointment";
$Name = Trim(stripslashes($_POST['FullName'])); 
$Email = Trim(stripslashes($_POST['EmailAddress'])); 
$PhoneNumber = Trim(stripslashes($_POST['PhoneNumber'])); 
$CityZip = Trim(stripslashes($_POST['CityZip']));
$Interest = Trim(stripslashes($_POST['Interest']));
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
$Body .= "Phone Number: "; 
$Body .= $PhoneNumber;
$Body .= "\n";
$Body .= "City Zip: "; 
$Body .= $CityZip;
$Body .= "\n";
$Body .= "Interest: "; 
$Body .= $Interest;
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