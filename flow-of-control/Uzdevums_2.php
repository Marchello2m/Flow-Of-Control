<?php
$number=readline("Enter the number.");




function CheckNumber($number) {
    if ($number > 0)
    {$message = "Positive number";}
    if ($number == 0)
    {$message = "Zero";}
    if ($number < 0)
    {$message = "Negative number";}
    echo $message.PHP_EOL;
}
echo CheckNumber($number);



//todo print if number is positive or negative