<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_be965a5ac3c0f7397eec9d32ccae62342b6cfeb3f26139442d0e99c8fe55fa46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_bba6f6a397a2aeaefc0ba31c75663d03e79e9d88fd7d20b2e227396cd8db4427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba6f6a397a2aeaefc0ba31c75663d03e79e9d88fd7d20b2e227396cd8db4427->enter($__internal_bba6f6a397a2aeaefc0ba31c75663d03e79e9d88fd7d20b2e227396cd8db4427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c61fd557a85319aa6af7c53d7f4eea99cfa033141d13596f9a139d60d948d759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61fd557a85319aa6af7c53d7f4eea99cfa033141d13596f9a139d60d948d759->enter($__internal_c61fd557a85319aa6af7c53d7f4eea99cfa033141d13596f9a139d60d948d759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bba6f6a397a2aeaefc0ba31c75663d03e79e9d88fd7d20b2e227396cd8db4427->leave($__internal_bba6f6a397a2aeaefc0ba31c75663d03e79e9d88fd7d20b2e227396cd8db4427_prof);

        
        $__internal_c61fd557a85319aa6af7c53d7f4eea99cfa033141d13596f9a139d60d948d759->leave($__internal_c61fd557a85319aa6af7c53d7f4eea99cfa033141d13596f9a139d60d948d759_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_059dd0f1a18fc8c8c579aa74a514f955392c20566aad52b529279b955211e9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_059dd0f1a18fc8c8c579aa74a514f955392c20566aad52b529279b955211e9f4->enter($__internal_059dd0f1a18fc8c8c579aa74a514f955392c20566aad52b529279b955211e9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6a7b04e362909b248363af4874e55afcac4a0a83f0ffdeed0ce6140a797c5ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7b04e362909b248363af4874e55afcac4a0a83f0ffdeed0ce6140a797c5ba8->enter($__internal_6a7b04e362909b248363af4874e55afcac4a0a83f0ffdeed0ce6140a797c5ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6a7b04e362909b248363af4874e55afcac4a0a83f0ffdeed0ce6140a797c5ba8->leave($__internal_6a7b04e362909b248363af4874e55afcac4a0a83f0ffdeed0ce6140a797c5ba8_prof);

        
        $__internal_059dd0f1a18fc8c8c579aa74a514f955392c20566aad52b529279b955211e9f4->leave($__internal_059dd0f1a18fc8c8c579aa74a514f955392c20566aad52b529279b955211e9f4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2308fdfb85b7aaca5e36d09ec5fd7fdf1549dd83c14e5d712cb529b571f13a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2308fdfb85b7aaca5e36d09ec5fd7fdf1549dd83c14e5d712cb529b571f13a1d->enter($__internal_2308fdfb85b7aaca5e36d09ec5fd7fdf1549dd83c14e5d712cb529b571f13a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b4802c7d55c694e98db27512ab99fed776d01015a03a9d503fa596a6fe2a2679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4802c7d55c694e98db27512ab99fed776d01015a03a9d503fa596a6fe2a2679->enter($__internal_b4802c7d55c694e98db27512ab99fed776d01015a03a9d503fa596a6fe2a2679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b4802c7d55c694e98db27512ab99fed776d01015a03a9d503fa596a6fe2a2679->leave($__internal_b4802c7d55c694e98db27512ab99fed776d01015a03a9d503fa596a6fe2a2679_prof);

        
        $__internal_2308fdfb85b7aaca5e36d09ec5fd7fdf1549dd83c14e5d712cb529b571f13a1d->leave($__internal_2308fdfb85b7aaca5e36d09ec5fd7fdf1549dd83c14e5d712cb529b571f13a1d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_134a5103601bd8643a722685a33bd8885103f064786bf8303fee86e61d7d3ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_134a5103601bd8643a722685a33bd8885103f064786bf8303fee86e61d7d3ebc->enter($__internal_134a5103601bd8643a722685a33bd8885103f064786bf8303fee86e61d7d3ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_12fad1f10bd5643d8368d6072a5af4032d42c1e9592dad902d7ee39485db16fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fad1f10bd5643d8368d6072a5af4032d42c1e9592dad902d7ee39485db16fa->enter($__internal_12fad1f10bd5643d8368d6072a5af4032d42c1e9592dad902d7ee39485db16fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_12fad1f10bd5643d8368d6072a5af4032d42c1e9592dad902d7ee39485db16fa->leave($__internal_12fad1f10bd5643d8368d6072a5af4032d42c1e9592dad902d7ee39485db16fa_prof);

        
        $__internal_134a5103601bd8643a722685a33bd8885103f064786bf8303fee86e61d7d3ebc->leave($__internal_134a5103601bd8643a722685a33bd8885103f064786bf8303fee86e61d7d3ebc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\NeigeEtSoleil\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
