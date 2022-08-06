<?php

$Wage_PerHour=20;
$Emp_working_days_mnt = 25;
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

$empwage_mnt =  $empWage * $Emp_working_days_mnt;
echo "Wage of Employee per month = ",$empwage_mnt;
?>