<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_6f86a392b8c267bacd4abf0c90fe8a369b796c19d749e984478a8cf8a0fc7aa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17948d5c994130e773dc23769a7acbf156aca941010e2751b9b70090f38e1394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17948d5c994130e773dc23769a7acbf156aca941010e2751b9b70090f38e1394->enter($__internal_17948d5c994130e773dc23769a7acbf156aca941010e2751b9b70090f38e1394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_518f52ec05d132b1b58239816f319c6a6d9bb7bee47bd9874bfc5398a501bbe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518f52ec05d132b1b58239816f319c6a6d9bb7bee47bd9874bfc5398a501bbe3->enter($__internal_518f52ec05d132b1b58239816f319c6a6d9bb7bee47bd9874bfc5398a501bbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_17948d5c994130e773dc23769a7acbf156aca941010e2751b9b70090f38e1394->leave($__internal_17948d5c994130e773dc23769a7acbf156aca941010e2751b9b70090f38e1394_prof);

        
        $__internal_518f52ec05d132b1b58239816f319c6a6d9bb7bee47bd9874bfc5398a501bbe3->leave($__internal_518f52ec05d132b1b58239816f319c6a6d9bb7bee47bd9874bfc5398a501bbe3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c9819a5075aeda07be58226deb4922d26abaafe3f2d8562d6e6164e0e5b5a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9819a5075aeda07be58226deb4922d26abaafe3f2d8562d6e6164e0e5b5a3f->enter($__internal_2c9819a5075aeda07be58226deb4922d26abaafe3f2d8562d6e6164e0e5b5a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b720c9d69a15fb516e39bc90532b48b83b7ca42d25233e7d030142d3ec8a985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b720c9d69a15fb516e39bc90532b48b83b7ca42d25233e7d030142d3ec8a985->enter($__internal_1b720c9d69a15fb516e39bc90532b48b83b7ca42d25233e7d030142d3ec8a985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1b720c9d69a15fb516e39bc90532b48b83b7ca42d25233e7d030142d3ec8a985->leave($__internal_1b720c9d69a15fb516e39bc90532b48b83b7ca42d25233e7d030142d3ec8a985_prof);

        
        $__internal_2c9819a5075aeda07be58226deb4922d26abaafe3f2d8562d6e6164e0e5b5a3f->leave($__internal_2c9819a5075aeda07be58226deb4922d26abaafe3f2d8562d6e6164e0e5b5a3f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcc9f4c87e1338ec1daeeb34738fcd9cdd16266c3d283cec6773ed46e5d87d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc9f4c87e1338ec1daeeb34738fcd9cdd16266c3d283cec6773ed46e5d87d85->enter($__internal_bcc9f4c87e1338ec1daeeb34738fcd9cdd16266c3d283cec6773ed46e5d87d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_55b4b3df91a61e87807613051785d190f8a189642b0ee5ffdfabbaa711d14bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b4b3df91a61e87807613051785d190f8a189642b0ee5ffdfabbaa711d14bfb->enter($__internal_55b4b3df91a61e87807613051785d190f8a189642b0ee5ffdfabbaa711d14bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_55b4b3df91a61e87807613051785d190f8a189642b0ee5ffdfabbaa711d14bfb->leave($__internal_55b4b3df91a61e87807613051785d190f8a189642b0ee5ffdfabbaa711d14bfb_prof);

        
        $__internal_bcc9f4c87e1338ec1daeeb34738fcd9cdd16266c3d283cec6773ed46e5d87d85->leave($__internal_bcc9f4c87e1338ec1daeeb34738fcd9cdd16266c3d283cec6773ed46e5d87d85_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b829c9a7d6a20788c0d966269f26e13579abbde85914c4076533aa3442a573be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b829c9a7d6a20788c0d966269f26e13579abbde85914c4076533aa3442a573be->enter($__internal_b829c9a7d6a20788c0d966269f26e13579abbde85914c4076533aa3442a573be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8964708df94c806eeebd47ca9a961cceb9e84fb5f5aec2d73d4533529afaec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8964708df94c806eeebd47ca9a961cceb9e84fb5f5aec2d73d4533529afaec5->enter($__internal_f8964708df94c806eeebd47ca9a961cceb9e84fb5f5aec2d73d4533529afaec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f8964708df94c806eeebd47ca9a961cceb9e84fb5f5aec2d73d4533529afaec5->leave($__internal_f8964708df94c806eeebd47ca9a961cceb9e84fb5f5aec2d73d4533529afaec5_prof);

        
        $__internal_b829c9a7d6a20788c0d966269f26e13579abbde85914c4076533aa3442a573be->leave($__internal_b829c9a7d6a20788c0d966269f26e13579abbde85914c4076533aa3442a573be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/projet_file_rougeok/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
