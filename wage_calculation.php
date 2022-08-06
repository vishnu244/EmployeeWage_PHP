<?php
$Employee_Wage_PerHour=20;
$random_number=rand(0,1);
$empHrs=0;
if($random_number==1)
{
    echo "EMPLOYEE IS PRESENT \n" ;
    $empHrs=8;
}
else
{
    echo "EMPLOYEE IS ABSENT \n";
    $empHrs=0;
}
$empWage=$Employee_Wage_PerHour*$empHrs;
echo "Wage of Employee is ",$empWage;
?>