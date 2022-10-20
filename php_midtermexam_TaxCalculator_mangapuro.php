<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Roboto+Mono&display=swap" rel="stylesheet">
</head>
<body style="background:#a4bccf;">
    <form action="" method="post" style="background:#475880;padding-top:5%;padding-bottom:5%;padding-left:5%;padding-right:5%;border-radius:2%;">
        <center>
            <hr><h3>Tax Calculator</h3><hr>
            <table border = 0>
                <tr>
                    <td style="font-family:Alkalami; font-weight:600; background:#628E90; border: 2px solid #BCCEF8;border-radius: 7px;outline: none;border-color: #BCCEF8;box-shadow: 0 0 10px #CDFCF6;">
                    &nbsp;&nbsp; FIRST NAME&nbsp;&nbsp;
                    </td>
                    <td style="border: 2px solid #BCCEF8;border-radius: 7px;outline: none;border-color: #BCCEF8;box-shadow: 0 0 10px #CDFCF6;">
                        <input type=text name="firstname">
                    </td>
                    <br>
                </tr>
               
                <tr>
                    <td style="font-family:Alkalami; font-weight:600; background:#628E90; border: 2px solid #BCCEF8;border-radius: 7px;outline: none;border-color: #BCCEF8;box-shadow: 0 0 10px #CDFCF6;">
                    &nbsp;&nbsp; LAST NAME&nbsp;&nbsp;
                    </td>
                    <td style="border: 2px solid #BCCEF8;border-radius: 7px;outline: none;border-color: #BCCEF8;box-shadow: 0 0 10px #CDFCF6;">
                        <input type=text name="lastname">
                    </td>
                </tr>
                <br>
                <tr>
                    <td style="font-family:Alkalami; font-weight:600; background:#628E90; border: 2px solid #BCCEF8;border-radius: 7px;outline: none;border-color: #BCCEF8;box-shadow: 0 0 10px #CDFCF6;">
                    &nbsp;&nbsp; SALARY (in ₱)&nbsp;&nbsp;
                    </td>
                    <td style="border: 2px solid #BCCEF8;border-radius: 7px;outline: none;border-color: #BCCEF8;box-shadow: 0 0 10px #CDFCF6;">
                        <input type=text name="salary">
                    </td>
                </tr>
                <br>
            </table>
            <br>
            <input type=submit name="tax_reveal" value="C O M P U T E &nbsp;&nbsp;T A X" style="height: 50px; background:#9ED2C6; border: 2px solid #BCCEF8;border-radius: 7px;outline: none;border-color: #BCCEF8;box-shadow: 0 0 10px #BCCEF8;">
        </center>


<?php
if(isset($_POST["tax_reveal"])){
    echo "<br><center>Name: ". $_POST['firstname'] ." ". $_POST['lastname']."</center>";
    echo "<center>Salary: ".$_POST['salary']."</center>";
}
?>
    

<?php

class Salary{
    public $first_name;
    public $last_name;
    public $salary;
               
    function __construct($first_name, $last_name,$salary){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->salary = $salary;


    }
    public function getWithHoldingTax(){


        $salary = $_GET['salary'];

            if ($salary<="20833"){
                $ttl_tax = $this->salary -"0";
                echo $ttl_tax;
            }

            if ($salary>="20833" || $salary<="33332"){
                $sal_deduct = $salary - "20833";
                $ttl_tax = $sal_deduct * "0.20";
                echo $ttl_tax;
            }

            if ($salary>="33333" || $salary<="66666"){
                $sal_deduct = $salary - "33333";
                $tax = $sal_deduct*"0.25";
                $ttl_tax = $tax + "2500";
                echo $ttl_tax;
            }

            if ($salary>="66667" || $salary<="166666"){
                $sal_deduct = $salary - "66667";
                $tax = $sal_deduct*"0.30";
                $ttl_tax = $tax + "10833.33";
                echo $ttl_tax;
            }

            if ($salary>="166667" || $salary<="666666"){
                $sal_deduct = $salary - "166667";
                $tax = $sal_deduct*"0.32";
                $ttl_tax = $tax + "40833.33";
                echo  $ttl_tax;
            }
            
            if ($salary>="666667"){
                $sal_deduct = $salary -"666667";
                $tax = $sal_deduct*"0.35";
                $ttl_tax = $tax + "200833.33";
                echo $ttl_tax;
            }
    }
    function display(){
        $display  = "Name: ". $this->first_name." ".$this->last_name; 
        return $display;
    }
}

   



?>