<?php

/**
 * Author : Janani Vijayakumar
 * Date : 24-12-2021
 * Desc : Calculate Employee Monthly Wage
 */
class EmployeeWageBuilder
{
    public $IS_FULL_TIMER = 1;
    public $IS_PART_TIMER = 2;
    public $FULL_TIME_EMP_WORKING_HOURS = 8;
    public $PART_TIME_EMP_WORKING_HOURS = 4;
    public $IS_PRESENT = 0;
    public $workingHours = 0;
    public $wagePerMonth = 0;
    public $totalWorkingDays = 0;
    public $totalWorkingHours = 0;
    function calculateEmpAttendance()
    {
        $empCheck = rand(0, 1);
        echo "\nEmployee Attendance : $empCheck";
        switch ($empCheck) {
            case $this->IS_FULL_TIMER:
                echo "\nFull-time Employee is Present.";
                return $this->FULL_TIME_EMP_WORKING_HOURS;
                break;

            case $this->IS_PART_TIMER:
                echo "\nPart-time Employee is Present.";
                return $this->PART_TIME_EMP_WORKING_HOURS;
                break;

            default:
                echo "\nEmployee is Absent";
                return 0;
                break;
        }
    }
    function calculateDailyWage($wagePerHour)
    {
        $this->workingHours = $this->calculateEmpAttendance();
        $empDailyWage = $wagePerHour * $this->workingHours;
        echo "\nEmployee total Working Hours : " . $this->workingHours;
        echo "\nEmployee Wage per day : " . $empDailyWage;
        return $empDailyWage;
    }
    function calculateMonthlyWage($WORKING_DAYS_PER_MONTH, $WORKING_HOURS_PER_MONTH, $wagePerHour)
    {
        while (
            $this->totalWorkingHours <= $WORKING_HOURS_PER_MONTH &&
            $this->totalWorkingDays < $WORKING_DAYS_PER_MONTH
        ) {
            $this->totalWorkingDays++;
            echo "\nWorking Day - " . $this->totalWorkingDays;
            $empDailyWage = $this->calculateDailyWage($wagePerHour);
            $this->wagePerMonth += $empDailyWage;
            $this->totalWorkingHours += $this->workingHours;
        }
        echo "\nEmployee total Working Days : " . $this->totalWorkingDays;
        echo "\nEmployee total Working Hours : " . $this->totalWorkingHour;
        echo "\nEmployee Monthly Wage : " . $this->wagePerMonth;
    }
    function getCompanyDetails()
    {
        $addCompany = readline("Enter the number of company to be added :");
        for ($i = 0; $i < $addCompany; $i++) {
            $companyName = readline('Enter the Company Name : ');
            echo "\nEmployee Wage calculation For $companyName";
            $WORKING_DAYS_PER_MONTH = readline("\nEnter the total Working Days Per Month for $companyName: ");
            $WORKING_HOURS_PER_MONTH = readline("\nEnter the total Working Hours Per Month for $companyName: ");
            $WAGE_PER_HR = readline("\nEnter Employee Wage Per Hour for $companyName: ");
            $this->calculateMonthlyWage($WORKING_DAYS_PER_MONTH, $WORKING_HOURS_PER_MONTH, $WAGE_PER_HR);
        }
    }
}
$company = new EmployeeWageBuilder();
$company->getCompanyDetails();
