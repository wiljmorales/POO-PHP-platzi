<?php

use Admin as GlobalAdmin;
use User as GlobalUser;

class Person {
  public function greet() {
    return "Hola $this->name";
  }
}

class User {
  public $type;
}

class Admin extends Person {
  public $name = "Administrador";
}

$user = new User;
$user->type = new Admin;
echo $user->type->greet();

echo '\n';