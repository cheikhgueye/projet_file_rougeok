<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_129c02e0f2752d0837436365e5861ed244db05e98ca6ac2de6076a6d017985c2 extends Twig_Template
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
        $__internal_f11852de886d5aa569ef53e33cb22fa4cb05b04e4f9cfc2cb79d260f51786cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11852de886d5aa569ef53e33cb22fa4cb05b04e4f9cfc2cb79d260f51786cc8->enter($__internal_f11852de886d5aa569ef53e33cb22fa4cb05b04e4f9cfc2cb79d260f51786cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_3074fea32c637f5ded15cd68fe9006a1099b45b3ee84f07b517d202f68ea3caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3074fea32c637f5ded15cd68fe9006a1099b45b3ee84f07b517d202f68ea3caa->enter($__internal_3074fea32c637f5ded15cd68fe9006a1099b45b3ee84f07b517d202f68ea3caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_f11852de886d5aa569ef53e33cb22fa4cb05b04e4f9cfc2cb79d260f51786cc8->leave($__internal_f11852de886d5aa569ef53e33cb22fa4cb05b04e4f9cfc2cb79d260f51786cc8_prof);

        
        $__internal_3074fea32c637f5ded15cd68fe9006a1099b45b3ee84f07b517d202f68ea3caa->leave($__internal_3074fea32c637f5ded15cd68fe9006a1099b45b3ee84f07b517d202f68ea3caa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
