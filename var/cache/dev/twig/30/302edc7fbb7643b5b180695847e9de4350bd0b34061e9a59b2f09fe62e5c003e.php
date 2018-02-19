<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0d6fc3c71b55c5c099e395f0b3d7cc8d348e99d7b31c4aca228ec243b9c47dcf extends Twig_Template
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
        $__internal_e59fb204d51dbfa93470754124ad2ad2a4c705e187d7130fadd5c287f8f637fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59fb204d51dbfa93470754124ad2ad2a4c705e187d7130fadd5c287f8f637fa->enter($__internal_e59fb204d51dbfa93470754124ad2ad2a4c705e187d7130fadd5c287f8f637fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e3e18abe4a49338a9477e344402c81847b62ad5107294624fbb3acdcb3e2e5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e18abe4a49338a9477e344402c81847b62ad5107294624fbb3acdcb3e2e5c5->enter($__internal_e3e18abe4a49338a9477e344402c81847b62ad5107294624fbb3acdcb3e2e5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e59fb204d51dbfa93470754124ad2ad2a4c705e187d7130fadd5c287f8f637fa->leave($__internal_e59fb204d51dbfa93470754124ad2ad2a4c705e187d7130fadd5c287f8f637fa_prof);

        
        $__internal_e3e18abe4a49338a9477e344402c81847b62ad5107294624fbb3acdcb3e2e5c5->leave($__internal_e3e18abe4a49338a9477e344402c81847b62ad5107294624fbb3acdcb3e2e5c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
