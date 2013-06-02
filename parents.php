<?php
    session_start();
    
    function check_auth() {
        if ($_POST['username'] == "parent" && md5($_POST['password']) == "9afcdf9ce6fa1dca9131267ebff309f0") {
            $_SESSION['auth'] = true;
            is_auth();
        }
        else {
            ?>
            <form id="login" method="post" onsubmit="return submitlogin()">
                <p>Username<br /><input type="text" name="username" /></p>
                <p>Password<br /><input type="password" name="password" /></p>
                <p><input type='submit' name="submit" value='Submit' /></p>
            <?php
        }
    }
    
    function is_auth() {
        echo "<p><a href='logout.php'>Log Out</a></p>";
        echo '<iframe src="https://docs.google.com/document/d/1EHT68LkzuSgl8BSrdMg2RLilgWvkdqpPenNu7KLyr2U/pub?embedded=true" style="height:200px;"></iframe>';
        echo '<iframe src="https://www.google.com/calendar/embed?src=stlouiselitecheer%40gmail.com&ctz=America/Chicago" style="height:400px" scrolling="no"></iframe>';
    }
    
    if ($_SESSION['auth']) {
        is_auth();
    }
    else {
        check_auth();
    }
?>