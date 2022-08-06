<?php

$Wage_PerHour=20;
$empHrs = 0;
$random_number=rand(0,2);
switch($random_number){
    case 1:
        echo "Employee is Present and FullTime " ;
        //echo "\n";
        $empHrs=8;
    break;
    case 2:
        echo "Employee is Present and PartTime ";
        //echo "\n";
        $empHrs=4;
    break;
    default:
        echo "Employee is Absent "; 
        //echo "\n";
       
    break;
}
$empWage=$Wage_PerHour*$empHrs;
echo "Wage of Employee = ",$empWage;


?>