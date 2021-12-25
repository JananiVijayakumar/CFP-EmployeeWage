<?php

/**
 * Author : Janani Vijayakumar
 * Date : 24-12-2021
 * Desc : Calculate Employee Monthly Wage
 */
class EmployeeWage
{
    public $IS_FULL_TIMER = 1;
    public $IS_PART_TIMER = 2;
    public $WORKING_DAYS_PER_MONTH = 20;
    public $WORKING_HOUR_PER_MONTH = 100;
    public $wagePerHour = 20;
    public $totalEmpWorkingHour = 0;
    public $EmpWorkingHour = 0;
    public $totalEmpWorkingDays = 0;
    public $fullTimeEmpWorkingHour = 8;
    public $partTimeEmpWorkingHour = 8;
    function calculateEmployeeWage()
    {
        for ($i = 0; $i < $this->WORKING_DAYS_PER_MONTH; $i++) {
            while ($this->totalEmpWorkingHour <= $this->WORKING_HOUR_PER_MONTH || $this->totalEmpWorkingDays < $this->WORKING_DAYS_PER_MONTH) {
                $this->totalEmpWorkingDays++;
                $empCheck = rand(0, 1);
                echo "\nEmployee Attendance : $empCheck";
                switch ($empCheck) {
                    case $this->IS_FULL_TIMER:
                        echo "\n Employee is Present";
                        $empHour = 8;
                        break;
                    case $this->IS_PART_TIMER:
                        echo "\n Employee is Present";
                        $empHour = 4;
                        break;
                    default:
                        echo "\n Employee is Absent";
                        $empHour = 0;
                        echo "\n Employee Monthly Wage is : 0";
                        break;
                }
                $this->totalEmpWorkingHour += $empHour;
                echo "\nEmployee Working Day : " . $this->totalEmpWorkingDays;
                echo "\nEmployee Hours :" . $empHour;
                $totalEmpwage = $this->totalEmpWorkingHour * $this->wagePerHour;
                echo "\nTotal Employee Wage :" . $totalEmpwage;
            }
        }
    }
}
$empWage = new EmployeeWage();
$empWage->calculateEmployeeWage();
