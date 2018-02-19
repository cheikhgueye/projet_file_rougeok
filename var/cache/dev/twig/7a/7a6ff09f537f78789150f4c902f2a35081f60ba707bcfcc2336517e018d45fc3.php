<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_04d6f0604ceebd21663b5cc25b228dacfc6a3ab7fef4f63b4de44d138c4c0841 extends Twig_Template
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
        $__internal_a30afb633f343cad649c7a71e5ccf0aa6de778c6c285eadf3e5b27326ec51eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30afb633f343cad649c7a71e5ccf0aa6de778c6c285eadf3e5b27326ec51eb1->enter($__internal_a30afb633f343cad649c7a71e5ccf0aa6de778c6c285eadf3e5b27326ec51eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ba3389a737d3e1f12053e2fc8f8b1fc633cc91dcbcbedd21dd7ea65ab1f83b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3389a737d3e1f12053e2fc8f8b1fc633cc91dcbcbedd21dd7ea65ab1f83b42->enter($__internal_ba3389a737d3e1f12053e2fc8f8b1fc633cc91dcbcbedd21dd7ea65ab1f83b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a30afb633f343cad649c7a71e5ccf0aa6de778c6c285eadf3e5b27326ec51eb1->leave($__internal_a30afb633f343cad649c7a71e5ccf0aa6de778c6c285eadf3e5b27326ec51eb1_prof);

        
        $__internal_ba3389a737d3e1f12053e2fc8f8b1fc633cc91dcbcbedd21dd7ea65ab1f83b42->leave($__internal_ba3389a737d3e1f12053e2fc8f8b1fc633cc91dcbcbedd21dd7ea65ab1f83b42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
