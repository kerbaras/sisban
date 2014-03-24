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


    /**
     * Set monto
     *
     * @param string $monto
     * @return Prestamo
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
     * @return Prestamo
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
     * Set devuelto
     *
     * @param boolean $devuelto
     * @return Prestamo
     */
    public function setDevuelto($devuelto)
    {
        $this->devuelto = $devuelto;

        return $this;
    }

    /**
     * Get devuelto
     *
     * @return boolean 
     */
    public function getDevuelto()
    {
        return $this->devuelto;
    }

    /**
     * Set cuenta
     *
     * @param \MPM\BancoBundle\Entity\Cuenta $cuenta
     * @return Prestamo
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
