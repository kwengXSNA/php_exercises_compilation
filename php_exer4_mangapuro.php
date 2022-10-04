<?php
function spellMyName() {
    $MyName ="Christina Mangapuro";
    $thename = strlen($MyName);
for ($index = 0; $index < $thename; $index++) {
    echo $MyName[$index];
    echo "<br>"; 
}
}
spellMyName();
?>



<!-- 1. create function spellMyName()
2. make sure function could be called x times where x is the number of letters the $str has. -->

<!-- alternate code: return and display are 2 different things!  -->

<!DOCTYPE html>
<html>
<body>

<?php
function spellMyName($str) {
    return $str;
}

$str="Queen";
$arr = [];

for($j=0; $j<strlen($str); $j++) {
	$arr[$j] = spellMyName($str[$j]);
}
print_r($arr);
?> 

</body>
</html>

