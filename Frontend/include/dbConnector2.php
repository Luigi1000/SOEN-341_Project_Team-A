  <?php
      $servername = '108.63.178.19';
      $username = "root";
      $dbname = 'soen341';
      $password = '';

	  $db = new PDO("mysql:host=$servername;dbname=soen341;charset=utf8", "$username", "$password", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
    ?>