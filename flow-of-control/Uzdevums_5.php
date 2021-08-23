<?php
$word= strtolower(readline('Enter a word: '));
$letters = str_split($word);
function letterToDigit(string $letter):string
{
    switch($letter)
    {
        case "a":
        case "b":
        case"c":
            return "2";
        case "d":
        case "e":
        case"f":
            return "3";
        case "g":
        case "h":
        case"i":
            return "4";
        case "j":
        case "k":
        case"l":
            return "5";
        case "m":
        case "n":
        case"o":
            return "6";
        case "p":
        case "q":
        case"r":
        case"s":
            return "7";
        case "t":
        case "u":
        case"v":
            return "8";
        case "w":
        case "x":
        case"y":
        case"z":
            return "9";

    }
    return "E";
}
$keypad ="";

foreach ($letters as $letter)
{
    $keypad.=letterToDigit($letter);
}
echo $keypad.PHP_EOL;