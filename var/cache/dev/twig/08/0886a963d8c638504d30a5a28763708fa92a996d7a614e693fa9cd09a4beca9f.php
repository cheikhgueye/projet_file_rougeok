<?php

/* ::base.html.twig */
class __TwigTemplate_ef6c6a120411fc39388051b3b2e07bd76ddc6c4cacacd748f11683a683eba977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40a372549b3088366db887bb606c8e49dcf5e774a6e90aed46145fa627e9eb05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a372549b3088366db887bb606c8e49dcf5e774a6e90aed46145fa627e9eb05->enter($__internal_40a372549b3088366db887bb606c8e49dcf5e774a6e90aed46145fa627e9eb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_07a4a0ad6e89aa1efd39ea2b5c974e9c1aa6effcf8465062e97e7af421299a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a4a0ad6e89aa1efd39ea2b5c974e9c1aa6effcf8465062e97e7af421299a3f->enter($__internal_07a4a0ad6e89aa1efd39ea2b5c974e9c1aa6effcf8465062e97e7af421299a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </body>
</html>";
        
        $__internal_40a372549b3088366db887bb606c8e49dcf5e774a6e90aed46145fa627e9eb05->leave($__internal_40a372549b3088366db887bb606c8e49dcf5e774a6e90aed46145fa627e9eb05_prof);

        
        $__internal_07a4a0ad6e89aa1efd39ea2b5c974e9c1aa6effcf8465062e97e7af421299a3f->leave($__internal_07a4a0ad6e89aa1efd39ea2b5c974e9c1aa6effcf8465062e97e7af421299a3f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_936803328469edcc07119dfcaf0c5b0bf4f4dacc46a6daf45ebf9f27dec872fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936803328469edcc07119dfcaf0c5b0bf4f4dacc46a6daf45ebf9f27dec872fb->enter($__internal_936803328469edcc07119dfcaf0c5b0bf4f4dacc46a6daf45ebf9f27dec872fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_541d2df1efc2ea6fe69e973f780b527e38f1e654791f8c2473777f6bbb178151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541d2df1efc2ea6fe69e973f780b527e38f1e654791f8c2473777f6bbb178151->enter($__internal_541d2df1efc2ea6fe69e973f780b527e38f1e654791f8c2473777f6bbb178151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_541d2df1efc2ea6fe69e973f780b527e38f1e654791f8c2473777f6bbb178151->leave($__internal_541d2df1efc2ea6fe69e973f780b527e38f1e654791f8c2473777f6bbb178151_prof);

        
        $__internal_936803328469edcc07119dfcaf0c5b0bf4f4dacc46a6daf45ebf9f27dec872fb->leave($__internal_936803328469edcc07119dfcaf0c5b0bf4f4dacc46a6daf45ebf9f27dec872fb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60db1c18e1e2afa59451e55fb21e9f89b7de7f1c941e1e85c8bbd2361176cc31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60db1c18e1e2afa59451e55fb21e9f89b7de7f1c941e1e85c8bbd2361176cc31->enter($__internal_60db1c18e1e2afa59451e55fb21e9f89b7de7f1c941e1e85c8bbd2361176cc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b200aea613f73e22189322355e946b0e8fcd330f246e6928edd0d886d03438f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b200aea613f73e22189322355e946b0e8fcd330f246e6928edd0d886d03438f9->enter($__internal_b200aea613f73e22189322355e946b0e8fcd330f246e6928edd0d886d03438f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
  <script src=\"";
        // line 7
        echo "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js";
        echo "\"></script>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
      <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_b200aea613f73e22189322355e946b0e8fcd330f246e6928edd0d886d03438f9->leave($__internal_b200aea613f73e22189322355e946b0e8fcd330f246e6928edd0d886d03438f9_prof);

        
        $__internal_60db1c18e1e2afa59451e55fb21e9f89b7de7f1c941e1e85c8bbd2361176cc31->leave($__internal_60db1c18e1e2afa59451e55fb21e9f89b7de7f1c941e1e85c8bbd2361176cc31_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cf08f4b1b5045d2e75c561066b409052fbafe896338e3f0ca570c77f84c7d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf08f4b1b5045d2e75c561066b409052fbafe896338e3f0ca570c77f84c7d71->enter($__internal_5cf08f4b1b5045d2e75c561066b409052fbafe896338e3f0ca570c77f84c7d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_156cc86d901cde5156eef0fa674b6c2e3eb511810bdbd1d9cae3531f6619aab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156cc86d901cde5156eef0fa674b6c2e3eb511810bdbd1d9cae3531f6619aab5->enter($__internal_156cc86d901cde5156eef0fa674b6c2e3eb511810bdbd1d9cae3531f6619aab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "        



";
        
        $__internal_156cc86d901cde5156eef0fa674b6c2e3eb511810bdbd1d9cae3531f6619aab5->leave($__internal_156cc86d901cde5156eef0fa674b6c2e3eb511810bdbd1d9cae3531f6619aab5_prof);

        
        $__internal_5cf08f4b1b5045d2e75c561066b409052fbafe896338e3f0ca570c77f84c7d71->leave($__internal_5cf08f4b1b5045d2e75c561066b409052fbafe896338e3f0ca570c77f84c7d71_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b2839cf27c43a40252c9441bfab8092e577035c258ba420a933e81a6c91a6c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2839cf27c43a40252c9441bfab8092e577035c258ba420a933e81a6c91a6c21->enter($__internal_b2839cf27c43a40252c9441bfab8092e577035c258ba420a933e81a6c91a6c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_649c56e7886eaa63fe96b71f54d209767d2e5671e124f30023a581fb78aa65aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649c56e7886eaa63fe96b71f54d209767d2e5671e124f30023a581fb78aa65aa->enter($__internal_649c56e7886eaa63fe96b71f54d209767d2e5671e124f30023a581fb78aa65aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
   
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
        
        
        ";
        
        $__internal_649c56e7886eaa63fe96b71f54d209767d2e5671e124f30023a581fb78aa65aa->leave($__internal_649c56e7886eaa63fe96b71f54d209767d2e5671e124f30023a581fb78aa65aa_prof);

        
        $__internal_b2839cf27c43a40252c9441bfab8092e577035c258ba420a933e81a6c91a6c21->leave($__internal_b2839cf27c43a40252c9441bfab8092e577035c258ba420a933e81a6c91a6c21_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 22,  132 => 21,  118 => 16,  109 => 15,  97 => 10,  91 => 7,  80 => 6,  62 => 5,  51 => 28,  48 => 21,  46 => 15,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
  <script src=\"{{\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\" }}\"></script>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
      <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        {% endblock %}
        
    </head>
    <body>
        {% block body %}
        



{% endblock %}
        {% block javascripts %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
   
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
        
        
        {% endblock %}
    </body>
</html>", "::base.html.twig", "/var/www/html/projet_file_rougeok/app/Resources/views/base.html.twig");
    }
}
