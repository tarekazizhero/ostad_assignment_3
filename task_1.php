<?php
$text = "The quick brown fox jumps over the lazy dog.";
function modifyText($text) {
    $newText = strtolower($text);
    $modifiedText = str_replace("brown", "red", $newText);
    echo $modifiedText;
}
modifyText($text);