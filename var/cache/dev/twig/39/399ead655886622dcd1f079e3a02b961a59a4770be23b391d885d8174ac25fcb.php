<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_c7304018ed5c484e38072ceee0b3f7c7bd18684e5f6f02994ec4677c42306303 extends Twig_Template
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
        $__internal_b820d193e0284a98de77b71aac72ef0cb223d8866cbadc876f49d12b82d0e8a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b820d193e0284a98de77b71aac72ef0cb223d8866cbadc876f49d12b82d0e8a7->enter($__internal_b820d193e0284a98de77b71aac72ef0cb223d8866cbadc876f49d12b82d0e8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0983ef3a8059660ab9b6766c01d822ed74293809d10767359f742bfecf6bacb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0983ef3a8059660ab9b6766c01d822ed74293809d10767359f742bfecf6bacb6->enter($__internal_0983ef3a8059660ab9b6766c01d822ed74293809d10767359f742bfecf6bacb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b820d193e0284a98de77b71aac72ef0cb223d8866cbadc876f49d12b82d0e8a7->leave($__internal_b820d193e0284a98de77b71aac72ef0cb223d8866cbadc876f49d12b82d0e8a7_prof);

        
        $__internal_0983ef3a8059660ab9b6766c01d822ed74293809d10767359f742bfecf6bacb6->leave($__internal_0983ef3a8059660ab9b6766c01d822ed74293809d10767359f742bfecf6bacb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
