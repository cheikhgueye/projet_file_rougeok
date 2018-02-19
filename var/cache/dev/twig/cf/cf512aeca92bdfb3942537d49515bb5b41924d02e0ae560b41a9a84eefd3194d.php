<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_012bfb3b75ddcc4384c250a2fc9c43a6b75a851332e5b17e985893fdb559e6e1 extends Twig_Template
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
        $__internal_7bae7bc920821d8134c826df15d7e8511afa8321a0d0c0a5779f143fd9f67c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bae7bc920821d8134c826df15d7e8511afa8321a0d0c0a5779f143fd9f67c81->enter($__internal_7bae7bc920821d8134c826df15d7e8511afa8321a0d0c0a5779f143fd9f67c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_c61e77cc60f8d115a6bcf9cd23175d2c95474388a1682ae073c45cab66be52c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61e77cc60f8d115a6bcf9cd23175d2c95474388a1682ae073c45cab66be52c3->enter($__internal_c61e77cc60f8d115a6bcf9cd23175d2c95474388a1682ae073c45cab66be52c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_7bae7bc920821d8134c826df15d7e8511afa8321a0d0c0a5779f143fd9f67c81->leave($__internal_7bae7bc920821d8134c826df15d7e8511afa8321a0d0c0a5779f143fd9f67c81_prof);

        
        $__internal_c61e77cc60f8d115a6bcf9cd23175d2c95474388a1682ae073c45cab66be52c3->leave($__internal_c61e77cc60f8d115a6bcf9cd23175d2c95474388a1682ae073c45cab66be52c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
