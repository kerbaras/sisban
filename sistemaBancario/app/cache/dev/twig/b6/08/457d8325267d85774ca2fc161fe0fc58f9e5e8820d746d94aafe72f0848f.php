<?php

/* BancoBundle:Extras:menu.html.twig */
class __TwigTemplate_b608457d8325267d85774ca2fc161fe0fc58f9e5e8820d746d94aafe72f0848f extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/ThemePanel/theme.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/JSCookMenu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/ThemePanel/theme.js"), "html", null, true);
        echo "\"></script>
<script language=\"JavaScript\">
    var menu = [
        [null,'Inicio','";
        // line 6
        echo $this->env->getExtension('routing')->getPath("banco_homepage");
        echo "','_self',null],
        [null,'Operaciones',null,null,null,
            [null,'Depósitos','";
        // line 8
        echo $this->env->getExtension('routing')->getPath("banco_operaciones_depositos");
        echo "','_self',null],
            [null,'Extracciones','";
        // line 9
        echo $this->env->getExtension('routing')->getPath("banco_operaciones_extracciones");
        echo "','_self',null],
            _cmSplit,
            [null,'Transferencias','";
        // line 11
        echo $this->env->getExtension('routing')->getPath("banco_operaciones_transferencias");
        echo "','_self',null],
            [null,'Préstamos','";
        // line 12
        echo $this->env->getExtension('routing')->getPath("banco_operaciones_prestamos");
        echo "','_self',null]
        ],
        [null,'Administración',null,null,null,
            [null,'Personas',null,null,null,
                [null,'Listado','";
        // line 16
        echo $this->env->getExtension('routing')->getPath("banco_personas");
        echo "','_self',null],
                [null,'Nueva Persona','";
        // line 17
        echo $this->env->getExtension('routing')->getPath("banco_personas_new");
        echo "','_self',null]
            ],
            [null,'Cuentas',null,null,null,
                [null,'Listado','";
        // line 20
        echo $this->env->getExtension('routing')->getPath("banco_cuentas");
        echo "','_self',null],
                [null,'Nueva Cuenta','";
        // line 21
        echo $this->env->getExtension('routing')->getPath("banco_cuentas_new");
        echo "','_self',null],
                _cmSplit,
                [null,'Transferir Cuenta','";
        // line 23
        echo $this->env->getExtension('routing')->getPath("banco_cuentas_transfer");
        echo "','_self',null]
                ],
            _cmSplit,
            [null,'Logs','";
        // line 26
        echo $this->env->getExtension('routing')->getPath("banco_logs");
        echo "','_self',null]
        ],
        [null,'Mis Cuentas',null,null,null,
            [null,'Listado','";
        // line 29
        echo $this->env->getExtension('routing')->getPath("banco_profile_cuentas");
        echo "','_self',null],
            [null,'Detalles','";
        // line 30
        echo $this->env->getExtension('routing')->getPath("banco_profile_detalles");
        echo "','_self',null],
            [null,'Deudas','";
        // line 31
        echo $this->env->getExtension('routing')->getPath("banco_profile_deudas");
        echo "','_self',null]
        ],
        [null,'Bienvenido Admin!',null,null,null,
            [null,'Editar Perfil','";
        // line 34
        echo $this->env->getExtension('routing')->getPath("banco_profile");
        echo "','_self',null],
            _cmSplit,
            [null,'Cerrar Sesión','";
        // line 36
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "','_self',null]
        ]
    ];

    \$(function(){
        cmDraw('menu', menu, 'hbr', cmThemePanel);
    });
</script>
";
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
        return array (  109 => 36,  104 => 34,  98 => 31,  94 => 30,  90 => 29,  84 => 26,  78 => 23,  73 => 21,  69 => 20,  63 => 17,  59 => 16,  52 => 12,  48 => 11,  43 => 9,  39 => 8,  34 => 6,  28 => 3,  24 => 2,  19 => 1,);
    }
}
