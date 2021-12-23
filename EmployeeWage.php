<?php
class EmployeeWage
{
    function getEmpAttendance()
    {
        $IS_PRESENT = 1;
        $empCheck = rand(0, 1);
        echo "Employee Attendance : $empCheck";
        if ($empCheck == $IS_PRESENT) {
            echo "\nEmployee is Present";
        } else {
            echo "\nEmployee is Absent";
        }
    }
}
$obj = new EmployeeWage();
$obj->getEmpAttendance();
