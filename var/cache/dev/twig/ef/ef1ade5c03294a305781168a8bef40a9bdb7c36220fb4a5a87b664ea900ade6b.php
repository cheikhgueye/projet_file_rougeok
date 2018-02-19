<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_265124a5ee6a27329a7ecf09c3ceb4f8b89afa1afb958c8d967e3f9cd7ad5f7a extends Twig_Template
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
        $__internal_2784288e2c47de075d1bd939242cd1b6a17e6e6952f114b0cb1b0702314f0f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2784288e2c47de075d1bd939242cd1b6a17e6e6952f114b0cb1b0702314f0f63->enter($__internal_2784288e2c47de075d1bd939242cd1b6a17e6e6952f114b0cb1b0702314f0f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3daba6d6a0d03f605faed87d9a463cd1f98d7700bbfb4dda69b022cbb80f7e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3daba6d6a0d03f605faed87d9a463cd1f98d7700bbfb4dda69b022cbb80f7e49->enter($__internal_3daba6d6a0d03f605faed87d9a463cd1f98d7700bbfb4dda69b022cbb80f7e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2784288e2c47de075d1bd939242cd1b6a17e6e6952f114b0cb1b0702314f0f63->leave($__internal_2784288e2c47de075d1bd939242cd1b6a17e6e6952f114b0cb1b0702314f0f63_prof);

        
        $__internal_3daba6d6a0d03f605faed87d9a463cd1f98d7700bbfb4dda69b022cbb80f7e49->leave($__internal_3daba6d6a0d03f605faed87d9a463cd1f98d7700bbfb4dda69b022cbb80f7e49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
