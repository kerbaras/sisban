<?php

namespace MPM\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transferencia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MPM\BancoBundle\Entity\TransferenciaRepository")
 */
class Transferencia
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
     * @ORM\ManyToOne(targetEntity="Cuenta", inversedBy="transferenciasHechas")
     * @ORM\JoinColumn(name="cuenta_de_id", referencedColumnName="id")
     */
    protected $cuentaDe;

    /**
     * @ORM\ManyToOne(targetEntity="Cuenta", inversedBy="transferenciasRecibidas")
     * @ORM\JoinColumn(name="cuenta_a_id", referencedColumnName="id")
     */
    protected $cuentaA;

}
