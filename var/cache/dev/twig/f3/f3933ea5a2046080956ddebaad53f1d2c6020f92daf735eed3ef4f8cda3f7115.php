<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_faa376e811c273316321f3a597aeaa93aaca3dcb5ae875e4a24b7be19a8612e0 extends Twig_Template
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
        $__internal_7e89cc5a629696c530a4839e2e3ec63dc25fdfcb462613c0fde1e4f64b079aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e89cc5a629696c530a4839e2e3ec63dc25fdfcb462613c0fde1e4f64b079aab->enter($__internal_7e89cc5a629696c530a4839e2e3ec63dc25fdfcb462613c0fde1e4f64b079aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8900e7b51967ff64afc49ad58d0e599f69d87bde88414ce4ece5109992696799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8900e7b51967ff64afc49ad58d0e599f69d87bde88414ce4ece5109992696799->enter($__internal_8900e7b51967ff64afc49ad58d0e599f69d87bde88414ce4ece5109992696799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7e89cc5a629696c530a4839e2e3ec63dc25fdfcb462613c0fde1e4f64b079aab->leave($__internal_7e89cc5a629696c530a4839e2e3ec63dc25fdfcb462613c0fde1e4f64b079aab_prof);

        
        $__internal_8900e7b51967ff64afc49ad58d0e599f69d87bde88414ce4ece5109992696799->leave($__internal_8900e7b51967ff64afc49ad58d0e599f69d87bde88414ce4ece5109992696799_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
