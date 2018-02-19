<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_df88dcbe2a563158613d4fc70f66d2478b554e4154ed4c5e0ea1f26f8a09a9df extends Twig_Template
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
        $__internal_f00220a23dd4da3a53f5cd83047e64d2ec600b204cdc502a60c94f861c1bed03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00220a23dd4da3a53f5cd83047e64d2ec600b204cdc502a60c94f861c1bed03->enter($__internal_f00220a23dd4da3a53f5cd83047e64d2ec600b204cdc502a60c94f861c1bed03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b57a3e08889a36707afef69345a8dc757480e9accd18f3ecfcc9388ced3b2c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57a3e08889a36707afef69345a8dc757480e9accd18f3ecfcc9388ced3b2c15->enter($__internal_b57a3e08889a36707afef69345a8dc757480e9accd18f3ecfcc9388ced3b2c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f00220a23dd4da3a53f5cd83047e64d2ec600b204cdc502a60c94f861c1bed03->leave($__internal_f00220a23dd4da3a53f5cd83047e64d2ec600b204cdc502a60c94f861c1bed03_prof);

        
        $__internal_b57a3e08889a36707afef69345a8dc757480e9accd18f3ecfcc9388ced3b2c15->leave($__internal_b57a3e08889a36707afef69345a8dc757480e9accd18f3ecfcc9388ced3b2c15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
