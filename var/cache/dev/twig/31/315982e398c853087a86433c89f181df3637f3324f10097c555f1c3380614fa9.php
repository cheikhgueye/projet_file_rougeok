<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7cbcab6c247151509fbe590b14373b9946c445d3222c14ae460884f63891ec18 extends Twig_Template
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
        $__internal_b14d3f62ca4bd786150e08b180ca5e0a283474ac16a0aa679c29efa1a002fabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14d3f62ca4bd786150e08b180ca5e0a283474ac16a0aa679c29efa1a002fabf->enter($__internal_b14d3f62ca4bd786150e08b180ca5e0a283474ac16a0aa679c29efa1a002fabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b24bb587964ab64ce6f28d17d26e5a6e4df2e43b1486a3ab942c1aed5060761a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24bb587964ab64ce6f28d17d26e5a6e4df2e43b1486a3ab942c1aed5060761a->enter($__internal_b24bb587964ab64ce6f28d17d26e5a6e4df2e43b1486a3ab942c1aed5060761a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b14d3f62ca4bd786150e08b180ca5e0a283474ac16a0aa679c29efa1a002fabf->leave($__internal_b14d3f62ca4bd786150e08b180ca5e0a283474ac16a0aa679c29efa1a002fabf_prof);

        
        $__internal_b24bb587964ab64ce6f28d17d26e5a6e4df2e43b1486a3ab942c1aed5060761a->leave($__internal_b24bb587964ab64ce6f28d17d26e5a6e4df2e43b1486a3ab942c1aed5060761a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
