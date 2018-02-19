<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_598c900341e5f10bb5bda0b271e4ea7b140d6ea6eb0a7e41e4f94eb680454786 extends Twig_Template
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
        $__internal_495047ba17b29995fd22c554b7d20e25718aeecc00017e271dcc7efe07d13aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495047ba17b29995fd22c554b7d20e25718aeecc00017e271dcc7efe07d13aa3->enter($__internal_495047ba17b29995fd22c554b7d20e25718aeecc00017e271dcc7efe07d13aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d3d2c33c6c290aab3992646cbcd4f680d724ed75582f9fcac000f5c44b792817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d2c33c6c290aab3992646cbcd4f680d724ed75582f9fcac000f5c44b792817->enter($__internal_d3d2c33c6c290aab3992646cbcd4f680d724ed75582f9fcac000f5c44b792817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_495047ba17b29995fd22c554b7d20e25718aeecc00017e271dcc7efe07d13aa3->leave($__internal_495047ba17b29995fd22c554b7d20e25718aeecc00017e271dcc7efe07d13aa3_prof);

        
        $__internal_d3d2c33c6c290aab3992646cbcd4f680d724ed75582f9fcac000f5c44b792817->leave($__internal_d3d2c33c6c290aab3992646cbcd4f680d724ed75582f9fcac000f5c44b792817_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
