<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 15/05/2017
 * Time: 21:07
 */

namespace FREITECH\Economize;


use Couchbase\Exception;

class users
{
    private $id;
    private $firstName;
    private $secondName;
    private $email;
    private $password;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        try {
            $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRING);
            if (!$this->firstName) {
                throw new \Exception('Nome Inválido');
            }
        } catch (Exception $exception) {
            header('HTTP/1.1 400 Bad request');
            echo $exception->getMessage();
        }
    }

    /**
     * @return mixed
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * @param mixed $secondName
     */
    public function setSecondName($secondName)
    {
        try {
            $this->secondName = filter_var($secondName, FILTER_SANITIZE_STRING);
            if (!$this->secondName) {
                throw new \Exception('Segundo Nome Inválido');
            }
        } catch (Exception $exception) {
            header('HTTP/1.1 400 Bad request');
            echo $exception->getMessage();
        }
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        try {
            $this->email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
            if (!$this->email) {
                throw new \Exception('E-mail inválido');
            }
        } catch (\Exception $exception) {
            header('HTTP/1.1 400 Bad request');
            echo $exception->getMessage();
        }
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        try {
            $this->password = password_hash(filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING), PASSWORD_DEFAULT,['cost' => 12]);
            if (!$this->password || mb_strlen($this->password) < 8) {
                throw new \Exception('Senha inválida, deve ter mais que oito caracteres');
            } elseif ($this->password === false) {
                throw new \Exception('Password hash failed');
            }
        } catch (\Exception $exception) {
            header('HTTP/1.1 400 Bad request');
            echo $exception->getMessage();
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setObjeto($args)
    {
        $this->setFirstName($args['first-name']);
        $this->setSecondName($args['second-name']);
        $this->setEmail($args['email']);
        $this->setPassword($args['password']);
    }
}

$usuario = new users();
$usuario->setObjeto($_POST);
echo $usuario->getFirstName();
echo $usuario->getEmail();