<?php
require_once 'User.php';
require_once 'Viewer.php';
require_once 'Admin.php';

$ingrid = new Admin("Ingrid", "ingrid@email.com");
$hugo = new Viewer("Hugo", "hugo@email.com");

echo $ingrid->getType()." ".$ingrid->getName()." has permission level:". $ingrid->getLevel()."<br>";
echo $ingrid->getName(). "s email adres is ".$ingrid->getEmail()."<br>";
echo $hugo->getType()." ".$hugo->getName()."was created on".$hugo->getDate();


