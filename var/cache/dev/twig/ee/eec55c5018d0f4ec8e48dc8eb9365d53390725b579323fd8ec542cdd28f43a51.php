<?php

/* NeigeEtSoleilBundle:Default:Appartements/Layout/Appartements.html.twig */
class __TwigTemplate_e1e0608a9627aa8977d2bb8a4870774f25e1db603eb2e3e80f6505d21089f2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "NeigeEtSoleilBundle:Default:Appartements/Layout/Appartements.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_761e47fd47f2d75f0d39b2cf42552b32b143dd88cc9cd91bbc64f744f2c6a24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761e47fd47f2d75f0d39b2cf42552b32b143dd88cc9cd91bbc64f744f2c6a24f->enter($__internal_761e47fd47f2d75f0d39b2cf42552b32b143dd88cc9cd91bbc64f744f2c6a24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NeigeEtSoleilBundle:Default:Appartements/Layout/Appartements.html.twig"));

        $__internal_540161912f6ac86acc6c4537c49a57288acd9b7df138bdf8f19a411abd8a6c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540161912f6ac86acc6c4537c49a57288acd9b7df138bdf8f19a411abd8a6c92->enter($__internal_540161912f6ac86acc6c4537c49a57288acd9b7df138bdf8f19a411abd8a6c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NeigeEtSoleilBundle:Default:Appartements/Layout/Appartements.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_761e47fd47f2d75f0d39b2cf42552b32b143dd88cc9cd91bbc64f744f2c6a24f->leave($__internal_761e47fd47f2d75f0d39b2cf42552b32b143dd88cc9cd91bbc64f744f2c6a24f_prof);

        
        $__internal_540161912f6ac86acc6c4537c49a57288acd9b7df138bdf8f19a411abd8a6c92->leave($__internal_540161912f6ac86acc6c4537c49a57288acd9b7df138bdf8f19a411abd8a6c92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a084b187c087e0a89bbfd58e48e2bc4ee9867b195557dfd50695d514bc35bf4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a084b187c087e0a89bbfd58e48e2bc4ee9867b195557dfd50695d514bc35bf4c->enter($__internal_a084b187c087e0a89bbfd58e48e2bc4ee9867b195557dfd50695d514bc35bf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d1cb3779f7481c1979ffef9d4b31626c5cd7b679fcfd8723a196754e728b478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1cb3779f7481c1979ffef9d4b31626c5cd7b679fcfd8723a196754e728b478->enter($__internal_3d1cb3779f7481c1979ffef9d4b31626c5cd7b679fcfd8723a196754e728b478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        ";
        // line 6
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "NeigeEtSoleilBundle:Default:Appartements/Layout/Appartements.html.twig", 6)->display($context);
        // line 7
        echo "        <div class=\"span9\">

            <ul class=\"thumbnails\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appartements"]) ? $context["appartements"] : $this->getContext($context, "appartements")));
        foreach ($context['_seq'] as $context["_key"] => $context["appartement"]) {
            // line 11
            echo "                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/holder.png"), "html", null, true);
            echo "\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                        <div class=\"caption\">
                            <h4>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["appartement"], "nomImmeubleA", array()), "html", null, true);
            echo "</h4>
                            <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["appartement"], "prix", array()), "html", null, true);
            echo " € /nuit, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appartement"], "superficie", array()), "html", null, true);
            echo "m2</p>
                            <a class=\"btn btn-primary\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Presentation", array("id" => $this->getAttribute($context["appartement"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                            <a class=\"btn btn-success\" href=\"panier.php\">Réserver !</a>
                        </div>
                    </div>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appartement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "             
            </ul>

            <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

";
        
        $__internal_3d1cb3779f7481c1979ffef9d4b31626c5cd7b679fcfd8723a196754e728b478->leave($__internal_3d1cb3779f7481c1979ffef9d4b31626c5cd7b679fcfd8723a196754e728b478_prof);

        
        $__internal_a084b187c087e0a89bbfd58e48e2bc4ee9867b195557dfd50695d514bc35bf4c->leave($__internal_a084b187c087e0a89bbfd58e48e2bc4ee9867b195557dfd50695d514bc35bf4c_prof);

    }

    public function getTemplateName()
    {
        return "NeigeEtSoleilBundle:Default:Appartements/Layout/Appartements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  83 => 17,  77 => 16,  73 => 15,  68 => 13,  64 => 11,  60 => 10,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout/layout.html.twig' %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        {% include '::modulesUsed/navigation.html.twig' %}
        <div class=\"span9\">

            <ul class=\"thumbnails\">
                {% for appartement in appartements %}
                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"{{ asset('img/holder.png') }}\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                        <div class=\"caption\">
                            <h4>{{ appartement.nomImmeubleA }}</h4>
                            <p>{{ appartement.prix }} € /nuit, {{ appartement.superficie }}m2</p>
                            <a class=\"btn btn-primary\" href=\"{{ path('Presentation', {'id' : appartement.id}) }}\">Plus d'infos</a>
                            <a class=\"btn btn-success\" href=\"panier.php\">Réserver !</a>
                        </div>
                    </div>
                </li>
                {% endfor %}
             
            </ul>

            <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

{% endblock %}
", "NeigeEtSoleilBundle:Default:Appartements/Layout/Appartements.html.twig", "C:\\wamp\\www\\NeigeEtSoleil\\src\\NeigeEtSoleilBundle/Resources/views/Default/Appartements/Layout/Appartements.html.twig");
    }
}
