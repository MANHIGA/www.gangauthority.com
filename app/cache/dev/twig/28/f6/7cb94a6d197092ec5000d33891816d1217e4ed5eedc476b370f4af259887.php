<?php

/* GangAuthorityUserBundle:Default:profile.html.twig */
class __TwigTemplate_28f67cb94a6d197092ec5000d33891816d1217e4ed5eedc476b370f4af259887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GangAuthorityUserBundle::bas.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GangAuthorityUserBundle::bas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\tGang Authority - Mon compte
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\tStormbringer92 susu
";
    }

    public function getTemplateName()
    {
        return "GangAuthorityUserBundle:Default:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  37 => 6,  32 => 3,  29 => 2,);
    }
}
