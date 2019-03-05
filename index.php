<?php
if(isset($_POST['submit'])){
    $to = "maciasa@byu.edu"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['full_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>XION Survey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="header">
        <img src="xion.png" id="logo">
    </div>
    <div id="main">
        <p>Xion is building a ticketing system specifically geared towards the outdoor service industry. We're trying to get a better idea of what retailers would most appreciate in this product. Help us out by taking our survey below!</p>
        <button class="button"><a href="https://docs.google.com/forms/d/1Cxe7jeZCn_GHc1qHpBvEt3sJKrNTz_43VqT6joYrsCA/edit?ts=5c4a58c1" target="_blank">Take our survey!</a></button>
    </div>

    <form action="" method="post">
        <fieldset>
            <legend>Contact Information:</legend>
            Full name:<br>
            <input type="text" name="full_name" value=""><br>
            E-mail:<br>
            <input type="text" name="email"><br>
            Comments or Questions:<br>
            <input type="text" name="message" size="50"><br><br>
            <input class="button" id="submit-button" type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>