<?php

namespace MPM\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extraccion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MPM\BancoBundle\Entity\ExtraccionRepository")
 */
class Extraccion
{
    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="decimal")
     */
    protected $monto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    protected $descripcion;

    /**
     * @ORM\ManyToOne(targetEntity="Cuenta", inversedBy="extracciones")
     * @ORM\JoinColumn(name="cuenta_a_id", referencedColumnName="id")
     */
    protected $cuenta;
}
