<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ba79bf0fdea6a60767143980d304b566d3bb33a3fd1290d9215fe2207257daa7 extends Twig_Template
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
        $__internal_2f02097ca169fe91db5800e1fce6271d4cb266fdedca6bd0aa7bddd2a7e05211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f02097ca169fe91db5800e1fce6271d4cb266fdedca6bd0aa7bddd2a7e05211->enter($__internal_2f02097ca169fe91db5800e1fce6271d4cb266fdedca6bd0aa7bddd2a7e05211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3412b524974ed0518c7631087a5448e4cdceb73440ec7a0e93ff0799abd23432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3412b524974ed0518c7631087a5448e4cdceb73440ec7a0e93ff0799abd23432->enter($__internal_3412b524974ed0518c7631087a5448e4cdceb73440ec7a0e93ff0799abd23432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2f02097ca169fe91db5800e1fce6271d4cb266fdedca6bd0aa7bddd2a7e05211->leave($__internal_2f02097ca169fe91db5800e1fce6271d4cb266fdedca6bd0aa7bddd2a7e05211_prof);

        
        $__internal_3412b524974ed0518c7631087a5448e4cdceb73440ec7a0e93ff0799abd23432->leave($__internal_3412b524974ed0518c7631087a5448e4cdceb73440ec7a0e93ff0799abd23432_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
