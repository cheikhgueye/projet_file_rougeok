<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8b40b482cae1edbeba3fecef412beff93282c784c6300621d3578d75e0441adc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e579f98aa67aac47e8bc4823f62a09d9b8d3747fe860320e04da861d461d7326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e579f98aa67aac47e8bc4823f62a09d9b8d3747fe860320e04da861d461d7326->enter($__internal_e579f98aa67aac47e8bc4823f62a09d9b8d3747fe860320e04da861d461d7326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_9ade2bb3d727463cbdb4591b6ef81eb837935037dd573eb96c2ef9271bb32542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ade2bb3d727463cbdb4591b6ef81eb837935037dd573eb96c2ef9271bb32542->enter($__internal_9ade2bb3d727463cbdb4591b6ef81eb837935037dd573eb96c2ef9271bb32542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e579f98aa67aac47e8bc4823f62a09d9b8d3747fe860320e04da861d461d7326->leave($__internal_e579f98aa67aac47e8bc4823f62a09d9b8d3747fe860320e04da861d461d7326_prof);

        
        $__internal_9ade2bb3d727463cbdb4591b6ef81eb837935037dd573eb96c2ef9271bb32542->leave($__internal_9ade2bb3d727463cbdb4591b6ef81eb837935037dd573eb96c2ef9271bb32542_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2356ecd9440eb29aebae7147d5c01e6821ab46b93c38616e3b76ec9b4ee123f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2356ecd9440eb29aebae7147d5c01e6821ab46b93c38616e3b76ec9b4ee123f2->enter($__internal_2356ecd9440eb29aebae7147d5c01e6821ab46b93c38616e3b76ec9b4ee123f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62dd53dc718a258200090a351dd60b2e07c51a95db6da09edd9bca5080e34106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62dd53dc718a258200090a351dd60b2e07c51a95db6da09edd9bca5080e34106->enter($__internal_62dd53dc718a258200090a351dd60b2e07c51a95db6da09edd9bca5080e34106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_62dd53dc718a258200090a351dd60b2e07c51a95db6da09edd9bca5080e34106->leave($__internal_62dd53dc718a258200090a351dd60b2e07c51a95db6da09edd9bca5080e34106_prof);

        
        $__internal_2356ecd9440eb29aebae7147d5c01e6821ab46b93c38616e3b76ec9b4ee123f2->leave($__internal_2356ecd9440eb29aebae7147d5c01e6821ab46b93c38616e3b76ec9b4ee123f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
