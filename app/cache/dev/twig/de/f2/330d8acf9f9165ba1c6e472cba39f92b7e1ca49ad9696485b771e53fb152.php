<?php

/* GangAuthorityUserBundle:Default:bas.html.twig */
class __TwigTemplate_def2330d8acf9f9165ba1c6e472cba39f92b7e1ca49ad9696485b771e53fb152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gangauthorityuser/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <script type=\"text/javascript\" src=\"script/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"script/script.js\"></script>
</head>
<body>   
    <div id=\"content-header\"> 
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gangauthorityuser/images/ga.png"), "html", null, true);
        echo "\">
        <ul id=\"main-menu\">
            <li><a id=\"urlIndex\">Accueil</a></li>
            <li><div id=\"split_menu\"></div></li>
            <li><a id=\"urlStatistiques\">Statistiques</a></li>
            <li><div id=\"split_menu\"></div></li>
            <li><a id=\"urlTelechargements\">Téléchargements</a></li>
            <li><div id=\"split_menu\"></div></li>
            <li><a id=\"urlCompte\">Mon compte</a></li>
            <li><div id=\"split_menu\"></div></li>
            <li><a id=\"urlDeconnexion\">Deconnexion</a></li>
        </ul>
    </div>

    <div id=\"page\">           
        <div id=\"content\">
            ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "        </div>
    </div>
    <div id=\"footer\">
        <ul>
            <li><a>Conditions d'utilisation /</a></li>
            <li><a>A propos /</a></li>
            <li><a>Nous contacter /</a></li>
            <li><a>Copyright 2014</a></li>
        </ul>
    </div>
</body>

</html> 
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        echo "bl";
    }

    public function getTemplateName()
    {
        return "GangAuthorityUserBundle:Default:bas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  77 => 4,  60 => 28,  58 => 27,  39 => 11,  30 => 5,  26 => 4,  21 => 1,);
    }
}
