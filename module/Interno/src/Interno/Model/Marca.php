<?php
/**
 * Created by PhpStorm.
 * User: Willian Gustavo Mendo <willianmendo@unochapeco.edu.br>
 * Date: 21/03/16
 * Time: 18:26
 */
namespace Interno\Model;

/**
 * @ORM\Entity @ORM\Table (name = "public.Marca")
 */

class Marca
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     *
     * @ORM\Column(type="string", nullable=false)
     */
    protected $descMarca;


    public function __set($key, $value){
        $this->$key = $value;
    }

    public function __get($key){
        return $this->$key;
    }
}
