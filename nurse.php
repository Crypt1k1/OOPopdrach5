<?php

class Nurse extends Staff
{
    public function __construct(string $name, float $salary)
    {
        parent::__construct($name, $salary);
    }
    public function getHourlyRate(): float
    {
        return $this->salary / self::WORK_HOURS;
    }
}