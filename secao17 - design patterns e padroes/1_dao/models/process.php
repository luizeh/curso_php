<?php

include_once("../db.php");
include_once("Car.php");
include_once("../dao/CarDAO.php");

$carDao = new CarDao($conn);

$brand = $_POST["brand"];
$km = $_POST["km"];
$color = $_POST["cor"];

$newCar = new Car();

$newCar->setBrand($brand);
$newCar->setKM($km);
$newCar->setColor($color);


$carDao->create($newCar);

header("Location: ../index.php");
