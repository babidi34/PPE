<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_386561f01d87583febbdd7671a408964e1a23fd2060f35603653f733584c0d1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e61eb5b76b47877276949d4b25b38da71c1caa880558c9f7d3ca633fea6779c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e61eb5b76b47877276949d4b25b38da71c1caa880558c9f7d3ca633fea6779c->enter($__internal_3e61eb5b76b47877276949d4b25b38da71c1caa880558c9f7d3ca633fea6779c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b3fe65618ee68c68bc0a48f7603c1adbe01e56c8e219f63aeac9d9d4dd423445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fe65618ee68c68bc0a48f7603c1adbe01e56c8e219f63aeac9d9d4dd423445->enter($__internal_b3fe65618ee68c68bc0a48f7603c1adbe01e56c8e219f63aeac9d9d4dd423445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e61eb5b76b47877276949d4b25b38da71c1caa880558c9f7d3ca633fea6779c->leave($__internal_3e61eb5b76b47877276949d4b25b38da71c1caa880558c9f7d3ca633fea6779c_prof);

        
        $__internal_b3fe65618ee68c68bc0a48f7603c1adbe01e56c8e219f63aeac9d9d4dd423445->leave($__internal_b3fe65618ee68c68bc0a48f7603c1adbe01e56c8e219f63aeac9d9d4dd423445_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5223e046243fb3d922be1d03f0d67429bbc91db81afdeb247fa5c5c347b26f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5223e046243fb3d922be1d03f0d67429bbc91db81afdeb247fa5c5c347b26f50->enter($__internal_5223e046243fb3d922be1d03f0d67429bbc91db81afdeb247fa5c5c347b26f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f37ca90176f74981cf8e3fcce500630f632f07f67ec14d8ddc9e88d5d2ed14a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37ca90176f74981cf8e3fcce500630f632f07f67ec14d8ddc9e88d5d2ed14a7->enter($__internal_f37ca90176f74981cf8e3fcce500630f632f07f67ec14d8ddc9e88d5d2ed14a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f37ca90176f74981cf8e3fcce500630f632f07f67ec14d8ddc9e88d5d2ed14a7->leave($__internal_f37ca90176f74981cf8e3fcce500630f632f07f67ec14d8ddc9e88d5d2ed14a7_prof);

        
        $__internal_5223e046243fb3d922be1d03f0d67429bbc91db81afdeb247fa5c5c347b26f50->leave($__internal_5223e046243fb3d922be1d03f0d67429bbc91db81afdeb247fa5c5c347b26f50_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\NeigeEtSoleil\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
