<?php
$name = $_GET['name'];
$ec = $_GET['EstadoCivil'];


echo"olá, a $name é  ";

switch($ec){

case 1:
    echo"solteira";
    break;
case 2:
    echo"casada";
    break;
case 3:
    echo"divorciada";
    break;
case 4:
    echo"viúva";
    break;
case 5:
    echo"únião estável";
    break;


}














?>