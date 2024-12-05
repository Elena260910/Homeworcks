<?php
$Fname = 'Roman';
$Lname = 'Nefedov';
$age = '38';
$format = 'Меня зовут %s %s мне %d лет';
echo sprintf($format, $Fname, $Lname, $age);
?>