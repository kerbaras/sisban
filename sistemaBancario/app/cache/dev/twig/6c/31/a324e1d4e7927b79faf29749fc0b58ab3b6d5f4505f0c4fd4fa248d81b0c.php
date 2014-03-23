<?php

/* BancoBundle:Extras:menu.html.twig */
class __TwigTemplate_6c31a324e1d4e7927b79faf29749fc0b58ab3b6d5f4505f0c4fd4fa248d81b0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "var menu = [
    [null,'Inicio','";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_homepage"), "js", null, true);
        echo "','_self',null],
    [null,'Operaciones',null,null,null,
        [null,'Depósitos','";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_operaciones_depositos"), "js", null, true);
        echo "','_self',null],
        [null,'Extracciones','";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_operaciones_extracciones"), "js", null, true);
        echo "','_self',null],
        _cmSplit,
        [null,'Transferencias','";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_operaciones_transferencias"), "js", null, true);
        echo "','_self',null],
        [null,'Préstamos','";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_operaciones_prestamos"), "js", null, true);
        echo "','_self',null]
    ],
    [null,'Administración',null,null,null,
        [null,'Personas',null,null,null,
            [null,'Listado','";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_personas"), "js", null, true);
        echo "','_self',null],
            [null,'Nueva Persona','";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_personas_new"), "js", null, true);
        echo "','_self',null]
        ],
        [null,'Cuentas',null,null,null,
            [null,'Listado','";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_cuentas"), "js", null, true);
        echo "','_self',null],
            [null,'Nueva Cuenta','";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_cuentas_new"), "js", null, true);
        echo "','_self',null],
            _cmSplit,
            [null,'Transferir Cuenta','";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_cuentas_transfer"), "js", null, true);
        echo "','_self',null]
            ],
        _cmSplit,
        [null,'Logs','";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_logs"), "js", null, true);
        echo "','_self',null]
    ],
    [null,'Mis Cuentas',null,null,null,
        [null,'Listado','";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_profile_cuentas"), "js", null, true);
        echo "','_self',null],
        [null,'Detalles','";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_profile_detalles"), "js", null, true);
        echo "','_self',null],
        [null,'Deudas','";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_profile_deudas"), "js", null, true);
        echo "','_self',null]
    ],
    [null,'Bienvenido Admin!',null,null,null,
        [null,'Editar Perfil','";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banco_profile"), "js", null, true);
        echo "','_self',null],
        _cmSplit,
        [null,'Cerrar Sesión','";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "js", null, true);
        echo "','_self',null]
    ]
];";
    }

    public function getTemplateName()
    {
        return "BancoBundle:Extras:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  92 => 30,  86 => 27,  82 => 26,  78 => 25,  72 => 22,  66 => 19,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  40 => 8,  36 => 7,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
