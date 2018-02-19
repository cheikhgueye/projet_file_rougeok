<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_70b5afcfc47e1d816daaea6c48c31fe39659b04298bff87affa5fe01749f4fde extends Twig_Template
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
        $__internal_eafa62766eec307dbf089872dd75f8f803394d1c7a4caff7ba045b3bc78c1b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eafa62766eec307dbf089872dd75f8f803394d1c7a4caff7ba045b3bc78c1b0d->enter($__internal_eafa62766eec307dbf089872dd75f8f803394d1c7a4caff7ba045b3bc78c1b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_831f5b0ce2731b2226d1395957770aeffbe11b02183d8869d5338d2bf75317e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831f5b0ce2731b2226d1395957770aeffbe11b02183d8869d5338d2bf75317e0->enter($__internal_831f5b0ce2731b2226d1395957770aeffbe11b02183d8869d5338d2bf75317e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_eafa62766eec307dbf089872dd75f8f803394d1c7a4caff7ba045b3bc78c1b0d->leave($__internal_eafa62766eec307dbf089872dd75f8f803394d1c7a4caff7ba045b3bc78c1b0d_prof);

        
        $__internal_831f5b0ce2731b2226d1395957770aeffbe11b02183d8869d5338d2bf75317e0->leave($__internal_831f5b0ce2731b2226d1395957770aeffbe11b02183d8869d5338d2bf75317e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
