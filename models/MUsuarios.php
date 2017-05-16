<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 15/05/2017
 * Time: 22:57
 */

namespace Freitech\Economize;
use Freitech\Economize\ConnectDB;

class MUsuarios
{
    private $pdo;
    private #stmtInsert;
    function __construct()
    {
        $this->pdo = new ConnectDB();
    }
    public function insert()
    {
        $stmt = new ConnectDB();

    }

}