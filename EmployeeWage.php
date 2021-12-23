<?php
class EmployeeWage
{
    function calculateEmployeeWage()
    {
        $IS_PRESENT = 1;
        $IS_FULL_TIMER = 1;
        $IS_PART_TIMER = 2;
        $wagePerHour = 20;
        $fullTimeEmpWorkingHour = 8;
        $partTimeEmpWorkingHour = 8;
        $workingDaysPerMonth = 20;
        $empCheck = rand(0, 1);
        echo "Employee Attendance : $empCheck";
        $fullTimeEmpWagePerDay = $wagePerHour * $fullTimeEmpWorkingHour;
        $partTimeEmpWagePerDay = $wagePerHour * $partTimeEmpWorkingHour;
        $totalWagePerMonth = $workingDaysPerMonth * $fullTimeEmpWagePerDay;
        switch ($empCheck == $IS_PRESENT) {
            case $IS_FULL_TIMER:
                echo "\n Employee is Present";
                echo "\n Full time Employee Daily Wage is : $fullTimeEmpWagePerDay";
                echo "\n Full time Employee Monthly Wage is : $totalWagePerMonth";
                break;
            case $IS_PART_TIMER:
                echo "\n Employee is Present";
                echo "\n Part time Employee Daily Wage is : $partTimeEmpWagePerDay";
                echo "\n Part time Employee Monthly Wage is : $totalWagePerMonth";
                break;
            default:
                echo "\n Employee is Absent";
                echo "\n Employee Monthly Wage is : 0";
                break;
        }
    }
}
$obj = new EmployeeWage();
$obj->calculateEmployeeWage();
