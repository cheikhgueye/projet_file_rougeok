<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_4e36198a1a3813387a6497f4b6de36566d4937b092187d713de8ed88ddfcc5e6 extends Twig_Template
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
        $__internal_13b57feeddbe80ba71d94bc41e1aa5202d221b46be61a07065a3680b59e550ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b57feeddbe80ba71d94bc41e1aa5202d221b46be61a07065a3680b59e550ae->enter($__internal_13b57feeddbe80ba71d94bc41e1aa5202d221b46be61a07065a3680b59e550ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_b09a847c572395351f8beb34077eb5147f2e663fffe0ea63d632bbb32e1ffced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09a847c572395351f8beb34077eb5147f2e663fffe0ea63d632bbb32e1ffced->enter($__internal_b09a847c572395351f8beb34077eb5147f2e663fffe0ea63d632bbb32e1ffced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_13b57feeddbe80ba71d94bc41e1aa5202d221b46be61a07065a3680b59e550ae->leave($__internal_13b57feeddbe80ba71d94bc41e1aa5202d221b46be61a07065a3680b59e550ae_prof);

        
        $__internal_b09a847c572395351f8beb34077eb5147f2e663fffe0ea63d632bbb32e1ffced->leave($__internal_b09a847c572395351f8beb34077eb5147f2e663fffe0ea63d632bbb32e1ffced_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
