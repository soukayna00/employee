<?php

class employee{
  private $firstname;
  private $lastname;
  private $datedenaissance;


public function getid(){
  return $this->id;
}
public function setid($value){
  $this->id=($value);
}

public function getfirstname(){
  return $this->firstname;
}

public function setfirstname($firstname){
   $this->firstname=$firstname;
}
public function getlastname(){
  return $this->lastname;
}
public function setlastname($value){
  $this->lastname=($value);
}
}

?>