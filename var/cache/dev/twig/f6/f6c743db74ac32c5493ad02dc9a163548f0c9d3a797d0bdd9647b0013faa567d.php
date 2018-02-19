<?php

/* :image:edit.html.twig */
class __TwigTemplate_6313d166c252e95f93e5d4aa65a14e250da65131a2559b141e4194c7c0327b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":image:edit.html.twig", 1);
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
        $__internal_8996b152bfbe88363e0921610ed8b20cabe9fdabc0d55d5e5f939d440816ffdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8996b152bfbe88363e0921610ed8b20cabe9fdabc0d55d5e5f939d440816ffdd->enter($__internal_8996b152bfbe88363e0921610ed8b20cabe9fdabc0d55d5e5f939d440816ffdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:edit.html.twig"));

        $__internal_8a3b4f6c4b81a49603a50a0f730d1896c2fddbec1c02e1880e67992c9a29659c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3b4f6c4b81a49603a50a0f730d1896c2fddbec1c02e1880e67992c9a29659c->enter($__internal_8a3b4f6c4b81a49603a50a0f730d1896c2fddbec1c02e1880e67992c9a29659c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8996b152bfbe88363e0921610ed8b20cabe9fdabc0d55d5e5f939d440816ffdd->leave($__internal_8996b152bfbe88363e0921610ed8b20cabe9fdabc0d55d5e5f939d440816ffdd_prof);

        
        $__internal_8a3b4f6c4b81a49603a50a0f730d1896c2fddbec1c02e1880e67992c9a29659c->leave($__internal_8a3b4f6c4b81a49603a50a0f730d1896c2fddbec1c02e1880e67992c9a29659c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f91c4cc1f221776db674467931b136aabb6b5729fc425a1c717d901dc9d3a55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91c4cc1f221776db674467931b136aabb6b5729fc425a1c717d901dc9d3a55f->enter($__internal_f91c4cc1f221776db674467931b136aabb6b5729fc425a1c717d901dc9d3a55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e0b6ad141858c5a8a8a3362135462c7251b229ff694febd495e73afa83b8b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0b6ad141858c5a8a8a3362135462c7251b229ff694febd495e73afa83b8b7f->enter($__internal_5e0b6ad141858c5a8a8a3362135462c7251b229ff694febd495e73afa83b8b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Image edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_index");
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
        
        $__internal_5e0b6ad141858c5a8a8a3362135462c7251b229ff694febd495e73afa83b8b7f->leave($__internal_5e0b6ad141858c5a8a8a3362135462c7251b229ff694febd495e73afa83b8b7f_prof);

        
        $__internal_f91c4cc1f221776db674467931b136aabb6b5729fc425a1c717d901dc9d3a55f->leave($__internal_f91c4cc1f221776db674467931b136aabb6b5729fc425a1c717d901dc9d3a55f_prof);

    }

    public function getTemplateName()
    {
        return ":image:edit.html.twig";
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
    <h1>Image edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('image_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":image:edit.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/image/edit.html.twig");
    }
}
