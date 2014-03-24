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
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="cuentasTitulares")
     * @ORM\JoinColumn(name="titular_id", referencedColumnName="id")
     **/
    private $titular;

    /**
     * @ORM\ManyToMany(targetEntity="Persona", inversedBy="cuentasAsociadas")
     * @ORM\JoinTable(name="cuentas_asociados")
     **/
    private $asociados;

    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="decimal")
     */
    private $monto;

    /**
     * @ORM\OneToMany(targetEntity="Deposito", mappedBy="cuenta")
     **/
    private $depositos;

    /**
     * @ORM\OneToMany(targetEntity="Extraccion", mappedBy="cuenta")
     **/
    private $extracciones;

    /**
     * @ORM\OneToMany(targetEntity="Prestamo", mappedBy="cuenta")
     **/
    private $prestamos;

    /**
     * @ORM\OneToMany(targetEntity="Transferencia", mappedBy="cuentaDe")
     **/
    private $transferenciasHechas;

    /**
     * @ORM\OneToMany(targetEntity="Transferencia", mappedBy="cuentaA")
     **/
    private $transferenciasRecibidas;


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
     * Constructor
     */
    public function __construct()
    {
        $this->asociados = new \Doctrine\Common\Collections\ArrayCollection();
        $this->depositos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->extracciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->prestamos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->transferenciasHechas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->transferenciasRecibidas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set titular
     *
     * @param \MPM\BancoBundle\Entity\Persona $titular
     * @return Cuenta
     */
    public function setTitular(\MPM\BancoBundle\Entity\Persona $titular = null)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return \MPM\BancoBundle\Entity\Persona 
     */
    public function getTitular()
    {
        return $this->titular;
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
     * Add depositos
     *
     * @param \MPM\BancoBundle\Entity\Deposito $depositos
     * @return Cuenta
     */
    public function addDeposito(\MPM\BancoBundle\Entity\Deposito $depositos)
    {
        $this->depositos[] = $depositos;

        return $this;
    }

    /**
     * Remove depositos
     *
     * @param \MPM\BancoBundle\Entity\Deposito $depositos
     */
    public function removeDeposito(\MPM\BancoBundle\Entity\Deposito $depositos)
    {
        $this->depositos->removeElement($depositos);
    }

    /**
     * Get depositos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepositos()
    {
        return $this->depositos;
    }

    /**
     * Add extracciones
     *
     * @param \MPM\BancoBundle\Entity\Extraccion $extracciones
     * @return Cuenta
     */
    public function addExtraccione(\MPM\BancoBundle\Entity\Extraccion $extracciones)
    {
        $this->extracciones[] = $extracciones;

        return $this;
    }

    /**
     * Remove extracciones
     *
     * @param \MPM\BancoBundle\Entity\Extraccion $extracciones
     */
    public function removeExtraccione(\MPM\BancoBundle\Entity\Extraccion $extracciones)
    {
        $this->extracciones->removeElement($extracciones);
    }

    /**
     * Get extracciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExtracciones()
    {
        return $this->extracciones;
    }

    /**
     * Add prestamos
     *
     * @param \MPM\BancoBundle\Entity\Prestamo $prestamos
     * @return Cuenta
     */
    public function addPrestamo(\MPM\BancoBundle\Entity\Prestamo $prestamos)
    {
        $this->prestamos[] = $prestamos;

        return $this;
    }

    /**
     * Remove prestamos
     *
     * @param \MPM\BancoBundle\Entity\Prestamo $prestamos
     */
    public function removePrestamo(\MPM\BancoBundle\Entity\Prestamo $prestamos)
    {
        $this->prestamos->removeElement($prestamos);
    }

    /**
     * Get prestamos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrestamos()
    {
        return $this->prestamos;
    }

    /**
     * Add transferenciasHechas
     *
     * @param \MPM\BancoBundle\Entity\Transferencia $transferenciasHechas
     * @return Cuenta
     */
    public function addTransferenciasHecha(\MPM\BancoBundle\Entity\Transferencia $transferenciasHechas)
    {
        $this->transferenciasHechas[] = $transferenciasHechas;

        return $this;
    }

    /**
     * Remove transferenciasHechas
     *
     * @param \MPM\BancoBundle\Entity\Transferencia $transferenciasHechas
     */
    public function removeTransferenciasHecha(\MPM\BancoBundle\Entity\Transferencia $transferenciasHechas)
    {
        $this->transferenciasHechas->removeElement($transferenciasHechas);
    }

    /**
     * Get transferenciasHechas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTransferenciasHechas()
    {
        return $this->transferenciasHechas;
    }

    /**
     * Add transferenciasRecibidas
     *
     * @param \MPM\BancoBundle\Entity\Transferencia $transferenciasRecibidas
     * @return Cuenta
     */
    public function addTransferenciasRecibida(\MPM\BancoBundle\Entity\Transferencia $transferenciasRecibidas)
    {
        $this->transferenciasRecibidas[] = $transferenciasRecibidas;

        return $this;
    }

    /**
     * Remove transferenciasRecibidas
     *
     * @param \MPM\BancoBundle\Entity\Transferencia $transferenciasRecibidas
     */
    public function removeTransferenciasRecibida(\MPM\BancoBundle\Entity\Transferencia $transferenciasRecibidas)
    {
        $this->transferenciasRecibidas->removeElement($transferenciasRecibidas);
    }

    /**
     * Get transferenciasRecibidas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTransferenciasRecibidas()
    {
        return $this->transferenciasRecibidas;
    }
}
