<?php

/* KEURGUIimmoBundle:front:affiche.html.twig */
class __TwigTemplate_71886ea3d5239533d9ead5e4ff8543dd0caf52fc9a5d3736ffaea5328b4c9004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layout.html.twig", "KEURGUIimmoBundle:front:affiche.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'style' => array($this, 'block_style'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c0af59c10896461ec48938952b9d3167f91ee041e9efa3e85ebb9a25ca69235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0af59c10896461ec48938952b9d3167f91ee041e9efa3e85ebb9a25ca69235->enter($__internal_2c0af59c10896461ec48938952b9d3167f91ee041e9efa3e85ebb9a25ca69235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:affiche.html.twig"));

        $__internal_871faac4cb0449d356f2a6481521adfbac7f5e091a2373c51b99207d91b8e34c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871faac4cb0449d356f2a6481521adfbac7f5e091a2373c51b99207d91b8e34c->enter($__internal_871faac4cb0449d356f2a6481521adfbac7f5e091a2373c51b99207d91b8e34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c0af59c10896461ec48938952b9d3167f91ee041e9efa3e85ebb9a25ca69235->leave($__internal_2c0af59c10896461ec48938952b9d3167f91ee041e9efa3e85ebb9a25ca69235_prof);

        
        $__internal_871faac4cb0449d356f2a6481521adfbac7f5e091a2373c51b99207d91b8e34c->leave($__internal_871faac4cb0449d356f2a6481521adfbac7f5e091a2373c51b99207d91b8e34c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f16d7deedd8738d653dae653809a0b9aaf75382b977df384a23091a387e64d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f16d7deedd8738d653dae653809a0b9aaf75382b977df384a23091a387e64d4->enter($__internal_4f16d7deedd8738d653dae653809a0b9aaf75382b977df384a23091a387e64d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92209f9305ca0c913d4f5c66369462e4684f94ee7f597b80080316d735e0b9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92209f9305ca0c913d4f5c66369462e4684f94ee7f597b80080316d735e0b9bc->enter($__internal_92209f9305ca0c913d4f5c66369462e4684f94ee7f597b80080316d735e0b9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "

<section  class=\"row\" style=\"height:355px; margin-top:0px\" >
 <div class=\"col-12\"> <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/m1.jpg"), "html", null, true);
        echo "\" style=\"height:355px; width:100%\" alt=\"\"></div>
<div class=\"col\"style=\"z-index:1 ; position:absolute;background-color: Grey; margin-top:50px;height:100px;opacity: 0.8;\">

";
        // line 24
        echo "</div>
 

 </section>
  
";
        // line 29
        $this->displayBlock('style', $context, $blocks);
        // line 38
        echo " 
<div class=\"row\">

";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new Twig_Error_Runtime('Variable "x" does not exist.', 41, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
            // line 42
            echo "<div class=\"col-md-4\">
<div class=\"container\">
 <div class=\"card\" style=\"width:300px;\">
      ";
            // line 45
            $context["c"] = 0;
            // line 46
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "image", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 47
                echo "    ";
                if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 47, $this->getSourceContext()); })()) == 0)) {
                    // line 48
                    echo "       <td scope=\"col\" class=\"table-info\">  <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                    echo "\" class=\"img-circle\" alt=\"Leanna!\"></td>
       ";
                    // line 49
                    $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 49, $this->getSourceContext()); })()) + 1);
                    echo " 
         ";
                }
                // line 51
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
         <div class=\"card-body\">
      <h4 class=\"card-title\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "type", array()), "nom", array()), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "nom", array()), "html", null, true);
            echo "</h4>
       <h4 class=\"card-title\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "localite", array()), "html", null, true);
            echo "</h4>

      <p >";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "description", array()), "html", null, true);
            echo "</p>
   <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 57, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "id_client"), "method"), "idb" => twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "id", array()))), "html", null, true);
            echo "\">reserver</a>
    </div>
  </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['use'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_92209f9305ca0c913d4f5c66369462e4684f94ee7f597b80080316d735e0b9bc->leave($__internal_92209f9305ca0c913d4f5c66369462e4684f94ee7f597b80080316d735e0b9bc_prof);

        
        $__internal_4f16d7deedd8738d653dae653809a0b9aaf75382b977df384a23091a387e64d4->leave($__internal_4f16d7deedd8738d653dae653809a0b9aaf75382b977df384a23091a387e64d4_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_4a89b3d551890f9548a552b7e745492ea7d0857eaa0a566b3f14708858c2adad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a89b3d551890f9548a552b7e745492ea7d0857eaa0a566b3f14708858c2adad->enter($__internal_4a89b3d551890f9548a552b7e745492ea7d0857eaa0a566b3f14708858c2adad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7f42d5ceeaae35fab8b414d9d285aa17b94cb214bc30ddc00d0afc7af64c4c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f42d5ceeaae35fab8b414d9d285aa17b94cb214bc30ddc00d0afc7af64c4c96->enter($__internal_7f42d5ceeaae35fab8b414d9d285aa17b94cb214bc30ddc00d0afc7af64c4c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_7f42d5ceeaae35fab8b414d9d285aa17b94cb214bc30ddc00d0afc7af64c4c96->leave($__internal_7f42d5ceeaae35fab8b414d9d285aa17b94cb214bc30ddc00d0afc7af64c4c96_prof);

        
        $__internal_4a89b3d551890f9548a552b7e745492ea7d0857eaa0a566b3f14708858c2adad->leave($__internal_4a89b3d551890f9548a552b7e745492ea7d0857eaa0a566b3f14708858c2adad_prof);

    }

    // line 29
    public function block_style($context, array $blocks = array())
    {
        $__internal_880df1474e7bd70a87543d88263545d3c099755f6a1932b6b51594249948ee6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880df1474e7bd70a87543d88263545d3c099755f6a1932b6b51594249948ee6f->enter($__internal_880df1474e7bd70a87543d88263545d3c099755f6a1932b6b51594249948ee6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_e121af666cc837176389603a9873a0b3e3506bced085d1e0309c22179c6bca7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e121af666cc837176389603a9873a0b3e3506bced085d1e0309c22179c6bca7d->enter($__internal_e121af666cc837176389603a9873a0b3e3506bced085d1e0309c22179c6bca7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 30
        echo "<style>

img{
  width:300px;
}

</style>
";
        
        $__internal_e121af666cc837176389603a9873a0b3e3506bced085d1e0309c22179c6bca7d->leave($__internal_e121af666cc837176389603a9873a0b3e3506bced085d1e0309c22179c6bca7d_prof);

        
        $__internal_880df1474e7bd70a87543d88263545d3c099755f6a1932b6b51594249948ee6f->leave($__internal_880df1474e7bd70a87543d88263545d3c099755f6a1932b6b51594249948ee6f_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 30,  172 => 29,  160 => 6,  151 => 5,  131 => 57,  127 => 56,  122 => 54,  116 => 53,  107 => 51,  102 => 49,  97 => 48,  94 => 47,  89 => 46,  87 => 45,  82 => 42,  78 => 41,  73 => 38,  71 => 29,  64 => 24,  58 => 11,  53 => 8,  51 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layout.html.twig\" %}


{% block body %}
{% block header %}
{{parent()}}
{% endblock %}


<section  class=\"row\" style=\"height:355px; margin-top:0px\" >
 <div class=\"col-12\"> <img src=\"{{ asset('images/m1.jpg') }}\" style=\"height:355px; width:100%\" alt=\"\"></div>
<div class=\"col\"style=\"z-index:1 ; position:absolute;background-color: Grey; margin-top:50px;height:100px;opacity: 0.8;\">

{# <div class=\"row\">
<div class=\"col-2\"style=\"font-size:25px;color:white;\">{{ form_label(form.types) }}{{ form_widget(form.types,{'attr': {'class': 'task_field'}}) }}</div>
<div class=\"col-1\"></div>
<div class=\"col-2\"style=\"font-size:25px;color:white;\">{{ form_label(form.localites) }}{{ form_widget(form.localites) }}</div>
<div class=\"col-1\"></div>
<div class=\"col-2\"style=\"font-size:25px;color:white;\">{{ form_label(form.prix) }}{{ form_widget(form.prix) }}</div>
<div class=\"col-1\"></div>
<div class=\"col-2\" style=\"margin-top:45px;\">{{ form_label(form.chercher) }}{{ form_widget(form.chercher) }}</div>
<div class=\"col-1\"></div>
</div> #}
</div>
 

 </section>
  
{% block style %}
<style>

img{
  width:300px;
}

</style>
{% endblock %}
 
<div class=\"row\">

{% for use in x %}
<div class=\"col-md-4\">
<div class=\"container\">
 <div class=\"card\" style=\"width:300px;\">
      {% set c = 0 %}
  {% for i in use.image %}
    {% if c == 0 %}
       <td scope=\"col\" class=\"table-info\">  <img src=\"{{ asset('images/'~i.image) }}\" class=\"img-circle\" alt=\"Leanna!\"></td>
       {% set c = c+ 1 %} 
         {% endif %}
  {% endfor %} 
         <div class=\"card-body\">
      <h4 class=\"card-title\">{{ use.type.nom }}:{{use.nom }}</h4>
       <h4 class=\"card-title\">{{use.localite }}</h4>

      <p >{{use.description }}</p>
   <a href=\"{{path('reserver',{'id':app.session.get('id_client') ,'idb':use.id})}}\">reserver</a>
    </div>
  </div>
    </div>
  </div>
{% endfor %}
{% endblock %}
", "KEURGUIimmoBundle:front:affiche.html.twig", "/var/www/html/projet_file_rougeok/src/KEURGUI/immoBundle/Resources/views/front/affiche.html.twig");
    }
}
