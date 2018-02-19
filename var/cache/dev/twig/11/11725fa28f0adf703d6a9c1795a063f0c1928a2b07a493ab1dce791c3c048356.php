<?php

/* :bien:new.html.twig */
class __TwigTemplate_30a4cd8ef45f1cb04f345933dea2174c160282381ccb4c502ce6f7dd4cb46505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":bien:new.html.twig", 1);
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
        $__internal_99bce0e34fde27d10e2de3d79733da317d2372ee5e054331ffab87c8cae92e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99bce0e34fde27d10e2de3d79733da317d2372ee5e054331ffab87c8cae92e27->enter($__internal_99bce0e34fde27d10e2de3d79733da317d2372ee5e054331ffab87c8cae92e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:new.html.twig"));

        $__internal_95b930ce86e11283236848925e38ac4c26220034a94083be7e772bb355014b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b930ce86e11283236848925e38ac4c26220034a94083be7e772bb355014b9c->enter($__internal_95b930ce86e11283236848925e38ac4c26220034a94083be7e772bb355014b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99bce0e34fde27d10e2de3d79733da317d2372ee5e054331ffab87c8cae92e27->leave($__internal_99bce0e34fde27d10e2de3d79733da317d2372ee5e054331ffab87c8cae92e27_prof);

        
        $__internal_95b930ce86e11283236848925e38ac4c26220034a94083be7e772bb355014b9c->leave($__internal_95b930ce86e11283236848925e38ac4c26220034a94083be7e772bb355014b9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a94209859944a2e24d3d9d0605b8566ad7c3ea78a6d70248bc7329f8aa9d4594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a94209859944a2e24d3d9d0605b8566ad7c3ea78a6d70248bc7329f8aa9d4594->enter($__internal_a94209859944a2e24d3d9d0605b8566ad7c3ea78a6d70248bc7329f8aa9d4594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ef8cef4a8de0db2258ae16de4b331fedac8f161ca254b6d9ef32d6e3d876d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef8cef4a8de0db2258ae16de4b331fedac8f161ca254b6d9ef32d6e3d876d40->enter($__internal_2ef8cef4a8de0db2258ae16de4b331fedac8f161ca254b6d9ef32d6e3d876d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bien creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2ef8cef4a8de0db2258ae16de4b331fedac8f161ca254b6d9ef32d6e3d876d40->leave($__internal_2ef8cef4a8de0db2258ae16de4b331fedac8f161ca254b6d9ef32d6e3d876d40_prof);

        
        $__internal_a94209859944a2e24d3d9d0605b8566ad7c3ea78a6d70248bc7329f8aa9d4594->leave($__internal_a94209859944a2e24d3d9d0605b8566ad7c3ea78a6d70248bc7329f8aa9d4594_prof);

    }

    public function getTemplateName()
    {
        return ":bien:new.html.twig";
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
    <h1>Bien creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('bien_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":bien:new.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/bien/new.html.twig");
    }
}
