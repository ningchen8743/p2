<?php
// session_start();

function countTotal(){
    $countResult = 0;

    // string
    $text = $_POST["textarea"];

    // boolean
    $countSpace = isset($_POST["countSpace"]);

    // string
    $wordOrChar = $_POST["wordOrChar"];

    // perform calculation
    $charArray = str_split($text);
    $charCount = count($charArray);
    $spaceCount = 0;
    foreach ($charArray as $char) {
        if($char == ' ') {
            ++$spaceCount;
        }
    }

    $wordArray = explode(" ", $text);
    $wordCount = count($wordArray);

    // get result
    if($countSpace) {
        if($wordOrChar == 'word') {
            $countResult = $wordCount + $spaceCount;
        } else {
            $countResult = $charCount;
        }
    } else {
        if($wordOrChar == 'word') {
            $countResult = $wordCount;
        } else {
            $countResult = $charCount - $spaceCount;
        }
    }
    return $countResult;
}

/*$results = $_SESSION['results'];
$wordCount = $results['wordCount'];
$countSpace = $results['countSpace'];*/

// session_unset();
