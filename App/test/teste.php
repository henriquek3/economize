<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 19/05/2017
 * Time: 22:51
 */

$url = 'home';

switch ($url) {
    case 'home':
        require "../views/home.html";
        break;
    default:
        echo "Não encontrado";
}