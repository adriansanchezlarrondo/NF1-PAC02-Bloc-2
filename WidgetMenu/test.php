<?php

require_once('observable.php');
require_once('widgetMenu.php');

$dat = new dataSource(); 

$widgetA = new MenuAnimals();
$widgetB = new MenuNames();
$widgetC = new MenuThings();
$widgetD = new MenuMovies();

$dat->addObserver($widgetA);
$dat->addObserver($widgetB);
$dat->addObserver($widgetC);
$dat->addObserver($widgetD);

$dat->addRecord('cat','Kevin','bench','Godzilla');
$dat->addRecord('dog','Jim','pizza','Man on Wire');
$dat->addRecord('horse','Andy','Honda CB125','Spirited Away');
$dat->addRecord('cow','','space','Interstellar');
$dat->addRecord('','','black matter','');
$dat->addRecord('','','apple','');
$dat->addRecord('','','philodendron',' ');
$dat->addRecord('','','liver','');
$dat->addRecord('','','brass','');


$widgetA->draw();

$widgetB->draw();

$widgetC->draw();

$widgetD->draw();