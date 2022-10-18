<?php

class Str1ng{
    // a
    public ?string $str;
 
    
    function __construct($str){
        $this->str = $str;
    }

    // b
    public function NumberofChars(){
        $NumberofChars = strlen($this->str);
        return $NumberofChars;
    }

    //c
    public function RemoveSpecialChars(){
        $RemoveSpecialChars = str_replace(array('\'','"',',',';','<','>'),' ',$this->str);
        return $RemoveSpecialChars;
    }

    //d
    public function GroupStrInto(){
        
    }

}




?>
