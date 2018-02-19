<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_98c19c74cfe1328e99820d65fb28302e7eed1d4ecabd28909832823c59e0a4e0 extends Twig_Template
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
        $__internal_8100634259126d18ace7adbea25fbc2aa0e20c1d9b5ae057687edeb6593ee90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8100634259126d18ace7adbea25fbc2aa0e20c1d9b5ae057687edeb6593ee90e->enter($__internal_8100634259126d18ace7adbea25fbc2aa0e20c1d9b5ae057687edeb6593ee90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e2fa39af22318a9ca77eb82219f74f6412fdf679c4fc203fa641e943e56acdad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fa39af22318a9ca77eb82219f74f6412fdf679c4fc203fa641e943e56acdad->enter($__internal_e2fa39af22318a9ca77eb82219f74f6412fdf679c4fc203fa641e943e56acdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8100634259126d18ace7adbea25fbc2aa0e20c1d9b5ae057687edeb6593ee90e->leave($__internal_8100634259126d18ace7adbea25fbc2aa0e20c1d9b5ae057687edeb6593ee90e_prof);

        
        $__internal_e2fa39af22318a9ca77eb82219f74f6412fdf679c4fc203fa641e943e56acdad->leave($__internal_e2fa39af22318a9ca77eb82219f74f6412fdf679c4fc203fa641e943e56acdad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
