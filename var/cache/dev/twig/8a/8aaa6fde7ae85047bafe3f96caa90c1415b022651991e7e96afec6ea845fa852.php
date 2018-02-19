<?php

/* :client:new.html.twig */
class __TwigTemplate_819cc7c5cbd50a8f852b4114ac80ac398f9af7c68e1244b423b01cbd21c2e851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e5acbf249a37931650351fbd270d0faa0f0164f34e2a193d150682ade61f022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5acbf249a37931650351fbd270d0faa0f0164f34e2a193d150682ade61f022->enter($__internal_9e5acbf249a37931650351fbd270d0faa0f0164f34e2a193d150682ade61f022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $__internal_c673285c78050d0e6a2017e7e6a95430703e383926c5581c9cc77a5d7a33b034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c673285c78050d0e6a2017e7e6a95430703e383926c5581c9cc77a5d7a33b034->enter($__internal_c673285c78050d0e6a2017e7e6a95430703e383926c5581c9cc77a5d7a33b034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e5acbf249a37931650351fbd270d0faa0f0164f34e2a193d150682ade61f022->leave($__internal_9e5acbf249a37931650351fbd270d0faa0f0164f34e2a193d150682ade61f022_prof);

        
        $__internal_c673285c78050d0e6a2017e7e6a95430703e383926c5581c9cc77a5d7a33b034->leave($__internal_c673285c78050d0e6a2017e7e6a95430703e383926c5581c9cc77a5d7a33b034_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f05f66c16f92bdc308827af72385a582788532a9f60fd4d82823bb0a18580afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05f66c16f92bdc308827af72385a582788532a9f60fd4d82823bb0a18580afb->enter($__internal_f05f66c16f92bdc308827af72385a582788532a9f60fd4d82823bb0a18580afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ac43365a92db955b91d543d6d669f68cfaacea8f425a8b8beb131a9bc0df7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac43365a92db955b91d543d6d669f68cfaacea8f425a8b8beb131a9bc0df7ca->enter($__internal_9ac43365a92db955b91d543d6d669f68cfaacea8f425a8b8beb131a9bc0df7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9ac43365a92db955b91d543d6d669f68cfaacea8f425a8b8beb131a9bc0df7ca->leave($__internal_9ac43365a92db955b91d543d6d669f68cfaacea8f425a8b8beb131a9bc0df7ca_prof);

        
        $__internal_f05f66c16f92bdc308827af72385a582788532a9f60fd4d82823bb0a18580afb->leave($__internal_f05f66c16f92bdc308827af72385a582788532a9f60fd4d82823bb0a18580afb_prof);

    }

    public function getTemplateName()
    {
        return ":client:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Client creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('client_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":client:new.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/client/new.html.twig");
    }
}
