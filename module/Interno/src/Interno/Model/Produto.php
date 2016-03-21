<?php
/**
 * Created by PhpStorm.
 * User: Willian Gustavo Mendo <willianmendo@unochapeco.edu.br>
 * Date: 21/03/16
 * Time: 18:37
 */
namespace Interno\Model;


/**
 * @ORM\Entity @ORM\Table (name = "public.Produto")
 */
class Produto
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     *
     * @ORM\Column(type="string")
     */
    protected $descProduto;

    /**
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $quantidade;

    /**
     * @OneToOne(targetEntity="Categoria")
     * @JoinColumn(name="categoria", referencedColumnName="id")
     */
     protected $categoria;

    /**
     * @OneToOne(targetEntity="Marca")
     * @JoinColumn(name="marca", referencedColumnName="id")
     */
    protected $marca;

    /**
     * @ORMZ\Column(type="float", precision=2, nullable=false)
     */
    protected $precoCompra;

    /**
     * @ORMZ\Column(type="float", precision=2, nullable=false)
     */
    protected $precoBaseVenda;

}