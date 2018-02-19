<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_2d7b3928862b75f05e4fef3868771cfe7e849b4c6639755427d1b4fc8f93f55e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3e4cd21ad75fd4dd6d83728667b72ce7ffce6e9ce7fc6e6e67da030b49393f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e4cd21ad75fd4dd6d83728667b72ce7ffce6e9ce7fc6e6e67da030b49393f5->enter($__internal_f3e4cd21ad75fd4dd6d83728667b72ce7ffce6e9ce7fc6e6e67da030b49393f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4b73c163de3286847171b952c220a44dfec2b9cfbe6b08f8cce2fd5b19abd8e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b73c163de3286847171b952c220a44dfec2b9cfbe6b08f8cce2fd5b19abd8e3->enter($__internal_4b73c163de3286847171b952c220a44dfec2b9cfbe6b08f8cce2fd5b19abd8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3e4cd21ad75fd4dd6d83728667b72ce7ffce6e9ce7fc6e6e67da030b49393f5->leave($__internal_f3e4cd21ad75fd4dd6d83728667b72ce7ffce6e9ce7fc6e6e67da030b49393f5_prof);

        
        $__internal_4b73c163de3286847171b952c220a44dfec2b9cfbe6b08f8cce2fd5b19abd8e3->leave($__internal_4b73c163de3286847171b952c220a44dfec2b9cfbe6b08f8cce2fd5b19abd8e3_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3f170f85ba4374dab4ec1ed02db5280e591636f5db76135a9a0d32c5c158d971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f170f85ba4374dab4ec1ed02db5280e591636f5db76135a9a0d32c5c158d971->enter($__internal_3f170f85ba4374dab4ec1ed02db5280e591636f5db76135a9a0d32c5c158d971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a3fc77ed8f73ac96b0def4228d64b581de924d55986525ee92ef937965d914c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3fc77ed8f73ac96b0def4228d64b581de924d55986525ee92ef937965d914c3->enter($__internal_a3fc77ed8f73ac96b0def4228d64b581de924d55986525ee92ef937965d914c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a3fc77ed8f73ac96b0def4228d64b581de924d55986525ee92ef937965d914c3->leave($__internal_a3fc77ed8f73ac96b0def4228d64b581de924d55986525ee92ef937965d914c3_prof);

        
        $__internal_3f170f85ba4374dab4ec1ed02db5280e591636f5db76135a9a0d32c5c158d971->leave($__internal_3f170f85ba4374dab4ec1ed02db5280e591636f5db76135a9a0d32c5c158d971_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d0926b543db170a9bd748f543f0e21cf924354fb6f8ef121025a55f9c32cff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0926b543db170a9bd748f543f0e21cf924354fb6f8ef121025a55f9c32cff9->enter($__internal_9d0926b543db170a9bd748f543f0e21cf924354fb6f8ef121025a55f9c32cff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e6457b5d82620b7551ae2f630e2580bc006df229a75d8d2b7b9c490c8ac9769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6457b5d82620b7551ae2f630e2580bc006df229a75d8d2b7b9c490c8ac9769->enter($__internal_2e6457b5d82620b7551ae2f630e2580bc006df229a75d8d2b7b9c490c8ac9769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2e6457b5d82620b7551ae2f630e2580bc006df229a75d8d2b7b9c490c8ac9769->leave($__internal_2e6457b5d82620b7551ae2f630e2580bc006df229a75d8d2b7b9c490c8ac9769_prof);

        
        $__internal_9d0926b543db170a9bd748f543f0e21cf924354fb6f8ef121025a55f9c32cff9->leave($__internal_9d0926b543db170a9bd748f543f0e21cf924354fb6f8ef121025a55f9c32cff9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
