<?php


/*Exercise #7
Create a PHP application that will create a class named
Student
with the
following properties:
•
First Name
•
Last Name
•
Degree and Year
•
Birthday
After setting the properties, display the values like the following:
Hello, my name is {
first_name
} {
last_name
}. I am currently taking up
{
degree_and_year
} and I was born on {birthday
}. Also, a calendar of your
birthmonth
on your birthyear should be present.
Save the file as : php_exercise8_lastname.
php and upload it.*/



class Student {
    public $first_name;
    public $last_name;
    public $degree_and_year;
    public $birthday;

    function __construct($first_name, $last_name,$degree_and_year,$birthday){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->degree_and_year = $degree_and_year;
        $this->birthday = $birthday;    
    }

    function get_fname(){
        return $this->first_name;
    }

    function get_lname(){
        return  $this->last_name;
    }

    function get_degnyr(){
        return  $this->degree_and_year;
    }

    function get_bday(){
        return  $this->birthday;
    }

    function Calendario($month, $year){
        $sevendays = array('S', 'M', 'T', 'W', 'T', 'F','S');
        $day1ofMonth = mktime(0,0,0,$month,1,$year); //first day of a month of a particular year
        $numberOfDays = date('t',$day1ofMonth);
        $date = getdate($day1ofMonth);
        $monthName = $date['month'];
        $dayOfMonth = $date['wday'];

        $calendar = "<table>";
        $calendar .= "<caption> $monthName $year</caption>";
        $calendar .= "<tr>";


        foreach($sevendays as $days) {
            $calendar .= "<th>$days</th>";
        }

        $currentDay = 1;
        $calendar .= "<tr></tr>";

        if ($dayOfMonth>0){
            $calendar .= "<td colspan='$dayOfMonth'&nbsp></td>";
        }

        $month = str_pad($month, 2, "0",STR_PAD_LEFT);
        
        while($currentDay <= $numberOfDays){
            if ($dayOfMonth == 7){
                $sevendays = 0;
                $calendar .= "<tr></tr>";
            }

            $currentDayValue = str_pad($currentDay,2,"0", STR_PAD_LEFT);
            $date = "$year-$month-$currentDayValue";
            $calendar .= "<td rel=$date>$currentDay</td>";

            $currentDay++;
            $dayOfMonth++;

        }

        return $calendar;
    }

}

$student1 = new Student("Christina","Mangapuro","C CT-2","5th of April 2002");
echo "Hello my name is ". $student1->get_fname() ." ".$student1->get_lname().". I am currently taking up ". $student1->get_degnyr()." and I was born on ". $student1->get_bday().".";

// Smonth = ;
echo $student1->Calendario(04,2002);

// include 'Calendario.php';
// $calendar = new Calendario();

// $calendar->add_event('Birthday','2002-04-05','red');

//not yet good. still need to be refined
?>

