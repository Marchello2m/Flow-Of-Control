<?php
$first= readline("input First number: ");
$second=readline("input second number: ");
$third=readline("input third number: ");
echo "Input the 1st number: ".$first.PHP_EOL;

echo "Input the 2nd number: ".$second.PHP_EOL;

echo "Input the 3rd number: ".$third.PHP_EOL;

$numbers=[$first,$second,$third];
echo "largest number is : ".max($numbers).PHP_EOL;
//todo print the largest number