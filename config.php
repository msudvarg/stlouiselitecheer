<?php
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('facebook/facebook.php');
    
    $config = array(
        'appId' => '',
        'secret' => '',
    );

    $facebook = new Facebook($config);
    $user_id = $facebook->getUser();
    
  $psn = 6; //Number of photos to initiate loading
  $photoheight = 150;
?>