<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_69b3e64d659da9bea4afeb40f889b7b25b3c6685d1e3f5ab587b3f78b76d31ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_76257200b8dc91be6df765e5cb39d03b211dc948347d1dbd0f0d73be524543ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76257200b8dc91be6df765e5cb39d03b211dc948347d1dbd0f0d73be524543ad->enter($__internal_76257200b8dc91be6df765e5cb39d03b211dc948347d1dbd0f0d73be524543ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_bc1d689c0c0398c281b2b06f028fec8c760c61a8c61ec3981771548dbaa6b1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1d689c0c0398c281b2b06f028fec8c760c61a8c61ec3981771548dbaa6b1df->enter($__internal_bc1d689c0c0398c281b2b06f028fec8c760c61a8c61ec3981771548dbaa6b1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76257200b8dc91be6df765e5cb39d03b211dc948347d1dbd0f0d73be524543ad->leave($__internal_76257200b8dc91be6df765e5cb39d03b211dc948347d1dbd0f0d73be524543ad_prof);

        
        $__internal_bc1d689c0c0398c281b2b06f028fec8c760c61a8c61ec3981771548dbaa6b1df->leave($__internal_bc1d689c0c0398c281b2b06f028fec8c760c61a8c61ec3981771548dbaa6b1df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2c3a324db2ef00b9fe8a1d5b1743820cf6ffbb92aeb3345c684ec3097264fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c3a324db2ef00b9fe8a1d5b1743820cf6ffbb92aeb3345c684ec3097264fd6->enter($__internal_a2c3a324db2ef00b9fe8a1d5b1743820cf6ffbb92aeb3345c684ec3097264fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e8dfe37b967632beae62a9ef6e596455b037903747c924b16ad5b48b7c7390de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8dfe37b967632beae62a9ef6e596455b037903747c924b16ad5b48b7c7390de->enter($__internal_e8dfe37b967632beae62a9ef6e596455b037903747c924b16ad5b48b7c7390de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e8dfe37b967632beae62a9ef6e596455b037903747c924b16ad5b48b7c7390de->leave($__internal_e8dfe37b967632beae62a9ef6e596455b037903747c924b16ad5b48b7c7390de_prof);

        
        $__internal_a2c3a324db2ef00b9fe8a1d5b1743820cf6ffbb92aeb3345c684ec3097264fd6->leave($__internal_a2c3a324db2ef00b9fe8a1d5b1743820cf6ffbb92aeb3345c684ec3097264fd6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b85fed3d2dd42aac3da2069e1fb2cd0b9acd9d6f776c3651e01112d9e4072d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85fed3d2dd42aac3da2069e1fb2cd0b9acd9d6f776c3651e01112d9e4072d2a->enter($__internal_b85fed3d2dd42aac3da2069e1fb2cd0b9acd9d6f776c3651e01112d9e4072d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d413bf53c13936e3d59d21637341114247062b5f3ceb684136786850533d981e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d413bf53c13936e3d59d21637341114247062b5f3ceb684136786850533d981e->enter($__internal_d413bf53c13936e3d59d21637341114247062b5f3ceb684136786850533d981e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d413bf53c13936e3d59d21637341114247062b5f3ceb684136786850533d981e->leave($__internal_d413bf53c13936e3d59d21637341114247062b5f3ceb684136786850533d981e_prof);

        
        $__internal_b85fed3d2dd42aac3da2069e1fb2cd0b9acd9d6f776c3651e01112d9e4072d2a->leave($__internal_b85fed3d2dd42aac3da2069e1fb2cd0b9acd9d6f776c3651e01112d9e4072d2a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a36709003b164befb70ceca1d9904662996aafe8303b3ccb12f42f2f4d9d83ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36709003b164befb70ceca1d9904662996aafe8303b3ccb12f42f2f4d9d83ef->enter($__internal_a36709003b164befb70ceca1d9904662996aafe8303b3ccb12f42f2f4d9d83ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe947bb35b13a9df1bed193119a9026fa0ae96fdaf60934beaff5e39d4747906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe947bb35b13a9df1bed193119a9026fa0ae96fdaf60934beaff5e39d4747906->enter($__internal_fe947bb35b13a9df1bed193119a9026fa0ae96fdaf60934beaff5e39d4747906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_fe947bb35b13a9df1bed193119a9026fa0ae96fdaf60934beaff5e39d4747906->leave($__internal_fe947bb35b13a9df1bed193119a9026fa0ae96fdaf60934beaff5e39d4747906_prof);

        
        $__internal_a36709003b164befb70ceca1d9904662996aafe8303b3ccb12f42f2f4d9d83ef->leave($__internal_a36709003b164befb70ceca1d9904662996aafe8303b3ccb12f42f2f4d9d83ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
