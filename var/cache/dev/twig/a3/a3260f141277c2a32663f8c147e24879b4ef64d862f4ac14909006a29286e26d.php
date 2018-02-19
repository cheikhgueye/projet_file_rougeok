<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_c4eb53871af8fa5cce2d061b9374aa11ee218c80c23ae8227d28dac4a291a1e6 extends Twig_Template
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
        $__internal_de9d184d87ebce1f548a685bc76b56dedb0d3f36c4d8fbfd84c0e03b4459d559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9d184d87ebce1f548a685bc76b56dedb0d3f36c4d8fbfd84c0e03b4459d559->enter($__internal_de9d184d87ebce1f548a685bc76b56dedb0d3f36c4d8fbfd84c0e03b4459d559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e4c4c2a00057845bb1858581b3c4613f67d466460ebace39309735e38ae67c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c4c2a00057845bb1858581b3c4613f67d466460ebace39309735e38ae67c7d->enter($__internal_e4c4c2a00057845bb1858581b3c4613f67d466460ebace39309735e38ae67c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_de9d184d87ebce1f548a685bc76b56dedb0d3f36c4d8fbfd84c0e03b4459d559->leave($__internal_de9d184d87ebce1f548a685bc76b56dedb0d3f36c4d8fbfd84c0e03b4459d559_prof);

        
        $__internal_e4c4c2a00057845bb1858581b3c4613f67d466460ebace39309735e38ae67c7d->leave($__internal_e4c4c2a00057845bb1858581b3c4613f67d466460ebace39309735e38ae67c7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
