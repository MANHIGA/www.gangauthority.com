<?php

/* GangAuthorityUserBundle::bas.html.twig */
class __TwigTemplate_c75c3c68122a9e0097a74453a7e727eb52de313f2d8f1153c43b60056f254fb0 extends Twig_Template
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
        return "GangAuthorityUserBundle::bas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  90 => 4,  75 => 28,  73 => 27,  64 => 21,  59 => 19,  54 => 17,  49 => 15,  44 => 13,  39 => 11,  30 => 5,  26 => 4,  21 => 1,);
    }
}
