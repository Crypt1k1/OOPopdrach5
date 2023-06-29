<?php

abstract class Staff extends Person {
    protected float $salary;
    protected const WORK_HOURS=40;

    public function __construct(string $name, float $salary) {
        parent::__construct($name, 'Staff');
        $this->salary = $salary;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    public function getRole(): string {
        return $this->role;
    }
}