<?php

/* :contrat:edit.html.twig */
class __TwigTemplate_1d1df1492bfa0485257cccae9ce8a2c393edf5f7294f3942033b9ab9dfc20053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contrat:edit.html.twig", 1);
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
        $__internal_cae37ad30ab84a32d72847f786ebc4ce661ede86bad537b23518d631f10a5768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae37ad30ab84a32d72847f786ebc4ce661ede86bad537b23518d631f10a5768->enter($__internal_cae37ad30ab84a32d72847f786ebc4ce661ede86bad537b23518d631f10a5768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:edit.html.twig"));

        $__internal_7b4c01734b651d37020214887521d06b53a3d4d265931cff25e62eae1aba649d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4c01734b651d37020214887521d06b53a3d4d265931cff25e62eae1aba649d->enter($__internal_7b4c01734b651d37020214887521d06b53a3d4d265931cff25e62eae1aba649d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cae37ad30ab84a32d72847f786ebc4ce661ede86bad537b23518d631f10a5768->leave($__internal_cae37ad30ab84a32d72847f786ebc4ce661ede86bad537b23518d631f10a5768_prof);

        
        $__internal_7b4c01734b651d37020214887521d06b53a3d4d265931cff25e62eae1aba649d->leave($__internal_7b4c01734b651d37020214887521d06b53a3d4d265931cff25e62eae1aba649d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8aeaa8879f3fbf3e7f701b98bf2e1a407d99d8f24a9fc37f43c80cfd0ea0eab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aeaa8879f3fbf3e7f701b98bf2e1a407d99d8f24a9fc37f43c80cfd0ea0eab7->enter($__internal_8aeaa8879f3fbf3e7f701b98bf2e1a407d99d8f24a9fc37f43c80cfd0ea0eab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cdf4f1db1121ae9bfe1c080ca360fd2becb502b5dfd9704295f099175b2ce65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cdf4f1db1121ae9bfe1c080ca360fd2becb502b5dfd9704295f099175b2ce65->enter($__internal_2cdf4f1db1121ae9bfe1c080ca360fd2becb502b5dfd9704295f099175b2ce65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contrat edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_index");
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
        
        $__internal_2cdf4f1db1121ae9bfe1c080ca360fd2becb502b5dfd9704295f099175b2ce65->leave($__internal_2cdf4f1db1121ae9bfe1c080ca360fd2becb502b5dfd9704295f099175b2ce65_prof);

        
        $__internal_8aeaa8879f3fbf3e7f701b98bf2e1a407d99d8f24a9fc37f43c80cfd0ea0eab7->leave($__internal_8aeaa8879f3fbf3e7f701b98bf2e1a407d99d8f24a9fc37f43c80cfd0ea0eab7_prof);

    }

    public function getTemplateName()
    {
        return ":contrat:edit.html.twig";
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
    <h1>Contrat edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('contrat_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":contrat:edit.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/contrat/edit.html.twig");
    }
}
