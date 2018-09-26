<?php
require('helpers.php');
require('logic.php');
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Project 2 for Fall semester</title>
    <meta charset='utf-8'>

</head>
<body>

<h1>Word Counter</h1>

<p>Word counter is a small app that calculates the number of words/characters for your input.</p>

<form method='POST' action='search.php'>
    <label>Write down sentences as your input
        <input type='text' name='searchTerm' value='<?php if (isset($searchTerm)) echo $searchTerm ?>'>
    </label>
    <br>
    <label>
        <input type='checkbox' name='countSpace' value='<?php if(isset($countSpace)) echo 'checked'?>' >
        Count space
    </label>
    <br>
    <input type='submit' value='Count!'>
</form>

</body>
</html>