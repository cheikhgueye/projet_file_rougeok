<?php

/* KEURGUIimmoBundle:front:reser.html.twig */
class __TwigTemplate_ec375f91fe705600250efdc7a2bb45ea10a3de6bd75a9c857c170f63b2375a54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layout.html.twig", "KEURGUIimmoBundle:front:reser.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4caab8e7a546a2fe0dca2a0ab9c3af18323c6b14ab1890463e6e4cde0b614483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4caab8e7a546a2fe0dca2a0ab9c3af18323c6b14ab1890463e6e4cde0b614483->enter($__internal_4caab8e7a546a2fe0dca2a0ab9c3af18323c6b14ab1890463e6e4cde0b614483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:reser.html.twig"));

        $__internal_9f031222241af2737a500e101b5568643d53aa24fb03649c8e0bf294fa8382ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f031222241af2737a500e101b5568643d53aa24fb03649c8e0bf294fa8382ec->enter($__internal_9f031222241af2737a500e101b5568643d53aa24fb03649c8e0bf294fa8382ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:reser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4caab8e7a546a2fe0dca2a0ab9c3af18323c6b14ab1890463e6e4cde0b614483->leave($__internal_4caab8e7a546a2fe0dca2a0ab9c3af18323c6b14ab1890463e6e4cde0b614483_prof);

        
        $__internal_9f031222241af2737a500e101b5568643d53aa24fb03649c8e0bf294fa8382ec->leave($__internal_9f031222241af2737a500e101b5568643d53aa24fb03649c8e0bf294fa8382ec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dc015c5e1bcc98663c0c4322ac3a7f1a92ddf48fc2a99a3f42d221f3435c8c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc015c5e1bcc98663c0c4322ac3a7f1a92ddf48fc2a99a3f42d221f3435c8c2->enter($__internal_4dc015c5e1bcc98663c0c4322ac3a7f1a92ddf48fc2a99a3f42d221f3435c8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3e9c14a4c2b9edfa5009231eac9e283ee5e07684b244feefe8f4890e1456d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e9c14a4c2b9edfa5009231eac9e283ee5e07684b244feefe8f4890e1456d36->enter($__internal_f3e9c14a4c2b9edfa5009231eac9e283ee5e07684b244feefe8f4890e1456d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "  
 ";
        // line 51
        echo "

<table class=\"table table-bordered table-striped\" id=\"table_id\" class=\"display\" data-page-length='5'>
 <thead>
<tr>
<th>id</th>
<th>date de reservation</th>
<th>client</th>
<th>nom du bien</th>

</tr>
</thead>

<tbody>
";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new Twig_Error_Runtime('Variable "x" does not exist.', 65, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
            // line 66
            echo "
<tr>
<td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "id", array()), "html", null, true);
            echo "</td>
<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "date", array()), "html", null, true);
            echo "</td>
<td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>


<td><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat", array("idb" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 73, $this->getSourceContext()); })()), "id", array()), "idc" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 73, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\">valider</a></td>



";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "<td colspan=\"6\">Aucun utilisateur</td>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['use'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "</tr>
 </tbody>
</table>
";
        
        $__internal_f3e9c14a4c2b9edfa5009231eac9e283ee5e07684b244feefe8f4890e1456d36->leave($__internal_f3e9c14a4c2b9edfa5009231eac9e283ee5e07684b244feefe8f4890e1456d36_prof);

        
        $__internal_4dc015c5e1bcc98663c0c4322ac3a7f1a92ddf48fc2a99a3f42d221f3435c8c2->leave($__internal_4dc015c5e1bcc98663c0c4322ac3a7f1a92ddf48fc2a99a3f42d221f3435c8c2_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_a03123a027db6387504029883859ca091bd66f035bac02e7561283c60e2d7984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03123a027db6387504029883859ca091bd66f035bac02e7561283c60e2d7984->enter($__internal_a03123a027db6387504029883859ca091bd66f035bac02e7561283c60e2d7984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_4790e4b5063a9ddb022648ddd8cd137af5ed5a7f8bcd18845def9c5859677611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4790e4b5063a9ddb022648ddd8cd137af5ed5a7f8bcd18845def9c5859677611->enter($__internal_4790e4b5063a9ddb022648ddd8cd137af5ed5a7f8bcd18845def9c5859677611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_4790e4b5063a9ddb022648ddd8cd137af5ed5a7f8bcd18845def9c5859677611->leave($__internal_4790e4b5063a9ddb022648ddd8cd137af5ed5a7f8bcd18845def9c5859677611_prof);

        
        $__internal_a03123a027db6387504029883859ca091bd66f035bac02e7561283c60e2d7984->leave($__internal_a03123a027db6387504029883859ca091bd66f035bac02e7561283c60e2d7984_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:reser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 7,  125 => 6,  112 => 81,  104 => 78,  94 => 73,  88 => 70,  84 => 69,  80 => 68,  76 => 66,  71 => 65,  55 => 51,  52 => 9,  50 => 6,  41 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layout.html.twig\" %}



{% block body %}
{% block header %}
{{parent()}}
{% endblock %}
  
 {# <table class=\"table table-bordered table-striped\" id=\"table_id\" class=\"display\" data-page-length='5'>
<thead>
<tr>
<th>id</th>
<th>date de reservation</th>
<th>client</th>
<th>nom du bien</th>
</tr>
</thead>


{% block style %}
<style>
img{
  width:100px;
}
</style>
{% endblock %}
 <tbody>
{% for use in x %}
       <tr>
  
     

  <td scope=\"col\" class=\"table-info\">{{use.id}}</td>
          <td scope=\"col\" class=\"table-info\">{{use.date}}</td>

    <td scope=\"col\" class=\"table-info\">{{use.client.nomComplet}}</td>
        <td scope=\"col\" class=\"table-info\">   <a href=\"{{path('contrat',{'idb':bien.id,'idc':client.id})}}\">valider</a>
</td>

     
    <td>  {% else %}
      aucun utilisateur de ce login trouver </td>
</tr> 
{% endfor %}
  
   </tbody>
</table>

{% endblock %} #}


<table class=\"table table-bordered table-striped\" id=\"table_id\" class=\"display\" data-page-length='5'>
 <thead>
<tr>
<th>id</th>
<th>date de reservation</th>
<th>client</th>
<th>nom du bien</th>

</tr>
</thead>

<tbody>
{% for use in x %}

<tr>
<td>{{use.id}}</td>
<td>{{use.date}}</td>
<td>{{use.client.nomComplet}}</td>


<td><a href=\"{{path('contrat',{'idb':bien.id,'idc':client.id})}}\">valider</a></td>



{%else%}
<td colspan=\"6\">Aucun utilisateur</td>

{%endfor%}
</tr>
 </tbody>
</table>
{% endblock %}

", "KEURGUIimmoBundle:front:reser.html.twig", "/var/www/html/projet_file_rougeok/src/KEURGUI/immoBundle/Resources/views/front/reser.html.twig");
    }
}
