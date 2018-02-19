<?php

/* KEURGUIimmoBundle:front:formLog.html.twig */
class __TwigTemplate_db9b406eb6bda35dc99a00e01524da06e461bf11ec5206e1607b4ed418d6447c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layout.html.twig", "KEURGUIimmoBundle:front:formLog.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d302fdd4e9cac9cb7a74b189d4b76f4f4b50a2beb10fe4a1da694a70ef9d35e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d302fdd4e9cac9cb7a74b189d4b76f4f4b50a2beb10fe4a1da694a70ef9d35e9->enter($__internal_d302fdd4e9cac9cb7a74b189d4b76f4f4b50a2beb10fe4a1da694a70ef9d35e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:formLog.html.twig"));

        $__internal_ab41c8e65f60fc34457c9fb06338be8eed1e84262a5bfd20e481e939368275e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab41c8e65f60fc34457c9fb06338be8eed1e84262a5bfd20e481e939368275e9->enter($__internal_ab41c8e65f60fc34457c9fb06338be8eed1e84262a5bfd20e481e939368275e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:formLog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d302fdd4e9cac9cb7a74b189d4b76f4f4b50a2beb10fe4a1da694a70ef9d35e9->leave($__internal_d302fdd4e9cac9cb7a74b189d4b76f4f4b50a2beb10fe4a1da694a70ef9d35e9_prof);

        
        $__internal_ab41c8e65f60fc34457c9fb06338be8eed1e84262a5bfd20e481e939368275e9->leave($__internal_ab41c8e65f60fc34457c9fb06338be8eed1e84262a5bfd20e481e939368275e9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_67e483f0b638233d94af6a98bd67e7f1ce2ba9fe1215db92afd7549fa4d705cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e483f0b638233d94af6a98bd67e7f1ce2ba9fe1215db92afd7549fa4d705cf->enter($__internal_67e483f0b638233d94af6a98bd67e7f1ce2ba9fe1215db92afd7549fa4d705cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01d70beccce5a849970b7cb2f1ec18d8ac86af9ad5bb9f614011d07a8565b1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d70beccce5a849970b7cb2f1ec18d8ac86af9ad5bb9f614011d07a8565b1cc->enter($__internal_01d70beccce5a849970b7cb2f1ec18d8ac86af9ad5bb9f614011d07a8565b1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "



";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form');
        echo "


";
        
        $__internal_01d70beccce5a849970b7cb2f1ec18d8ac86af9ad5bb9f614011d07a8565b1cc->leave($__internal_01d70beccce5a849970b7cb2f1ec18d8ac86af9ad5bb9f614011d07a8565b1cc_prof);

        
        $__internal_67e483f0b638233d94af6a98bd67e7f1ce2ba9fe1215db92afd7549fa4d705cf->leave($__internal_67e483f0b638233d94af6a98bd67e7f1ce2ba9fe1215db92afd7549fa4d705cf_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_e5e96198d0c78d3ad3f51926d55bc4c6589c69f55dc3b71294f534b267a6002b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e96198d0c78d3ad3f51926d55bc4c6589c69f55dc3b71294f534b267a6002b->enter($__internal_e5e96198d0c78d3ad3f51926d55bc4c6589c69f55dc3b71294f534b267a6002b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9e7952c4b8209bed155e0617d90caa7a54b61181d65e9b88aa305e776233fafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7952c4b8209bed155e0617d90caa7a54b61181d65e9b88aa305e776233fafb->enter($__internal_9e7952c4b8209bed155e0617d90caa7a54b61181d65e9b88aa305e776233fafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_9e7952c4b8209bed155e0617d90caa7a54b61181d65e9b88aa305e776233fafb->leave($__internal_9e7952c4b8209bed155e0617d90caa7a54b61181d65e9b88aa305e776233fafb_prof);

        
        $__internal_e5e96198d0c78d3ad3f51926d55bc4c6589c69f55dc3b71294f534b267a6002b->leave($__internal_e5e96198d0c78d3ad3f51926d55bc4c6589c69f55dc3b71294f534b267a6002b_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:formLog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 6,  72 => 5,  58 => 12,  52 => 8,  50 => 5,  41 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layout.html.twig\" %}


{% block body %}
{% block header %}
{{parent()}}
{% endblock %}




{{form(form)}}


{% endblock %}", "KEURGUIimmoBundle:front:formLog.html.twig", "/var/www/html/projet_file_rougeok/src/KEURGUI/immoBundle/Resources/views/front/formLog.html.twig");
    }
}
