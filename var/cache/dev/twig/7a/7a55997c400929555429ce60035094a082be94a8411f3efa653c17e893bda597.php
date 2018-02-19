<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e8023d59594c8388363e34ccfc2b5dcccc6931bf3f479073e7370dcfb583673c extends Twig_Template
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
        $__internal_682389e009e86b008bd5ba2d9e69c835f3aef163649388e48c1b7d8f24d28de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682389e009e86b008bd5ba2d9e69c835f3aef163649388e48c1b7d8f24d28de9->enter($__internal_682389e009e86b008bd5ba2d9e69c835f3aef163649388e48c1b7d8f24d28de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_608d59383e963d9dd27213a10f93eca41638b3eeb5bd355761e1abd98e97c374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608d59383e963d9dd27213a10f93eca41638b3eeb5bd355761e1abd98e97c374->enter($__internal_608d59383e963d9dd27213a10f93eca41638b3eeb5bd355761e1abd98e97c374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_682389e009e86b008bd5ba2d9e69c835f3aef163649388e48c1b7d8f24d28de9->leave($__internal_682389e009e86b008bd5ba2d9e69c835f3aef163649388e48c1b7d8f24d28de9_prof);

        
        $__internal_608d59383e963d9dd27213a10f93eca41638b3eeb5bd355761e1abd98e97c374->leave($__internal_608d59383e963d9dd27213a10f93eca41638b3eeb5bd355761e1abd98e97c374_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
