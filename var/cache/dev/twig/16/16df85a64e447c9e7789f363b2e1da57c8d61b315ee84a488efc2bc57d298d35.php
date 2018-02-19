<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b934fd361f8e57d8c4c8e7fe1883c2778d0a8c8bb29366b1c488934668d25afc extends Twig_Template
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
        $__internal_1f54d00920bcb264ea9025c44e969fca00cc67897eafd48ec0d1bcf0ba90d351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f54d00920bcb264ea9025c44e969fca00cc67897eafd48ec0d1bcf0ba90d351->enter($__internal_1f54d00920bcb264ea9025c44e969fca00cc67897eafd48ec0d1bcf0ba90d351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_8e1e4ede26408e509e483f7dd7ce26cdbf50fdee081930e791b7421fb0ff6568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1e4ede26408e509e483f7dd7ce26cdbf50fdee081930e791b7421fb0ff6568->enter($__internal_8e1e4ede26408e509e483f7dd7ce26cdbf50fdee081930e791b7421fb0ff6568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_1f54d00920bcb264ea9025c44e969fca00cc67897eafd48ec0d1bcf0ba90d351->leave($__internal_1f54d00920bcb264ea9025c44e969fca00cc67897eafd48ec0d1bcf0ba90d351_prof);

        
        $__internal_8e1e4ede26408e509e483f7dd7ce26cdbf50fdee081930e791b7421fb0ff6568->leave($__internal_8e1e4ede26408e509e483f7dd7ce26cdbf50fdee081930e791b7421fb0ff6568_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
