<?php

/* GangAuthorityUserBundle:Admin:bas.html.twig */
class __TwigTemplate_1011c56b84f77553ca7c5da40ab200d91c9c824ed906cbc51a334b0f00bb8d94 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("gang_authority_admin_homepage");
        echo "\" id=\"urlIndex\">Accueil</a></li>
            ";
        // line 14
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "            <li><div id=\"split_menu\"></div></li>
            <li><a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("gang_authority_admin_voirsignalements");
            echo "\" id=\"urlSignalements\">Signalements</a></li>
            <li><div id=\"split_menu\"></div></li>
            <li><a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("gang_authority_admin_mission");
            echo "\" id=\"urlMission\">Mission</a></li>
            <li><div id=\"split_menu\"></div></li>
            <li><a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("admin_logout");
            echo "\" id=\"urlDeconnexion\">Deconnexion</a></li>
            ";
        } else {
            // line 21
            echo "            
            <li><div id=\"split_menu\"></div></li>
            <li><a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("admin_login");
            echo "\" id=\"urlConnexion\">Connexion</a></li>
            ";
        }
        // line 24
        echo "            
        </ul>
    </div>

    <div id=\"page\">           
        <div id=\"content\">
            ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
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

    // line 30
    public function block_content($context, array $blocks = array())
    {
        echo "bl";
    }

    public function getTemplateName()
    {
        return "GangAuthorityUserBundle:Admin:bas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 30,  102 => 4,  87 => 31,  85 => 30,  77 => 24,  72 => 23,  68 => 21,  63 => 20,  58 => 18,  53 => 16,  50 => 15,  48 => 14,  44 => 13,  39 => 11,  30 => 5,  26 => 4,  21 => 1,  52 => 13,  46 => 11,  43 => 9,  37 => 7,  34 => 6,  31 => 4,  28 => 3,);
    }
}
