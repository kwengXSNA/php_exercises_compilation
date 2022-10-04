<!DOCTYPE html>
<html>
<body>

<?php
$person = array('name'=> "Christina Mangapuro", 'degree_year' => "C CT-2",'course'=>"SD-208", 'course_description'=> "Web Development 3"); 

echo "Array ([name] => ". $person['name']." [degree_year] => ".$person['degree_year']." [course] => ".$person['course']." [course_description] => ".$person['course_description'];
echo "<br>";
echo "There are ". strlen($person['name']). " characters on the name index";
echo "<br>";
echo "There are ". strlen($person['degree_year']). " characters on the degree_year index";
echo "<br>";
echo "There are ". strlen($person['course']). " characters on the course index";
echo "<br>";
echo "There are ". strlen($person['course_description']). " characters on the course_description index";



?>

</body>
</html>
