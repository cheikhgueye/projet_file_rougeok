<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5e5f82d0e8598d5fafb24793f96efcd76dddce1bbf6a316330e22cd1e6334bf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f96b5529404a7fb3ee8e2af0c15f3f76f0506f9250b11fe28360c406bda4da28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96b5529404a7fb3ee8e2af0c15f3f76f0506f9250b11fe28360c406bda4da28->enter($__internal_f96b5529404a7fb3ee8e2af0c15f3f76f0506f9250b11fe28360c406bda4da28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_2d450202ed8203d0d4793299e3a8bfaaa128ce451742719e014364445acc6a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d450202ed8203d0d4793299e3a8bfaaa128ce451742719e014364445acc6a49->enter($__internal_2d450202ed8203d0d4793299e3a8bfaaa128ce451742719e014364445acc6a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f96b5529404a7fb3ee8e2af0c15f3f76f0506f9250b11fe28360c406bda4da28->leave($__internal_f96b5529404a7fb3ee8e2af0c15f3f76f0506f9250b11fe28360c406bda4da28_prof);

        
        $__internal_2d450202ed8203d0d4793299e3a8bfaaa128ce451742719e014364445acc6a49->leave($__internal_2d450202ed8203d0d4793299e3a8bfaaa128ce451742719e014364445acc6a49_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c482605c622860d11443f333e0c8e184372cd96f71b39ad2365e8faed4349aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c482605c622860d11443f333e0c8e184372cd96f71b39ad2365e8faed4349aa->enter($__internal_8c482605c622860d11443f333e0c8e184372cd96f71b39ad2365e8faed4349aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4f216f6a0c17299c5b64bb765284260b11e3fe14f28b7c333b99651bd49f86d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f216f6a0c17299c5b64bb765284260b11e3fe14f28b7c333b99651bd49f86d0->enter($__internal_4f216f6a0c17299c5b64bb765284260b11e3fe14f28b7c333b99651bd49f86d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4f216f6a0c17299c5b64bb765284260b11e3fe14f28b7c333b99651bd49f86d0->leave($__internal_4f216f6a0c17299c5b64bb765284260b11e3fe14f28b7c333b99651bd49f86d0_prof);

        
        $__internal_8c482605c622860d11443f333e0c8e184372cd96f71b39ad2365e8faed4349aa->leave($__internal_8c482605c622860d11443f333e0c8e184372cd96f71b39ad2365e8faed4349aa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f82f2cf5aae99af3ed3891873bac659de9839c425e48e53a5829b94b7ad2d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f82f2cf5aae99af3ed3891873bac659de9839c425e48e53a5829b94b7ad2d3f->enter($__internal_4f82f2cf5aae99af3ed3891873bac659de9839c425e48e53a5829b94b7ad2d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4f5745650d2fef1a617f2c1213142b07b761af37719abdfa99bb8d72619d2e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5745650d2fef1a617f2c1213142b07b761af37719abdfa99bb8d72619d2e2f->enter($__internal_4f5745650d2fef1a617f2c1213142b07b761af37719abdfa99bb8d72619d2e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4f5745650d2fef1a617f2c1213142b07b761af37719abdfa99bb8d72619d2e2f->leave($__internal_4f5745650d2fef1a617f2c1213142b07b761af37719abdfa99bb8d72619d2e2f_prof);

        
        $__internal_4f82f2cf5aae99af3ed3891873bac659de9839c425e48e53a5829b94b7ad2d3f->leave($__internal_4f82f2cf5aae99af3ed3891873bac659de9839c425e48e53a5829b94b7ad2d3f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a4346d9cfac0a9fc4a44aac3b4bf2810bb2d241900577b726ec295b0a1e257e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4346d9cfac0a9fc4a44aac3b4bf2810bb2d241900577b726ec295b0a1e257e->enter($__internal_1a4346d9cfac0a9fc4a44aac3b4bf2810bb2d241900577b726ec295b0a1e257e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bbf31bf5854aa93a99cd22d5197b9b94d51b4be62815b05dc3874af20d063707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf31bf5854aa93a99cd22d5197b9b94d51b4be62815b05dc3874af20d063707->enter($__internal_bbf31bf5854aa93a99cd22d5197b9b94d51b4be62815b05dc3874af20d063707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_bbf31bf5854aa93a99cd22d5197b9b94d51b4be62815b05dc3874af20d063707->leave($__internal_bbf31bf5854aa93a99cd22d5197b9b94d51b4be62815b05dc3874af20d063707_prof);

        
        $__internal_1a4346d9cfac0a9fc4a44aac3b4bf2810bb2d241900577b726ec295b0a1e257e->leave($__internal_1a4346d9cfac0a9fc4a44aac3b4bf2810bb2d241900577b726ec295b0a1e257e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
