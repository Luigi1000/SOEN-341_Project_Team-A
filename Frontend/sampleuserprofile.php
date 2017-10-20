<?php          
    $database = "SELECT * FROM user where username='$user_username'";
    $result = mysql_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysql_fetch_array($result);
?>     
