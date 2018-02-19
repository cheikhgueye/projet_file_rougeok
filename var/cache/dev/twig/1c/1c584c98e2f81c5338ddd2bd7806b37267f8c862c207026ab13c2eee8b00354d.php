<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3f86979e949fdedff4833d38640f249db99f8d46173568f65442206b08306454 extends Twig_Template
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
        $__internal_78a289826c639408a7415f0e8442033f990479998f9306d63a9e75071572f016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a289826c639408a7415f0e8442033f990479998f9306d63a9e75071572f016->enter($__internal_78a289826c639408a7415f0e8442033f990479998f9306d63a9e75071572f016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_645409fa5129c5bf638e9f3ec2b1fd34c226578ab721ac983c370e844da8132c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645409fa5129c5bf638e9f3ec2b1fd34c226578ab721ac983c370e844da8132c->enter($__internal_645409fa5129c5bf638e9f3ec2b1fd34c226578ab721ac983c370e844da8132c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_78a289826c639408a7415f0e8442033f990479998f9306d63a9e75071572f016->leave($__internal_78a289826c639408a7415f0e8442033f990479998f9306d63a9e75071572f016_prof);

        
        $__internal_645409fa5129c5bf638e9f3ec2b1fd34c226578ab721ac983c370e844da8132c->leave($__internal_645409fa5129c5bf638e9f3ec2b1fd34c226578ab721ac983c370e844da8132c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
