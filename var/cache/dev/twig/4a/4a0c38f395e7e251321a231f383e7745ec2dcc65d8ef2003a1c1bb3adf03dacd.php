<?php

/* :reservation:edit.html.twig */
class __TwigTemplate_4f49f87febc8643e625ca9f37b094b842e9906937fa4a3f163a76900b420e1f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:edit.html.twig", 1);
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
        $__internal_0e20f1f0b2a5c0081d567e8b07e150f08ddfc312c99098b527da71e4380a2a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e20f1f0b2a5c0081d567e8b07e150f08ddfc312c99098b527da71e4380a2a04->enter($__internal_0e20f1f0b2a5c0081d567e8b07e150f08ddfc312c99098b527da71e4380a2a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:edit.html.twig"));

        $__internal_d017d3d5bdf7c49a9ccb35c6f728251037d069a20f3bf6b1b7a98e578219a9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d017d3d5bdf7c49a9ccb35c6f728251037d069a20f3bf6b1b7a98e578219a9ef->enter($__internal_d017d3d5bdf7c49a9ccb35c6f728251037d069a20f3bf6b1b7a98e578219a9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e20f1f0b2a5c0081d567e8b07e150f08ddfc312c99098b527da71e4380a2a04->leave($__internal_0e20f1f0b2a5c0081d567e8b07e150f08ddfc312c99098b527da71e4380a2a04_prof);

        
        $__internal_d017d3d5bdf7c49a9ccb35c6f728251037d069a20f3bf6b1b7a98e578219a9ef->leave($__internal_d017d3d5bdf7c49a9ccb35c6f728251037d069a20f3bf6b1b7a98e578219a9ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e8f3392678654db2bbda78ca845741648855d53fac9fb4c49b82aec7138c27a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8f3392678654db2bbda78ca845741648855d53fac9fb4c49b82aec7138c27a->enter($__internal_7e8f3392678654db2bbda78ca845741648855d53fac9fb4c49b82aec7138c27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5ccf4210c9b6af685019541f9690818f5fac37130625c673295a6f36ca1a456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ccf4210c9b6af685019541f9690818f5fac37130625c673295a6f36ca1a456->enter($__internal_c5ccf4210c9b6af685019541f9690818f5fac37130625c673295a6f36ca1a456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
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
        
        $__internal_c5ccf4210c9b6af685019541f9690818f5fac37130625c673295a6f36ca1a456->leave($__internal_c5ccf4210c9b6af685019541f9690818f5fac37130625c673295a6f36ca1a456_prof);

        
        $__internal_7e8f3392678654db2bbda78ca845741648855d53fac9fb4c49b82aec7138c27a->leave($__internal_7e8f3392678654db2bbda78ca845741648855d53fac9fb4c49b82aec7138c27a_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:edit.html.twig";
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
    <h1>Reservation edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":reservation:edit.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/reservation/edit.html.twig");
    }
}
