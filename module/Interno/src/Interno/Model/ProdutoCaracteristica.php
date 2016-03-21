<?php
/**
 * Created by PhpStorm.
 * User: Willian Gustavo Mendo <willianmendo@unochapeco.edu.br>
 * Date: 21/03/16
 * Time: 18:33
 */
namespace Interno\Model;


/**
 * @ORM\Entity @ORM\Table (name = "public.ProdutoCaracteristica")
 */
class ProdutoCaracteristica
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Caracteristica")
     * @ORM\JoinColumn(name="caracteristica", referencedColumnName="id")
     */
    protected $caracteristica;

    /**
     * @ORM\ManyToOne(targetEntity="Produto")
     * @ORM\JoinColumn(name="produto", referencedColumnName="id")
     */
    protected $produto;

    /**
     *
     * @ORM\Column(type="string", nullable=false)
     */
    protected $descricao;

    public function __set($key, $value){
        $this->$key = $value;
    }

    public function __get($key){
        return $this->$key;
    }

}