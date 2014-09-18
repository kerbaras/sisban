<?php

namespace MPM\BancoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use MPM\BancoBundle\Entity\Persona;
use Symfony\Component\HttpFoundation\Request;

class PersonasController extends Controller{

    public function indexAction()
    {
        return $this->render('BancoBundle:Personas:index.html.twig');
    }

    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $personas = $em->getRepository('BancoBundle:Persona')->findAll();

        return $this->render('BancoBundle:Personas:list.html.twig', array('personas'=>$personas));
    }

    public function newAction()
    {
        $persona = new Persona();
        $psw = substr(md5(time() * 3.16), 0, 8);

        return $this->render('BancoBundle:Personas:new.html.twig', array('persona'=>$persona, 'psw'=>$psw));
    }

    public function createAction(Request $request)
    {
        $persona = new Persona();
        $nombre = $request->request->get('nombre', false);
        $apellido = $request->request->get('apellido', false);
        $dni = $request->request->get('dni', false);
        $password = $request->request->get('password', false);

        if (!$nombre && !$apellido && !$dni && !$password) {
            throw new Exception("Error Processing Request", 1);
        }

        $persona->setApellido($apellido);
        $persona->setNombre($nombre);
        $persona->setDni($dni);

        $factory = $this->get('security.encoder_factory');
        $encoder = $factory->getEncoder($persona);
        $pass = $encoder->encodePassword($password, $persona->getSalt());
        $persona->setPassword($pass);

        $em = $this->getDoctrine()->getManager();
        $em->persist($persona);
        $em->flush();

        return $this->redirect($this->generateUrl('banco_personas'));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $persona = $em->getRepository('BancoBundle:Persona')->find($id);
        var_dump($persona); die();
        
        return $this->render('BancoBundle:Personas:list.html.twig', array('personas'=>$persona));
    }
}