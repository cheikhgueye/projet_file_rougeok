<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_30859987ee8eb0e1cd88e404b8aae906afa70f968b2816afeab2ddd08cc20352 extends Twig_Template
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
        $__internal_097d51cb2c0da970c6598b5bdebb5ef8a61a90057c3ab9bffc79811aadabb4e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097d51cb2c0da970c6598b5bdebb5ef8a61a90057c3ab9bffc79811aadabb4e0->enter($__internal_097d51cb2c0da970c6598b5bdebb5ef8a61a90057c3ab9bffc79811aadabb4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c8413bc03205cada4b88f705daa328a6cd17c383570cc705e80bcc634a1bfeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8413bc03205cada4b88f705daa328a6cd17c383570cc705e80bcc634a1bfeb6->enter($__internal_c8413bc03205cada4b88f705daa328a6cd17c383570cc705e80bcc634a1bfeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_097d51cb2c0da970c6598b5bdebb5ef8a61a90057c3ab9bffc79811aadabb4e0->leave($__internal_097d51cb2c0da970c6598b5bdebb5ef8a61a90057c3ab9bffc79811aadabb4e0_prof);

        
        $__internal_c8413bc03205cada4b88f705daa328a6cd17c383570cc705e80bcc634a1bfeb6->leave($__internal_c8413bc03205cada4b88f705daa328a6cd17c383570cc705e80bcc634a1bfeb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
