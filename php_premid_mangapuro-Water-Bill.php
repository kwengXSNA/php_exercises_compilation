<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" style=tyle="background:#E0AC69;padding-top:5%;padding-bottom:5%;padding-left:5%;padding-right:5%;border-radius:2%;">
        <center>
            <hr><h3>Water Bill Calculator</h3><hr>
            <table border =0>
                <tr>
                    <td style="border: 2px solid #C68642;border-radius: 7px;outline: none;border-color: #C68642;box-shadow: 0 0 10px #C68642;">
                        UNITS
                    </td>
                    <td style="border: 2px solid #C68642;border-radius: 7px;outline: none;border-color: #C68642;box-shadow: 0 0 10px #C68642;">
                        <input type=text name="unit">
                    </td>
                </tr>
            </table>
            <br>
            <input type=submit name="compute" value="COMPUTE" style="border: 2px solid #C68642;border-radius: 7px;outline: none;border-color: #C68642;box-shadow: 0 0 10px #C68642;">
        </center>

        <?php

        $price = array(10,25,30,50);
       
        if(isset($_POST["compute"])){
                $unit=$_POST["unit"];

                if ($unit>="0" && $unit<="50"){
                    $waterbill = $price[0];
                }
                if ($unit>="51" && $unit<="150"){
                    $waterbill = $price[0]+$price[1]*($unit-"50");
                }
                if ($unit>="150" && $unit<="250"){
                    $waterbill = $price[0]+("100"*$price[1])+$price[2]*($unit-"150");
                }
                if ($unit>"250"){
                    $waterbill = $price[0]+("100"*$price[1])+("100"*$price[2])+$price[3]*($unit-"250");
                }

                echo "<br><center>".(date("Y-m-d")). "</center>"; 
                echo "<center>". $unit. " unit/s</center>";
                echo "<center><hr>PRICE:<br> Php ". $price[0]. ".00 for the first 50 units. <br>". "Php ". $price[1]. ".00 per unit for the next 100 units. <br>"."Php ". $price[2]. ".00 per unit for the next 100 units. <br>"."Php ". $price[3]. ".00 per unit for the next 100 units. <center>"."<hr>";
                echo "<center>Water Bill: Php ". $waterbill . "<br>"; 
            }

        ?>

    </form>
</body>
</html>

