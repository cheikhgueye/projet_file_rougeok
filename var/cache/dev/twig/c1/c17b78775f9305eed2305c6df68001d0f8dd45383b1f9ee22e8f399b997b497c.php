<?php

/* :bien:edit.html.twig */
class __TwigTemplate_efdc87f67d2f87a377647786d027b2a0323ea3950226bab635d674ed021eac23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":bien:edit.html.twig", 1);
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
        $__internal_c4e6d49b2ce1d1dcb1e15162614672daa0936c073b4dd19244cd4295d21fa3e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e6d49b2ce1d1dcb1e15162614672daa0936c073b4dd19244cd4295d21fa3e0->enter($__internal_c4e6d49b2ce1d1dcb1e15162614672daa0936c073b4dd19244cd4295d21fa3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:edit.html.twig"));

        $__internal_03070df0ac1ee5f73d3675285eb0ca2f10ba6356891f5e31be555ba9f3a7409c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03070df0ac1ee5f73d3675285eb0ca2f10ba6356891f5e31be555ba9f3a7409c->enter($__internal_03070df0ac1ee5f73d3675285eb0ca2f10ba6356891f5e31be555ba9f3a7409c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4e6d49b2ce1d1dcb1e15162614672daa0936c073b4dd19244cd4295d21fa3e0->leave($__internal_c4e6d49b2ce1d1dcb1e15162614672daa0936c073b4dd19244cd4295d21fa3e0_prof);

        
        $__internal_03070df0ac1ee5f73d3675285eb0ca2f10ba6356891f5e31be555ba9f3a7409c->leave($__internal_03070df0ac1ee5f73d3675285eb0ca2f10ba6356891f5e31be555ba9f3a7409c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_224d91105abd6e094038d4a85289403fbc7c21c0c888696179068d4455e1412e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224d91105abd6e094038d4a85289403fbc7c21c0c888696179068d4455e1412e->enter($__internal_224d91105abd6e094038d4a85289403fbc7c21c0c888696179068d4455e1412e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49c5c0ec8a2a731d1d51f58af3c467d17f9a9e63870df2609fd7ba2a663d9727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c5c0ec8a2a731d1d51f58af3c467d17f9a9e63870df2609fd7ba2a663d9727->enter($__internal_49c5c0ec8a2a731d1d51f58af3c467d17f9a9e63870df2609fd7ba2a663d9727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bien edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_49c5c0ec8a2a731d1d51f58af3c467d17f9a9e63870df2609fd7ba2a663d9727->leave($__internal_49c5c0ec8a2a731d1d51f58af3c467d17f9a9e63870df2609fd7ba2a663d9727_prof);

        
        $__internal_224d91105abd6e094038d4a85289403fbc7c21c0c888696179068d4455e1412e->leave($__internal_224d91105abd6e094038d4a85289403fbc7c21c0c888696179068d4455e1412e_prof);

    }

    public function getTemplateName()
    {
        return ":bien:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Bien edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('bien_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":bien:edit.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/bien/edit.html.twig");
    }
}
