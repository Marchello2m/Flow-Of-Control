<?php
$baseSalary =(float)readline('Enter base salary(hourly): ');
$hours =(int)readline('Enter amount of hour: ');

if($baseSalary<=0)
{
    echo "invalid hours.";
    exit;
}

if($baseSalary<8)
{
    echo "invalid hours.";
    exit;
}

if($hours<=0)
{
    echo "invalid hours.";
    exit;
}
if($hours>60)
{
    echo "Too many";
    exit;
}
function getSalary(float $baseSalary,int $hours):float
{
    $baseSalary =$baseSalary *100;
    $overtime=($hours-40)>0?$hours-40:0;
   return ($baseSalary*($hours-$overtime))+($baseSalary*1.5*$overtime);


}
$salary =getSalary($baseSalary,$hours)/100;


echo "salry: ${salary}$";


