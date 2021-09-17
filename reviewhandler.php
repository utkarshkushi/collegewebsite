<?php
$review = $_post['']
$rate = $_post['']
    
    
$email_from = 'mvjce@mywebsite.com';



$email_subject = 'New Form Submission';


$email_body = "review: $review.\n".
               "rate: $rate.\n";
                
$to = 'utkarshkushi2002@gmail.com';
$header = "From: $email_from\r\n";

$header = "Reply-To: $Email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: admission.html");
?>
    
        