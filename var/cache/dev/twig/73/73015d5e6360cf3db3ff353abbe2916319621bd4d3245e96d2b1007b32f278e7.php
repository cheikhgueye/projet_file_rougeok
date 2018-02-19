<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_38691ed99025618abe58eadf5a88f2e3a54947717ce9fa299a4b50c9ed2e3fa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_e42cd4726550e56f9847421f69b0096a8f449bfd161c014491a3e39f47170062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42cd4726550e56f9847421f69b0096a8f449bfd161c014491a3e39f47170062->enter($__internal_e42cd4726550e56f9847421f69b0096a8f449bfd161c014491a3e39f47170062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1f193771b8515bd4957ca367a9559045e7510467d66349d773f4302d13c6dafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f193771b8515bd4957ca367a9559045e7510467d66349d773f4302d13c6dafd->enter($__internal_1f193771b8515bd4957ca367a9559045e7510467d66349d773f4302d13c6dafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e42cd4726550e56f9847421f69b0096a8f449bfd161c014491a3e39f47170062->leave($__internal_e42cd4726550e56f9847421f69b0096a8f449bfd161c014491a3e39f47170062_prof);

        
        $__internal_1f193771b8515bd4957ca367a9559045e7510467d66349d773f4302d13c6dafd->leave($__internal_1f193771b8515bd4957ca367a9559045e7510467d66349d773f4302d13c6dafd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94e67f35527de4bdfba9bbb0e14dca61927c76e0b01c231113de1afe16244e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e67f35527de4bdfba9bbb0e14dca61927c76e0b01c231113de1afe16244e11->enter($__internal_94e67f35527de4bdfba9bbb0e14dca61927c76e0b01c231113de1afe16244e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_172949d86c72ce442a629b0b71dcfdb9728e9de9c67d94c37eac640a3d992f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172949d86c72ce442a629b0b71dcfdb9728e9de9c67d94c37eac640a3d992f9b->enter($__internal_172949d86c72ce442a629b0b71dcfdb9728e9de9c67d94c37eac640a3d992f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_172949d86c72ce442a629b0b71dcfdb9728e9de9c67d94c37eac640a3d992f9b->leave($__internal_172949d86c72ce442a629b0b71dcfdb9728e9de9c67d94c37eac640a3d992f9b_prof);

        
        $__internal_94e67f35527de4bdfba9bbb0e14dca61927c76e0b01c231113de1afe16244e11->leave($__internal_94e67f35527de4bdfba9bbb0e14dca61927c76e0b01c231113de1afe16244e11_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b577d1ca4aea6dd9ef5b44f969f3d67bb5b472bcbc81d8bac728330e186d7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b577d1ca4aea6dd9ef5b44f969f3d67bb5b472bcbc81d8bac728330e186d7ca->enter($__internal_8b577d1ca4aea6dd9ef5b44f969f3d67bb5b472bcbc81d8bac728330e186d7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3621d0a78f291919b0eacaf3f62a9011415f46f5b0b19a818f3e20a96faa3410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3621d0a78f291919b0eacaf3f62a9011415f46f5b0b19a818f3e20a96faa3410->enter($__internal_3621d0a78f291919b0eacaf3f62a9011415f46f5b0b19a818f3e20a96faa3410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3621d0a78f291919b0eacaf3f62a9011415f46f5b0b19a818f3e20a96faa3410->leave($__internal_3621d0a78f291919b0eacaf3f62a9011415f46f5b0b19a818f3e20a96faa3410_prof);

        
        $__internal_8b577d1ca4aea6dd9ef5b44f969f3d67bb5b472bcbc81d8bac728330e186d7ca->leave($__internal_8b577d1ca4aea6dd9ef5b44f969f3d67bb5b472bcbc81d8bac728330e186d7ca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
