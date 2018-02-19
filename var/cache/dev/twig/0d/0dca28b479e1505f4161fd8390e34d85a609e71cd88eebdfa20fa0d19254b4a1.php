<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d07c65a00382ade961e6b213f45346384910097076d531743ace2478219ef0de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0e593e9c179cdb8c87ffd370e15a5fb99b9fb0a8a6384fe2ba40e8d11477f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e593e9c179cdb8c87ffd370e15a5fb99b9fb0a8a6384fe2ba40e8d11477f9e->enter($__internal_c0e593e9c179cdb8c87ffd370e15a5fb99b9fb0a8a6384fe2ba40e8d11477f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_28925f6bd7b694900b3d125538405718fe418342f394907cf349a8df6accdec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28925f6bd7b694900b3d125538405718fe418342f394907cf349a8df6accdec6->enter($__internal_28925f6bd7b694900b3d125538405718fe418342f394907cf349a8df6accdec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c0e593e9c179cdb8c87ffd370e15a5fb99b9fb0a8a6384fe2ba40e8d11477f9e->leave($__internal_c0e593e9c179cdb8c87ffd370e15a5fb99b9fb0a8a6384fe2ba40e8d11477f9e_prof);

        
        $__internal_28925f6bd7b694900b3d125538405718fe418342f394907cf349a8df6accdec6->leave($__internal_28925f6bd7b694900b3d125538405718fe418342f394907cf349a8df6accdec6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
