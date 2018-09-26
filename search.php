<?php
session_start();
require('helpers.php');

$searchTerm = $_POST['searchTerm'];

dump($searchTerm);

$_SESSION['results'] = [
    'searchTerm' => $searchTerm,
    'wordCount' => count($inputWords),
    'countSpace' => $countSpace,
];

header('location:index.php');
