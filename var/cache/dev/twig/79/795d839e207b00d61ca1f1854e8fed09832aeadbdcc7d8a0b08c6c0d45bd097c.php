<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_347bcc3a184b53d0dd10f9e34bca70eaff06c41c5ea4297fc54fc79a1b97581e extends Twig_Template
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
        $__internal_317eb84d696056afbb1d76a0bca2ea9350c9c17c3eb3932fc31b643ddbcfc065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_317eb84d696056afbb1d76a0bca2ea9350c9c17c3eb3932fc31b643ddbcfc065->enter($__internal_317eb84d696056afbb1d76a0bca2ea9350c9c17c3eb3932fc31b643ddbcfc065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2a4f460c0371baf670ee1a255e5fc32608c232ec5b802841363f31e56fcca889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4f460c0371baf670ee1a255e5fc32608c232ec5b802841363f31e56fcca889->enter($__internal_2a4f460c0371baf670ee1a255e5fc32608c232ec5b802841363f31e56fcca889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_317eb84d696056afbb1d76a0bca2ea9350c9c17c3eb3932fc31b643ddbcfc065->leave($__internal_317eb84d696056afbb1d76a0bca2ea9350c9c17c3eb3932fc31b643ddbcfc065_prof);

        
        $__internal_2a4f460c0371baf670ee1a255e5fc32608c232ec5b802841363f31e56fcca889->leave($__internal_2a4f460c0371baf670ee1a255e5fc32608c232ec5b802841363f31e56fcca889_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
