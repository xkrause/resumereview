<?php

        //Sending email

         $to = "chau.duong1995@yahoo.com";
         $subject = $_POST['subject'];

         $message = "<h1>You have a new mail from Review my Resume</h1>";
         $message .= "<p>" . $_POST['name'] . "</p>";
         $message .= "<p>" . $_POST['message'] . "</p>";

         //POST to get stuffs from the form.
         $header = "From:" . $_POST['email'] . "\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         $email= mail ($to,$subject,$message,$header);

         if( $email== true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }

      ?>