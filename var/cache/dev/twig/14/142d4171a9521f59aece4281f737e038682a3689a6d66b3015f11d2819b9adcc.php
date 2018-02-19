<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_eabad89878253c9156cd60660ff2c56741338edb41cae4ab1b4204fb11500040 extends Twig_Template
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
        $__internal_7f6c1a7b022539ccfdeba820e4e6bc5dd9bc5b924f6d0f5d5e74c378da7cb877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6c1a7b022539ccfdeba820e4e6bc5dd9bc5b924f6d0f5d5e74c378da7cb877->enter($__internal_7f6c1a7b022539ccfdeba820e4e6bc5dd9bc5b924f6d0f5d5e74c378da7cb877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2b01c5bd83256444b6dbbb1980181149b2d8d4f8abab40cda07ea16a241f9b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b01c5bd83256444b6dbbb1980181149b2d8d4f8abab40cda07ea16a241f9b11->enter($__internal_2b01c5bd83256444b6dbbb1980181149b2d8d4f8abab40cda07ea16a241f9b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7f6c1a7b022539ccfdeba820e4e6bc5dd9bc5b924f6d0f5d5e74c378da7cb877->leave($__internal_7f6c1a7b022539ccfdeba820e4e6bc5dd9bc5b924f6d0f5d5e74c378da7cb877_prof);

        
        $__internal_2b01c5bd83256444b6dbbb1980181149b2d8d4f8abab40cda07ea16a241f9b11->leave($__internal_2b01c5bd83256444b6dbbb1980181149b2d8d4f8abab40cda07ea16a241f9b11_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e8ddcb8e10746a8c17719300e9df2c707e6ee2a8a44bd2bc0e95d54a1d2b7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8ddcb8e10746a8c17719300e9df2c707e6ee2a8a44bd2bc0e95d54a1d2b7c1->enter($__internal_0e8ddcb8e10746a8c17719300e9df2c707e6ee2a8a44bd2bc0e95d54a1d2b7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8371de0424d0357af897bccc369a255a931acfd0d5ed4a65b4e5bcd02e14dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8371de0424d0357af897bccc369a255a931acfd0d5ed4a65b4e5bcd02e14dba->enter($__internal_b8371de0424d0357af897bccc369a255a931acfd0d5ed4a65b4e5bcd02e14dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b8371de0424d0357af897bccc369a255a931acfd0d5ed4a65b4e5bcd02e14dba->leave($__internal_b8371de0424d0357af897bccc369a255a931acfd0d5ed4a65b4e5bcd02e14dba_prof);

        
        $__internal_0e8ddcb8e10746a8c17719300e9df2c707e6ee2a8a44bd2bc0e95d54a1d2b7c1->leave($__internal_0e8ddcb8e10746a8c17719300e9df2c707e6ee2a8a44bd2bc0e95d54a1d2b7c1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d25380c11e26ffee115c4300eb019e292ebc30bfe8fc113b6bb6a200a3b9df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d25380c11e26ffee115c4300eb019e292ebc30bfe8fc113b6bb6a200a3b9df1->enter($__internal_8d25380c11e26ffee115c4300eb019e292ebc30bfe8fc113b6bb6a200a3b9df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_851989a5215c6c2cdcf48dc2d667e30d7ac94d64ed4091d63a732edb09499789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851989a5215c6c2cdcf48dc2d667e30d7ac94d64ed4091d63a732edb09499789->enter($__internal_851989a5215c6c2cdcf48dc2d667e30d7ac94d64ed4091d63a732edb09499789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_851989a5215c6c2cdcf48dc2d667e30d7ac94d64ed4091d63a732edb09499789->leave($__internal_851989a5215c6c2cdcf48dc2d667e30d7ac94d64ed4091d63a732edb09499789_prof);

        
        $__internal_8d25380c11e26ffee115c4300eb019e292ebc30bfe8fc113b6bb6a200a3b9df1->leave($__internal_8d25380c11e26ffee115c4300eb019e292ebc30bfe8fc113b6bb6a200a3b9df1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_54861dfe861a5b32ed4ede1c973a2b5a51855f31eb81900d4627c24f9b53fe47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54861dfe861a5b32ed4ede1c973a2b5a51855f31eb81900d4627c24f9b53fe47->enter($__internal_54861dfe861a5b32ed4ede1c973a2b5a51855f31eb81900d4627c24f9b53fe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_957667d3b4d99543a64aa8779dde9524397eda93df5ba378e6c3b17b78faedf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957667d3b4d99543a64aa8779dde9524397eda93df5ba378e6c3b17b78faedf3->enter($__internal_957667d3b4d99543a64aa8779dde9524397eda93df5ba378e6c3b17b78faedf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_957667d3b4d99543a64aa8779dde9524397eda93df5ba378e6c3b17b78faedf3->leave($__internal_957667d3b4d99543a64aa8779dde9524397eda93df5ba378e6c3b17b78faedf3_prof);

        
        $__internal_54861dfe861a5b32ed4ede1c973a2b5a51855f31eb81900d4627c24f9b53fe47->leave($__internal_54861dfe861a5b32ed4ede1c973a2b5a51855f31eb81900d4627c24f9b53fe47_prof);

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
", "@Twig/layout.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
