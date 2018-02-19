<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_1217f84580908c8b51bc1642d425d3f8e5b6436f58d2426ea829543067c82b17 extends Twig_Template
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
        $__internal_37b3fb4a46397661cab7191ddbbbfedee1fdfa09cad4109e74b26badfc8ead29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b3fb4a46397661cab7191ddbbbfedee1fdfa09cad4109e74b26badfc8ead29->enter($__internal_37b3fb4a46397661cab7191ddbbbfedee1fdfa09cad4109e74b26badfc8ead29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_2ec76eedb4c4f4cf8ac9033f5d8d1328e6178f2a514c18c41eb1babb8ada18ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec76eedb4c4f4cf8ac9033f5d8d1328e6178f2a514c18c41eb1babb8ada18ae->enter($__internal_2ec76eedb4c4f4cf8ac9033f5d8d1328e6178f2a514c18c41eb1babb8ada18ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_37b3fb4a46397661cab7191ddbbbfedee1fdfa09cad4109e74b26badfc8ead29->leave($__internal_37b3fb4a46397661cab7191ddbbbfedee1fdfa09cad4109e74b26badfc8ead29_prof);

        
        $__internal_2ec76eedb4c4f4cf8ac9033f5d8d1328e6178f2a514c18c41eb1babb8ada18ae->leave($__internal_2ec76eedb4c4f4cf8ac9033f5d8d1328e6178f2a514c18c41eb1babb8ada18ae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
