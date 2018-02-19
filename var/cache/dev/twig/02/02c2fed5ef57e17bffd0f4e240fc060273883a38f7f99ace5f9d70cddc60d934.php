<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_31007d402553525873611d6945ef6623dbc78d54a450a76d47ca184a5a4f4196 extends Twig_Template
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
        $__internal_f3244e941d14d9cf8e43302a2afc8fc05367bf5780b63ae24aff3c6907067302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3244e941d14d9cf8e43302a2afc8fc05367bf5780b63ae24aff3c6907067302->enter($__internal_f3244e941d14d9cf8e43302a2afc8fc05367bf5780b63ae24aff3c6907067302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_57322339b366ddc503216784f5809448070e7821a38a619a18109baa466cce84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57322339b366ddc503216784f5809448070e7821a38a619a18109baa466cce84->enter($__internal_57322339b366ddc503216784f5809448070e7821a38a619a18109baa466cce84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_f3244e941d14d9cf8e43302a2afc8fc05367bf5780b63ae24aff3c6907067302->leave($__internal_f3244e941d14d9cf8e43302a2afc8fc05367bf5780b63ae24aff3c6907067302_prof);

        
        $__internal_57322339b366ddc503216784f5809448070e7821a38a619a18109baa466cce84->leave($__internal_57322339b366ddc503216784f5809448070e7821a38a619a18109baa466cce84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
