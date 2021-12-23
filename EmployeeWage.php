<?php
class EmployeeWage
{
    function checkDailyWage()
    {
        $IS_PRESENT = 1;
        $IS_FULL_TIMER = 2;
        $IS_PART_TIMER = 3;
        $wagePerHour = 20;
        $fullTimeEmpWorkingHour = 8;
        $partTimeEmpWorkingHour = 8;
        $empCheck = rand(0, 1);
        echo "Employee Attendance : $empCheck";
        $fullTimeEmpWagePerDay = $wagePerHour * $fullTimeEmpWorkingHour;
        $partTimeEmpWagePerDay = $wagePerHour * $partTimeEmpWorkingHour;
        switch ($empCheck == $IS_PRESENT) {
            case $IS_FULL_TIMER:
                echo "\nEmployee is Present";
                echo "\nFull time Employee Daily Wage is : $fullTimeEmpWagePerDay";
                break;
            case $IS_PART_TIMER:
                echo "\nEmployee is Present";
                echo "\nPart time Employee Daily Wage is : $partTimeEmpWagePerDay";
                break;
            default:
                echo "\nEmployee is Absent";
                break;
        }
    }
}
$obj = new EmployeeWage();
$obj->checkDailyWage();
