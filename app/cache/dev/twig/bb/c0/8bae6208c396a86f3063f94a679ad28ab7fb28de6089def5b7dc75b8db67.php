<?php

/* GangAuthorityUserBundle:Default:index.html.twig */
class __TwigTemplate_bbc08bae6208c396a86f3063f94a679ad28ab7fb28de6089def5b7dc75b8db67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GangAuthorityUserBundle:Default:bas.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GangAuthorityUserBundle:Default:bas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tGang Authority - Accueil
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\tHello World !
";
    }

    public function getTemplateName()
    {
        return "GangAuthorityUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
