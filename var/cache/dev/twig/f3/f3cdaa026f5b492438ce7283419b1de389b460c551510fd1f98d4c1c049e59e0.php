<?php

/* :image:new.html.twig */
class __TwigTemplate_47c05fce2928dd7d64a526f26f5bb80ead54437e82dc95eb0379814daf4e0ce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":image:new.html.twig", 1);
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
        $__internal_410a054a397c339dddc9633eb699fd1c8f2b033f7cf966988b11a0d291a22e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410a054a397c339dddc9633eb699fd1c8f2b033f7cf966988b11a0d291a22e4e->enter($__internal_410a054a397c339dddc9633eb699fd1c8f2b033f7cf966988b11a0d291a22e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:new.html.twig"));

        $__internal_43874c21bfcdbe57c038030b4c73238db99c87da7d27cee9ce7796fe4b391676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43874c21bfcdbe57c038030b4c73238db99c87da7d27cee9ce7796fe4b391676->enter($__internal_43874c21bfcdbe57c038030b4c73238db99c87da7d27cee9ce7796fe4b391676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_410a054a397c339dddc9633eb699fd1c8f2b033f7cf966988b11a0d291a22e4e->leave($__internal_410a054a397c339dddc9633eb699fd1c8f2b033f7cf966988b11a0d291a22e4e_prof);

        
        $__internal_43874c21bfcdbe57c038030b4c73238db99c87da7d27cee9ce7796fe4b391676->leave($__internal_43874c21bfcdbe57c038030b4c73238db99c87da7d27cee9ce7796fe4b391676_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d15ff5bcaea29cb447eaa74225694031e46d2f5254d0585142407ae2152ee4b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15ff5bcaea29cb447eaa74225694031e46d2f5254d0585142407ae2152ee4b3->enter($__internal_d15ff5bcaea29cb447eaa74225694031e46d2f5254d0585142407ae2152ee4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fad069bd1dde58f92258fbbddf9ec5a65138f8ec2ae45313097c4c93531f46b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad069bd1dde58f92258fbbddf9ec5a65138f8ec2ae45313097c4c93531f46b3->enter($__internal_fad069bd1dde58f92258fbbddf9ec5a65138f8ec2ae45313097c4c93531f46b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Image creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_fad069bd1dde58f92258fbbddf9ec5a65138f8ec2ae45313097c4c93531f46b3->leave($__internal_fad069bd1dde58f92258fbbddf9ec5a65138f8ec2ae45313097c4c93531f46b3_prof);

        
        $__internal_d15ff5bcaea29cb447eaa74225694031e46d2f5254d0585142407ae2152ee4b3->leave($__internal_d15ff5bcaea29cb447eaa74225694031e46d2f5254d0585142407ae2152ee4b3_prof);

    }

    public function getTemplateName()
    {
        return ":image:new.html.twig";
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
    <h1>Image creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('image_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":image:new.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/image/new.html.twig");
    }
}
