<?php

class User{

  public $username;
  public $email;
  public $password;
  public $age;
  public $gender;

  public function __construct($username, $email, $password){

    $this -> username = $username;
    $this -> email = $email;
    $this -> password = $password;
  }

  public function __toString(){
    $str = 'User -> <br> Username: '.$this -> username
            .'<br> email: '.$this -> email
            .'<br> password: ok!';
    if ($this -> age) {
      $str .= '<br> age: '.$this -> age;
    }
    if ($this -> gender) {
      $str .= '<br> gender: '.$this -> gender;
    }
    return $str;
  }
}

$user1 = new User('UmbertoP', 'umberto@email.it', 'superPassw');
$user2 = new User('MarioR', 'rossi@email.it', 'superPassw');
$user3 = new User('UgoB', 'ughetto@email.it', 'superPassw');

$user2 -> age = 33;
$user3 -> gender = 'male';

echo $user1 .'<br>' .'<br>'. $user2 .'<br>'.'<br>' . $user3;
