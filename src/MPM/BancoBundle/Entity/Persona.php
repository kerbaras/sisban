<?php

namespace MPM\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="personas")
 * @ORM\Entity(repositoryClass="MPM\BancoBundle\Entity\PersonaRepository")
 */
class Persona
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=255)
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expired", type="boolean")
     */
    private $expired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiredAt", type="datetime")
     */
    private $expiredAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean")
     */
    private $locked;

    /**
     * @var string
     *
     * @ORM\Column(name="credentials", type="string", length=255)
     */
    private $credentials;

    /**
     * @var boolean
     *
     * @ORM\Column(name="credentialsExpired", type="boolean")
     */
    private $credentialsExpired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="credentialsExpiredAt", type="datetime")
     */
    private $credentialsExpiredAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmationToken", type="string", length=255)
     */
    private $confirmationToken;

    /**
     * @ORM\OneToMany(targetEntity="Cuenta", mappedBy="titular")
     **/
    private $cuentasTitulares;

    /**
     * @ORM\ManyToMany(targetEntity="Cuenta", mappedBy="asociados")
     **/
    private $cuentasAsociadas;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Persona
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Persona
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set dni
     *
     * @param string $dni
     * @return Persona
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Persona
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Persona
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set expired
     *
     * @param boolean $expired
     * @return Persona
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;

        return $this;
    }

    /**
     * Get expired
     *
     * @return boolean 
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Set expiredAt
     *
     * @param \DateTime $expiredAt
     * @return Persona
     */
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt = $expiredAt;

        return $this;
    }

    /**
     * Get expiredAt
     *
     * @return \DateTime 
     */
    public function getExpiredAt()
    {
        return $this->expiredAt;
    }

    /**
     * Set locked
     *
     * @param boolean $locked
     * @return Persona
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set credentials
     *
     * @param string $credentials
     * @return Persona
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;

        return $this;
    }

    /**
     * Get credentials
     *
     * @return string 
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * Set credentialsExpired
     *
     * @param boolean $credentialsExpired
     * @return Persona
     */
    public function setCredentialsExpired($credentialsExpired)
    {
        $this->credentialsExpired = $credentialsExpired;

        return $this;
    }

    /**
     * Get credentialsExpired
     *
     * @return boolean 
     */
    public function getCredentialsExpired()
    {
        return $this->credentialsExpired;
    }

    /**
     * Set credentialsExpiredAt
     *
     * @param \DateTime $credentialsExpiredAt
     * @return Persona
     */
    public function setCredentialsExpiredAt($credentialsExpiredAt)
    {
        $this->credentialsExpiredAt = $credentialsExpiredAt;

        return $this;
    }

    /**
     * Get credentialsExpiredAt
     *
     * @return \DateTime 
     */
    public function getCredentialsExpiredAt()
    {
        return $this->credentialsExpiredAt;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Persona
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set confirmationToken
     *
     * @param string $confirmationToken
     * @return Persona
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

    /**
     * Get confirmationToken
     *
     * @return string 
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cuentasTitulares = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cuentasAsociadas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cuentasTitulares
     *
     * @param \MPM\BancoBundle\Entity\Cuenta $cuentasTitulares
     * @return Persona
     */
    public function addCuentasTitulare(\MPM\BancoBundle\Entity\Cuenta $cuentasTitulares)
    {
        $this->cuentasTitulares[] = $cuentasTitulares;

        return $this;
    }

    /**
     * Remove cuentasTitulares
     *
     * @param \MPM\BancoBundle\Entity\Cuenta $cuentasTitulares
     */
    public function removeCuentasTitulare(\MPM\BancoBundle\Entity\Cuenta $cuentasTitulares)
    {
        $this->cuentasTitulares->removeElement($cuentasTitulares);
    }

    /**
     * Get cuentasTitulares
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCuentasTitulares()
    {
        return $this->cuentasTitulares;
    }

    /**
     * Add cuentasAsociadas
     *
     * @param \MPM\BancoBundle\Entity\Cuenta $cuentasAsociadas
     * @return Persona
     */
    public function addCuentasAsociada(\MPM\BancoBundle\Entity\Cuenta $cuentasAsociadas)
    {
        $this->cuentasAsociadas[] = $cuentasAsociadas;

        return $this;
    }

    /**
     * Remove cuentasAsociadas
     *
     * @param \MPM\BancoBundle\Entity\Cuenta $cuentasAsociadas
     */
    public function removeCuentasAsociada(\MPM\BancoBundle\Entity\Cuenta $cuentasAsociadas)
    {
        $this->cuentasAsociadas->removeElement($cuentasAsociadas);
    }

    /**
     * Get cuentasAsociadas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCuentasAsociadas()
    {
        return $this->cuentasAsociadas;
    }
}
