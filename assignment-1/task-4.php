<?php
class Car {
  // Properties
  public $name;
  public $engineStatus;
  public $bodyParts;

  // Methods
  public function set_name($name) {
    $this->name = $name;
  }
  public function get_name() {
    return $this->name;
  }
  public function set_engineStatus($engineStatus) {
    $this->engineStatus = $engineStatus;
  }
  public function get_engineStatus() {
    return $this->engineStatus;
  }
  public function set_bodyParts($bodyParts) {
    $this->bodyParts = $bodyParts;
  }
  public function get_bodyParts() {
    return $this->bodyParts;
  }
}

class Audi extends Car{
  public $color;
  public $seats;

  // Methods
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {

    return $this->color;
  }
  function set_Seats($seats) {
    $this->seats = $seats;
  }
  function get_seats() {
     return $this->seats;
  }

}

$audiR8 = new Audi();
$audiR8->set_name("Audi R8<br>");
echo $audiR8->get_name();
$audiR8->set_engineStatus("V8 Engine, working perfectly<br>");
echo $audiR8->get_engineStatus();
$audiR8->set_bodyParts("NOS ,  Spoiler, Neon Lights, Brakes<br>");
echo $audiR8->get_bodyParts();
$audiR8->set_color("Maroon<br>");
echo $audiR8->get_color();
$audiR8->set_seats("Comfy seats<br>");
echo $audiR8->get_seats();












?>
