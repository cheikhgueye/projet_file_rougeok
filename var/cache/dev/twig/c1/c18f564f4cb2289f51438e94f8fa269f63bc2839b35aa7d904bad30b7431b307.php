<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ce5f0608b9e1ccfb3b9c02421d91ecd5c6236ef2ec6f10777dc92c0da5808a01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_261e32f9ba08f5b1039e64530b228c964ea1690fb02e0df6a7de191b9bd95a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261e32f9ba08f5b1039e64530b228c964ea1690fb02e0df6a7de191b9bd95a4b->enter($__internal_261e32f9ba08f5b1039e64530b228c964ea1690fb02e0df6a7de191b9bd95a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_566f89edfb08509d8c94db77a1a572a785dbc20ca57e7b818c250644d5be9f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566f89edfb08509d8c94db77a1a572a785dbc20ca57e7b818c250644d5be9f32->enter($__internal_566f89edfb08509d8c94db77a1a572a785dbc20ca57e7b818c250644d5be9f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_261e32f9ba08f5b1039e64530b228c964ea1690fb02e0df6a7de191b9bd95a4b->leave($__internal_261e32f9ba08f5b1039e64530b228c964ea1690fb02e0df6a7de191b9bd95a4b_prof);

        
        $__internal_566f89edfb08509d8c94db77a1a572a785dbc20ca57e7b818c250644d5be9f32->leave($__internal_566f89edfb08509d8c94db77a1a572a785dbc20ca57e7b818c250644d5be9f32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_82d620a749e21d9f6b20c771a103bcbffdd5361555e7537729f74da2a73cff19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d620a749e21d9f6b20c771a103bcbffdd5361555e7537729f74da2a73cff19->enter($__internal_82d620a749e21d9f6b20c771a103bcbffdd5361555e7537729f74da2a73cff19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d06b7ac46db1fe78d0f331855cd9e9317b7da2e22e066f82f9f458152626308f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06b7ac46db1fe78d0f331855cd9e9317b7da2e22e066f82f9f458152626308f->enter($__internal_d06b7ac46db1fe78d0f331855cd9e9317b7da2e22e066f82f9f458152626308f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
        
        $__internal_d06b7ac46db1fe78d0f331855cd9e9317b7da2e22e066f82f9f458152626308f->leave($__internal_d06b7ac46db1fe78d0f331855cd9e9317b7da2e22e066f82f9f458152626308f_prof);

        
        $__internal_82d620a749e21d9f6b20c771a103bcbffdd5361555e7537729f74da2a73cff19->leave($__internal_82d620a749e21d9f6b20c771a103bcbffdd5361555e7537729f74da2a73cff19_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
