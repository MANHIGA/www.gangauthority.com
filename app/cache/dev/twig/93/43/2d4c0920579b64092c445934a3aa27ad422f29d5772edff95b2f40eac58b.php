<?php

/* GangAuthorityUserBundle:Admin:voirsignalements.html.twig */
class __TwigTemplate_93432d4c0920579b64092c445934a3aa27ad422f29d5772edff95b2f40eac58b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GangAuthorityUserBundle:Admin:bas.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GangAuthorityUserBundle:Admin:bas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tGang Authority - Voir Signalements Admin
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<table style=\"border: 1px solid black\">
    <tr style =\"border: 1px solid black\">
    <th>idSignalement</th>
    <th>Justification</th>
    <th>Date</th>
    <th>idCompte</th>
    <th>Action</th>
    </tr>
\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["signalements"]) ? $context["signalements"] : $this->getContext($context, "signalements")));
        foreach ($context['_seq'] as $context["_key"] => $context["signalement"]) {
            // line 17
            echo "\t<tr style=\"border: 1px solid black\">
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["signalement"]) ? $context["signalement"] : $this->getContext($context, "signalement")), "idSignalement"), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["signalement"]) ? $context["signalement"] : $this->getContext($context, "signalement")), "justification"), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["signalement"]) ? $context["signalement"] : $this->getContext($context, "signalement")), "dateSignalement"), "d-m-Y"), "html", null, true);
            echo "</td>
        ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["signalement"]) ? $context["signalement"] : $this->getContext($context, "signalement")), "concernercompte"));
            foreach ($context['_seq'] as $context["_key"] => $context["concompte"]) {
                // line 22
                echo "        \t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concompte"]) ? $context["concompte"] : $this->getContext($context, "concompte")), "idCompte"), "html", null, true);
                echo "</td>
            <td><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gang_authority_admin_voirbannir", array("idsignalement" => $this->getAttribute((isset($context["signalement"]) ? $context["signalement"] : $this->getContext($context, "signalement")), "idSignalement"), "idcompte" => $this->getAttribute((isset($context["concompte"]) ? $context["concompte"] : $this->getContext($context, "concompte")), "idCompte"))), "html", null, true);
                echo "\" id=\"urlBannir\">Bannir</a></td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concompte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['signalement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "GangAuthorityUserBundle:Admin:voirsignalements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  86 => 25,  78 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  54 => 17,  50 => 16,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
