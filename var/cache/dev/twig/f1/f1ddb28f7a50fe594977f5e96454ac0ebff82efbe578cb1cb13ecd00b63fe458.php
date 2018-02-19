<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_16202d1f4569db1304a79eca2e6947549ef9a7d6ba212a1f3a86580b089c9ccb extends Twig_Template
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
        $__internal_e9b85acfc613480fe6e880243ec847fe53247f7127db244b40765cc4c24d054e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b85acfc613480fe6e880243ec847fe53247f7127db244b40765cc4c24d054e->enter($__internal_e9b85acfc613480fe6e880243ec847fe53247f7127db244b40765cc4c24d054e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0b909335086c261acb481541783024c0c3cc5d3b97cd38124d503615f2fa5df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b909335086c261acb481541783024c0c3cc5d3b97cd38124d503615f2fa5df5->enter($__internal_0b909335086c261acb481541783024c0c3cc5d3b97cd38124d503615f2fa5df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e9b85acfc613480fe6e880243ec847fe53247f7127db244b40765cc4c24d054e->leave($__internal_e9b85acfc613480fe6e880243ec847fe53247f7127db244b40765cc4c24d054e_prof);

        
        $__internal_0b909335086c261acb481541783024c0c3cc5d3b97cd38124d503615f2fa5df5->leave($__internal_0b909335086c261acb481541783024c0c3cc5d3b97cd38124d503615f2fa5df5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
