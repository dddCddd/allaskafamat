<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST))
{
    $name = $_POST['name'];
    $from = $_POST['email'];
    $message = $_POST['message'];
    $to = "info@allaskafamat.se";
    $subject = "Mail from allaskafamat.se contact form";
    
    $headers  = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $to . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    mail($to, utf8_encode($subject), utf8_encode($message), $headers);
    header("Location: index.html");
}
else
{
    echo "hi, You've reached this page without submitting the form.";
    exit(1);
}

/* 
if(isset($_POST ["submit"])){
    $name = $_POST ["name"];
    $mailFrom = $_POST ["email"];
    $message = $_POST ["message"];

    $mailTo = "info@allaskafamat.se";
    $headers = "From: ".$mailFrom;
    $txt = "You have reccived an e-mail from" .$name.".\n\n".$message;
    
    mail($mailTo, $message, $txt, $headers);
    header("Location: index.php?mailsend");

}


*/

?>