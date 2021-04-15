<?php

class MyName{
public $name;

function set_name($name){
  $this->name = $name;
}

function print_name(){
  echo $this->name;
}
}

$student = new MyName();
$student->set_name('Tawsif');
$student -> print_name()


 ?>
