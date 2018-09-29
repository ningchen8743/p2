<?php

namespace Basic;

class WordProcessor {
    
    // input data
    public $text = '';
    public $countSpace = False;
    public $wordOrChar = '';
    
    // output data
    private $charCount  = 0;
    private $spaceCount = 0;
    private $wordCount  = 0;

    // method
    function __construct($array) {
        $this->text = $array["textarea"];
        $this->countSpace = isset($array["countSpace"]);
        $this->wordOrChar = $array["wordOrChar"];
    }

    public function CountTotal(){
        $countResult = 0;

        if(empty($this->text)) {
            return 0;
        }

        // perform calculation
        $charArray = str_split($this->text);
        $this->charCount = count($charArray);
        foreach ($charArray as $char) {
            if($char == ' ') {
                ++$this->spaceCount;
            }
        }

        $wordArray = explode(" ", $this->text);
        $this->wordCount = count($wordArray);

        // get result
        if($this->countSpace) {
            if($this->wordOrChar == 'word') {
                $countResult = $this->wordCount + $this->spaceCount;
            } else {
                $countResult = $this->charCount;
            }
        } else {
            if($this->wordOrChar == 'word') {
                $countResult = $this->wordCount;
            } else {
                $countResult = $this->charCount - $this->spaceCount;
            }
        }
        return $countResult;
    }
}