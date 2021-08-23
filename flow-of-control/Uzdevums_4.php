<?php
//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6, respectively. Otherwise, it shall print "Not a valid day".
$day = readline("Enter dayNumber: ");

        if (1== $day) {
            echo  "Monday".PHP_EOL;
        } else if (2 == $day) {
            echo"Tuesday".PHP_EOL;
        } else if (3 == $day) {
           echo "Wednesday".PHP_EOL;
        } else if (4 == $day) {
        echo "Thursday".PHP_EOL;
        } else if (5 == $day) {
     echo "Friday".PHP_EOL;
        } else if (6 == $day) {
        echo"Saturday".PHP_EOL;
        } else if (7 == $day) {
            echo  "Sunday".PHP_EOL;
        } else {
           echo "Not a valid day".PHP_EOL;
        }



//Use:

    //a "nested-if" statement
   // a "switch-case-default" statement.
