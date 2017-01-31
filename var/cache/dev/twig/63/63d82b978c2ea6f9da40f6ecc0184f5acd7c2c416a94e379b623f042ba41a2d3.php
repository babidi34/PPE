<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_4d1ac9bbac60a88a1e805cd32916ac7c2a0ceb235f1d35137a9d2ef51cc34f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_283ba82a97f750483c95b6a593b1ff153a3be353b98b145fed22d0fab01ed2b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283ba82a97f750483c95b6a593b1ff153a3be353b98b145fed22d0fab01ed2b5->enter($__internal_283ba82a97f750483c95b6a593b1ff153a3be353b98b145fed22d0fab01ed2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        $__internal_fec762a89b2f19f738d49bb54aedb6f6e0bdd67ec9b9db4454e40ab855b6b8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec762a89b2f19f738d49bb54aedb6f6e0bdd67ec9b9db4454e40ab855b6b8ad->enter($__internal_fec762a89b2f19f738d49bb54aedb6f6e0bdd67ec9b9db4454e40ab855b6b8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <div class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Appartements");
        echo "\">Neige &amp; Soleil</a>
                <div class=\"nav-collapse collapse\">
                    <form class=\"navbar-form form-search pull-right\">
                        <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                        <button type=\"submit\" class=\"btn\">Rechercher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "<hr />
<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page", array("id" => 1));
        echo "\">Mentions légales</a>
                </ul>
            </div> 
        </div>

        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2016 - Neige & Soleil</p>
            </div>
        </div>
    </div>
</footer>\t
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "</body>
</html>
";
        
        $__internal_283ba82a97f750483c95b6a593b1ff153a3be353b98b145fed22d0fab01ed2b5->leave($__internal_283ba82a97f750483c95b6a593b1ff153a3be353b98b145fed22d0fab01ed2b5_prof);

        
        $__internal_fec762a89b2f19f738d49bb54aedb6f6e0bdd67ec9b9db4454e40ab855b6b8ad->leave($__internal_fec762a89b2f19f738d49bb54aedb6f6e0bdd67ec9b9db4454e40ab855b6b8ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_36edcd31aabaa5a8094b3614b2f4f49b25557f8ba176c2533c472f973f830aa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36edcd31aabaa5a8094b3614b2f4f49b25557f8ba176c2533c472f973f830aa7->enter($__internal_36edcd31aabaa5a8094b3614b2f4f49b25557f8ba176c2533c472f973f830aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a253e5a0ac1fdd00136041997bc8f0cc9a74cc36bfa09795b93f4679924c2491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a253e5a0ac1fdd00136041997bc8f0cc9a74cc36bfa09795b93f4679924c2491->enter($__internal_a253e5a0ac1fdd00136041997bc8f0cc9a74cc36bfa09795b93f4679924c2491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a253e5a0ac1fdd00136041997bc8f0cc9a74cc36bfa09795b93f4679924c2491->leave($__internal_a253e5a0ac1fdd00136041997bc8f0cc9a74cc36bfa09795b93f4679924c2491_prof);

        
        $__internal_36edcd31aabaa5a8094b3614b2f4f49b25557f8ba176c2533c472f973f830aa7->leave($__internal_36edcd31aabaa5a8094b3614b2f4f49b25557f8ba176c2533c472f973f830aa7_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55907c235b9fa7cb98e4a631c8f5cdd461cd4a52742c669221c5483567030e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55907c235b9fa7cb98e4a631c8f5cdd461cd4a52742c669221c5483567030e8c->enter($__internal_55907c235b9fa7cb98e4a631c8f5cdd461cd4a52742c669221c5483567030e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_747dd5efc3d712ab9ed06887799b4a88542a74dea55af7693d4638b8bf54f188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747dd5efc3d712ab9ed06887799b4a88542a74dea55af7693d4638b8bf54f188->enter($__internal_747dd5efc3d712ab9ed06887799b4a88542a74dea55af7693d4638b8bf54f188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_747dd5efc3d712ab9ed06887799b4a88542a74dea55af7693d4638b8bf54f188->leave($__internal_747dd5efc3d712ab9ed06887799b4a88542a74dea55af7693d4638b8bf54f188_prof);

        
        $__internal_55907c235b9fa7cb98e4a631c8f5cdd461cd4a52742c669221c5483567030e8c->leave($__internal_55907c235b9fa7cb98e4a631c8f5cdd461cd4a52742c669221c5483567030e8c_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_8819dd5c75f684acc0cb1144131169182a292b686d81fc6841b701ad8febe2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8819dd5c75f684acc0cb1144131169182a292b686d81fc6841b701ad8febe2c8->enter($__internal_8819dd5c75f684acc0cb1144131169182a292b686d81fc6841b701ad8febe2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f45ba75a075c455d993d753b0d9c524bf98e351ee619eccccc311c022e2719f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f45ba75a075c455d993d753b0d9c524bf98e351ee619eccccc311c022e2719f->enter($__internal_9f45ba75a075c455d993d753b0d9c524bf98e351ee619eccccc311c022e2719f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f45ba75a075c455d993d753b0d9c524bf98e351ee619eccccc311c022e2719f->leave($__internal_9f45ba75a075c455d993d753b0d9c524bf98e351ee619eccccc311c022e2719f_prof);

        
        $__internal_8819dd5c75f684acc0cb1144131169182a292b686d81fc6841b701ad8febe2c8->leave($__internal_8819dd5c75f684acc0cb1144131169182a292b686d81fc6841b701ad8febe2c8_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3098ca3a1d6ff16ce8dd8e6c18d55d599413703bf2c8a051ab4a6b249f34bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3098ca3a1d6ff16ce8dd8e6c18d55d599413703bf2c8a051ab4a6b249f34bf2->enter($__internal_a3098ca3a1d6ff16ce8dd8e6c18d55d599413703bf2c8a051ab4a6b249f34bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_990c41c23c5412ca040ca2437cdc45b55201e7bd13b9006e469593bba8d22da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990c41c23c5412ca040ca2437cdc45b55201e7bd13b9006e469593bba8d22da6->enter($__internal_990c41c23c5412ca040ca2437cdc45b55201e7bd13b9006e469593bba8d22da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_990c41c23c5412ca040ca2437cdc45b55201e7bd13b9006e469593bba8d22da6->leave($__internal_990c41c23c5412ca040ca2437cdc45b55201e7bd13b9006e469593bba8d22da6_prof);

        
        $__internal_a3098ca3a1d6ff16ce8dd8e6c18d55d599413703bf2c8a051ab4a6b249f34bf2->leave($__internal_a3098ca3a1d6ff16ce8dd8e6c18d55d599413703bf2c8a051ab4a6b249f34bf2_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 54,  168 => 32,  151 => 10,  133 => 5,  121 => 55,  119 => 54,  115 => 53,  111 => 52,  96 => 40,  87 => 33,  85 => 32,  72 => 22,  57 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-responsive.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\" />
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
    <div class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"brand\" href=\"{{ path ('Appartements') }}\">Neige &amp; Soleil</a>
                <div class=\"nav-collapse collapse\">
                    <form class=\"navbar-form form-search pull-right\">
                        <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                        <button type=\"submit\" class=\"btn\">Rechercher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% block body %}{% endblock %}
<hr />
<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    <li><a href=\"{{ path ('page', {'id' : 1 }) }}\">Mentions légales</a>
                </ul>
            </div> 
        </div>

        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2016 - Neige & Soleil</p>
            </div>
        </div>
    </div>
</footer>\t
<script src=\"{{ asset('js/jquery-1.10.0.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.js') }}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "::layout/layout.html.twig", "C:\\wamp\\www\\NeigeEtSoleil\\app/Resources\\views/layout/layout.html.twig");
    }
}
