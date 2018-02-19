<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bf315be19455e7f939c2d3e23dab1c0695f0438d0ef67364bbadef80793d2006 extends Twig_Template
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
        $__internal_f5d05a3c6a1972496086ddb2d5bebed969d9c0fe4484e6335fe3923a75163c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d05a3c6a1972496086ddb2d5bebed969d9c0fe4484e6335fe3923a75163c3f->enter($__internal_f5d05a3c6a1972496086ddb2d5bebed969d9c0fe4484e6335fe3923a75163c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4672e2bb0ee2f63639d021311dd3edcfc81bb1dd06e0a2affbe49ba5f43410ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4672e2bb0ee2f63639d021311dd3edcfc81bb1dd06e0a2affbe49ba5f43410ee->enter($__internal_4672e2bb0ee2f63639d021311dd3edcfc81bb1dd06e0a2affbe49ba5f43410ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f5d05a3c6a1972496086ddb2d5bebed969d9c0fe4484e6335fe3923a75163c3f->leave($__internal_f5d05a3c6a1972496086ddb2d5bebed969d9c0fe4484e6335fe3923a75163c3f_prof);

        
        $__internal_4672e2bb0ee2f63639d021311dd3edcfc81bb1dd06e0a2affbe49ba5f43410ee->leave($__internal_4672e2bb0ee2f63639d021311dd3edcfc81bb1dd06e0a2affbe49ba5f43410ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
