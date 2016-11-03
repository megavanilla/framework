<?php

//Разрешаем странице работать в системе
define('READFILE', true);


//Инициируем ядро
if (is_file($_SERVER['DOCUMENT_ROOT'].'/core/init.php')) {
    require_once ($_SERVER['DOCUMENT_ROOT'].'/core/init.php');
}
else
{
    exit('Не удалось инициировать ядро');
}


$view = new View();
$view->view = 'index';
$view->debug = $debug;
$view->render();

?>