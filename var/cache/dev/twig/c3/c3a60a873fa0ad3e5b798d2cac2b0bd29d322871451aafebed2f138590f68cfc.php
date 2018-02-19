<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b6f4d003337fb8586571dbc187c10e97e1b489a9ffb8d7b7a4ac015d49c89cb3 extends Twig_Template
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
        $__internal_dc261a0c0c1be9f99174a108917fbd4d72ffd1c48a11c9a57ced41c43d6b75ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc261a0c0c1be9f99174a108917fbd4d72ffd1c48a11c9a57ced41c43d6b75ea->enter($__internal_dc261a0c0c1be9f99174a108917fbd4d72ffd1c48a11c9a57ced41c43d6b75ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d8ff8a637a0225bae11c9b74e260e74e932f50518ac87e28168473d983e9a40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ff8a637a0225bae11c9b74e260e74e932f50518ac87e28168473d983e9a40b->enter($__internal_d8ff8a637a0225bae11c9b74e260e74e932f50518ac87e28168473d983e9a40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_dc261a0c0c1be9f99174a108917fbd4d72ffd1c48a11c9a57ced41c43d6b75ea->leave($__internal_dc261a0c0c1be9f99174a108917fbd4d72ffd1c48a11c9a57ced41c43d6b75ea_prof);

        
        $__internal_d8ff8a637a0225bae11c9b74e260e74e932f50518ac87e28168473d983e9a40b->leave($__internal_d8ff8a637a0225bae11c9b74e260e74e932f50518ac87e28168473d983e9a40b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
