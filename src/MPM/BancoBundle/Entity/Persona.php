<?php

namespace MPM\BancoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Persona
 *
 * @ORM\Table(name="personas")
 * @ORM\Entity(repositoryClass="MPM\BancoBundle\Entity\PersonaRepository")
 */
class Persona implements AdvancedUserInterface
{
    const ROLE_DEFAULT = 'ROLE_USER';
    const ROLE_SUPER_ADMIN = 'ROLE_SUPER_ADMIN';
    
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
     * @var array
     *
     * @ORM\Column(name="roles", type="array", nullable=true)
     */
    private $roles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expired", type="boolean", nullable=true)
     */
    private $expired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiredAt", type="datetime", nullable=true)
     */
    private $expiredAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=true)
     */
    private $locked;

    /**
     * @var string
     *
     * @ORM\Column(name="credentials", type="string", length=255, nullable=true)
     */
    private $credentials;

    /**
     * @var boolean
     *
     * @ORM\Column(name="credentialsExpired", type="boolean", nullable=true)
     */
    private $credentialsExpired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="credentialsExpiredAt", type="datetime", nullable=true)
     */
    private $credentialsExpiredAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmationToken", type="string", length=255, nullable=true)
     */
    private $confirmationToken;

    /**
     * @ORM\OneToMany(targetEntity="Cuenta", mappedBy="propietario")
     **/
    private $cuentas;
    
    /**
     * @ORM\ManyToMany(targetEntity="Cuenta", mappedBy="asociados")
     **/
    private $cuentasAsociadas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cuentas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cuentasAsociadas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->salt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
        $this->enabled = true;
        $this->locked = false;
        $this->expired = false;
        $this->credentialsExpired = false;
    }

    /**
     * 
     * AdvancedUserInterface Methods
     * 
     */
    
    public function getUsername()
    {
        return $this->dni;
    }

    public function getRoles()
    {
        $roles = $this->roles->toArray();

        $roles[] = static::ROLE_DEFAULT;
        return array_unique($roles);
    }

    public function isAccountNonExpired()
    {
        if (true === $this->expired) {
            return false;
        }

        if (null !== $this->expiredAt && $this->expiredAt->getTimestamp() < time()) {
            return false;
        }

        return true;
    }

    public function isAccountNonLocked()
    {
        return !$this->locked;
    }

    public function isCredentialsNonExpired()
    {
        if (true === $this->credentialsExpired) {
            return false;
        }

        if (null !== $this->credentialsExpiredAt && $this->credentialsExpiredAt->getTimestamp() < time()) {
            return false;
        }

        return true;
    }

    public function isCredentialsExpired()
    {
        return !$this->isCredentialsNonExpired();
    }

    public function isEnabled()
    {
        return $this->enabled;
    }

    public function isExpired()
    {
        return !$this->isAccountNonExpired();
    }

    public function isLocked()
    {
        return !$this->isAccountNonLocked();
    }

    public function eraseCredentials()
    {
        $this->credentials = null;
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

    public function addRole($role)
    {
        $role = strtoupper($role);
        if ($role === static::ROLE_DEFAULT) {
            return $this;
        }
        
        if (!in_array($role, $this->roles->toArray(), true)) {
            $this->roles->add($role);
        }
        
        return $this;
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
     * Add cuentas
     *
     * @param \MPM\BancoBundle\Entity\Cuenta $cuentas
     * @return Persona
     */
    public function addCuenta(\MPM\BancoBundle\Entity\Cuenta $cuentas)
    {
        $this->cuentas[] = $cuentas;

        return $this;
    }

    /**
     * Remove cuentas
     *
     * @param \MPM\BancoBundle\Entity\Cuenta $cuentas
     */
    public function removeCuenta(\MPM\BancoBundle\Entity\Cuenta $cuentas)
    {
        $this->cuentas->removeElement($cuentas);
    }

    /**
     * Get cuentas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCuentas()
    {
        return $this->cuentas;
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
