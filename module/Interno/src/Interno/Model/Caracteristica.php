<?php
/**
 * Created by PhpStorm.
 * User: Willian Gustavo mendo <willianmendo@unochapeco.edu.br>
 * Date: 21/03/16
 * Time: 18:30
 */
namespace Interno\Model;

/**
 * @ORM\Entity @ORM\Table (name = "public.Caracteristica")
 */
class Caracteristica
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
    protected $descCaracteristica;


    public function __set($key, $value){
        $this->$key = $value;
    }

    public function __get($key){
        return $this->$key;
    }

}