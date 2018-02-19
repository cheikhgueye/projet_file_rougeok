<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_8967937321b1ae7d170864a70dd828cb1035089a5ad6deeff0744d2c045940dc extends Twig_Template
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
        $__internal_ef13aecbedeb0916b8f39d320c6954824fd461472356e5d040c4d49a4ca6d88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef13aecbedeb0916b8f39d320c6954824fd461472356e5d040c4d49a4ca6d88f->enter($__internal_ef13aecbedeb0916b8f39d320c6954824fd461472356e5d040c4d49a4ca6d88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_dcc42031cdad68b3a971ba7f3e6dea1c3ae86f41976e42c48c916a1bb7667cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc42031cdad68b3a971ba7f3e6dea1c3ae86f41976e42c48c916a1bb7667cb5->enter($__internal_dcc42031cdad68b3a971ba7f3e6dea1c3ae86f41976e42c48c916a1bb7667cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_ef13aecbedeb0916b8f39d320c6954824fd461472356e5d040c4d49a4ca6d88f->leave($__internal_ef13aecbedeb0916b8f39d320c6954824fd461472356e5d040c4d49a4ca6d88f_prof);

        
        $__internal_dcc42031cdad68b3a971ba7f3e6dea1c3ae86f41976e42c48c916a1bb7667cb5->leave($__internal_dcc42031cdad68b3a971ba7f3e6dea1c3ae86f41976e42c48c916a1bb7667cb5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/projet_file_rougeok/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
