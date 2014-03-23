<?php

/* BancoBundle::layout.html.twig */
class __TwigTemplate_653f823e1f006cfb9b5198ea48acf64aeacf44e4dc187ad4dcfcd9e1239b163c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>

    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
    <script src=\"http://code.jquery.com/jquery-2.1.0.js\"></script>

    ";
        // line 14
        $this->env->loadTemplate("BancoBundle:Extras:menu.html.twig")->display($context);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "</head>
<body>
    <header>

        <h1> Sistema Bancario<br/><small>Sistema de Gestión Bancaria</small></h1>
        <nav id=\"menu\">

        </nav>
    </header>

    <section id=\"main\">

    </section>

    <footer>

    </footer>
</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Sistema Bancario";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "    ";
    }

    // line 19
    public function block_head($context, array $blocks = array())
    {
        // line 20
        echo "    ";
    }

    public function getTemplateName()
    {
        return "BancoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 20,  100 => 19,  96 => 17,  93 => 16,  89 => 10,  86 => 9,  80 => 6,  58 => 21,  56 => 19,  53 => 18,  51 => 16,  48 => 15,  46 => 14,  41 => 11,  39 => 9,  35 => 8,  30 => 6,  23 => 1,);
    }
}
