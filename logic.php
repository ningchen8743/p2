<?php
require 'WordProcessor.php';

$result = 0;

if(empty($_POST)) {
    $result = 0;
} else {
    $wordProcessor = new \Basic\WordProcessor($_POST);
    $result = $wordProcessor->CountTotal();

    $_SESSION['textarea_cache'] = $wordProcessor->text;
    $_SESSION['countSpace_cache'] = $wordProcessor->countSpace;
    $_SESSION['wordOrChar_cache'] = $wordProcessor->wordOrChar;
}

function GetTextAreaCache() {
    if(array_key_exists('textarea_cache', $_SESSION)) {
        return $_SESSION['textarea_cache'];
    } else {
        return '';
    }
}
