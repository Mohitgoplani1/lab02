<?php 
include("../app/file3.php");

echo \company\MyProject\sayHello();

$person=new \company\MyProject\Person();
echo $person->getName();
 use \company\MyProject\Person;
 $person=new Person();
echo $person->getName();