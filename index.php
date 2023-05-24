<?php

use function PHPSTORM_META\map;
use function PHPSTORM_META\type;

echo ("Hello Php");
echo '<br>';
$Nme = '<h2>emmnuel</h2>';

echo $Nme;

$firstNme = 'emmnuel';

define("publisher", "STYLES");
echo publisher;

// Types In php 
// interger 
// floting-Point Numbers  
// Strings "" ''
// Boolens
// RRY 
// Objects 
// Resource 
// Callback
// Null 

$speed = -2355;
$pInt = 203;
$Hex = 0xFFF;
$hex = -0xDD2;


$flot = 3.47;
$consnt = 23.0E-3; // 23.0*20**(-3)


$strings = 'Hi i\'m Big Boy';

echo 'Hello' . $strings;

$Bool = true;
$Booldog = false;

if ($Bool === true) {
  echo '<br>';
  echo 'I am true';
} else {
  echo 'I am false';
} {
  // $varible = 'Joshua';
  define('Variable', 'Josha');
}

$friends = 'Mick';
$friends = 'Ogechi';
echo $friends;


$Foods = ['Rice', 'Yam', 'Beans', 'Soup'];
echo '<br>';
var_dump($Foods);

$Books = []; //Empty array

$Books[0] = 'Emekos';
$Books[2] = 'Sunday';
$Books[3] = 'abigail';
$Books[4] = 'Chinonso';
$Books[5] = 'joy';
echo '<br>';
echo '<br>';

$Books['Emekos'];

var_dump($Books);

echo '<br>';
echo '<br>';

$person = array("name" => 'Philip',   'Toilet' => 'Crpper');

var_dump($person);
var_dump($person['name']);

// php data supports object-oriented programming (OOP). 

//  class is a definition of a structure that contains properties 
//  variables and methods (functions) classes are defined with the class 
//  keyword.

class Person{
  public $Name = ''; 
  public $age = ''; 

  function name($newname = NULL){
    if(!is_null($newname)){
      $this->Name = $newname;
    }

    return $this->Name;
  }
}


$ed = new Person;
$ed->name('Henry');


// $res = database_connect();
// database_query();

function myFunction(){
  // do somethiing 
} 

function callback(){
  myFunction();
}

$items = [];

// $items.map(function(res, ){
  
// }); exp callback function

$callback = function(){
  echo "callback achieved";
};

call_user_func($callback);


// $alph = 'beta';
$alph = null;
// $alph = Null;
// $alph = NULL;

// var_dump(type($alph)); come back to it 

// Study Require nd Require_once nd include nd include_once 





