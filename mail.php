<?php
// these values are usualy filled by a form
$subject = "Hello World";
$message = "Test Bericht van Jorn de Bruin";
$email = "jorn.bruin@student.graafschapcollege.nl"; // sender mail address use your own!

// Recipient email address
$to = 'net24jbruin@net24jbruin.gc-webhosting.nl';

        // Create email headers
        $headers = 'From: '. $email . "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        // Sending email
        if(mail($to, $subject, $message, $headers)){
        echo '<p class="success">Your message has been sent successfully!</p>';
        } else{
        echo '<p class="error">Unable to send email. Please try again!</p>';
        }
        ?>