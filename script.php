<?php
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];
echo "<p>$paragraph</p>";
$new_paragraph = str_replace($word, '***', $paragraph);
$paragraph_lenght = strlen($new_paragraph);
echo "<p>$new_paragraph</p>";
echo "<p>$paragraph_lenght</p>";
?>