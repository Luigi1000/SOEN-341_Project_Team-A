  <?php
      $servername = 'localhost';
      $username = 'root';
      $dbname = 'soen341';
      $password = '';

      // make connection   (connecting to where + user name + password + DBname)
      $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      } 
      // echo "Database Connection Succeed!";
    ?>