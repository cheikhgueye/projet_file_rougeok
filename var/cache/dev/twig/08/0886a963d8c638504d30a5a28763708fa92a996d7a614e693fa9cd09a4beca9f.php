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
        $__internal_35837be2e5ce24f42eadc11172fe9f76edbc0e865c0c537b4a61b2dc0b005b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35837be2e5ce24f42eadc11172fe9f76edbc0e865c0c537b4a61b2dc0b005b35->enter($__internal_35837be2e5ce24f42eadc11172fe9f76edbc0e865c0c537b4a61b2dc0b005b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_1bccda785775b1faf7eff5bd438a2a47923c309957c8925613627d4cc0a521ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bccda785775b1faf7eff5bd438a2a47923c309957c8925613627d4cc0a521ac->enter($__internal_1bccda785775b1faf7eff5bd438a2a47923c309957c8925613627d4cc0a521ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
<script>


\$(document).ready(function () {

    \$('#table_id').DataTable({

        

    });

});


</script>";
        
        $__internal_35837be2e5ce24f42eadc11172fe9f76edbc0e865c0c537b4a61b2dc0b005b35->leave($__internal_35837be2e5ce24f42eadc11172fe9f76edbc0e865c0c537b4a61b2dc0b005b35_prof);

        
        $__internal_1bccda785775b1faf7eff5bd438a2a47923c309957c8925613627d4cc0a521ac->leave($__internal_1bccda785775b1faf7eff5bd438a2a47923c309957c8925613627d4cc0a521ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_69cb20d3b39e9df4602306643d5e5cebd2d251ac0f7c5742dcbedc3cba8e8801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cb20d3b39e9df4602306643d5e5cebd2d251ac0f7c5742dcbedc3cba8e8801->enter($__internal_69cb20d3b39e9df4602306643d5e5cebd2d251ac0f7c5742dcbedc3cba8e8801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e794e168eb2512d6bf709bb596b3a7f86169f3958084a03f4a738f77ef659e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e794e168eb2512d6bf709bb596b3a7f86169f3958084a03f4a738f77ef659e9->enter($__internal_6e794e168eb2512d6bf709bb596b3a7f86169f3958084a03f4a738f77ef659e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6e794e168eb2512d6bf709bb596b3a7f86169f3958084a03f4a738f77ef659e9->leave($__internal_6e794e168eb2512d6bf709bb596b3a7f86169f3958084a03f4a738f77ef659e9_prof);

        
        $__internal_69cb20d3b39e9df4602306643d5e5cebd2d251ac0f7c5742dcbedc3cba8e8801->leave($__internal_69cb20d3b39e9df4602306643d5e5cebd2d251ac0f7c5742dcbedc3cba8e8801_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2dcf1556d477f4dc75d18a727f09756a398d59541603090ae2a67b0e92bed512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcf1556d477f4dc75d18a727f09756a398d59541603090ae2a67b0e92bed512->enter($__internal_2dcf1556d477f4dc75d18a727f09756a398d59541603090ae2a67b0e92bed512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c1f6345590865335d473af9bdd3430db5474d0ebbfca683a91c6ac5bdad9bff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f6345590865335d473af9bdd3430db5474d0ebbfca683a91c6ac5bdad9bff0->enter($__internal_c1f6345590865335d473af9bdd3430db5474d0ebbfca683a91c6ac5bdad9bff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css\"/>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/DataTables/datatables.css\">
      
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/DataTables/datatables.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.datatables.net/plug-ins/1.10.9/i18n/French.json\">
        ";
        
        $__internal_c1f6345590865335d473af9bdd3430db5474d0ebbfca683a91c6ac5bdad9bff0->leave($__internal_c1f6345590865335d473af9bdd3430db5474d0ebbfca683a91c6ac5bdad9bff0_prof);

        
        $__internal_2dcf1556d477f4dc75d18a727f09756a398d59541603090ae2a67b0e92bed512->leave($__internal_2dcf1556d477f4dc75d18a727f09756a398d59541603090ae2a67b0e92bed512_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_16d669ad288d581545d17c102d2b97cf4b6ba7cad1879bcbe43626ceacb3a2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d669ad288d581545d17c102d2b97cf4b6ba7cad1879bcbe43626ceacb3a2ee->enter($__internal_16d669ad288d581545d17c102d2b97cf4b6ba7cad1879bcbe43626ceacb3a2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f341723d0d29d9de301609e41190b891291d2c44e3bf457d16a227615c91debb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f341723d0d29d9de301609e41190b891291d2c44e3bf457d16a227615c91debb->enter($__internal_f341723d0d29d9de301609e41190b891291d2c44e3bf457d16a227615c91debb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f341723d0d29d9de301609e41190b891291d2c44e3bf457d16a227615c91debb->leave($__internal_f341723d0d29d9de301609e41190b891291d2c44e3bf457d16a227615c91debb_prof);

        
        $__internal_16d669ad288d581545d17c102d2b97cf4b6ba7cad1879bcbe43626ceacb3a2ee->leave($__internal_16d669ad288d581545d17c102d2b97cf4b6ba7cad1879bcbe43626ceacb3a2ee_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dce29b204e83010f7e4bd2f7f81bd327819e8d8b8cbae73a326fb9d0e9f78813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce29b204e83010f7e4bd2f7f81bd327819e8d8b8cbae73a326fb9d0e9f78813->enter($__internal_dce29b204e83010f7e4bd2f7f81bd327819e8d8b8cbae73a326fb9d0e9f78813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9fd49e886cfe1448f3025ef2c094e838412f59a9c3319c718980834c8ecca84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd49e886cfe1448f3025ef2c094e838412f59a9c3319c718980834c8ecca84f->enter($__internal_9fd49e886cfe1448f3025ef2c094e838412f59a9c3319c718980834c8ecca84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
   
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
          <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.js\"></script>
        
        
        ";
        
        $__internal_9fd49e886cfe1448f3025ef2c094e838412f59a9c3319c718980834c8ecca84f->leave($__internal_9fd49e886cfe1448f3025ef2c094e838412f59a9c3319c718980834c8ecca84f_prof);

        
        $__internal_dce29b204e83010f7e4bd2f7f81bd327819e8d8b8cbae73a326fb9d0e9f78813->leave($__internal_dce29b204e83010f7e4bd2f7f81bd327819e8d8b8cbae73a326fb9d0e9f78813_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 23,  143 => 22,  126 => 21,  106 => 7,  97 => 6,  79 => 5,  53 => 30,  50 => 22,  48 => 21,  41 => 18,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css\"/>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/DataTables/datatables.css\">
      
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/DataTables/datatables.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.datatables.net/plug-ins/1.10.9/i18n/French.json\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
   
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
          <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.js\"></script>
        
        
        {% endblock %}
    </body>
</html>
<script>


\$(document).ready(function () {

    \$('#table_id').DataTable({

        

    });

});


</script>", "::base.html.twig", "/var/www/html/projet_file_rougeok/app/Resources/views/base.html.twig");
    }
}
