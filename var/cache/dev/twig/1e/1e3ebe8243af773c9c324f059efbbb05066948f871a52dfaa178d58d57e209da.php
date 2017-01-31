<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e3a1602407c8e2078e022c05c61699b8e7e4cda468bf96bbc5ab2f33d7aa5c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bd961a7c8b0860886991afd83f9de7c960b0c4fc877930391ad38b981cfc865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd961a7c8b0860886991afd83f9de7c960b0c4fc877930391ad38b981cfc865->enter($__internal_5bd961a7c8b0860886991afd83f9de7c960b0c4fc877930391ad38b981cfc865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5a01f119ba6c83dc3dcf5c5d510ef4d3537af228b1450fc363797090f88560db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a01f119ba6c83dc3dcf5c5d510ef4d3537af228b1450fc363797090f88560db->enter($__internal_5a01f119ba6c83dc3dcf5c5d510ef4d3537af228b1450fc363797090f88560db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd961a7c8b0860886991afd83f9de7c960b0c4fc877930391ad38b981cfc865->leave($__internal_5bd961a7c8b0860886991afd83f9de7c960b0c4fc877930391ad38b981cfc865_prof);

        
        $__internal_5a01f119ba6c83dc3dcf5c5d510ef4d3537af228b1450fc363797090f88560db->leave($__internal_5a01f119ba6c83dc3dcf5c5d510ef4d3537af228b1450fc363797090f88560db_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a20cbc1616c9ba667889e41589c2e351243f9bff0db2cec5561ed05383dd428a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20cbc1616c9ba667889e41589c2e351243f9bff0db2cec5561ed05383dd428a->enter($__internal_a20cbc1616c9ba667889e41589c2e351243f9bff0db2cec5561ed05383dd428a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_847a11b7dd515d9ff027508a3dfa8f1bce2fcf1da883c8c9831e867044102943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847a11b7dd515d9ff027508a3dfa8f1bce2fcf1da883c8c9831e867044102943->enter($__internal_847a11b7dd515d9ff027508a3dfa8f1bce2fcf1da883c8c9831e867044102943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_847a11b7dd515d9ff027508a3dfa8f1bce2fcf1da883c8c9831e867044102943->leave($__internal_847a11b7dd515d9ff027508a3dfa8f1bce2fcf1da883c8c9831e867044102943_prof);

        
        $__internal_a20cbc1616c9ba667889e41589c2e351243f9bff0db2cec5561ed05383dd428a->leave($__internal_a20cbc1616c9ba667889e41589c2e351243f9bff0db2cec5561ed05383dd428a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eaf4135755a7154547073d50670af6f14d27e7c37432422783e759ea0c505620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf4135755a7154547073d50670af6f14d27e7c37432422783e759ea0c505620->enter($__internal_eaf4135755a7154547073d50670af6f14d27e7c37432422783e759ea0c505620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f50c393e2adcd2ab35b012f611a27fc739bbc4edb40c958bd823bacdae9b6ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50c393e2adcd2ab35b012f611a27fc739bbc4edb40c958bd823bacdae9b6ec9->enter($__internal_f50c393e2adcd2ab35b012f611a27fc739bbc4edb40c958bd823bacdae9b6ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f50c393e2adcd2ab35b012f611a27fc739bbc4edb40c958bd823bacdae9b6ec9->leave($__internal_f50c393e2adcd2ab35b012f611a27fc739bbc4edb40c958bd823bacdae9b6ec9_prof);

        
        $__internal_eaf4135755a7154547073d50670af6f14d27e7c37432422783e759ea0c505620->leave($__internal_eaf4135755a7154547073d50670af6f14d27e7c37432422783e759ea0c505620_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_847d2c9dd6a0353461149552ede60580b95523cfa8bf4056af5701a8b9682afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847d2c9dd6a0353461149552ede60580b95523cfa8bf4056af5701a8b9682afa->enter($__internal_847d2c9dd6a0353461149552ede60580b95523cfa8bf4056af5701a8b9682afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f399fbcf8bc5da83595447a271662ba8f47cb16ca7a92de07b171570fd5148ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f399fbcf8bc5da83595447a271662ba8f47cb16ca7a92de07b171570fd5148ee->enter($__internal_f399fbcf8bc5da83595447a271662ba8f47cb16ca7a92de07b171570fd5148ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f399fbcf8bc5da83595447a271662ba8f47cb16ca7a92de07b171570fd5148ee->leave($__internal_f399fbcf8bc5da83595447a271662ba8f47cb16ca7a92de07b171570fd5148ee_prof);

        
        $__internal_847d2c9dd6a0353461149552ede60580b95523cfa8bf4056af5701a8b9682afa->leave($__internal_847d2c9dd6a0353461149552ede60580b95523cfa8bf4056af5701a8b9682afa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\NeigeEtSoleil\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
