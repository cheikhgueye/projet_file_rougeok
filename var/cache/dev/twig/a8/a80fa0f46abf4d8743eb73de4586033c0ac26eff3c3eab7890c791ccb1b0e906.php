<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1cc2c626f141beab71de9b6f1bab313b102df67bedf1e02ee9cc0fe3f8f6312a extends Twig_Template
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
        $__internal_10c15a7e7f2bd9fd99b3b918bed24a0b426a7d1e9217b7e88d80809192897063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c15a7e7f2bd9fd99b3b918bed24a0b426a7d1e9217b7e88d80809192897063->enter($__internal_10c15a7e7f2bd9fd99b3b918bed24a0b426a7d1e9217b7e88d80809192897063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1bd3140c6b318f972af30cd3d84bfe42708772348e878ffde32c0272514b878d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd3140c6b318f972af30cd3d84bfe42708772348e878ffde32c0272514b878d->enter($__internal_1bd3140c6b318f972af30cd3d84bfe42708772348e878ffde32c0272514b878d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_10c15a7e7f2bd9fd99b3b918bed24a0b426a7d1e9217b7e88d80809192897063->leave($__internal_10c15a7e7f2bd9fd99b3b918bed24a0b426a7d1e9217b7e88d80809192897063_prof);

        
        $__internal_1bd3140c6b318f972af30cd3d84bfe42708772348e878ffde32c0272514b878d->leave($__internal_1bd3140c6b318f972af30cd3d84bfe42708772348e878ffde32c0272514b878d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
