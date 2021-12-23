<?php
class EmployeeWage
{
    function getEmpAttendance()
    {
        $IS_PRESENT = 1;
        $wagePerHour = 20;
        $fullTimeEmpWorkingHour = 8;
        $partTimeEmpWorkingHour = 8;
        $empCheck = rand(0, 1);
        echo "Employee Attendance : $empCheck";
        $fullTimeEmpWagePerDay = $wagePerHour * $fullTimeEmpWorkingHour;
        $partTimeEmpWagePerDay = $wagePerHour * $partTimeEmpWorkingHour;
        if ($empCheck == $IS_PRESENT) {
            echo "\nEmployee is Present";
            echo "\nFull time Employee Daily Wage is : $fullTimeEmpWagePerDay";
            echo "\nPart time Employee Daily Wage is : $partTimeEmpWagePerDay";
        } else {
            echo "\nEmployee is Absent";
        }
    }
}
$obj = new EmployeeWage();
$obj->getEmpAttendance();
