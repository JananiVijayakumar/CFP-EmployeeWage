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
    public $totalEmpWorkingHour = 0;
    public $EmpWorkingHour = 0;
    public $WAGE_PER_DAY = 0;
    public $TOTAL_WAGE = 0;
    function calculateEmployeeWage($companyName, $wagePerHour, $workingDays)
    {
        for ($i = 1; $i < $workingDays; $i++) {
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
            if ($this->totalWorkingHour >= 100 || $i == 20) {
                break;
            }
            $this->WAGE_PER_DAY = $wagePerHour * $empHour;
            $this->totalEmpwage += $this->WAGE_PER_DAY;
            $this->totalWorkingHour += $empHour;
        }
        $multipleCompanyDetails = array("Comapany Name :" . $companyName, "Total Working Hours :" . $this->totalWorkingHour, "Total Working Days :" . $i, "Total Wage :" . $this->totalEmpwage);
        print_r($multipleCompanyDetails);
    }
}

$empWage = new EmployeeWage();
$empWage->calculateEmployeeWage("TATA", "8", "22");
