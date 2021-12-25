<?php

/**
 * Author : Janani Vijayakumar
 * Date : 24-12-2021
 * Desc : Calculate Employee Monthly Wage
 */
class EmployeeWage
{
    private $IS_PRESENT = 1;
    public $IS_FULL_TIMER = 1;
    public $IS_PART_TIMER = 2;
    public $wagePerHour = 20;
    public $fullTimeEmpWorkingHour = 8;
    public $partTimeEmpWorkingHour = 8;
    public $workingDaysPerMonth = 20;
    function calculateEmployeeWage()
    {
        $empCheck = rand(0, 1);
        echo "Employee Attendance : $empCheck";
        switch ($empCheck == $this->IS_PRESENT) {
            case $this->IS_FULL_TIMER:
                echo "\n Employee is Present";
                $fullTimeEmpWagePerDay = $this->wagePerHour * $this->fullTimeEmpWorkingHour;
                echo "\n Full time Employee Daily Wage is : $fullTimeEmpWagePerDay";
                $totalWagePerMonth = $this->workingDaysPerMonth * $fullTimeEmpWagePerDay;
                echo "\n Full time Employee Monthly Wage is : $totalWagePerMonth";
                break;
            case $this->IS_PART_TIMER:
                echo "\n Employee is Present";
                $partTimeEmpWagePerDay = $this->wagePerHour * $this->partTimeEmpWorkingHour;
                echo "\n Part time Employee Daily Wage is : $partTimeEmpWagePerDay";
                $totalWagePerMonth = $this->workingDaysPerMonth * $partTimeEmpWagePerDay;
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
