<?php

/* :proprietaire:new.html.twig */
class __TwigTemplate_e5bae26ae64d92c7f2a82d4b80401babaa0d46e7c87f3defd942773d6f50c6be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":proprietaire:new.html.twig", 1);
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
        $__internal_917fc4403e46d411045c450dfa40c223d9210fcdaa4415d14a71e1c1ea894386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917fc4403e46d411045c450dfa40c223d9210fcdaa4415d14a71e1c1ea894386->enter($__internal_917fc4403e46d411045c450dfa40c223d9210fcdaa4415d14a71e1c1ea894386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:new.html.twig"));

        $__internal_351a9168dc50a2d03fe30e71f9cd63c1541b073540a6fd6a18561c3b6f09f2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351a9168dc50a2d03fe30e71f9cd63c1541b073540a6fd6a18561c3b6f09f2e3->enter($__internal_351a9168dc50a2d03fe30e71f9cd63c1541b073540a6fd6a18561c3b6f09f2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_917fc4403e46d411045c450dfa40c223d9210fcdaa4415d14a71e1c1ea894386->leave($__internal_917fc4403e46d411045c450dfa40c223d9210fcdaa4415d14a71e1c1ea894386_prof);

        
        $__internal_351a9168dc50a2d03fe30e71f9cd63c1541b073540a6fd6a18561c3b6f09f2e3->leave($__internal_351a9168dc50a2d03fe30e71f9cd63c1541b073540a6fd6a18561c3b6f09f2e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73b67a97c062943b79ea289342687b2abe9a04f8306630a22dd6c6a16e907fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b67a97c062943b79ea289342687b2abe9a04f8306630a22dd6c6a16e907fc5->enter($__internal_73b67a97c062943b79ea289342687b2abe9a04f8306630a22dd6c6a16e907fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b052ed8dcc3459d4789bb3d8c5e1d3d74c57e6c1559713a69b390d5cb1b05597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b052ed8dcc3459d4789bb3d8c5e1d3d74c57e6c1559713a69b390d5cb1b05597->enter($__internal_b052ed8dcc3459d4789bb3d8c5e1d3d74c57e6c1559713a69b390d5cb1b05597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proprietaire creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b052ed8dcc3459d4789bb3d8c5e1d3d74c57e6c1559713a69b390d5cb1b05597->leave($__internal_b052ed8dcc3459d4789bb3d8c5e1d3d74c57e6c1559713a69b390d5cb1b05597_prof);

        
        $__internal_73b67a97c062943b79ea289342687b2abe9a04f8306630a22dd6c6a16e907fc5->leave($__internal_73b67a97c062943b79ea289342687b2abe9a04f8306630a22dd6c6a16e907fc5_prof);

    }

    public function getTemplateName()
    {
        return ":proprietaire:new.html.twig";
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
    <h1>Proprietaire creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('proprietaire_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":proprietaire:new.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/proprietaire/new.html.twig");
    }
}
