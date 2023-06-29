<?php

require 'Person.php';
require 'Patient.php';
require 'Appointment.php';
require 'Staff.php';
require 'Doctor.php';
require 'Nurse.php';

$patient = new Patient('John Doe', 500.00);
$doctor = new Doctor('Dr. Smith', 1000.00);
$nurse = new Nurse('Nurse Johnson', 500.00);

$start = new DateTime('2023-04-20 10:00:00');
$end = new DateTime('2023-04-20 11:00:00');

$appointment = new Appointment($patient, $doctor, $nurse, $start, $end);

echo "Appointment Details:" ;
echo "Patient: " . $appointment->getPatient()->getName() ;
echo "Doctor: " . $appointment->getDoctor()->getName() ;
echo "Nurse: " . ($appointment->getNurse() ? $appointment->getNurse()->getName() : 'None') ;
echo "Start Time: " . $appointment->getStart()->format('Y-m-d H:i:s') ;
echo "End Time: " . $appointment->getEnd()->format('Y-m-d H:i:s') ;
echo "Costs: $" . $appointment->getCosts() ;