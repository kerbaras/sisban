<?php

namespace MPM\BancoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OperationsController extends Controller{

    public function depositosAction()
    {
        $depositos = array();
        return $this->render('BancoBundle:Operaciones:Depositos/index.html.twig', array('depositos'=>$depositos));
    }

    public function depositarAction()
    {
        $depositos = array();
        return $this->render('BancoBundle:Operaciones:Depositos/new.html.twig', array('depositos'=>$depositos));
    }
} 