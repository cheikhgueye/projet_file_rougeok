<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_577ef8a46d379826ec775c418c9d0c4f98f7c0e921f21318e7696c9fa842568e extends Twig_Template
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
        $__internal_c978d243b11cda641d63149eab951f11ffc32be6967c19e03fb4ebc06c6a1668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c978d243b11cda641d63149eab951f11ffc32be6967c19e03fb4ebc06c6a1668->enter($__internal_c978d243b11cda641d63149eab951f11ffc32be6967c19e03fb4ebc06c6a1668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_47af13b6d76d75b27ae9e1f70ca5f5d9c8b66e5c49f90fea2174d1d85f8f7b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47af13b6d76d75b27ae9e1f70ca5f5d9c8b66e5c49f90fea2174d1d85f8f7b95->enter($__internal_47af13b6d76d75b27ae9e1f70ca5f5d9c8b66e5c49f90fea2174d1d85f8f7b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c978d243b11cda641d63149eab951f11ffc32be6967c19e03fb4ebc06c6a1668->leave($__internal_c978d243b11cda641d63149eab951f11ffc32be6967c19e03fb4ebc06c6a1668_prof);

        
        $__internal_47af13b6d76d75b27ae9e1f70ca5f5d9c8b66e5c49f90fea2174d1d85f8f7b95->leave($__internal_47af13b6d76d75b27ae9e1f70ca5f5d9c8b66e5c49f90fea2174d1d85f8f7b95_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
