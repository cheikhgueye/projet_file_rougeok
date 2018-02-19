<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7a67c651b9a188610be1167762bcbc90bf90c5cd0a7d50c4951fa923939f4abc extends Twig_Template
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
        $__internal_5c94d58de855a42d6b52e9d7364bd7ed8eeafa7ea98377460ae4dcd004d80238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c94d58de855a42d6b52e9d7364bd7ed8eeafa7ea98377460ae4dcd004d80238->enter($__internal_5c94d58de855a42d6b52e9d7364bd7ed8eeafa7ea98377460ae4dcd004d80238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_bb7763bf86e67fde765f2f7d3160dc80f622647447d47cb9032ed2fbec3280a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7763bf86e67fde765f2f7d3160dc80f622647447d47cb9032ed2fbec3280a7->enter($__internal_bb7763bf86e67fde765f2f7d3160dc80f622647447d47cb9032ed2fbec3280a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5c94d58de855a42d6b52e9d7364bd7ed8eeafa7ea98377460ae4dcd004d80238->leave($__internal_5c94d58de855a42d6b52e9d7364bd7ed8eeafa7ea98377460ae4dcd004d80238_prof);

        
        $__internal_bb7763bf86e67fde765f2f7d3160dc80f622647447d47cb9032ed2fbec3280a7->leave($__internal_bb7763bf86e67fde765f2f7d3160dc80f622647447d47cb9032ed2fbec3280a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
