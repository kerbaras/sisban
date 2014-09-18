<?php

namespace MPM\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuenta
 *
 * @ORM\Table(name="cuentas")
 * @ORM\Entity(repositoryClass="MPM\BancoBundle\Entity\CuentaRepository")
 */
class Cuenta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="decimal")
     */
    private $monto;

    /**
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="cuentas")
     * @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     **/
    private $propietario;

    /**
     * 
     * @ORM\ManyToMany(targetEntity="Persona", inversedBy="cuentasAsociadas")
     * @ORM\JoinTable(name="asociados_cunetas",
     *      joinColumns={@ORM\JoinColumn(name="cuenta_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="persona_id", referencedColumnName="id")}
     *      )
     **/
    private $asociados;

    /**
     * @ORM\OneToMany(targetEntity="Operacion", mappedBy="cuenta")
     **/
    private $operaciones;

    /**
     * @ORM\OneToMany(targetEntity="Prestamo", mappedBy="cuentaDestino")
     **/
    private $misPrestamos;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->asociados = new \Doctrine\Common\Collections\ArrayCollection();
        $this->operaciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->misPrestamos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Cuenta
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
     * Set propietario
     *
     * @param \MPM\BancoBundle\Entity\Persona $propietario
     * @return Cuenta
     */
    public function setPropietario(\MPM\BancoBundle\Entity\Persona $propietario = null)
    {
        $this->propietario = $propietario;

        return $this;
    }

    /**
     * Get propietario
     *
     * @return \MPM\BancoBundle\Entity\Persona 
     */
    public function getPropietario()
    {
        return $this->propietario;
    }

    /**
     * Add asociados
     *
     * @param \MPM\BancoBundle\Entity\Persona $asociados
     * @return Cuenta
     */
    public function addAsociado(\MPM\BancoBundle\Entity\Persona $asociados)
    {
        $this->asociados[] = $asociados;

        return $this;
    }

    /**
     * Remove asociados
     *
     * @param \MPM\BancoBundle\Entity\Persona $asociados
     */
    public function removeAsociado(\MPM\BancoBundle\Entity\Persona $asociados)
    {
        $this->asociados->removeElement($asociados);
    }

    /**
     * Get asociados
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAsociados()
    {
        return $this->asociados;
    }

    /**
     * Add operaciones
     *
     * @param \MPM\BancoBundle\Entity\Operacion $operaciones
     * @return Cuenta
     */
    public function addOperacione(\MPM\BancoBundle\Entity\Operacion $operaciones)
    {
        $this->operaciones[] = $operaciones;

        return $this;
    }

    /**
     * Remove operaciones
     *
     * @param \MPM\BancoBundle\Entity\Operacion $operaciones
     */
    public function removeOperacione(\MPM\BancoBundle\Entity\Operacion $operaciones)
    {
        $this->operaciones->removeElement($operaciones);
    }

    /**
     * Get operaciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOperaciones()
    {
        return $this->operaciones;
    }

    /**
     * Add misPrestamos
     *
     * @param \MPM\BancoBundle\Entity\Prestamo $misPrestamos
     * @return Cuenta
     */
    public function addMisPrestamo(\MPM\BancoBundle\Entity\Prestamo $misPrestamos)
    {
        $this->misPrestamos[] = $misPrestamos;

        return $this;
    }

    /**
     * Remove misPrestamos
     *
     * @param \MPM\BancoBundle\Entity\Prestamo $misPrestamos
     */
    public function removeMisPrestamo(\MPM\BancoBundle\Entity\Prestamo $misPrestamos)
    {
        $this->misPrestamos->removeElement($misPrestamos);
    }

    /**
     * Get misPrestamos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMisPrestamos()
    {
        return $this->misPrestamos;
    }
}
