<?php
 
 $name=$_POST['name'];
 $vistor_email=$_POST['email'];
 $message= $_POST['message'];

 $email_form='meenasaurabh100@gmail.com';

 $email_subject="new form submission";

 $email_body= "username: $name.\n".
                "user Email: $vistor_email.\n".
                "user message: $message.\n";

    $to ="2019kucp1085@iiitkota.ac.in";
    $headers= "from: $email_form\r\n";
    
    $headers = "Reply to: $vistor_email\r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
 ?>