<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_84c1168ae5a0c16d1914b8d0600984b714d20845e8d5e84a896f72fd182d71d7 extends Twig_Template
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
        $__internal_e30b7282e304e005459a8494fa220c50de3adfb267197a17dbc3856b96bfdb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30b7282e304e005459a8494fa220c50de3adfb267197a17dbc3856b96bfdb3c->enter($__internal_e30b7282e304e005459a8494fa220c50de3adfb267197a17dbc3856b96bfdb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b77036f26473b8ce066b1085ddc65fdfb9bc61ed6bc9848721ce1eec1366b363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77036f26473b8ce066b1085ddc65fdfb9bc61ed6bc9848721ce1eec1366b363->enter($__internal_b77036f26473b8ce066b1085ddc65fdfb9bc61ed6bc9848721ce1eec1366b363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e30b7282e304e005459a8494fa220c50de3adfb267197a17dbc3856b96bfdb3c->leave($__internal_e30b7282e304e005459a8494fa220c50de3adfb267197a17dbc3856b96bfdb3c_prof);

        
        $__internal_b77036f26473b8ce066b1085ddc65fdfb9bc61ed6bc9848721ce1eec1366b363->leave($__internal_b77036f26473b8ce066b1085ddc65fdfb9bc61ed6bc9848721ce1eec1366b363_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
