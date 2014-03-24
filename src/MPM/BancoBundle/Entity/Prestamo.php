<?php

namespace MPM\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestamo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MPM\BancoBundle\Entity\PrestamoRepository")
 */
class Prestamo
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
     * @ORM\ManyToOne(targetEntity="Cuenta", inversedBy="prestamos")
     * @ORM\JoinColumn(name="cuenta_a_id", referencedColumnName="id")
     */
    protected $cuenta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_devuelto", type="boolean")
     */
    protected $devuelto;

}
