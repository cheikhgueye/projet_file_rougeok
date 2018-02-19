<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_bf8beb5972d1e9c30b33ee774f79b3cc956fead3ebf07c165dacd7da51702485 extends Twig_Template
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
        $__internal_ebf0ef7011bd792c07cdd42b99183ca0f4c88cdb310e4db7dc74a5f8c5a33a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf0ef7011bd792c07cdd42b99183ca0f4c88cdb310e4db7dc74a5f8c5a33a8c->enter($__internal_ebf0ef7011bd792c07cdd42b99183ca0f4c88cdb310e4db7dc74a5f8c5a33a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a1fb16c26cbaec1ef870db0bfa9069d5a4b0b9c61fd5af8aaadf38a00845a2a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fb16c26cbaec1ef870db0bfa9069d5a4b0b9c61fd5af8aaadf38a00845a2a7->enter($__internal_a1fb16c26cbaec1ef870db0bfa9069d5a4b0b9c61fd5af8aaadf38a00845a2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ebf0ef7011bd792c07cdd42b99183ca0f4c88cdb310e4db7dc74a5f8c5a33a8c->leave($__internal_ebf0ef7011bd792c07cdd42b99183ca0f4c88cdb310e4db7dc74a5f8c5a33a8c_prof);

        
        $__internal_a1fb16c26cbaec1ef870db0bfa9069d5a4b0b9c61fd5af8aaadf38a00845a2a7->leave($__internal_a1fb16c26cbaec1ef870db0bfa9069d5a4b0b9c61fd5af8aaadf38a00845a2a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
