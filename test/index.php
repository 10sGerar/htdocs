<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        // Server name must be localhost
        $servername = "localhost";
            
        // In my case, user name will be root
        $username = "root";
            
        // Password is empty
        $password = "";
            
        // Creating a connection
        $conn = new mysqli($servername, 
                    $username, $password);
            
        // Check connection
        if ($conn->connect_error) {
            die("Connection failure: " 
                . $conn->connect_error);
        } else {
            echo"Connected";
        }
    ?>
</body>
</html>