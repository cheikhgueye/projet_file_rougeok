<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_08b7685e1d9fe579288c9219ba9d2587e39555fcc19bc3b18769122693857d82 extends Twig_Template
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
        $__internal_257eb44e87c88e22f6b7baf58735e60c3ffb3bc179dec1e88ba71c0045bab29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_257eb44e87c88e22f6b7baf58735e60c3ffb3bc179dec1e88ba71c0045bab29d->enter($__internal_257eb44e87c88e22f6b7baf58735e60c3ffb3bc179dec1e88ba71c0045bab29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f8149c891b65405995843ec951baf1a5579dabcaa7374d95562f07d5e86fb7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8149c891b65405995843ec951baf1a5579dabcaa7374d95562f07d5e86fb7e2->enter($__internal_f8149c891b65405995843ec951baf1a5579dabcaa7374d95562f07d5e86fb7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_257eb44e87c88e22f6b7baf58735e60c3ffb3bc179dec1e88ba71c0045bab29d->leave($__internal_257eb44e87c88e22f6b7baf58735e60c3ffb3bc179dec1e88ba71c0045bab29d_prof);

        
        $__internal_f8149c891b65405995843ec951baf1a5579dabcaa7374d95562f07d5e86fb7e2->leave($__internal_f8149c891b65405995843ec951baf1a5579dabcaa7374d95562f07d5e86fb7e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
