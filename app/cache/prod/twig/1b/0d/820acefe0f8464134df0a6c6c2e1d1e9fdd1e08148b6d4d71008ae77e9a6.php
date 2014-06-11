<?php

/* GangAuthorityUserBundle::bas.html.twig */
class __TwigTemplate_1b0d820acefe0f8464134df0a6c6c2e1d1e9fdd1e08148b6d4d71008ae77e9a6 extends Twig_Template
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
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("gang_authority_user_homepage");
        echo "\" id=\"urlIndex\">Accueil</a></li>
            <li><div id=\"split_menu\"></div></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("gang_authority_user_stats");
        echo "\" id=\"urlStatistiques\">Statistiques</a></li>
            <li><div id=\"split_menu\"></div></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("gang_authority_user_telechargement");
        echo "\" id=\"urlTelechargement\">Téléchargement</a></li>
            <li><div id=\"split_menu\"></div></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("gang_authority_user_profile");
        echo "\" id=\"urlCompte\">Mon compte</a></li>
            <li><div id=\"split_menu\"></div></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" id=\"urlConnexion\">Connexion</a></li>
            <li><div id=\"split_menu\"></div></li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" id=\"urlDeconnexion\">Deconnexion</a></li>
        </ul>
    </div>

    <div id=\"page\">           
        <div id=\"content\">
            ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
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
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        echo "bl";
    }

    public function getTemplateName()
    {
        return "GangAuthorityUserBundle::bas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  95 => 4,  80 => 30,  78 => 29,  69 => 23,  64 => 21,  59 => 19,  54 => 17,  49 => 15,  44 => 13,  39 => 11,  30 => 5,  26 => 4,  21 => 1,);
    }
}
