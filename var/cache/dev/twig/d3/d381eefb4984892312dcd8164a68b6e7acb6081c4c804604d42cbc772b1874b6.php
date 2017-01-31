<?php

/* NeigeEtSoleilBundle:Default:Appartements/Layout/Presentation.html.twig */
class __TwigTemplate_5c7b3d21802518bbe5e8512116688f0624a4ad1372f1023e840a8dddb24debaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "NeigeEtSoleilBundle:Default:Appartements/Layout/Presentation.html.twig", 1);
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
        $__internal_533b32ca44ddbe8e7ae5f0f9b534a659781953672bcd8545025f52a489d10cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533b32ca44ddbe8e7ae5f0f9b534a659781953672bcd8545025f52a489d10cb6->enter($__internal_533b32ca44ddbe8e7ae5f0f9b534a659781953672bcd8545025f52a489d10cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NeigeEtSoleilBundle:Default:Appartements/Layout/Presentation.html.twig"));

        $__internal_493cff65169026f08589586547e95cf7dec8b5a824e19a2763e9d0d5111c5962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493cff65169026f08589586547e95cf7dec8b5a824e19a2763e9d0d5111c5962->enter($__internal_493cff65169026f08589586547e95cf7dec8b5a824e19a2763e9d0d5111c5962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NeigeEtSoleilBundle:Default:Appartements/Layout/Presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_533b32ca44ddbe8e7ae5f0f9b534a659781953672bcd8545025f52a489d10cb6->leave($__internal_533b32ca44ddbe8e7ae5f0f9b534a659781953672bcd8545025f52a489d10cb6_prof);

        
        $__internal_493cff65169026f08589586547e95cf7dec8b5a824e19a2763e9d0d5111c5962->leave($__internal_493cff65169026f08589586547e95cf7dec8b5a824e19a2763e9d0d5111c5962_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f73680b309871ac256a909c6c3fdd32b88a4faddda2ff11f0bc364e41a14ed12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73680b309871ac256a909c6c3fdd32b88a4faddda2ff11f0bc364e41a14ed12->enter($__internal_f73680b309871ac256a909c6c3fdd32b88a4faddda2ff11f0bc364e41a14ed12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_932a2786c2bc50c722a70dee28c62806d20809dab091d63c0e78de0b5f07fdff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932a2786c2bc50c722a70dee28c62806d20809dab091d63c0e78de0b5f07fdff->enter($__internal_932a2786c2bc50c722a70dee28c62806d20809dab091d63c0e78de0b5f07fdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">

            ";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "NeigeEtSoleilBundle:Default:Appartements/Layout/Presentation.html.twig", 7)->display($context);
        // line 8
        echo "            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/holder.png"), "html", null, true);
        echo "\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "nomImmeubleA", array()), "html", null, true);
        echo "</h4>
                        <h5>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "villeA", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "cpA", array()), "html", null, true);
        echo "</h5>
                        <p>Charmant appartement de ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "superficie", array()), "html", null, true);
        echo " m2 situe a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "villeA", array()), "html", null, true);
        echo ". Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                        <h4>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appartement"]) ? $context["appartement"] : $this->getContext($context, "appartement")), "prix", array()), "html", null, true);
        echo "€ /nuit</h4>
                        <form action=\"panier.php\">
                            <div>
                                <button class=\"btn btn-primary\">Réserver !</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

";
        
        $__internal_932a2786c2bc50c722a70dee28c62806d20809dab091d63c0e78de0b5f07fdff->leave($__internal_932a2786c2bc50c722a70dee28c62806d20809dab091d63c0e78de0b5f07fdff_prof);

        
        $__internal_f73680b309871ac256a909c6c3fdd32b88a4faddda2ff11f0bc364e41a14ed12->leave($__internal_f73680b309871ac256a909c6c3fdd32b88a4faddda2ff11f0bc364e41a14ed12_prof);

    }

    public function getTemplateName()
    {
        return "NeigeEtSoleilBundle:Default:Appartements/Layout/Presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  78 => 17,  72 => 16,  68 => 15,  61 => 11,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"{{ asset('img/holder.png') }}\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>{{ appartement.nomImmeubleA }}</h4>
                        <h5>{{ appartement.villeA }}, {{ appartement.cpA }}</h5>
                        <p>Charmant appartement de {{ appartement.superficie }} m2 situe a {{ appartement.villeA }}. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                        <h4>{{ appartement.prix }}€ /nuit</h4>
                        <form action=\"panier.php\">
                            <div>
                                <button class=\"btn btn-primary\">Réserver !</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

{% endblock %}
", "NeigeEtSoleilBundle:Default:Appartements/Layout/Presentation.html.twig", "C:\\wamp\\www\\NeigeEtSoleil\\src\\NeigeEtSoleilBundle/Resources/views/Default/Appartements/Layout/Presentation.html.twig");
    }
}
