<?php

$num = 9;
//Asignacion
$lang = [
    'en' => 'English',
    'fr' => 'Français',
    'es' => 'Español',
    'de' => 'Deutsch',
];

//Aritmetica

echo  "Suma 2 + 2 " .((int) 2 + (int) 2);
echo "Resta 2 - 2 " .((int) 2 - (int) 2);
echo "Multiplicacion 2 * 2 " .( 2 *  2);
echo "Division 2 / 2 " . 2 / 2;
echo "Modulo 2 % 2 " . 2 % 2;

echo "\n";
//Comparaciones

$app = 'name';
$name = 'Platzi';

echo $$app;

