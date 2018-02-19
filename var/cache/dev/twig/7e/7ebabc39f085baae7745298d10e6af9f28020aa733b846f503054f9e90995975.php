<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_b72bbccc47235726c8357ef825e967064e71340b6000cbdd291463331d903f5e extends Twig_Template
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
        $__internal_465cf7a2137d8cdc5b0f9398a42dec7fad6e90d70928a4165a9f4444d8db32d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465cf7a2137d8cdc5b0f9398a42dec7fad6e90d70928a4165a9f4444d8db32d5->enter($__internal_465cf7a2137d8cdc5b0f9398a42dec7fad6e90d70928a4165a9f4444d8db32d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_b32d7821012f15f7411464b707603bb8b3f0bc0fa1d670b16710c4b00667fd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32d7821012f15f7411464b707603bb8b3f0bc0fa1d670b16710c4b00667fd09->enter($__internal_b32d7821012f15f7411464b707603bb8b3f0bc0fa1d670b16710c4b00667fd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_465cf7a2137d8cdc5b0f9398a42dec7fad6e90d70928a4165a9f4444d8db32d5->leave($__internal_465cf7a2137d8cdc5b0f9398a42dec7fad6e90d70928a4165a9f4444d8db32d5_prof);

        
        $__internal_b32d7821012f15f7411464b707603bb8b3f0bc0fa1d670b16710c4b00667fd09->leave($__internal_b32d7821012f15f7411464b707603bb8b3f0bc0fa1d670b16710c4b00667fd09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
