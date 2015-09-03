<?php

include 'function.php';
// Initialize variables to null.
$name ="";		//Sender Name
$email =""; 	//Sender's email ID
$subject ="";	//Subject of mail
$message ="";	//Sender's Message 

$nameError ="";			
$emailError ="";
$subjectError ="";
$messageError ="";
$successMessage ="";

//On submitting form below function will execute

if(isset($_POST['submit']))
  {
  // checking null values in message
    if (empty($_POST["name"])){
        $nameError = "Name is required";
      } 
   else {
       $name = test_input($_POST["name"]);
       // check name only contains letters and whitespace
       if (!preg_match("/^[a-zA-Z ]*$/",$name)){
            $nameError = "Only letters and white space allowed"; 
         }
     }
 // checking null values in message  
   if (empty($_POST["email"])) {
       $emailError = "Email is required";
      } 
   else {
      $email = test_input($_POST["email"]);
      }
 // checking null values in message    
   if (empty($_POST["subject"])) {
      $subjectError = "subject is required";
     }
   else { 
	  $subject = test_input($_POST["subject"]);  
	 } 
// checking null values in message
   if (empty($_POST["message"])) {
      $messageError = "Message is required";
     } 
   else { 
	  $message = test_input($_POST["message"]);  
	 } 
  // checking null values in all fields  
if( !($name=='') && !($email=='') && !($subject=='') &&!($message=='') )

  {// checking valid email
    if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      
		$header= $name."<". $email .">";
                $headers = "noreply@digantara.com";
     /* Let's prepare the message for the e-mail */
		$msg = "Hello! $name

 Thank you...! For Contacting Us.

 Name: $name
 E-mail: $email
 Purpose: $subject
 Message: $message 
  
 This is a Contact Confirmation mail.
 We Will contact You as soon as possible.";

$msg1 = " $name Contacted Us.

 Here are some information about $name.

 Name: $name
 E-mail: $email
 Purpose: $subject
 Message: $message ";

/* Send the message using mail() function */
  if(mail($email, $headers, $msg ) && mail("prakashpatil4ever@gmail.com", $header, $msg1 ))
    {
	$successMessage = "Message sent successfully.......";
   	
     $query=mysql_query("INSERT INTO contact (name,email,subject,message)
		        VALUES ('$name','$email','$subject','$message')", $conn);
	$result=  mysql_query($query);
    }
  }
else { $emailError = "Invalid Email"; }

 }
}
// function for filtering input values
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

	

?>