<?php

/* GangAuthorityUserBundle:Default:telechargement.html.twig */
class __TwigTemplate_b795d6dab19b750a51c9e1bc3cfea994664b52cddf9556d84178b71c6b0e6949 extends Twig_Template
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
        echo "\tGang Authority - Telechargement
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\tDL moi ça fdp!
";
    }

    public function getTemplateName()
    {
        return "GangAuthorityUserBundle:Default:telechargement.html.twig";
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
