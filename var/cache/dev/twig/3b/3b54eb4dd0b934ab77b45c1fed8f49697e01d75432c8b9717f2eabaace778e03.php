<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_16427af773004c6faca09e5373e0454f18ad812b454ce15051ec84e960461102 extends Twig_Template
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
        $__internal_2f14f522e3cedf8ab7f0d8b52c26aacba56f4acd0d3180ae730ecd9fcb264911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f14f522e3cedf8ab7f0d8b52c26aacba56f4acd0d3180ae730ecd9fcb264911->enter($__internal_2f14f522e3cedf8ab7f0d8b52c26aacba56f4acd0d3180ae730ecd9fcb264911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c228512bc6781549bf449b74e20b1f89aa906e378428f1cd2cfc874bea5ba3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c228512bc6781549bf449b74e20b1f89aa906e378428f1cd2cfc874bea5ba3f9->enter($__internal_c228512bc6781549bf449b74e20b1f89aa906e378428f1cd2cfc874bea5ba3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f14f522e3cedf8ab7f0d8b52c26aacba56f4acd0d3180ae730ecd9fcb264911->leave($__internal_2f14f522e3cedf8ab7f0d8b52c26aacba56f4acd0d3180ae730ecd9fcb264911_prof);

        
        $__internal_c228512bc6781549bf449b74e20b1f89aa906e378428f1cd2cfc874bea5ba3f9->leave($__internal_c228512bc6781549bf449b74e20b1f89aa906e378428f1cd2cfc874bea5ba3f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8315b91bcd90af8b166393395073557a09c454175d568b3ec5f101abf51597ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8315b91bcd90af8b166393395073557a09c454175d568b3ec5f101abf51597ce->enter($__internal_8315b91bcd90af8b166393395073557a09c454175d568b3ec5f101abf51597ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aa9ce290c9daf20828adf51a38b8afc8ab16ce380a4ad70b9b0db2cbd19c540d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9ce290c9daf20828adf51a38b8afc8ab16ce380a4ad70b9b0db2cbd19c540d->enter($__internal_aa9ce290c9daf20828adf51a38b8afc8ab16ce380a4ad70b9b0db2cbd19c540d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_aa9ce290c9daf20828adf51a38b8afc8ab16ce380a4ad70b9b0db2cbd19c540d->leave($__internal_aa9ce290c9daf20828adf51a38b8afc8ab16ce380a4ad70b9b0db2cbd19c540d_prof);

        
        $__internal_8315b91bcd90af8b166393395073557a09c454175d568b3ec5f101abf51597ce->leave($__internal_8315b91bcd90af8b166393395073557a09c454175d568b3ec5f101abf51597ce_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/projet_file_rougeok/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
