<?php

if(isset($_POST ["submit"])){
    $name = $_POST ["name"];
    $mailFrom = $_POST ["email"];
    $message = $_POST ["message"];

    $mailTo = "rickard@betydlig.se";
    $headers = "From: ".$mailFrom;
    $txt = "You have reccived an e-mail from" .$name.".\n\n".$message;
    
    mail($mailTo, $message, $txt, $headers);
    header("Location: index.php?mailsend");

}




