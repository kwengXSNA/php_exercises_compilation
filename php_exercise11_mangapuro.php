<?php

class WordCheck{

    function __construct($word) {
        $this->word = $word;
    }

    public function first_letter(){
        $first_letter = substr($this->word,0,1);
        return $first_letter;
    }

    public function last_letter(){
        $last_letter = $this->word[strlen($this->word)-1];
        return $last_letter;
        // substr($txt, strlen($txt)-1) = substr($this->word, strlen($this->word)-1);
        // $txt[strlen($txt)-1] = $this->word[strlen($this->word)-1]
    }

    public function char_len(){
        $char_len = strlen($this->word);
        return $char_len;
    }

    public function test_palindrome(){
        if (strrev($this->word) == $this->word){
            return "Palindrome!" ;
        } else {
            return "Not Palindrome" ;
        }

    }


}







?>