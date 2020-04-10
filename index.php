<?php

include_once "class/Circle.php";
include_once "class/Cylinder.php";

$circle = new Circle('Hình tròn 1',15,'black');
echo $circle->__toString();

$cylinder = new Cylinder('Hình trụ 1',20,'blue',15);
echo $cylinder->__toString();
