<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_33a6b04d556cd5eeb8771deadc3106eac5295185517b12533095c71bc8be9bdd extends Twig_Template
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
        $__internal_bf583df1894bf372b8676dde4f72938b3de040f7b23c7c32a99dfde8f363440e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf583df1894bf372b8676dde4f72938b3de040f7b23c7c32a99dfde8f363440e->enter($__internal_bf583df1894bf372b8676dde4f72938b3de040f7b23c7c32a99dfde8f363440e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8c2ef15143778283a2b483f75f733bbde8b79a100477006a281f52d36c2d2264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2ef15143778283a2b483f75f733bbde8b79a100477006a281f52d36c2d2264->enter($__internal_8c2ef15143778283a2b483f75f733bbde8b79a100477006a281f52d36c2d2264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bf583df1894bf372b8676dde4f72938b3de040f7b23c7c32a99dfde8f363440e->leave($__internal_bf583df1894bf372b8676dde4f72938b3de040f7b23c7c32a99dfde8f363440e_prof);

        
        $__internal_8c2ef15143778283a2b483f75f733bbde8b79a100477006a281f52d36c2d2264->leave($__internal_8c2ef15143778283a2b483f75f733bbde8b79a100477006a281f52d36c2d2264_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
