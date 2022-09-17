<?php
include("index.php");
include("functions.php");
$paddock = new Paddock();// Новый загон


$milk = new Production('Milk');

$eggs = new Production('Eggs');

$cow = new Animal('Cow',$milk,8,12);
//Решил сделать что бы у каждого животного было свое значение производимости продукции старая тип или молодая

$chicken = new Animal('Chicken',$eggs,0,1);




addManyAnimals($paddock,$cow,10);
addManyAnimals($paddock,$chicken,20);
$paddock->showAllAnimal();
claimManyProduction($paddock,7);
$paddock->countProduction();
addManyAnimals($paddock,$cow,1);
addManyAnimals($paddock,$chicken,5);
$paddock->showAllAnimal();
claimManyProduction($paddock,7);
$paddock->countProduction();