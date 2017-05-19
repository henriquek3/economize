<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 18/05/2017
 * Time: 22:37
 */

namespace FREITECH\Ecz\Ctrl;

class IndexController
{
    public static function getUrl()
    {
        $url = explode('/', $_SERVER['REQUEST_URI']);
        echo $div1 = '<div style="padding-top: 100px">';
        echo '<p>' . $url[1] . '</p>';
        echo '</div>';
    }
}