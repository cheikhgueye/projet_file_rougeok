<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b0730c7665206ed623160a019eb2a3bf7c1959eba44ff7320a29b1322ae200a9 extends Twig_Template
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
        $__internal_08f1f321c08c71cc4bba592fb5004c794f4501b147b91ff60ce3fdd498e19c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f1f321c08c71cc4bba592fb5004c794f4501b147b91ff60ce3fdd498e19c50->enter($__internal_08f1f321c08c71cc4bba592fb5004c794f4501b147b91ff60ce3fdd498e19c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_58609af0b72b1342ade6be2b001520ef07ff84c841223f2f168bb1080b5a1f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58609af0b72b1342ade6be2b001520ef07ff84c841223f2f168bb1080b5a1f79->enter($__internal_58609af0b72b1342ade6be2b001520ef07ff84c841223f2f168bb1080b5a1f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_08f1f321c08c71cc4bba592fb5004c794f4501b147b91ff60ce3fdd498e19c50->leave($__internal_08f1f321c08c71cc4bba592fb5004c794f4501b147b91ff60ce3fdd498e19c50_prof);

        
        $__internal_58609af0b72b1342ade6be2b001520ef07ff84c841223f2f168bb1080b5a1f79->leave($__internal_58609af0b72b1342ade6be2b001520ef07ff84c841223f2f168bb1080b5a1f79_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
