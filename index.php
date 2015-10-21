<?php

$controller ="HomeCategoryController";
$need = "Controller";

$x = strrpos($controller,$need);
var_dump($x);

$z = str_split($controller,$x);
var_dump($z[0]);
echo $z[0];
