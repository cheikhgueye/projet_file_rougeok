<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b28e99a880636873fed646f5c5d16a7fd6d27e7ba80b2fff4cbdfb784a622922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_6f42817db096d0e0e43b8c08f8c0cc474ed516c0520828efea9b0e66e12b4ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f42817db096d0e0e43b8c08f8c0cc474ed516c0520828efea9b0e66e12b4ffe->enter($__internal_6f42817db096d0e0e43b8c08f8c0cc474ed516c0520828efea9b0e66e12b4ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b9cba21c051d7f9befb769998cd72e4902ec91f03040380634b4fcb15ed5dd00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9cba21c051d7f9befb769998cd72e4902ec91f03040380634b4fcb15ed5dd00->enter($__internal_b9cba21c051d7f9befb769998cd72e4902ec91f03040380634b4fcb15ed5dd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f42817db096d0e0e43b8c08f8c0cc474ed516c0520828efea9b0e66e12b4ffe->leave($__internal_6f42817db096d0e0e43b8c08f8c0cc474ed516c0520828efea9b0e66e12b4ffe_prof);

        
        $__internal_b9cba21c051d7f9befb769998cd72e4902ec91f03040380634b4fcb15ed5dd00->leave($__internal_b9cba21c051d7f9befb769998cd72e4902ec91f03040380634b4fcb15ed5dd00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_306c6c41c219a3452032ba4b32d2a59bcc586cace707dcc727cccf8f699a51db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306c6c41c219a3452032ba4b32d2a59bcc586cace707dcc727cccf8f699a51db->enter($__internal_306c6c41c219a3452032ba4b32d2a59bcc586cace707dcc727cccf8f699a51db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_48ab13e7359cc6ed44d457182bb8263152e520dd3b9509736348f885a2426af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ab13e7359cc6ed44d457182bb8263152e520dd3b9509736348f885a2426af0->enter($__internal_48ab13e7359cc6ed44d457182bb8263152e520dd3b9509736348f885a2426af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_48ab13e7359cc6ed44d457182bb8263152e520dd3b9509736348f885a2426af0->leave($__internal_48ab13e7359cc6ed44d457182bb8263152e520dd3b9509736348f885a2426af0_prof);

        
        $__internal_306c6c41c219a3452032ba4b32d2a59bcc586cace707dcc727cccf8f699a51db->leave($__internal_306c6c41c219a3452032ba4b32d2a59bcc586cace707dcc727cccf8f699a51db_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea438f2431f36f7d7b13bd99411bacb2e033581239ad67c4e8efdce5960a7365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea438f2431f36f7d7b13bd99411bacb2e033581239ad67c4e8efdce5960a7365->enter($__internal_ea438f2431f36f7d7b13bd99411bacb2e033581239ad67c4e8efdce5960a7365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aa941b839a7972ac8517c27547d0bfebee0a91fc1a3d445434c7fd33ba738130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa941b839a7972ac8517c27547d0bfebee0a91fc1a3d445434c7fd33ba738130->enter($__internal_aa941b839a7972ac8517c27547d0bfebee0a91fc1a3d445434c7fd33ba738130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_aa941b839a7972ac8517c27547d0bfebee0a91fc1a3d445434c7fd33ba738130->leave($__internal_aa941b839a7972ac8517c27547d0bfebee0a91fc1a3d445434c7fd33ba738130_prof);

        
        $__internal_ea438f2431f36f7d7b13bd99411bacb2e033581239ad67c4e8efdce5960a7365->leave($__internal_ea438f2431f36f7d7b13bd99411bacb2e033581239ad67c4e8efdce5960a7365_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32e68fababfd0ddb3c78971e71c0e63fc9caf239ef98c5edf5009f82455ed134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e68fababfd0ddb3c78971e71c0e63fc9caf239ef98c5edf5009f82455ed134->enter($__internal_32e68fababfd0ddb3c78971e71c0e63fc9caf239ef98c5edf5009f82455ed134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e7eba7b9d9704c84d3f1d991ec22d8962e9c4c34d45133514ea028fc0e4e3364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7eba7b9d9704c84d3f1d991ec22d8962e9c4c34d45133514ea028fc0e4e3364->enter($__internal_e7eba7b9d9704c84d3f1d991ec22d8962e9c4c34d45133514ea028fc0e4e3364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e7eba7b9d9704c84d3f1d991ec22d8962e9c4c34d45133514ea028fc0e4e3364->leave($__internal_e7eba7b9d9704c84d3f1d991ec22d8962e9c4c34d45133514ea028fc0e4e3364_prof);

        
        $__internal_32e68fababfd0ddb3c78971e71c0e63fc9caf239ef98c5edf5009f82455ed134->leave($__internal_32e68fababfd0ddb3c78971e71c0e63fc9caf239ef98c5edf5009f82455ed134_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/projet_file_rougeok/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
