<?php

/* :client:edit.html.twig */
class __TwigTemplate_5ebb8f95e21262ecfc0e1013d0645bdf9cfbf738404d1f699152f27597134af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:edit.html.twig", 1);
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
        $__internal_560617e2e65106055fa863927796ba0aa0d64e1ebfd952edb5a2962739dafb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560617e2e65106055fa863927796ba0aa0d64e1ebfd952edb5a2962739dafb63->enter($__internal_560617e2e65106055fa863927796ba0aa0d64e1ebfd952edb5a2962739dafb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $__internal_1bc83d942b4ec6ebdb561018b66fe3673399b2f87fb3d020f922809dc18e6f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc83d942b4ec6ebdb561018b66fe3673399b2f87fb3d020f922809dc18e6f87->enter($__internal_1bc83d942b4ec6ebdb561018b66fe3673399b2f87fb3d020f922809dc18e6f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_560617e2e65106055fa863927796ba0aa0d64e1ebfd952edb5a2962739dafb63->leave($__internal_560617e2e65106055fa863927796ba0aa0d64e1ebfd952edb5a2962739dafb63_prof);

        
        $__internal_1bc83d942b4ec6ebdb561018b66fe3673399b2f87fb3d020f922809dc18e6f87->leave($__internal_1bc83d942b4ec6ebdb561018b66fe3673399b2f87fb3d020f922809dc18e6f87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a045b4aa7dabfbf44391cf8708495241a6dadc12d45003b14a511f348c313e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a045b4aa7dabfbf44391cf8708495241a6dadc12d45003b14a511f348c313e8->enter($__internal_0a045b4aa7dabfbf44391cf8708495241a6dadc12d45003b14a511f348c313e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8540f3980e32c187d8b71a73217e20057b4a415789b3de9d00a54c2dc54d212c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8540f3980e32c187d8b71a73217e20057b4a415789b3de9d00a54c2dc54d212c->enter($__internal_8540f3980e32c187d8b71a73217e20057b4a415789b3de9d00a54c2dc54d212c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
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
        
        $__internal_8540f3980e32c187d8b71a73217e20057b4a415789b3de9d00a54c2dc54d212c->leave($__internal_8540f3980e32c187d8b71a73217e20057b4a415789b3de9d00a54c2dc54d212c_prof);

        
        $__internal_0a045b4aa7dabfbf44391cf8708495241a6dadc12d45003b14a511f348c313e8->leave($__internal_0a045b4aa7dabfbf44391cf8708495241a6dadc12d45003b14a511f348c313e8_prof);

    }

    public function getTemplateName()
    {
        return ":client:edit.html.twig";
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
    <h1>Client edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('client_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":client:edit.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/client/edit.html.twig");
    }
}
