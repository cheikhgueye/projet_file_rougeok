<?php

/* :paiement:edit.html.twig */
class __TwigTemplate_c778debc2674400e3bda863110e2d9c932b62e3bcca85bffe8d0261865f43774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":paiement:edit.html.twig", 1);
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
        $__internal_94bccd75bd33026ede69d98755a6892301c08c42768e459bf24f720fbfe23e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bccd75bd33026ede69d98755a6892301c08c42768e459bf24f720fbfe23e36->enter($__internal_94bccd75bd33026ede69d98755a6892301c08c42768e459bf24f720fbfe23e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:edit.html.twig"));

        $__internal_4d2af38bdab4bfee2c1b8fead959fd36a2a8b7413a270c13385c8f74a1a5b592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2af38bdab4bfee2c1b8fead959fd36a2a8b7413a270c13385c8f74a1a5b592->enter($__internal_4d2af38bdab4bfee2c1b8fead959fd36a2a8b7413a270c13385c8f74a1a5b592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94bccd75bd33026ede69d98755a6892301c08c42768e459bf24f720fbfe23e36->leave($__internal_94bccd75bd33026ede69d98755a6892301c08c42768e459bf24f720fbfe23e36_prof);

        
        $__internal_4d2af38bdab4bfee2c1b8fead959fd36a2a8b7413a270c13385c8f74a1a5b592->leave($__internal_4d2af38bdab4bfee2c1b8fead959fd36a2a8b7413a270c13385c8f74a1a5b592_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d4bc6f70c2e8c7149ecb40de11a17bbad250d5d002cfb7fb0d1801d928c77ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4bc6f70c2e8c7149ecb40de11a17bbad250d5d002cfb7fb0d1801d928c77ca->enter($__internal_0d4bc6f70c2e8c7149ecb40de11a17bbad250d5d002cfb7fb0d1801d928c77ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_473da2196bc6e98fc3dcb4449a709fcaa15a415227d98e04520e7717832fcca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473da2196bc6e98fc3dcb4449a709fcaa15a415227d98e04520e7717832fcca6->enter($__internal_473da2196bc6e98fc3dcb4449a709fcaa15a415227d98e04520e7717832fcca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Paiement edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_index");
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
        
        $__internal_473da2196bc6e98fc3dcb4449a709fcaa15a415227d98e04520e7717832fcca6->leave($__internal_473da2196bc6e98fc3dcb4449a709fcaa15a415227d98e04520e7717832fcca6_prof);

        
        $__internal_0d4bc6f70c2e8c7149ecb40de11a17bbad250d5d002cfb7fb0d1801d928c77ca->leave($__internal_0d4bc6f70c2e8c7149ecb40de11a17bbad250d5d002cfb7fb0d1801d928c77ca_prof);

    }

    public function getTemplateName()
    {
        return ":paiement:edit.html.twig";
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
    <h1>Paiement edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('paiement_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":paiement:edit.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/paiement/edit.html.twig");
    }
}
