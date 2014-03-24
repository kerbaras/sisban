<?php

namespace MPM\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deposito
 *
 * @ORM\Entity(repositoryClass="MPM\BancoBundle\Entity\DepositoRepository")
 */
class Deposito extends Operacion
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
     * @ORM\ManyToOne(targetEntity="Cuenta", inversedBy="depositos")
     * @ORM\JoinColumn(name="cuenta_a_id", referencedColumnName="id")
     */
    protected $cuenta;


    /**
     * Set monto
     *
     * @param string $monto
     * @return Deposito
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Deposito
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set cuenta
     *
     * @param \MPM\BancoBundle\Entity\Cuenta $cuenta
     * @return Deposito
     */
    public function setCuenta(\MPM\BancoBundle\Entity\Cuenta $cuenta = null)
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    /**
     * Get cuenta
     *
     * @return \MPM\BancoBundle\Entity\Cuenta 
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }
}
