<?php

session_start();

if (isset($_SESSION['result_cache'])) {
    $temp = $_SESSION['result_cache'];

    $textarea_cache = $temp['textarea_cache'];
    $countSpace_cache = $temp['countSpace_cache'];
    $wordOrChar_cache = $temp['wordOrChar_cache'];
    $countResult_cache = $temp['countResult_cache'];
    $errors_cache = $temp['errors_cache'];
}

session_unset();

