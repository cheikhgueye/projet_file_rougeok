<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_63358f6329cfccf6f1e0828508b24a7ab40e0957597fd57fce1d4437d6e33709 extends Twig_Template
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
        $__internal_e91aa67dc5ee3f92f60fc797497e97a317e0c40fd788cc0ab72c7cf36facf343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91aa67dc5ee3f92f60fc797497e97a317e0c40fd788cc0ab72c7cf36facf343->enter($__internal_e91aa67dc5ee3f92f60fc797497e97a317e0c40fd788cc0ab72c7cf36facf343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_05c5310d921c390f4f37ba34eee893c2e3f8c77b94b5ce72bcceeb7c7c8fb45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c5310d921c390f4f37ba34eee893c2e3f8c77b94b5ce72bcceeb7c7c8fb45c->enter($__internal_05c5310d921c390f4f37ba34eee893c2e3f8c77b94b5ce72bcceeb7c7c8fb45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e91aa67dc5ee3f92f60fc797497e97a317e0c40fd788cc0ab72c7cf36facf343->leave($__internal_e91aa67dc5ee3f92f60fc797497e97a317e0c40fd788cc0ab72c7cf36facf343_prof);

        
        $__internal_05c5310d921c390f4f37ba34eee893c2e3f8c77b94b5ce72bcceeb7c7c8fb45c->leave($__internal_05c5310d921c390f4f37ba34eee893c2e3f8c77b94b5ce72bcceeb7c7c8fb45c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
