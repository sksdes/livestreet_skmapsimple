<?php
/*-------------------------------------------------------
*
*	Plugin "Skmapsimple"
*	Author: Zheleznov Sergey (skif)
*	Site: livestreet.ru/profile/skif/
*	Contact e-mail: sksdes@gmail.com
*
---------------------------------------------------------
*/

$config = array();

// Здесь вы можете запретить показывать карту гостям
$config['show_guests'] = true;

// Здесь можно установить центр карты при создании топика
// 
// Для того чтобы узнать нужные координаты требуется:
// 1. Перейти на страницу https://maps.google.com/
// 2. Кликнуть по карте в точке правой кнопкой мыши
// 3. Из контекстного меню выбрать пункт "What`s here" (Что здесь?)
// 4. Скопировать цифры из строки поиска

$config['default_coord'] = '54.559322587438636, 21.1761474609375';
return $config;
