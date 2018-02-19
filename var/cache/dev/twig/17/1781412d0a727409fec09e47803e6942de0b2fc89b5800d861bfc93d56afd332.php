<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_debbb8cb87027ad31f063bed64222bf24c7a28145c2565c90df902e218ef9e9e extends Twig_Template
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
        $__internal_5e6e28c80e69d3ee66621546e6c4d61909cb81b448ef2ea382c50b0ef8856014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6e28c80e69d3ee66621546e6c4d61909cb81b448ef2ea382c50b0ef8856014->enter($__internal_5e6e28c80e69d3ee66621546e6c4d61909cb81b448ef2ea382c50b0ef8856014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_27f7f47f865e927c0b37ab75927c5ce6ad26d25d5151df0b66c0b00fad451295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f7f47f865e927c0b37ab75927c5ce6ad26d25d5151df0b66c0b00fad451295->enter($__internal_27f7f47f865e927c0b37ab75927c5ce6ad26d25d5151df0b66c0b00fad451295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5e6e28c80e69d3ee66621546e6c4d61909cb81b448ef2ea382c50b0ef8856014->leave($__internal_5e6e28c80e69d3ee66621546e6c4d61909cb81b448ef2ea382c50b0ef8856014_prof);

        
        $__internal_27f7f47f865e927c0b37ab75927c5ce6ad26d25d5151df0b66c0b00fad451295->leave($__internal_27f7f47f865e927c0b37ab75927c5ce6ad26d25d5151df0b66c0b00fad451295_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
