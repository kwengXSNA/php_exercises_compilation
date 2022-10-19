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
    $salary = $_POST["salary"];
    $first_name = $_POST["firstname"];
    $last_name = $_POST["lastname"];
}

class Salary{
    public $first_name;
    public $last_name;
    public $salary;

    function __construct($first_name,$last_name,$salary){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->salary = $salary;

    }

               
        public function getWithHoldingTax($salary){

            if ($this->salary<="20833"){
                $ttl_tax = $this->salary -"0";
                // return $ttl_tax;
            }

            if ($this->salary>="20833" || $this->salary<="33332"){
                $sal_deduct = $this->salary - "20833";
                $ttl_tax = $sal_deduct * "0.20";
                // return $ttl_tax;
            }

            if ($this->salary>="33333" || $this->salary<="66666"){
                $sal_deduct = $this->salary - "33333";
                $tax = $sal_deduct*"0.25";
                $ttl_tax = $tax + "2500";
                // return $ttl_tax;
            }

            if ($this->salary>="66667" || $this->salary<="166666"){
                $sal_deduct = $this->salary - "66667";
                $tax = $sal_deduct*"0.30";
                $ttl_tax = $tax + "10833.33";
                // return $ttl_tax;
            }

            if ($this->salary>="166667" || $this->salary<="666666"){
                $sal_deduct = $this->salary - "166667";
                $tax = $sal_deduct*"0.32";
                $ttl_tax = $tax + "40833.33";
                // return $ttl_tax;
            }
            
            if ($this->salary>="666667"){
                $sal_deduct = $this->salary -"666667";
                $tax = $sal_deduct*"0.35";
                $ttl_tax = $tax + "200833.33";
                // return $ttl_tax;
            }
        }
    }

    function display(){

        echo "Name: ". $this->first_name ." ". $this->last_name;
        echo "Salary: ". $this->salary;
        echo "Withholding Tax: ".$ttl_tax;

    }


?>