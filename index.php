<?php

require 'Student.php';

$studenteAmedeo = new Student();

$studenteAmedeo->firstname = 'Amedeo';
$studenteAmedeo->lastname = 'Pro';
$studenteAmedeo->birthdate = '26/01/1988';
$studenteAmedeo->grades = ['6','5','4'];

echo 'Voto medio dello studente '.$studenteAmedeo->firstname.' '.$studenteAmedeo->lastname.': '.$studenteAmedeo->averageGrades($studenteAmedeo->grades).'<br>';

echo 'Età dello studente '.$studenteAmedeo->firstname.' '.$studenteAmedeo->lastname.': '.$studenteAmedeo->age($studenteAmedeo->birthdate).'<br>';





 ?>
