<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_000d6138ce70295d21559ee7ed2ff05bc9f15d97d0a77e7ea139ee17f1256902 extends Twig_Template
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
        $__internal_f482c4a52b275efb27a92eb4404a6f3ce0850c4f01d399a13202f4d2dcd90485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f482c4a52b275efb27a92eb4404a6f3ce0850c4f01d399a13202f4d2dcd90485->enter($__internal_f482c4a52b275efb27a92eb4404a6f3ce0850c4f01d399a13202f4d2dcd90485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0c79e989c9789c6fcbf78bf4edd57894ee7d83499f73be50aeae81b2b4b3d461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c79e989c9789c6fcbf78bf4edd57894ee7d83499f73be50aeae81b2b4b3d461->enter($__internal_0c79e989c9789c6fcbf78bf4edd57894ee7d83499f73be50aeae81b2b4b3d461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f482c4a52b275efb27a92eb4404a6f3ce0850c4f01d399a13202f4d2dcd90485->leave($__internal_f482c4a52b275efb27a92eb4404a6f3ce0850c4f01d399a13202f4d2dcd90485_prof);

        
        $__internal_0c79e989c9789c6fcbf78bf4edd57894ee7d83499f73be50aeae81b2b4b3d461->leave($__internal_0c79e989c9789c6fcbf78bf4edd57894ee7d83499f73be50aeae81b2b4b3d461_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
