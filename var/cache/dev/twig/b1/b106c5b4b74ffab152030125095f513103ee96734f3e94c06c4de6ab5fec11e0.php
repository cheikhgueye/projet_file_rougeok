<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_af0f41ca3da9805411ecc1667f8e030adcbd34025407d626b0dd89f8b58c5f25 extends Twig_Template
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
        $__internal_36091819787612f03048bb09da441c3adbb73610d0c8bc51dc8e5397625d40cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36091819787612f03048bb09da441c3adbb73610d0c8bc51dc8e5397625d40cc->enter($__internal_36091819787612f03048bb09da441c3adbb73610d0c8bc51dc8e5397625d40cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f9941de9941dcf872937bcc960177401a2b0bb38a50413224b9766ec93947025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9941de9941dcf872937bcc960177401a2b0bb38a50413224b9766ec93947025->enter($__internal_f9941de9941dcf872937bcc960177401a2b0bb38a50413224b9766ec93947025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_36091819787612f03048bb09da441c3adbb73610d0c8bc51dc8e5397625d40cc->leave($__internal_36091819787612f03048bb09da441c3adbb73610d0c8bc51dc8e5397625d40cc_prof);

        
        $__internal_f9941de9941dcf872937bcc960177401a2b0bb38a50413224b9766ec93947025->leave($__internal_f9941de9941dcf872937bcc960177401a2b0bb38a50413224b9766ec93947025_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
