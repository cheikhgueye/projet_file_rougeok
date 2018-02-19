<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_527afdbc6f0c7a5a1ae85ccb9946c0a166f48478da4bd05768a47028f4c5b85d extends Twig_Template
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
        $__internal_b0e1551c348eb81101548e2f17cfd575bd87ae749fab60f55d925af66fb07a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e1551c348eb81101548e2f17cfd575bd87ae749fab60f55d925af66fb07a2e->enter($__internal_b0e1551c348eb81101548e2f17cfd575bd87ae749fab60f55d925af66fb07a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_4127d3e38ba523b8b2391f2fb4f196ff694d6c47f47de43ac6673cfe1fd733ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4127d3e38ba523b8b2391f2fb4f196ff694d6c47f47de43ac6673cfe1fd733ed->enter($__internal_4127d3e38ba523b8b2391f2fb4f196ff694d6c47f47de43ac6673cfe1fd733ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_b0e1551c348eb81101548e2f17cfd575bd87ae749fab60f55d925af66fb07a2e->leave($__internal_b0e1551c348eb81101548e2f17cfd575bd87ae749fab60f55d925af66fb07a2e_prof);

        
        $__internal_4127d3e38ba523b8b2391f2fb4f196ff694d6c47f47de43ac6673cfe1fd733ed->leave($__internal_4127d3e38ba523b8b2391f2fb4f196ff694d6c47f47de43ac6673cfe1fd733ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
