<?php
$EmailFrom = "Customer";
$EmailTo = "info@preferreddentist.com";
$Subject = "Preferred Dentist Warranty";
$Name = Trim(stripslashes($_POST['FullName'])); 
$Email = Trim(stripslashes($_POST['EmailAddress'])); 
$PhoneNumber = Trim(stripslashes($_POST['PhoneNumber'])); 
$Address = Trim(stripslashes($_POST['Address']));
$OrderNumber = Trim(stripslashes($_POST['OrderNumber']));
$DatePurchased = Trim(stripslashes($_POST['DatePurchased']));
$Interest = Trim(stripslashes($_POST['Interest']));

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
$Body .= "Address: "; 
$Body .= $Address;
$Body .= "\n";
$Body .= "Order Number: "; 
$Body .= $OrderNumber;
$Body .= "\n";
$Body .= "Date Purchased: "; 
$Body .= $DatePurchased;
$Body .= "\n";
$Body .= "Interest: "; 
$Body .= $Interest;
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