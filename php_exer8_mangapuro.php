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

        //system time
        echo "System Date:  " . date("Y.m.d") . "<br>";
        //system time
        echo "System Time: ". date("h:i:s") ."<br><br>";
        //3 web
        echo "Last three sites visited: <br><br>" ;

        {
            $_SESSION['web'] ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $_SESSION['website'] ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $_SESSION['website1'] ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
       
              echo $_SESSION['web']. "<br>";
              echo $_SESSION['website']. "<br>";
              echo $_SESSION['website1']. "<br>";
        
       }
    ?>
</body>
</html