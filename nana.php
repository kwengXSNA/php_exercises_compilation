<!-- 2. Question Title: String
Create a class named String that has the following methods and properties :
str – a property that accepts a string value.
NumberofChars - a method that returns the number of characters in the str
RemoveSpecialChars - a method that removes special characters in the str property (if found) and then returns the new string. 
GroupStrInto – a method that accepts an integer parameter that will group the characters in the str property into the specified integer parameter and return it as an array (e.g., if the str is composite and the integer parameter is set to 3, then returns an array with the contents ‘com’, ’pos’,’ and ’ite’.).
FindCharOccurence – a method that returns the number of times that a given letter is found in the str 
ReplaceChar - a method that accepts two-character parameters. The first character will be the one found in the str property and is then replaced by the second character. This will then replace the value from the str For example, if the str property is assassin, and the two-character parameters for the method are s and p, then the new value for the str property will be appappin. -->

<?php

class Strings{
    public $str;

    function __construct($str){
        $this->str = $str;
    }

    public function NumberOfChars(){
        return strlen($this->str);
    }

    public function RemoveSpecialChars(){
        $new_str = str_replace(array('\'','/',',',';','-',':','!','"','#','$','%','*','&'), " ", $str);
        return $new_str;
    }

    public function GroupStrInto(){
        $arr= strlen($this->str)/count()
    }


}



?>
