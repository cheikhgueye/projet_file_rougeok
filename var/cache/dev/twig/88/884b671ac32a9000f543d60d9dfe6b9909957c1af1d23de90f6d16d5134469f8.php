<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_695ce60bf8195fb851496f0a94120aface1bd16b913589b44a339e7456a4e8d2 extends Twig_Template
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
        $__internal_03a8f3c3128ecd3687eca99077fc4f113a6d87f95e123bce72dd632fade310f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a8f3c3128ecd3687eca99077fc4f113a6d87f95e123bce72dd632fade310f5->enter($__internal_03a8f3c3128ecd3687eca99077fc4f113a6d87f95e123bce72dd632fade310f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8f376590e3c145b69e6dbabba2d8129e9458b8c341d72d87db988b7edd9313f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f376590e3c145b69e6dbabba2d8129e9458b8c341d72d87db988b7edd9313f0->enter($__internal_8f376590e3c145b69e6dbabba2d8129e9458b8c341d72d87db988b7edd9313f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_03a8f3c3128ecd3687eca99077fc4f113a6d87f95e123bce72dd632fade310f5->leave($__internal_03a8f3c3128ecd3687eca99077fc4f113a6d87f95e123bce72dd632fade310f5_prof);

        
        $__internal_8f376590e3c145b69e6dbabba2d8129e9458b8c341d72d87db988b7edd9313f0->leave($__internal_8f376590e3c145b69e6dbabba2d8129e9458b8c341d72d87db988b7edd9313f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
