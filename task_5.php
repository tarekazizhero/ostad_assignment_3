<?php
function generatePassword($length) {
    $password = '';
    $lowercaseChars = range(97, 122);
    $uppercaseChars = range(65, 90);
    $numberChars = range(48, 57);
    $specialChars = [33, 35, 36, 37, 94, 38, 42, 40, 41, 95, 43];

    $allChars = array_merge($lowercaseChars, $uppercaseChars, $numberChars, $specialChars);

    for ($i = 0; $i < $length; $i++) {
        $randomChar = chr($allChars[array_rand($allChars)]);
        $password .= $randomChar;
    }
    return $password;
}

$length = 12;
$password = generatePassword($length);

echo " Rendom Password Generate: $password \n";