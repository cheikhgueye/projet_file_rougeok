<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8bb2433433235aa76c4bb28e1e9188e027003ce5be40fb23cb4b196b8ff987e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_cad2d83ed80c51210c789736fd2624162e9db1aa83b8bf3dad3a311c8195b701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad2d83ed80c51210c789736fd2624162e9db1aa83b8bf3dad3a311c8195b701->enter($__internal_cad2d83ed80c51210c789736fd2624162e9db1aa83b8bf3dad3a311c8195b701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7676b640a0d1bbe043bd3c189074a457acd4c57470dd561cb1ecff47aed4ced3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7676b640a0d1bbe043bd3c189074a457acd4c57470dd561cb1ecff47aed4ced3->enter($__internal_7676b640a0d1bbe043bd3c189074a457acd4c57470dd561cb1ecff47aed4ced3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cad2d83ed80c51210c789736fd2624162e9db1aa83b8bf3dad3a311c8195b701->leave($__internal_cad2d83ed80c51210c789736fd2624162e9db1aa83b8bf3dad3a311c8195b701_prof);

        
        $__internal_7676b640a0d1bbe043bd3c189074a457acd4c57470dd561cb1ecff47aed4ced3->leave($__internal_7676b640a0d1bbe043bd3c189074a457acd4c57470dd561cb1ecff47aed4ced3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a740d33465c474840c3344f95c08e5618be6cdf3f91317b6d3a5128871501cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a740d33465c474840c3344f95c08e5618be6cdf3f91317b6d3a5128871501cfe->enter($__internal_a740d33465c474840c3344f95c08e5618be6cdf3f91317b6d3a5128871501cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_402dd3e2b1b60cfd3651df211cc555a7b1b72f4e1eb3b1ec0e372573a1a7cd35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402dd3e2b1b60cfd3651df211cc555a7b1b72f4e1eb3b1ec0e372573a1a7cd35->enter($__internal_402dd3e2b1b60cfd3651df211cc555a7b1b72f4e1eb3b1ec0e372573a1a7cd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_402dd3e2b1b60cfd3651df211cc555a7b1b72f4e1eb3b1ec0e372573a1a7cd35->leave($__internal_402dd3e2b1b60cfd3651df211cc555a7b1b72f4e1eb3b1ec0e372573a1a7cd35_prof);

        
        $__internal_a740d33465c474840c3344f95c08e5618be6cdf3f91317b6d3a5128871501cfe->leave($__internal_a740d33465c474840c3344f95c08e5618be6cdf3f91317b6d3a5128871501cfe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06add03ba050faf4d7b4be63c9fb08e09e8371ea9a841c7cad4bf3a6d2009295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06add03ba050faf4d7b4be63c9fb08e09e8371ea9a841c7cad4bf3a6d2009295->enter($__internal_06add03ba050faf4d7b4be63c9fb08e09e8371ea9a841c7cad4bf3a6d2009295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0a07fd9724e31b3d18f96e39708d70e4ec4c20adb7e3ff1087c18814052b269b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a07fd9724e31b3d18f96e39708d70e4ec4c20adb7e3ff1087c18814052b269b->enter($__internal_0a07fd9724e31b3d18f96e39708d70e4ec4c20adb7e3ff1087c18814052b269b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a07fd9724e31b3d18f96e39708d70e4ec4c20adb7e3ff1087c18814052b269b->leave($__internal_0a07fd9724e31b3d18f96e39708d70e4ec4c20adb7e3ff1087c18814052b269b_prof);

        
        $__internal_06add03ba050faf4d7b4be63c9fb08e09e8371ea9a841c7cad4bf3a6d2009295->leave($__internal_06add03ba050faf4d7b4be63c9fb08e09e8371ea9a841c7cad4bf3a6d2009295_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c90570a29a77fa72baa57aa8a522aefa237e9baba04d7d3aaaf7491054414e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90570a29a77fa72baa57aa8a522aefa237e9baba04d7d3aaaf7491054414e03->enter($__internal_c90570a29a77fa72baa57aa8a522aefa237e9baba04d7d3aaaf7491054414e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cf18cab26709de3f639e127a4013f3d883d0372659f6b38b86d3c20e52177eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf18cab26709de3f639e127a4013f3d883d0372659f6b38b86d3c20e52177eab->enter($__internal_cf18cab26709de3f639e127a4013f3d883d0372659f6b38b86d3c20e52177eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_cf18cab26709de3f639e127a4013f3d883d0372659f6b38b86d3c20e52177eab->leave($__internal_cf18cab26709de3f639e127a4013f3d883d0372659f6b38b86d3c20e52177eab_prof);

        
        $__internal_c90570a29a77fa72baa57aa8a522aefa237e9baba04d7d3aaaf7491054414e03->leave($__internal_c90570a29a77fa72baa57aa8a522aefa237e9baba04d7d3aaaf7491054414e03_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
