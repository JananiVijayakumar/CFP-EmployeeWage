<?php
class EmployeeWage
{
    function getEmpAttendance()
    {
        $IS_PRESENT = 1;
        $wagePerHour = 20;
        $workingHour = 8;
        $empCheck = rand(0, 1);
        echo "Employee Attendance : $empCheck";
        $wagePerDay = $wagePerHour * $workingHour;
        if ($empCheck == $IS_PRESENT) {
            echo "\nEmployee is Present";
            echo "\nEmployee Daily Wage is : $wagePerDay";
        } else {
            echo "\nEmployee is Absent";
        }
    }
}
$obj = new EmployeeWage();
$obj->getEmpAttendance();
