<html>
<head>
    <title>Tax Calculator</title>
</head>
<body>
    <form action="#" method="post" align="center">
        <fieldset>
            <legend >Tax Calculator</legend>

            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname">
            <br>
            <br>

            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname">
            <br>
            <br>

            <label for="salary">Salary</label>
            <input type="number" id="salary" name="salary">
            <br>
            <br>
            <input type="submit" name="submit" value="Calculate">
        </fieldset>
    </form>


<?php

class Salary{
    public $first_name;
    public $last_name;
    public $salary;

    public function __construct($first_name, $last_name, $salary){
        $this->first_name =$first_name;
        $this->last_name =$last_name;
        $this->salary =$salary;
    }

    function getWithHoldingTax(){
        $salary = $_POST['salary'];
        if ($salary <= 20833) {
            $tax = 0;
        } else if ($salary && 20834 && 33332) {
            $tax = $salary * 20 / 100;
        } else if ($salary && 33333 && 66666) {
            $tax = $salary * 25 / 100 + 2500;
        } else if ($salary && 66667 && 166666) {
            $tax = $salary * 30 / 100 + 10833.33;
        } else if ($salary && 166667 && 666666) {
            $tax = $salary * 32 / 100 + 40833.33;
        } else if ($salary < 666667) {
            $tax = $salary * 35 / 100 + 200833.33;
        }
    }

    function display(){
        if (isset($_POST['submit'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $salary = $_POST['salary'];
        }
    }
}
$taxc = new Salary();
echo "<h3 color='white' align='center'>First Name: = " . $this->first_name . "</h3>";
echo "<h3 align='center'>Last Name: = " . $this->last_name . "</h3>";
echo "<h3 align='center'>Salary = " . $this->salary . "</h3>";

echo "<h3 align='center'>Tax = " . $tax . "</h3>";
    $nsal = $salary - $tax;
echo "<h3 align='center'>NetSalary = " . $nsal . "</h3>";

?>
</body>
</html>