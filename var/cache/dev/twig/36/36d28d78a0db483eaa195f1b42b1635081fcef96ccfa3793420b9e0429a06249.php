<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_869cbe233b0abfb6ff77f7bbea92d8b2d0e67d526e26a89281162cd2842afd84 extends Twig_Template
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
        $__internal_ea8154922914efc1d4866d097c4491a0775d03476eb84a69848965dbb27f9703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8154922914efc1d4866d097c4491a0775d03476eb84a69848965dbb27f9703->enter($__internal_ea8154922914efc1d4866d097c4491a0775d03476eb84a69848965dbb27f9703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_22ef16a12589d1db1753aa9c2c49500cb3968cef8defb428aaca2cf9284fe0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ef16a12589d1db1753aa9c2c49500cb3968cef8defb428aaca2cf9284fe0d7->enter($__internal_22ef16a12589d1db1753aa9c2c49500cb3968cef8defb428aaca2cf9284fe0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ea8154922914efc1d4866d097c4491a0775d03476eb84a69848965dbb27f9703->leave($__internal_ea8154922914efc1d4866d097c4491a0775d03476eb84a69848965dbb27f9703_prof);

        
        $__internal_22ef16a12589d1db1753aa9c2c49500cb3968cef8defb428aaca2cf9284fe0d7->leave($__internal_22ef16a12589d1db1753aa9c2c49500cb3968cef8defb428aaca2cf9284fe0d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
