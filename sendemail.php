<?php

        $name = @trim(stripslashes($_POST['name']));
        $email = @trim(stripslashes($_POST['email']));
        $subject = @trim(stripslashes($_POST['phn']));
        $message = @trim(stripslashes($_POST['message']));

        $email_from = $email;
        $email_to = 'jarrod@miracleinvestmentgroup.com';
        $subject = 'Form miracleinvestmentgroup.com';

        $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone: ' . $subject . "\n\n" . 'Message: ' . $message;

         $success = @mail($email_to, $subject, $body);

    ?>

    <!DOCTYPE HTML>
    <html lang="en-US">

    <head>
        <script>
            alert("Thank you for getting in touch!");
        </script>
        <meta HTTP-EQUIV="REFRESH" content="0; url='http://www.miracleinvestmentgroup.com/'"/>
    </head>
