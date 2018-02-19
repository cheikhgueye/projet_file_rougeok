<?php

/* :paiement:new.html.twig */
class __TwigTemplate_2dccbec366cfdd05954c56bf44c41da98a524c8a9e2ea3930b8230919ea1fdd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":paiement:new.html.twig", 1);
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
        $__internal_dc98448bfa7ce09888b43430eec3fd7565c6a96d66981d1f4462e89862f3eb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc98448bfa7ce09888b43430eec3fd7565c6a96d66981d1f4462e89862f3eb3c->enter($__internal_dc98448bfa7ce09888b43430eec3fd7565c6a96d66981d1f4462e89862f3eb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:new.html.twig"));

        $__internal_c4f77fd556accd21eb9fecb69ed820c4b0a44055594f07b6f2c63baaa7ffda0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f77fd556accd21eb9fecb69ed820c4b0a44055594f07b6f2c63baaa7ffda0f->enter($__internal_c4f77fd556accd21eb9fecb69ed820c4b0a44055594f07b6f2c63baaa7ffda0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc98448bfa7ce09888b43430eec3fd7565c6a96d66981d1f4462e89862f3eb3c->leave($__internal_dc98448bfa7ce09888b43430eec3fd7565c6a96d66981d1f4462e89862f3eb3c_prof);

        
        $__internal_c4f77fd556accd21eb9fecb69ed820c4b0a44055594f07b6f2c63baaa7ffda0f->leave($__internal_c4f77fd556accd21eb9fecb69ed820c4b0a44055594f07b6f2c63baaa7ffda0f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95f6c106dfb411cbaa0842e1ca242b67f1bf3daf83cc67d6a018fb5d4f3cc011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f6c106dfb411cbaa0842e1ca242b67f1bf3daf83cc67d6a018fb5d4f3cc011->enter($__internal_95f6c106dfb411cbaa0842e1ca242b67f1bf3daf83cc67d6a018fb5d4f3cc011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5de7f7bf6d18d340e1b06a923ee121ebc79c3f9ca5205feaa9653e6b3c303e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de7f7bf6d18d340e1b06a923ee121ebc79c3f9ca5205feaa9653e6b3c303e0b->enter($__internal_5de7f7bf6d18d340e1b06a923ee121ebc79c3f9ca5205feaa9653e6b3c303e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Paiement creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5de7f7bf6d18d340e1b06a923ee121ebc79c3f9ca5205feaa9653e6b3c303e0b->leave($__internal_5de7f7bf6d18d340e1b06a923ee121ebc79c3f9ca5205feaa9653e6b3c303e0b_prof);

        
        $__internal_95f6c106dfb411cbaa0842e1ca242b67f1bf3daf83cc67d6a018fb5d4f3cc011->leave($__internal_95f6c106dfb411cbaa0842e1ca242b67f1bf3daf83cc67d6a018fb5d4f3cc011_prof);

    }

    public function getTemplateName()
    {
        return ":paiement:new.html.twig";
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
    <h1>Paiement creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('paiement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":paiement:new.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/paiement/new.html.twig");
    }
}
