<?php

/* :proprietaire:edit.html.twig */
class __TwigTemplate_af34a0031ce72032e7700849f622177c61506ef3eb90d567c6abea3de97d6774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":proprietaire:edit.html.twig", 1);
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
        $__internal_7f849117722375ce04b91b7422842d55e991ce986b7f21f2afb05026fd7b5676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f849117722375ce04b91b7422842d55e991ce986b7f21f2afb05026fd7b5676->enter($__internal_7f849117722375ce04b91b7422842d55e991ce986b7f21f2afb05026fd7b5676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:edit.html.twig"));

        $__internal_4a199442a5f0129394dd260e50bba30376d97f6cdf6bdd21ff7543c1f2883368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a199442a5f0129394dd260e50bba30376d97f6cdf6bdd21ff7543c1f2883368->enter($__internal_4a199442a5f0129394dd260e50bba30376d97f6cdf6bdd21ff7543c1f2883368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f849117722375ce04b91b7422842d55e991ce986b7f21f2afb05026fd7b5676->leave($__internal_7f849117722375ce04b91b7422842d55e991ce986b7f21f2afb05026fd7b5676_prof);

        
        $__internal_4a199442a5f0129394dd260e50bba30376d97f6cdf6bdd21ff7543c1f2883368->leave($__internal_4a199442a5f0129394dd260e50bba30376d97f6cdf6bdd21ff7543c1f2883368_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c12f78c5570227940d21d7e8fbcd6bb483bba779f70ce6a07b1b9ddd94b38f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12f78c5570227940d21d7e8fbcd6bb483bba779f70ce6a07b1b9ddd94b38f85->enter($__internal_c12f78c5570227940d21d7e8fbcd6bb483bba779f70ce6a07b1b9ddd94b38f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4657fd89405a90a78c5d452cadd9bda305447c01947b696d5ecb17c0d6d7a78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4657fd89405a90a78c5d452cadd9bda305447c01947b696d5ecb17c0d6d7a78f->enter($__internal_4657fd89405a90a78c5d452cadd9bda305447c01947b696d5ecb17c0d6d7a78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proprietaire edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_index");
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
        
        $__internal_4657fd89405a90a78c5d452cadd9bda305447c01947b696d5ecb17c0d6d7a78f->leave($__internal_4657fd89405a90a78c5d452cadd9bda305447c01947b696d5ecb17c0d6d7a78f_prof);

        
        $__internal_c12f78c5570227940d21d7e8fbcd6bb483bba779f70ce6a07b1b9ddd94b38f85->leave($__internal_c12f78c5570227940d21d7e8fbcd6bb483bba779f70ce6a07b1b9ddd94b38f85_prof);

    }

    public function getTemplateName()
    {
        return ":proprietaire:edit.html.twig";
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
    <h1>Proprietaire edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('proprietaire_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":proprietaire:edit.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/proprietaire/edit.html.twig");
    }
}
