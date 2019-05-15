<?php

require 'Student.php';

//Amedeo Pro
$studenteAmedeo = new Student();

$studenteAmedeo->firstname = 'Amedeo';
$studenteAmedeo->lastname = 'Pro';
$studenteAmedeo->birthdate = '26/01/1988';
$studenteAmedeo->grades = ['6','5','4'];

echo 'Voto medio dello studente '.$studenteAmedeo->firstname.' '.$studenteAmedeo->lastname.': '.$studenteAmedeo->averageGrades($studenteAmedeo->grades).'<br>';

echo 'Età dello studente '.$studenteAmedeo->firstname.' '.$studenteAmedeo->lastname.': '.$studenteAmedeo->age($studenteAmedeo->birthdate).'<br>';


//Mario Rossi
$studenteMario = new Student();

$studenteMario->firstname = 'Mario';
$studenteMario->lastname = 'Rossi';
$studenteMario->birthdate = '27/02/1979';
$studenteMario->grades = ['7','6','8'];

echo 'Voto medio dello studente '.$studenteMario->firstname.' '.$studenteMario->lastname.': '.$studenteMario->averageGrades($studenteMario->grades).'<br>';

echo 'Età dello studente '.$studenteMario->firstname.' '.$studenteMario->lastname.': '.$studenteMario->age($studenteMario->birthdate).'<br>';





 ?>
