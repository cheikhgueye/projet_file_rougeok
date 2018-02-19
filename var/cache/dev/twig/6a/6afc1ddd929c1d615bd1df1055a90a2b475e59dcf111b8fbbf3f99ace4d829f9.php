<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_b0dfca780ab67bdcd910d67adba215915a738cc36de7590108a0a3856ef7022c extends Twig_Template
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
        $__internal_5403dd522567b3d156be4631bc07dbc57a19b94fa696830bb0ab1df4f6e56328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5403dd522567b3d156be4631bc07dbc57a19b94fa696830bb0ab1df4f6e56328->enter($__internal_5403dd522567b3d156be4631bc07dbc57a19b94fa696830bb0ab1df4f6e56328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_c19341d784851b3860d6808400ea906c27386c736750e02f270c06374ca1f574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19341d784851b3860d6808400ea906c27386c736750e02f270c06374ca1f574->enter($__internal_c19341d784851b3860d6808400ea906c27386c736750e02f270c06374ca1f574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_5403dd522567b3d156be4631bc07dbc57a19b94fa696830bb0ab1df4f6e56328->leave($__internal_5403dd522567b3d156be4631bc07dbc57a19b94fa696830bb0ab1df4f6e56328_prof);

        
        $__internal_c19341d784851b3860d6808400ea906c27386c736750e02f270c06374ca1f574->leave($__internal_c19341d784851b3860d6808400ea906c27386c736750e02f270c06374ca1f574_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
