<?php

class Student{
  public $firstname;
  public $lastname;
  public $birthdate;
  public $grades;

  function averageGrades($grades){

    $average = ceil(array_sum($grades) / count($grades));

    return $average;

  }

  function age($date){
    $date = explode("/", $date);
    //get age from date or birthdate
    $age = (date("md", date("U", mktime(0, 0, 0, $date[0], $date[1], $date[2]))) > date("md")
      ? ((date("Y") - $date[2]) - 1)
      : (date("Y") - $date[2]));
    return $age;
  }
}








 ?>
