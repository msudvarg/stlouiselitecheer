<?php

//Hack to effectively disable Magic Quotes
if (get_magic_quotes_gpc()) {
    function stripslashes_deep($value)
    {
        $value = is_array($value) ?
                    array_map('stripslashes_deep', $value) :
                    stripslashes($value);

        return $value;
    }

    $_POST = array_map('stripslashes_deep', $_POST);
}

//Assigns Variables
$name = $_POST['name:'];
$email = $_POST['email:'];
$phone = $_POST['phone:'];
$message = $_POST['message:'];
$to = "info@stlouiselitecheer.org";

if ( $name == "" && $email == "" && $phone == "" && $message=="" ) { header("Location: contact-us.htm"); }

else {
    if ($email=="") { $email=$to; }
    if (mail($to,"Email from $name sent through web contact form","Phone: $phone\n\nMessage:\n\n$message","From: $email")) { header("Location: thankyou.htm"); }
    else { die("There was a problem with the email system. Please try again later."); }
}

?>
