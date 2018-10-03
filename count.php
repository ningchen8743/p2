<?php

require 'WordProcessor.php';
require 'Form.php';

use Basic\WordProcessor;
use DWA\Form;

session_start();

$wordProcessor = new WordProcessor($_POST);
$form = new Form($_POST);

$arg = ['textarea' => 'required'];
$errors = $form->validate($arg);

$countResult = 0;
if ($form->hasErrors) {
    $errmsg = implode(';', $errors);
    $countResult = $errmsg;
} else {
    $countResult = $wordProcessor->CountTotal();
}

$_SESSION['result_cache'] = [
    'textarea_cache' => $wordProcessor->text,
    'countSpace_cache' => $wordProcessor->countSpace,
    'wordOrChar_cache' => $wordProcessor->wordOrChar,
    'countResult_cache' => $countResult,
    'errors_cache' => $errors,
];

header('Location: index.php');
