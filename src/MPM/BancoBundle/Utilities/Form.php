<?php

namespace MPM\BancoBundle\Utilities;

use Doctrine\Common\Collections\ArrayCollection;

class Form {

    protected $id;

    protected $action;

    protected $classes;

    protected $method;

    protected $name;

    protected $inputs;

    protected $buttons;


    public function __construct()
    {
        $this->classes = new ArrayCollection();
        $this->buttons = new ArrayCollection();
        $this->inputs = new ArrayCollection();
    }

    /**
     * @param mixed $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $button
     * @return $this
     */
    public function addButtons($button)
    {
        $this->buttons = $button;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getButtons()
    {
        return $this->buttons;
    }

    /**
     * @param mixed $class
     * @return $this
     */
    public function addClasses($class)
    {
        $this->classes = $class;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * @param mixed $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $input
     * @return $this
     */
    public function addInputs($input)
    {
        $this->inputs = $input;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * @param mixed $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }




} 