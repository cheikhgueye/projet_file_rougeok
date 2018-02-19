<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_f188eaeeead10bf92de66e72a6afca18164f2b23704a09d024b16daa8c99c86a extends Twig_Template
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
        $__internal_69dab1701c18b5af52a27745c46ad3770618552c3e76eb557f14e4b6efbccc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69dab1701c18b5af52a27745c46ad3770618552c3e76eb557f14e4b6efbccc4c->enter($__internal_69dab1701c18b5af52a27745c46ad3770618552c3e76eb557f14e4b6efbccc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_3be81c533c28352a087aa0e2d4052f182cf18ca1f9ef1220b708264ebc69816a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be81c533c28352a087aa0e2d4052f182cf18ca1f9ef1220b708264ebc69816a->enter($__internal_3be81c533c28352a087aa0e2d4052f182cf18ca1f9ef1220b708264ebc69816a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_69dab1701c18b5af52a27745c46ad3770618552c3e76eb557f14e4b6efbccc4c->leave($__internal_69dab1701c18b5af52a27745c46ad3770618552c3e76eb557f14e4b6efbccc4c_prof);

        
        $__internal_3be81c533c28352a087aa0e2d4052f182cf18ca1f9ef1220b708264ebc69816a->leave($__internal_3be81c533c28352a087aa0e2d4052f182cf18ca1f9ef1220b708264ebc69816a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
