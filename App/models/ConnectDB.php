<?php


namespace FREITECH\Ecz\Mdl;

class ConnectDB extends \PDO
{
    private $engine;
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $pass;

    /**
     * @todo init constructor.
     */
    public function __construct()
    {
        $this->engine = 'pgsql';
        $this->host = 'localhost';
        $this->port = '5432';
        $this->dbname = 'economize';
        $this->user = 'postgres';
        $this->pass = 'r5758222r';
        $dns = $this->engine.':dbname='.$this->dbname.';host='.$this->host;

        try{
            parent::__construct($dns,$this->user, $this->pass);
        }catch (\PDOException $exception){
            echo $exception->getCode();
            echo "<br/>";
            echo $exception->getMessage();
        }
    }
}