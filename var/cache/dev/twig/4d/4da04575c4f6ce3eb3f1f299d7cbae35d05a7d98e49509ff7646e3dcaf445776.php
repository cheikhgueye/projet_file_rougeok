<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_18923ced1e18d1b98d6b99cfad8558df2552f5bee4593d66424c8c464ffaf390 extends Twig_Template
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
        $__internal_0f70ff6ef6e0d74a90cce84147242e1187018a12c69885607049c2ef31647aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f70ff6ef6e0d74a90cce84147242e1187018a12c69885607049c2ef31647aba->enter($__internal_0f70ff6ef6e0d74a90cce84147242e1187018a12c69885607049c2ef31647aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e33bb261698624ef90dc0bcbfe547999ee6d5eca1e7603de9bf4f9aed0327a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33bb261698624ef90dc0bcbfe547999ee6d5eca1e7603de9bf4f9aed0327a3a->enter($__internal_e33bb261698624ef90dc0bcbfe547999ee6d5eca1e7603de9bf4f9aed0327a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_0f70ff6ef6e0d74a90cce84147242e1187018a12c69885607049c2ef31647aba->leave($__internal_0f70ff6ef6e0d74a90cce84147242e1187018a12c69885607049c2ef31647aba_prof);

        
        $__internal_e33bb261698624ef90dc0bcbfe547999ee6d5eca1e7603de9bf4f9aed0327a3a->leave($__internal_e33bb261698624ef90dc0bcbfe547999ee6d5eca1e7603de9bf4f9aed0327a3a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
