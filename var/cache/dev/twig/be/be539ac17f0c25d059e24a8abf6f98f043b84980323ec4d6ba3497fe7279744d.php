<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6a1d5f0cd419d8a28e545115d85492f9ea21e86af66da2e88fecf679b8c6cb87 extends Twig_Template
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
        $__internal_3be765786312065dfb9874775bdfcfe51c2b61eadccc41a36f10f5dce62cc85a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be765786312065dfb9874775bdfcfe51c2b61eadccc41a36f10f5dce62cc85a->enter($__internal_3be765786312065dfb9874775bdfcfe51c2b61eadccc41a36f10f5dce62cc85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7fee4c8d24b0830e61d9c46efa6527ef8d350e20afeb84f2341df8d4a7a3cca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fee4c8d24b0830e61d9c46efa6527ef8d350e20afeb84f2341df8d4a7a3cca8->enter($__internal_7fee4c8d24b0830e61d9c46efa6527ef8d350e20afeb84f2341df8d4a7a3cca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3be765786312065dfb9874775bdfcfe51c2b61eadccc41a36f10f5dce62cc85a->leave($__internal_3be765786312065dfb9874775bdfcfe51c2b61eadccc41a36f10f5dce62cc85a_prof);

        
        $__internal_7fee4c8d24b0830e61d9c46efa6527ef8d350e20afeb84f2341df8d4a7a3cca8->leave($__internal_7fee4c8d24b0830e61d9c46efa6527ef8d350e20afeb84f2341df8d4a7a3cca8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
