<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e0d8107c2ad70e0966792326bd4387c41c793e2cd6ee4540f14e11f3320b83d8 extends Twig_Template
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
        $__internal_caa8083048c598eb29f80387e743e92dc52a6706510d466fa788677e739ef622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa8083048c598eb29f80387e743e92dc52a6706510d466fa788677e739ef622->enter($__internal_caa8083048c598eb29f80387e743e92dc52a6706510d466fa788677e739ef622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b419ff5eba470449af39b7f8381e9a66bebedd488e1e46f3d495b3d1deef4711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b419ff5eba470449af39b7f8381e9a66bebedd488e1e46f3d495b3d1deef4711->enter($__internal_b419ff5eba470449af39b7f8381e9a66bebedd488e1e46f3d495b3d1deef4711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_caa8083048c598eb29f80387e743e92dc52a6706510d466fa788677e739ef622->leave($__internal_caa8083048c598eb29f80387e743e92dc52a6706510d466fa788677e739ef622_prof);

        
        $__internal_b419ff5eba470449af39b7f8381e9a66bebedd488e1e46f3d495b3d1deef4711->leave($__internal_b419ff5eba470449af39b7f8381e9a66bebedd488e1e46f3d495b3d1deef4711_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
