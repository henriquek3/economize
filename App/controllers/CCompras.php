<?php

namespace FREITECH\Ecz\Ctrl;

require "../../vendor/autoload.php";

use FREITECH\Ecz\Mdl\ConnectDB;

class CCompras
{
    private $ocasiao;
    private $mercado;

    /**
     * @return mixed
     */
    public function getOcasiao()
    {
        return $this->ocasiao;
    }

    /**
     * @param mixed $ocasiao
     */
    public function setOcasiao($ocasiao)
    {
        $this->ocasiao = $ocasiao;
    }

    /**
     * @return mixed
     */
    public function getMercado()
    {
        return $this->mercado;
    }

    /**
     * @param mixed $mercado
     */
    public function setMercado($mercado)
    {
        $this->mercado = $mercado;
    }

    public function save()
    {
        $pdo = new ConnectDB();
        //$sql = "INSERT INTO compras (mercado,ocasiao) VALUES (:mercado,:ocasiao)";
        $sql = "DELETE FROM compras";
        $stmt = $pdo->prepare($sql);
        //$stmt->bindParam(':mercado', $this->mercado);
        //$stmt->bindParam(':ocasiao', $this->ocasiao);
        $stmt->execute();
        return $this->status($stmt->rowCount());
    }

    public function status($arg)
    {
        echo "Foram alteradas " . $arg . " linha com sucesso!";
    }
}

$compras = new CCompras();
$compras->setMercado($_POST['ocasiao']);
$compras->setOcasiao($_POST['mercado']);
$compras->save();