<?php

if (isset($_POST['send_btn'])){
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    
    // the message
    $msg = "First line of text\nSecond line of text";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail($email,$subject,$message);
}	


?>

<html>
    <head><title>Send notification message to student</title></head>
    <body>
        <h1>Send Email</h1>
        <h3>Enter the Subject</h3>
        <label for="subject">Subject: </label>
        <input type="text" id="subject" name="subject">
        <br>
        <br>

        <h3>Enter the message</h3>
        <label for="message">Message: </label>
        <input type="text" id="message" name="message"><br>
        <br>

        <h3>Enter the recipient email</h3>
        <label for="email">Email: </label>
        <input type="text" id="email" name="email"><br>
        <br>
        

        <button id="send_btn" name="send_btn">Send Message</button>
    </body>
</html>