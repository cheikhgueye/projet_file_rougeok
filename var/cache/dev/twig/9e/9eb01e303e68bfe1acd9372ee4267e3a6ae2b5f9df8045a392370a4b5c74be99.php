<?php

/* :contrat:new.html.twig */
class __TwigTemplate_5de4d52750b6118301d1186fd17493edbf32b96beb1ece1ca5b524746f01432f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contrat:new.html.twig", 1);
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
        $__internal_fc977bde7f7724ad93fe34a88baee68ad8636e3be4738edac99dad62058f8154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc977bde7f7724ad93fe34a88baee68ad8636e3be4738edac99dad62058f8154->enter($__internal_fc977bde7f7724ad93fe34a88baee68ad8636e3be4738edac99dad62058f8154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:new.html.twig"));

        $__internal_2be849840ab93e8068559f3765482a06759bbda651c4c8b4efe8a233ee337ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be849840ab93e8068559f3765482a06759bbda651c4c8b4efe8a233ee337ae2->enter($__internal_2be849840ab93e8068559f3765482a06759bbda651c4c8b4efe8a233ee337ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc977bde7f7724ad93fe34a88baee68ad8636e3be4738edac99dad62058f8154->leave($__internal_fc977bde7f7724ad93fe34a88baee68ad8636e3be4738edac99dad62058f8154_prof);

        
        $__internal_2be849840ab93e8068559f3765482a06759bbda651c4c8b4efe8a233ee337ae2->leave($__internal_2be849840ab93e8068559f3765482a06759bbda651c4c8b4efe8a233ee337ae2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eec09d18ff7bb40e4edc3e4c0a9fcaa04d56cbaa26a2d32f6c7442a45c34c00a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec09d18ff7bb40e4edc3e4c0a9fcaa04d56cbaa26a2d32f6c7442a45c34c00a->enter($__internal_eec09d18ff7bb40e4edc3e4c0a9fcaa04d56cbaa26a2d32f6c7442a45c34c00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22ce3114b9550bde8832e0c5d2b90860ff8a389271790afc47d769b65664520f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ce3114b9550bde8832e0c5d2b90860ff8a389271790afc47d769b65664520f->enter($__internal_22ce3114b9550bde8832e0c5d2b90860ff8a389271790afc47d769b65664520f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contrat creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_22ce3114b9550bde8832e0c5d2b90860ff8a389271790afc47d769b65664520f->leave($__internal_22ce3114b9550bde8832e0c5d2b90860ff8a389271790afc47d769b65664520f_prof);

        
        $__internal_eec09d18ff7bb40e4edc3e4c0a9fcaa04d56cbaa26a2d32f6c7442a45c34c00a->leave($__internal_eec09d18ff7bb40e4edc3e4c0a9fcaa04d56cbaa26a2d32f6c7442a45c34c00a_prof);

    }

    public function getTemplateName()
    {
        return ":contrat:new.html.twig";
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
    <h1>Contrat creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('contrat_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":contrat:new.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/contrat/new.html.twig");
    }
}
