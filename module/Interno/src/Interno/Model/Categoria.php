<?php
/**
 * Created by PhpStorm.
 * User: Willian Gustavo Mendo <willianmendo@unochapeco.edu.br>
 * Date: 14/03/16
 * Time: 20:09
 */
namespace Interno\Model;


/**
 * @ORM\Entity @ORM\Table (name = "public.Categoria")
 */
class Categoria
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
    protected $descCategoria;


    public function __set($key, $value){
        $this->$key = $value;
    }

    public function __get($key){
        return $this->$key;
    }






}