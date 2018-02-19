<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d82928bfce1ecfdb845b713f70d29d2025aeaafd976eb9668d84dc022e630196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2b9855895a7d30d8e00d9d0d6b327376ed33148791c37a355bfbdc7137c449c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b9855895a7d30d8e00d9d0d6b327376ed33148791c37a355bfbdc7137c449c->enter($__internal_f2b9855895a7d30d8e00d9d0d6b327376ed33148791c37a355bfbdc7137c449c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bc89dd6aca353589e86a215bfa9ee00cd6e1f4b0667c2bd3b9137398b8aa4745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc89dd6aca353589e86a215bfa9ee00cd6e1f4b0667c2bd3b9137398b8aa4745->enter($__internal_bc89dd6aca353589e86a215bfa9ee00cd6e1f4b0667c2bd3b9137398b8aa4745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b9855895a7d30d8e00d9d0d6b327376ed33148791c37a355bfbdc7137c449c->leave($__internal_f2b9855895a7d30d8e00d9d0d6b327376ed33148791c37a355bfbdc7137c449c_prof);

        
        $__internal_bc89dd6aca353589e86a215bfa9ee00cd6e1f4b0667c2bd3b9137398b8aa4745->leave($__internal_bc89dd6aca353589e86a215bfa9ee00cd6e1f4b0667c2bd3b9137398b8aa4745_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1dfb25b25840d16f4e988aef0897602951fd47eb866a47a9c217de639e4c6ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dfb25b25840d16f4e988aef0897602951fd47eb866a47a9c217de639e4c6ff7->enter($__internal_1dfb25b25840d16f4e988aef0897602951fd47eb866a47a9c217de639e4c6ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7bd3573f00f0882f6e247a1751fe43dcebd355c52618145384d77a6c6d59d1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd3573f00f0882f6e247a1751fe43dcebd355c52618145384d77a6c6d59d1cb->enter($__internal_7bd3573f00f0882f6e247a1751fe43dcebd355c52618145384d77a6c6d59d1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7bd3573f00f0882f6e247a1751fe43dcebd355c52618145384d77a6c6d59d1cb->leave($__internal_7bd3573f00f0882f6e247a1751fe43dcebd355c52618145384d77a6c6d59d1cb_prof);

        
        $__internal_1dfb25b25840d16f4e988aef0897602951fd47eb866a47a9c217de639e4c6ff7->leave($__internal_1dfb25b25840d16f4e988aef0897602951fd47eb866a47a9c217de639e4c6ff7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0601dc199ccc7b0bc8f034b078ab168529e6a3ddde41669a4c07e0402acdbe0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0601dc199ccc7b0bc8f034b078ab168529e6a3ddde41669a4c07e0402acdbe0c->enter($__internal_0601dc199ccc7b0bc8f034b078ab168529e6a3ddde41669a4c07e0402acdbe0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_266f924201b61b139755f3a48304fe8252f0b53f58cdc2e240f18fbbc056aa09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_266f924201b61b139755f3a48304fe8252f0b53f58cdc2e240f18fbbc056aa09->enter($__internal_266f924201b61b139755f3a48304fe8252f0b53f58cdc2e240f18fbbc056aa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_266f924201b61b139755f3a48304fe8252f0b53f58cdc2e240f18fbbc056aa09->leave($__internal_266f924201b61b139755f3a48304fe8252f0b53f58cdc2e240f18fbbc056aa09_prof);

        
        $__internal_0601dc199ccc7b0bc8f034b078ab168529e6a3ddde41669a4c07e0402acdbe0c->leave($__internal_0601dc199ccc7b0bc8f034b078ab168529e6a3ddde41669a4c07e0402acdbe0c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebbcf481138209f2287f7c5fbd7e8460d1e310c98bacc4b8caa61d6620a672ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebbcf481138209f2287f7c5fbd7e8460d1e310c98bacc4b8caa61d6620a672ce->enter($__internal_ebbcf481138209f2287f7c5fbd7e8460d1e310c98bacc4b8caa61d6620a672ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea2b80320699676182affb8be0064b022437c0baa16c5f9db1dfc1c5e3790daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2b80320699676182affb8be0064b022437c0baa16c5f9db1dfc1c5e3790daa->enter($__internal_ea2b80320699676182affb8be0064b022437c0baa16c5f9db1dfc1c5e3790daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ea2b80320699676182affb8be0064b022437c0baa16c5f9db1dfc1c5e3790daa->leave($__internal_ea2b80320699676182affb8be0064b022437c0baa16c5f9db1dfc1c5e3790daa_prof);

        
        $__internal_ebbcf481138209f2287f7c5fbd7e8460d1e310c98bacc4b8caa61d6620a672ce->leave($__internal_ebbcf481138209f2287f7c5fbd7e8460d1e310c98bacc4b8caa61d6620a672ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/projet_file_rougeok/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
