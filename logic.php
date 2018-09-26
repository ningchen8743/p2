<?php
session_start();

$results = $_SESSION['results'];
$searchTerm = $results['searchTerm'];
$wordCount = $results['wordCount'];
$countSpace = $results['countSpace'];

session_unset();