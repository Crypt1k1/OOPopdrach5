<?php


class Appointment
{
    private $patient;
    private $doctor;
    private $nurse;
    private $startTime;
    private $endTime;

    public function __construct(Patient $patient, Doctor $doctor, Nurse $nurse, DateTime $startTime, DateTime $endTime)
    {
        $this->patient = $patient;
        $this->doctor = $doctor;
        $this->nurse = $nurse;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }

    public function getPatient(): Patient
    {
        return $this->patient;
    }

    public function getDoctor(): Doctor
    {
        return $this->doctor;
    }

    public function getNurse(): Nurse
    {
        return $this->nurse;
    }

    public function getStart(): DateTime
    {
        return $this->startTime;
    }

    public function getEnd(): DateTime
    {
        return $this->endTime;
    }
}