<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2028663b13a5f0e72479de69273ec070d70318482917ddfc06cc2d0465eedfb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a793540e7e8427577a0a0ed6067ae00d51397bc1a3477e0f40a0a0a4feb8fe22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a793540e7e8427577a0a0ed6067ae00d51397bc1a3477e0f40a0a0a4feb8fe22->enter($__internal_a793540e7e8427577a0a0ed6067ae00d51397bc1a3477e0f40a0a0a4feb8fe22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2cb60da346e8d98445e81638a295b3471e7050a3c76cfa141fc22443e2a2e394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb60da346e8d98445e81638a295b3471e7050a3c76cfa141fc22443e2a2e394->enter($__internal_2cb60da346e8d98445e81638a295b3471e7050a3c76cfa141fc22443e2a2e394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a793540e7e8427577a0a0ed6067ae00d51397bc1a3477e0f40a0a0a4feb8fe22->leave($__internal_a793540e7e8427577a0a0ed6067ae00d51397bc1a3477e0f40a0a0a4feb8fe22_prof);

        
        $__internal_2cb60da346e8d98445e81638a295b3471e7050a3c76cfa141fc22443e2a2e394->leave($__internal_2cb60da346e8d98445e81638a295b3471e7050a3c76cfa141fc22443e2a2e394_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d77b0f9bb376e803ba12bec2190123c96facee37e6d3915f4c7f409fdfd4bdc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77b0f9bb376e803ba12bec2190123c96facee37e6d3915f4c7f409fdfd4bdc1->enter($__internal_d77b0f9bb376e803ba12bec2190123c96facee37e6d3915f4c7f409fdfd4bdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_feb403979adcf388e52b5f9355e4fe4e66847286ffebfe490e8a30dd8ba5a7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb403979adcf388e52b5f9355e4fe4e66847286ffebfe490e8a30dd8ba5a7e7->enter($__internal_feb403979adcf388e52b5f9355e4fe4e66847286ffebfe490e8a30dd8ba5a7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_feb403979adcf388e52b5f9355e4fe4e66847286ffebfe490e8a30dd8ba5a7e7->leave($__internal_feb403979adcf388e52b5f9355e4fe4e66847286ffebfe490e8a30dd8ba5a7e7_prof);

        
        $__internal_d77b0f9bb376e803ba12bec2190123c96facee37e6d3915f4c7f409fdfd4bdc1->leave($__internal_d77b0f9bb376e803ba12bec2190123c96facee37e6d3915f4c7f409fdfd4bdc1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4812dae614fd9881087fb43927dabbc8c8f4bd8dee4af9f3fa8cc5a1f46469b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4812dae614fd9881087fb43927dabbc8c8f4bd8dee4af9f3fa8cc5a1f46469b->enter($__internal_c4812dae614fd9881087fb43927dabbc8c8f4bd8dee4af9f3fa8cc5a1f46469b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f0b54aaa265218c6a6ad22c42da299d02a48146571e2c6ca8a547425767eae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0b54aaa265218c6a6ad22c42da299d02a48146571e2c6ca8a547425767eae0->enter($__internal_7f0b54aaa265218c6a6ad22c42da299d02a48146571e2c6ca8a547425767eae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_7f0b54aaa265218c6a6ad22c42da299d02a48146571e2c6ca8a547425767eae0->leave($__internal_7f0b54aaa265218c6a6ad22c42da299d02a48146571e2c6ca8a547425767eae0_prof);

        
        $__internal_c4812dae614fd9881087fb43927dabbc8c8f4bd8dee4af9f3fa8cc5a1f46469b->leave($__internal_c4812dae614fd9881087fb43927dabbc8c8f4bd8dee4af9f3fa8cc5a1f46469b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_861ea2a31e2c3368d841d906abd9e26ee93ecc7110df9e820c6195a080436994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861ea2a31e2c3368d841d906abd9e26ee93ecc7110df9e820c6195a080436994->enter($__internal_861ea2a31e2c3368d841d906abd9e26ee93ecc7110df9e820c6195a080436994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8943bc9b6c3a442c18ffe3792a78ae6959b149a02dcee6d877f35e80bbd73018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8943bc9b6c3a442c18ffe3792a78ae6959b149a02dcee6d877f35e80bbd73018->enter($__internal_8943bc9b6c3a442c18ffe3792a78ae6959b149a02dcee6d877f35e80bbd73018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8943bc9b6c3a442c18ffe3792a78ae6959b149a02dcee6d877f35e80bbd73018->leave($__internal_8943bc9b6c3a442c18ffe3792a78ae6959b149a02dcee6d877f35e80bbd73018_prof);

        
        $__internal_861ea2a31e2c3368d841d906abd9e26ee93ecc7110df9e820c6195a080436994->leave($__internal_861ea2a31e2c3368d841d906abd9e26ee93ecc7110df9e820c6195a080436994_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/projet_file_rougeok/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
