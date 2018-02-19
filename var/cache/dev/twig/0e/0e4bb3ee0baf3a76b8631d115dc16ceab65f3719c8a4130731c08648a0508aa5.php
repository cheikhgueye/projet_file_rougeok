<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3adb704a89d6d14fc56112cb5b4b639dac2f7b8b3c6c9747d8efbab24d38da8c extends Twig_Template
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
        $__internal_1e8558b6674b26742e4e418d53619fdbf84c2c6e86bd7849d921b65ddff1a973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8558b6674b26742e4e418d53619fdbf84c2c6e86bd7849d921b65ddff1a973->enter($__internal_1e8558b6674b26742e4e418d53619fdbf84c2c6e86bd7849d921b65ddff1a973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ce1312dfee42e523573b6bdd17ec787bb53d0d2d9d6e8e7b2c8e009f197d33e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1312dfee42e523573b6bdd17ec787bb53d0d2d9d6e8e7b2c8e009f197d33e1->enter($__internal_ce1312dfee42e523573b6bdd17ec787bb53d0d2d9d6e8e7b2c8e009f197d33e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1e8558b6674b26742e4e418d53619fdbf84c2c6e86bd7849d921b65ddff1a973->leave($__internal_1e8558b6674b26742e4e418d53619fdbf84c2c6e86bd7849d921b65ddff1a973_prof);

        
        $__internal_ce1312dfee42e523573b6bdd17ec787bb53d0d2d9d6e8e7b2c8e009f197d33e1->leave($__internal_ce1312dfee42e523573b6bdd17ec787bb53d0d2d9d6e8e7b2c8e009f197d33e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
