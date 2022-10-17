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
            <table border =0>
                <tr>
                    <td style="font-family:Alkalami; font-weight:600; background:#628E90; border: 2px solid #BCCEF8;border-radius: 7px;outline: none;border-color: #BCCEF8;box-shadow: 0 0 10px #CDFCF6;">
                    &nbsp;&nbsp; SALARY (in ₱)&nbsp;&nbsp;
                    </td>
                    <td style="border: 2px solid #BCCEF8;border-radius: 7px;outline: none;border-color: #BCCEF8;box-shadow: 0 0 10px #CDFCF6;">
                        <input type=text name="salary">
                    </td>
                </tr>
            </table>
            <br>
            <input type=submit name="tax_reveal" value="C O M P U T E &nbsp;&nbsp;T A X" style="background:#9ED2C6; border: 2px solid #BCCEF8;border-radius: 7px;outline: none;border-color: #BCCEF8;box-shadow: 0 0 10px #BCCEF8;">
        </center>

        <?php

        $deductions=array();
       
        if(isset($_POST["tax_reveal"])){
                $emp_salary=$_POST["salary"];

                if ($emp_salary<="20 833"){
                    $tax = "0";
                }

                if ($emp_salary<="20 833" || $emp_salary>="33 332"){
                    $tax = ($emp_salary-"20 833")*"0.20";
                }

                if ($emp_salary<="33 333" || $emp_salary>="66 666"){
                    $tax = "2 500" + ($emp_salary-"33 333")*"0.25";
                }

                if ($emp_salary<="66 667" || $emp_salary>="166 666"){
                    $tax = "10 833.33" + ($emp_salary-"66 667")*"0.30";
                }

                if ($emp_salary<="166 667" || $emp_salary>="666 666"){
                    $tax = "40 833.33" + ($emp_salary-"166 667")*"0.32";
                }
                
                if ($emp_salary>="666 667"){
                    $tax = "200 833.33" + ($emp_salary-"666 667")*"0.35";
                }

                echo $tax;
            }
        ?>

    </form>
</body>
</html>
