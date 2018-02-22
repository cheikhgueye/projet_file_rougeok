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
        $__internal_abf6f33da6fe7d46fa3bedb58b99253599d957eb28dedabb33a9a530f12951c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf6f33da6fe7d46fa3bedb58b99253599d957eb28dedabb33a9a530f12951c8->enter($__internal_abf6f33da6fe7d46fa3bedb58b99253599d957eb28dedabb33a9a530f12951c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_98a535ba3f82018a2e0aca5a9ea71fdd1e4b32340cd8ca7d199c7bcaf77ed83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a535ba3f82018a2e0aca5a9ea71fdd1e4b32340cd8ca7d199c7bcaf77ed83b->enter($__internal_98a535ba3f82018a2e0aca5a9ea71fdd1e4b32340cd8ca7d199c7bcaf77ed83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
<script>


\$(document).ready(function () {

    \$('#table_id').DataTable({

        

    });

});


</script>";
        
        $__internal_abf6f33da6fe7d46fa3bedb58b99253599d957eb28dedabb33a9a530f12951c8->leave($__internal_abf6f33da6fe7d46fa3bedb58b99253599d957eb28dedabb33a9a530f12951c8_prof);

        
        $__internal_98a535ba3f82018a2e0aca5a9ea71fdd1e4b32340cd8ca7d199c7bcaf77ed83b->leave($__internal_98a535ba3f82018a2e0aca5a9ea71fdd1e4b32340cd8ca7d199c7bcaf77ed83b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_de9c271833d0a2d141ab015427a3a23ef7488e273b078a3089735ad08d7ba0c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9c271833d0a2d141ab015427a3a23ef7488e273b078a3089735ad08d7ba0c8->enter($__internal_de9c271833d0a2d141ab015427a3a23ef7488e273b078a3089735ad08d7ba0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6692947d1a706aa3fc89e9acd0503c821b6c8ad853982c2db45b68d7e2b906f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6692947d1a706aa3fc89e9acd0503c821b6c8ad853982c2db45b68d7e2b906f5->enter($__internal_6692947d1a706aa3fc89e9acd0503c821b6c8ad853982c2db45b68d7e2b906f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6692947d1a706aa3fc89e9acd0503c821b6c8ad853982c2db45b68d7e2b906f5->leave($__internal_6692947d1a706aa3fc89e9acd0503c821b6c8ad853982c2db45b68d7e2b906f5_prof);

        
        $__internal_de9c271833d0a2d141ab015427a3a23ef7488e273b078a3089735ad08d7ba0c8->leave($__internal_de9c271833d0a2d141ab015427a3a23ef7488e273b078a3089735ad08d7ba0c8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_efed79828486e64003b577f76a7d09ac2000b44615fc37793c2ee3602a41b366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efed79828486e64003b577f76a7d09ac2000b44615fc37793c2ee3602a41b366->enter($__internal_efed79828486e64003b577f76a7d09ac2000b44615fc37793c2ee3602a41b366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_043d40c23153286ffb265a1461aae455992af70acb41e885a7d336d0f0b7ac80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043d40c23153286ffb265a1461aae455992af70acb41e885a7d336d0f0b7ac80->enter($__internal_043d40c23153286ffb265a1461aae455992af70acb41e885a7d336d0f0b7ac80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/DataTables/datatables.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.datatables.net/plug-ins/1.10.9/i18n/French.json\">
        ";
        
        $__internal_043d40c23153286ffb265a1461aae455992af70acb41e885a7d336d0f0b7ac80->leave($__internal_043d40c23153286ffb265a1461aae455992af70acb41e885a7d336d0f0b7ac80_prof);

        
        $__internal_efed79828486e64003b577f76a7d09ac2000b44615fc37793c2ee3602a41b366->leave($__internal_efed79828486e64003b577f76a7d09ac2000b44615fc37793c2ee3602a41b366_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_37091a2e02f3841a447917f033bb5e2d1ffa2290c21b025a19d6c3cf171626b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37091a2e02f3841a447917f033bb5e2d1ffa2290c21b025a19d6c3cf171626b0->enter($__internal_37091a2e02f3841a447917f033bb5e2d1ffa2290c21b025a19d6c3cf171626b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8384563a90d70e77a182862ce881ca28424c558109d57b1ce85539641201af0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8384563a90d70e77a182862ce881ca28424c558109d57b1ce85539641201af0a->enter($__internal_8384563a90d70e77a182862ce881ca28424c558109d57b1ce85539641201af0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8384563a90d70e77a182862ce881ca28424c558109d57b1ce85539641201af0a->leave($__internal_8384563a90d70e77a182862ce881ca28424c558109d57b1ce85539641201af0a_prof);

        
        $__internal_37091a2e02f3841a447917f033bb5e2d1ffa2290c21b025a19d6c3cf171626b0->leave($__internal_37091a2e02f3841a447917f033bb5e2d1ffa2290c21b025a19d6c3cf171626b0_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f71947ea4a1f4b3bcf2e251cefc2fcc35660d84a707678f7dad8b534df6b34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f71947ea4a1f4b3bcf2e251cefc2fcc35660d84a707678f7dad8b534df6b34c->enter($__internal_3f71947ea4a1f4b3bcf2e251cefc2fcc35660d84a707678f7dad8b534df6b34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_217af78cec88e9bbff6dde62bfbea989eb2f7af02fe1b34611d9e9f62f3e0e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217af78cec88e9bbff6dde62bfbea989eb2f7af02fe1b34611d9e9f62f3e0e9b->enter($__internal_217af78cec88e9bbff6dde62bfbea989eb2f7af02fe1b34611d9e9f62f3e0e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
   
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
          <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.js\"></script>
        
        
        ";
        
        $__internal_217af78cec88e9bbff6dde62bfbea989eb2f7af02fe1b34611d9e9f62f3e0e9b->leave($__internal_217af78cec88e9bbff6dde62bfbea989eb2f7af02fe1b34611d9e9f62f3e0e9b_prof);

        
        $__internal_3f71947ea4a1f4b3bcf2e251cefc2fcc35660d84a707678f7dad8b534df6b34c->leave($__internal_3f71947ea4a1f4b3bcf2e251cefc2fcc35660d84a707678f7dad8b534df6b34c_prof);

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
        return array (  145 => 16,  136 => 15,  119 => 14,  106 => 7,  97 => 6,  79 => 5,  53 => 23,  50 => 15,  48 => 14,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
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
