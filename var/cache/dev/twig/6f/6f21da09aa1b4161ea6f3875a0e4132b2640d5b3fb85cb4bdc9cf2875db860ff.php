<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_54ee613a4399005731d0b58ab5e13d9c986d50ac80f5c0b00366637b2edec0d7 extends Twig_Template
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
        $__internal_f33b743d234750fc5865930c9421372af30e23744dd6495b016965647eb784cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33b743d234750fc5865930c9421372af30e23744dd6495b016965647eb784cb->enter($__internal_f33b743d234750fc5865930c9421372af30e23744dd6495b016965647eb784cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_8eff5ae1d5cbee1818d20256622c580af8d44fbfe733de4f586dde63b93534bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eff5ae1d5cbee1818d20256622c580af8d44fbfe733de4f586dde63b93534bf->enter($__internal_8eff5ae1d5cbee1818d20256622c580af8d44fbfe733de4f586dde63b93534bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f33b743d234750fc5865930c9421372af30e23744dd6495b016965647eb784cb->leave($__internal_f33b743d234750fc5865930c9421372af30e23744dd6495b016965647eb784cb_prof);

        
        $__internal_8eff5ae1d5cbee1818d20256622c580af8d44fbfe733de4f586dde63b93534bf->leave($__internal_8eff5ae1d5cbee1818d20256622c580af8d44fbfe733de4f586dde63b93534bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
