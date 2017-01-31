<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8a08249d36aa13586a73ff6ae6413144d033b358021c8141a5f28f4b29758404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb87ecae6fc01c306577dcbee24c789500c40130e4b9a3e858a6912b3395ad09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb87ecae6fc01c306577dcbee24c789500c40130e4b9a3e858a6912b3395ad09->enter($__internal_fb87ecae6fc01c306577dcbee24c789500c40130e4b9a3e858a6912b3395ad09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ad8b05cce22c6245b77ebccdbbb29d0d2e26269ff8617a225c80a38c204bda3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8b05cce22c6245b77ebccdbbb29d0d2e26269ff8617a225c80a38c204bda3b->enter($__internal_ad8b05cce22c6245b77ebccdbbb29d0d2e26269ff8617a225c80a38c204bda3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb87ecae6fc01c306577dcbee24c789500c40130e4b9a3e858a6912b3395ad09->leave($__internal_fb87ecae6fc01c306577dcbee24c789500c40130e4b9a3e858a6912b3395ad09_prof);

        
        $__internal_ad8b05cce22c6245b77ebccdbbb29d0d2e26269ff8617a225c80a38c204bda3b->leave($__internal_ad8b05cce22c6245b77ebccdbbb29d0d2e26269ff8617a225c80a38c204bda3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3357cbeec7086cb9de8498f0c8b41240e472f606b7c532d86cc392e977232e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3357cbeec7086cb9de8498f0c8b41240e472f606b7c532d86cc392e977232e8d->enter($__internal_3357cbeec7086cb9de8498f0c8b41240e472f606b7c532d86cc392e977232e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41963dd1fe66d3c2feaf536d6e406ebea8640f946d011b700bf344c4b3f347a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41963dd1fe66d3c2feaf536d6e406ebea8640f946d011b700bf344c4b3f347a3->enter($__internal_41963dd1fe66d3c2feaf536d6e406ebea8640f946d011b700bf344c4b3f347a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_41963dd1fe66d3c2feaf536d6e406ebea8640f946d011b700bf344c4b3f347a3->leave($__internal_41963dd1fe66d3c2feaf536d6e406ebea8640f946d011b700bf344c4b3f347a3_prof);

        
        $__internal_3357cbeec7086cb9de8498f0c8b41240e472f606b7c532d86cc392e977232e8d->leave($__internal_3357cbeec7086cb9de8498f0c8b41240e472f606b7c532d86cc392e977232e8d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fdd84621cbb4d28c09c2d5e35599c565ae3f38782dd8b2451f86522124f4e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fdd84621cbb4d28c09c2d5e35599c565ae3f38782dd8b2451f86522124f4e96->enter($__internal_9fdd84621cbb4d28c09c2d5e35599c565ae3f38782dd8b2451f86522124f4e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b3c76ae773610748b92002613eb53b77a3cfbb18fa07893e9c1b69e62000216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3c76ae773610748b92002613eb53b77a3cfbb18fa07893e9c1b69e62000216->enter($__internal_7b3c76ae773610748b92002613eb53b77a3cfbb18fa07893e9c1b69e62000216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b3c76ae773610748b92002613eb53b77a3cfbb18fa07893e9c1b69e62000216->leave($__internal_7b3c76ae773610748b92002613eb53b77a3cfbb18fa07893e9c1b69e62000216_prof);

        
        $__internal_9fdd84621cbb4d28c09c2d5e35599c565ae3f38782dd8b2451f86522124f4e96->leave($__internal_9fdd84621cbb4d28c09c2d5e35599c565ae3f38782dd8b2451f86522124f4e96_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aaf0bd16e7e8a856f150a27afe777ec04af9963e19e65c4505c5dbdfd13e0ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aaf0bd16e7e8a856f150a27afe777ec04af9963e19e65c4505c5dbdfd13e0ea->enter($__internal_6aaf0bd16e7e8a856f150a27afe777ec04af9963e19e65c4505c5dbdfd13e0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea7d41b1712148a72f54446eb93c4b8f5668176e9d538f243587f06d0bca7050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7d41b1712148a72f54446eb93c4b8f5668176e9d538f243587f06d0bca7050->enter($__internal_ea7d41b1712148a72f54446eb93c4b8f5668176e9d538f243587f06d0bca7050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ea7d41b1712148a72f54446eb93c4b8f5668176e9d538f243587f06d0bca7050->leave($__internal_ea7d41b1712148a72f54446eb93c4b8f5668176e9d538f243587f06d0bca7050_prof);

        
        $__internal_6aaf0bd16e7e8a856f150a27afe777ec04af9963e19e65c4505c5dbdfd13e0ea->leave($__internal_6aaf0bd16e7e8a856f150a27afe777ec04af9963e19e65c4505c5dbdfd13e0ea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\NeigeEtSoleil\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
