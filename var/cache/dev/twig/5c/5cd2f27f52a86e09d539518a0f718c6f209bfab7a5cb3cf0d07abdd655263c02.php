<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6096cb7f11987e5082d72e6c60a969d4af242de607f9a86094c94e7750009ac7 extends Twig_Template
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
        $__internal_39f0e1b248089f469234b690927820b47306bdb05ffeeb44e65a94e81530628c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f0e1b248089f469234b690927820b47306bdb05ffeeb44e65a94e81530628c->enter($__internal_39f0e1b248089f469234b690927820b47306bdb05ffeeb44e65a94e81530628c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_93c906e6e2ee5ff2172134ced601594a99701485cedf7522abb2e31c7acfe3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c906e6e2ee5ff2172134ced601594a99701485cedf7522abb2e31c7acfe3e2->enter($__internal_93c906e6e2ee5ff2172134ced601594a99701485cedf7522abb2e31c7acfe3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_39f0e1b248089f469234b690927820b47306bdb05ffeeb44e65a94e81530628c->leave($__internal_39f0e1b248089f469234b690927820b47306bdb05ffeeb44e65a94e81530628c_prof);

        
        $__internal_93c906e6e2ee5ff2172134ced601594a99701485cedf7522abb2e31c7acfe3e2->leave($__internal_93c906e6e2ee5ff2172134ced601594a99701485cedf7522abb2e31c7acfe3e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
