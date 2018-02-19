<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_e4bccb4f6d7476cb80393a6546997f32abd39e012d627a89e9f4a403c87989c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a81c5eb8a641631238d6c4b6cdf3fc996cb37f02278824f9ba47f8107e954b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a81c5eb8a641631238d6c4b6cdf3fc996cb37f02278824f9ba47f8107e954b7->enter($__internal_7a81c5eb8a641631238d6c4b6cdf3fc996cb37f02278824f9ba47f8107e954b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_69a20a0ba512bfd41a773ca4bdbb1c058fb391c62ed0c8460f55b64d443a7aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a20a0ba512bfd41a773ca4bdbb1c058fb391c62ed0c8460f55b64d443a7aa2->enter($__internal_69a20a0ba512bfd41a773ca4bdbb1c058fb391c62ed0c8460f55b64d443a7aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a81c5eb8a641631238d6c4b6cdf3fc996cb37f02278824f9ba47f8107e954b7->leave($__internal_7a81c5eb8a641631238d6c4b6cdf3fc996cb37f02278824f9ba47f8107e954b7_prof);

        
        $__internal_69a20a0ba512bfd41a773ca4bdbb1c058fb391c62ed0c8460f55b64d443a7aa2->leave($__internal_69a20a0ba512bfd41a773ca4bdbb1c058fb391c62ed0c8460f55b64d443a7aa2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1cfca51aeb8f0f14560c2950cd3c290d0cce18c0dee0ab14fc79f5a92801f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1cfca51aeb8f0f14560c2950cd3c290d0cce18c0dee0ab14fc79f5a92801f1a->enter($__internal_b1cfca51aeb8f0f14560c2950cd3c290d0cce18c0dee0ab14fc79f5a92801f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5007caa252af24cf04bed63dce55cfee7d6d0e82a10a972c653de1a23c3c73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5007caa252af24cf04bed63dce55cfee7d6d0e82a10a972c653de1a23c3c73d->enter($__internal_f5007caa252af24cf04bed63dce55cfee7d6d0e82a10a972c653de1a23c3c73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f5007caa252af24cf04bed63dce55cfee7d6d0e82a10a972c653de1a23c3c73d->leave($__internal_f5007caa252af24cf04bed63dce55cfee7d6d0e82a10a972c653de1a23c3c73d_prof);

        
        $__internal_b1cfca51aeb8f0f14560c2950cd3c290d0cce18c0dee0ab14fc79f5a92801f1a->leave($__internal_b1cfca51aeb8f0f14560c2950cd3c290d0cce18c0dee0ab14fc79f5a92801f1a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c01bc0fa93ceacfd4845465a3021ad8cd8c4785df43b581b5b48df33d7dd676e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01bc0fa93ceacfd4845465a3021ad8cd8c4785df43b581b5b48df33d7dd676e->enter($__internal_c01bc0fa93ceacfd4845465a3021ad8cd8c4785df43b581b5b48df33d7dd676e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae0ff48d14b7153f70b0e1c1ac65390cd32767afa0eb27b9fcd73bc52f19aa4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0ff48d14b7153f70b0e1c1ac65390cd32767afa0eb27b9fcd73bc52f19aa4f->enter($__internal_ae0ff48d14b7153f70b0e1c1ac65390cd32767afa0eb27b9fcd73bc52f19aa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_ae0ff48d14b7153f70b0e1c1ac65390cd32767afa0eb27b9fcd73bc52f19aa4f->leave($__internal_ae0ff48d14b7153f70b0e1c1ac65390cd32767afa0eb27b9fcd73bc52f19aa4f_prof);

        
        $__internal_c01bc0fa93ceacfd4845465a3021ad8cd8c4785df43b581b5b48df33d7dd676e->leave($__internal_c01bc0fa93ceacfd4845465a3021ad8cd8c4785df43b581b5b48df33d7dd676e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
