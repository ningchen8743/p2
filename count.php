<?php
session_start();
require 'helpers.php';

$text = $_POST['textarea'];


$_SESSION['results'] = [
    'textarea'=> $text,
];

header('location:index.php');
