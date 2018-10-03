<?php
require 'helpers.php';
require 'logic.php';
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

<form method='POST' action='count.php' id='word_count'>
    <fieldset>
        <label>Write down sentences (do not enter line break!)</label>
        <br>
        <textarea form='word_count' name='textarea' rows=5><?php if(isset($textarea_cache)) echo $textarea_cache; ?></textarea>
    </fieldset>

    <br><br>

    <fieldset>
        <input type='checkbox' name='countSpace' <?php if(isset($countSpace_cache) && $countSpace_cache == True) echo "checked"; ?>>
        <label>Count space character?</label>
    </fieldset>

    <br><br>

    <fieldset>
        <label>Count by character or word</label>
        <select name='wordOrChar' form='word_count'>
            <option value='character' <?php if(isset($wordOrChar_cache) && $wordOrChar_cache == 'character') echo "selected"; ?>>Character</option>
            <option value='word'      <?php if(isset($wordOrChar_cache) && $wordOrChar_cache == 'word'     ) echo "selected"; ?>>Word</option>
        </select>
    </fieldset>

    <br><br>

    <fieldset>
        <label>Result</label>
        <br>
        <output><?php if(isset($countResult_cache)) echo $countResult_cache; ?></output>
    </fieldset>

    <br><br>

    <input type='submit' value='Count!'>
</form>

</body>
</html>

