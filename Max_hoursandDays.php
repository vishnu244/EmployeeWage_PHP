<?php

$workingdays =0;

$maxworkinghrs = 100;
$maxworkingdays = 20;
$Wage_PerHour=20;
$empHrs = 0;
$random_number=rand(0,2);

if ($random_number == 1)
{
    echo "Employee is Present " ;
    echo "Employee is Full Time";

}
else if ($random_number == 2)
{
    echo "Employee is Present ";
    echo "Employee is Part Time";

}

else
{
    echo "Employee is Absent "; 

}

while (($empHrs < $maxworkinghrs) && ($workingdays < $maxworkingdays))
{
    switch ($random_number)
    {
        case 1:
            $empHrs += 8;
            break;
        case 2:
            $empHrs += 4;
            break;
        
        default:
            $empHrs = 0;
            break;
    }
    $workingdays++;

}

echo "Total working Hours : ",$empHrs;
echo "Total working Days Per Month :",$workingdays;
$monthsalary = $Wage_PerHour * $empHrs;
echo "Total Salary of Employee per Month : ",$monthsalary;

/*
$empWage=$Wage_PerHour*$empHrs;
echo "Wage of Employee = ",$empWage;

$empwage_mnt =  $empWage * $Emp_working_days_mnt;
echo "Wage of Employee per month = ",$empwage_mnt;*/
?>