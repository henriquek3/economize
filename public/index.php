<?php

require 'vendor/autoload.php';

use FREITECH\Ecz\Ctrl;


require 'App/views/header.html';
require 'App/views/menus.html';

/*
 * Implementar sistema de rotas para add conteudo das paginas aqui
 */

Ctrl\IndexController::getUrl();

require "App/views/footer.html";

