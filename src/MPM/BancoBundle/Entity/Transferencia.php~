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


    /**
     * Set monto
     *
     * @param string $monto
     * @return Transferencia
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
     * @return Transferencia
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
     * Set cuentaDe
     *
     * @param \MPM\BancoBundle\Entity\Cuenta $cuentaDe
     * @return Transferencia
     */
    public function setCuentaDe(\MPM\BancoBundle\Entity\Cuenta $cuentaDe = null)
    {
        $this->cuentaDe = $cuentaDe;

        return $this;
    }

    /**
     * Get cuentaDe
     *
     * @return \MPM\BancoBundle\Entity\Cuenta 
     */
    public function getCuentaDe()
    {
        return $this->cuentaDe;
    }

    /**
     * Set cuentaA
     *
     * @param \MPM\BancoBundle\Entity\Cuenta $cuentaA
     * @return Transferencia
     */
    public function setCuentaA(\MPM\BancoBundle\Entity\Cuenta $cuentaA = null)
    {
        $this->cuentaA = $cuentaA;

        return $this;
    }

    /**
     * Get cuentaA
     *
     * @return \MPM\BancoBundle\Entity\Cuenta 
     */
    public function getCuentaA()
    {
        return $this->cuentaA;
    }
}
