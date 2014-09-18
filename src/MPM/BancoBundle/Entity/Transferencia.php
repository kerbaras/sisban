<?php

namespace MPM\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transferencia
 *
 * @ORM\Table(name="transferencias")
 * @ORM\Entity(repositoryClass="MPM\BancoBundle\Entity\TransferenciaRepository")
 */
class Transferencia extends Operacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="decimal")
     */
    private $monto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @ORM\ManyToOne(targetEntity="Cuenta")
     * @ORM\JoinColumn(name="cuenta_destino_id", referencedColumnName="id")
     **/
    private $cuentaDestino;

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
     * Set cuentaDestino
     *
     * @param \MPM\BancoBundle\Entity\Cuenta $cuentaDestino
     * @return Transferencia
     */
    public function setCuentaDestino(\MPM\BancoBundle\Entity\Cuenta $cuentaDestino = null)
    {
        $this->cuentaDestino = $cuentaDestino;

        return $this;
    }

    /**
     * Get cuentaDestino
     *
     * @return \MPM\BancoBundle\Entity\Cuenta 
     */
    public function getCuentaDestino()
    {
        return $this->cuentaDestino;
    }
}
