<?php

/* ::base.html.twig */
class __TwigTemplate_f669f1eede2fbbbb2cdc030f9e4310fe89d004335e49db03745bb9a795162a02 extends Twig_Template
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
        $__internal_684c91421843738e9f4f2855bf154f93b0a7bb07d5bf5e48144da27ef23f75c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684c91421843738e9f4f2855bf154f93b0a7bb07d5bf5e48144da27ef23f75c7->enter($__internal_684c91421843738e9f4f2855bf154f93b0a7bb07d5bf5e48144da27ef23f75c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_cea1dc20f09224156bf24ebf1f7a1032b4c72dd09e09f990ff4eefff03ed79b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea1dc20f09224156bf24ebf1f7a1032b4c72dd09e09f990ff4eefff03ed79b1->enter($__internal_cea1dc20f09224156bf24ebf1f7a1032b4c72dd09e09f990ff4eefff03ed79b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_684c91421843738e9f4f2855bf154f93b0a7bb07d5bf5e48144da27ef23f75c7->leave($__internal_684c91421843738e9f4f2855bf154f93b0a7bb07d5bf5e48144da27ef23f75c7_prof);

        
        $__internal_cea1dc20f09224156bf24ebf1f7a1032b4c72dd09e09f990ff4eefff03ed79b1->leave($__internal_cea1dc20f09224156bf24ebf1f7a1032b4c72dd09e09f990ff4eefff03ed79b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa814b07e9508c960c9145536b21df9e8abef16fd4d83d587fe5269e789cbc07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa814b07e9508c960c9145536b21df9e8abef16fd4d83d587fe5269e789cbc07->enter($__internal_aa814b07e9508c960c9145536b21df9e8abef16fd4d83d587fe5269e789cbc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9f3cc8371479b2f9a8a835f7520be7c80ceec687149a085e7674fd8b714226c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f3cc8371479b2f9a8a835f7520be7c80ceec687149a085e7674fd8b714226c->enter($__internal_d9f3cc8371479b2f9a8a835f7520be7c80ceec687149a085e7674fd8b714226c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d9f3cc8371479b2f9a8a835f7520be7c80ceec687149a085e7674fd8b714226c->leave($__internal_d9f3cc8371479b2f9a8a835f7520be7c80ceec687149a085e7674fd8b714226c_prof);

        
        $__internal_aa814b07e9508c960c9145536b21df9e8abef16fd4d83d587fe5269e789cbc07->leave($__internal_aa814b07e9508c960c9145536b21df9e8abef16fd4d83d587fe5269e789cbc07_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5eb16938f558673f06f0da23d94dd54cba874f73e9d7dee305bfcab8f31c3a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb16938f558673f06f0da23d94dd54cba874f73e9d7dee305bfcab8f31c3a29->enter($__internal_5eb16938f558673f06f0da23d94dd54cba874f73e9d7dee305bfcab8f31c3a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9b249cc61ada8b5311caf26a3bca84de7264ee97a21ece4a3b68bc27831e6e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b249cc61ada8b5311caf26a3bca84de7264ee97a21ece4a3b68bc27831e6e1d->enter($__internal_9b249cc61ada8b5311caf26a3bca84de7264ee97a21ece4a3b68bc27831e6e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9b249cc61ada8b5311caf26a3bca84de7264ee97a21ece4a3b68bc27831e6e1d->leave($__internal_9b249cc61ada8b5311caf26a3bca84de7264ee97a21ece4a3b68bc27831e6e1d_prof);

        
        $__internal_5eb16938f558673f06f0da23d94dd54cba874f73e9d7dee305bfcab8f31c3a29->leave($__internal_5eb16938f558673f06f0da23d94dd54cba874f73e9d7dee305bfcab8f31c3a29_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bb1bdd38031630fad3e16940e991e1045f4b05d17e007006edeb11467192cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb1bdd38031630fad3e16940e991e1045f4b05d17e007006edeb11467192cd7->enter($__internal_3bb1bdd38031630fad3e16940e991e1045f4b05d17e007006edeb11467192cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e5c8ec8fb622c3ce126483265561880cf69edb7c783a0d99e5a0e4b10dfc1de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5c8ec8fb622c3ce126483265561880cf69edb7c783a0d99e5a0e4b10dfc1de->enter($__internal_9e5c8ec8fb622c3ce126483265561880cf69edb7c783a0d99e5a0e4b10dfc1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "        



";
        
        $__internal_9e5c8ec8fb622c3ce126483265561880cf69edb7c783a0d99e5a0e4b10dfc1de->leave($__internal_9e5c8ec8fb622c3ce126483265561880cf69edb7c783a0d99e5a0e4b10dfc1de_prof);

        
        $__internal_3bb1bdd38031630fad3e16940e991e1045f4b05d17e007006edeb11467192cd7->leave($__internal_3bb1bdd38031630fad3e16940e991e1045f4b05d17e007006edeb11467192cd7_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b118fdd0209ced21e482939b274b7463bb8fc64be40a3135172ede2fc4eaf83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b118fdd0209ced21e482939b274b7463bb8fc64be40a3135172ede2fc4eaf83->enter($__internal_6b118fdd0209ced21e482939b274b7463bb8fc64be40a3135172ede2fc4eaf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5d8483f7c7cd459c55af57e00c42428ff671da65cfb96b36230b91d4d05dea41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8483f7c7cd459c55af57e00c42428ff671da65cfb96b36230b91d4d05dea41->enter($__internal_5d8483f7c7cd459c55af57e00c42428ff671da65cfb96b36230b91d4d05dea41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
   
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
        
        
        ";
        
        $__internal_5d8483f7c7cd459c55af57e00c42428ff671da65cfb96b36230b91d4d05dea41->leave($__internal_5d8483f7c7cd459c55af57e00c42428ff671da65cfb96b36230b91d4d05dea41_prof);

        
        $__internal_6b118fdd0209ced21e482939b274b7463bb8fc64be40a3135172ede2fc4eaf83->leave($__internal_6b118fdd0209ced21e482939b274b7463bb8fc64be40a3135172ede2fc4eaf83_prof);

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
</html>", "::base.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/base.html.twig");
    }
}
