<?php
session_start();
require 'helpers.php';

$wordCount = $_POST['wordCount'];


$_SESSION['results'] = [

];

header('location:index.php');
