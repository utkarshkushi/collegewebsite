<?php
$Full_Name = $_POST['']
$Phone_Number = $_POST['']
$Email = $_POST['']
$DOB = $_POST['']
$Qualification = $_POST['']    
$Gender = $_POST['']
$Address = $_POST['']
$state = $_POST['']    
$Nationality = $_POST['']
$Date = $_POST['']    
$day = $_POST['']  
    
    
$email_from = 'mvjce@mywebsite.com';



$email_subject = 'New Form Submission';


$email_body = "User Name: $Full_Name.\n".
               "User Email: $Phone_Number.\n".
                "User Dob: $DOB.\n".
                 "User Qualification: $Qualification.\n".
                 "User Gender: $Gender.\n".
                  "User Address: $Address.\n".
                  "User state: $state.\n".
                   "User Nationality: $Nationality.\n".
                   "User Date: $Date.\n".
                    "user day: $day.\n";
$to = 'utkarshkushi2002@gmail.com';
$header = "From: $email_from\r\n";

$header = "Reply-To: $Email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: admission.html");
?>
    
    
    
    
    
    
    
    
    
    