<?php

/* GangAuthorityUserBundle:Default:stats.html.twig */
class __TwigTemplate_fad747fb109377b9cdc62d926170291eecf97469214ea2430be6998a2a2902c8 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tGang Authority - Statistiques
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\tStats, BITCH!
";
    }

    public function getTemplateName()
    {
        return "GangAuthorityUserBundle:Default:stats.html.twig";
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
