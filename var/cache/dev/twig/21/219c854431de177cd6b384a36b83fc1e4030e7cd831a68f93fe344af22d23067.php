<?php

/* :reservation:new.html.twig */
class __TwigTemplate_c017403fd4f06906f042e365e7c794b8e9e5783358e67c313a0b3b3932c7f2f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:new.html.twig", 1);
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
        $__internal_019cc558473e66ddd42761164e1e08cdff8b3dee13c5c9eb8ce79bc086c354ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019cc558473e66ddd42761164e1e08cdff8b3dee13c5c9eb8ce79bc086c354ec->enter($__internal_019cc558473e66ddd42761164e1e08cdff8b3dee13c5c9eb8ce79bc086c354ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:new.html.twig"));

        $__internal_b60e2fdb23bc2435445d24b46c449882e262e2dfeb5a390a61e811f341fa887d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60e2fdb23bc2435445d24b46c449882e262e2dfeb5a390a61e811f341fa887d->enter($__internal_b60e2fdb23bc2435445d24b46c449882e262e2dfeb5a390a61e811f341fa887d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_019cc558473e66ddd42761164e1e08cdff8b3dee13c5c9eb8ce79bc086c354ec->leave($__internal_019cc558473e66ddd42761164e1e08cdff8b3dee13c5c9eb8ce79bc086c354ec_prof);

        
        $__internal_b60e2fdb23bc2435445d24b46c449882e262e2dfeb5a390a61e811f341fa887d->leave($__internal_b60e2fdb23bc2435445d24b46c449882e262e2dfeb5a390a61e811f341fa887d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5616da1100161606111efad2e86ad73f6b78b777d755fd095837f8ad6e5a21a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5616da1100161606111efad2e86ad73f6b78b777d755fd095837f8ad6e5a21a2->enter($__internal_5616da1100161606111efad2e86ad73f6b78b777d755fd095837f8ad6e5a21a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46378ff486e9bc7a54452b207fe1e350db71200dcba898c63bc63ae9a1f8e396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46378ff486e9bc7a54452b207fe1e350db71200dcba898c63bc63ae9a1f8e396->enter($__internal_46378ff486e9bc7a54452b207fe1e350db71200dcba898c63bc63ae9a1f8e396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_46378ff486e9bc7a54452b207fe1e350db71200dcba898c63bc63ae9a1f8e396->leave($__internal_46378ff486e9bc7a54452b207fe1e350db71200dcba898c63bc63ae9a1f8e396_prof);

        
        $__internal_5616da1100161606111efad2e86ad73f6b78b777d755fd095837f8ad6e5a21a2->leave($__internal_5616da1100161606111efad2e86ad73f6b78b777d755fd095837f8ad6e5a21a2_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:new.html.twig";
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
    <h1>Reservation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":reservation:new.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/reservation/new.html.twig");
    }
}
