<?php

/* KEURGUIimmoBundle:front:session.html.twig */
class __TwigTemplate_286aed069c7f7c11e1d11adffde77225a9a3ac189000b9379e8c39d429600d92 extends Twig_Template
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
        $__internal_61526ba65f00023ac3f8a1a80dff4e50726bb0b6582a21e8ac81a7efadde59c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61526ba65f00023ac3f8a1a80dff4e50726bb0b6582a21e8ac81a7efadde59c7->enter($__internal_61526ba65f00023ac3f8a1a80dff4e50726bb0b6582a21e8ac81a7efadde59c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:session.html.twig"));

        $__internal_d1aea981a4eef1e7dbee9681e8c39ed4176d2d9d127b5f33d1c66bd9a6644172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1aea981a4eef1e7dbee9681e8c39ed4176d2d9d127b5f33d1c66bd9a6644172->enter($__internal_d1aea981a4eef1e7dbee9681e8c39ed4176d2d9d127b5f33d1c66bd9a6644172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:session.html.twig"));

        // line 1
        echo "

";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 3, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "
";
        
        $__internal_61526ba65f00023ac3f8a1a80dff4e50726bb0b6582a21e8ac81a7efadde59c7->leave($__internal_61526ba65f00023ac3f8a1a80dff4e50726bb0b6582a21e8ac81a7efadde59c7_prof);

        
        $__internal_d1aea981a4eef1e7dbee9681e8c39ed4176d2d9d127b5f33d1c66bd9a6644172->leave($__internal_d1aea981a4eef1e7dbee9681e8c39ed4176d2d9d127b5f33d1c66bd9a6644172_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:session.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{{client.id}}
", "KEURGUIimmoBundle:front:session.html.twig", "/var/www/html/projet_file_rouge/keurgui/src/KEURGUI/immoBundle/Resources/views/front/session.html.twig");
    }
}
