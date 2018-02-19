<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b80d24367f945c492f3929a379921514abfa20ea1f934d6430283e0d0638eacb extends Twig_Template
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
        $__internal_151e5a7c8587793abee1e48b002a3e43ecc8bf790ef575b18b18d60ba7213323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151e5a7c8587793abee1e48b002a3e43ecc8bf790ef575b18b18d60ba7213323->enter($__internal_151e5a7c8587793abee1e48b002a3e43ecc8bf790ef575b18b18d60ba7213323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_1a887d6680785118a026a87db9fb15b4794fd1b2e5793d36fa7c931520f038bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a887d6680785118a026a87db9fb15b4794fd1b2e5793d36fa7c931520f038bc->enter($__internal_1a887d6680785118a026a87db9fb15b4794fd1b2e5793d36fa7c931520f038bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_151e5a7c8587793abee1e48b002a3e43ecc8bf790ef575b18b18d60ba7213323->leave($__internal_151e5a7c8587793abee1e48b002a3e43ecc8bf790ef575b18b18d60ba7213323_prof);

        
        $__internal_1a887d6680785118a026a87db9fb15b4794fd1b2e5793d36fa7c931520f038bc->leave($__internal_1a887d6680785118a026a87db9fb15b4794fd1b2e5793d36fa7c931520f038bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
