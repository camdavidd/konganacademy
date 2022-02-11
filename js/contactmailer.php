
   <?php
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$number= $_POST['number'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \nNumber: $number \nMessage: $message";

$to = "cam@sagisag.com";
$subject = "Inquiry from Website";
$mailheader = "From: $email \r\n";
mail($to, $subject, $formcontent, $mailheader) or die("Error!");
 //Set Location After Successsfull Submission
  header('Location: https://konganacademy.com?message=Successful');
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: https://konganacademy.com?message=Failed');	
}
?>