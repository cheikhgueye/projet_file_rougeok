<?php

/* KEURGUIimmoBundle:front:reser.html.twig */
class __TwigTemplate_9af4e025e7c5a2775a98b89dafeafe71d5798defbbaecc458a8f4b59c00b5d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layout.html.twig", "KEURGUIimmoBundle:front:reser.html.twig", 1);
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
        $__internal_236a72be35279599ee1392fc024823786414afdb5df12154bfbf4828196b695a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236a72be35279599ee1392fc024823786414afdb5df12154bfbf4828196b695a->enter($__internal_236a72be35279599ee1392fc024823786414afdb5df12154bfbf4828196b695a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:reser.html.twig"));

        $__internal_16f6c308f4e1582946240f746b55e2887f53d2ec1d7070dfa9c063a32f89ebb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f6c308f4e1582946240f746b55e2887f53d2ec1d7070dfa9c063a32f89ebb1->enter($__internal_16f6c308f4e1582946240f746b55e2887f53d2ec1d7070dfa9c063a32f89ebb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:reser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_236a72be35279599ee1392fc024823786414afdb5df12154bfbf4828196b695a->leave($__internal_236a72be35279599ee1392fc024823786414afdb5df12154bfbf4828196b695a_prof);

        
        $__internal_16f6c308f4e1582946240f746b55e2887f53d2ec1d7070dfa9c063a32f89ebb1->leave($__internal_16f6c308f4e1582946240f746b55e2887f53d2ec1d7070dfa9c063a32f89ebb1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_274f3d9e44b74d530815bfe671eb2489ae6ea25a852838f787b2c40821238e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274f3d9e44b74d530815bfe671eb2489ae6ea25a852838f787b2c40821238e1f->enter($__internal_274f3d9e44b74d530815bfe671eb2489ae6ea25a852838f787b2c40821238e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5b4b8a218b47a65734f47f7b348ad4d12e411bef098e746dfa560228e56df4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b4b8a218b47a65734f47f7b348ad4d12e411bef098e746dfa560228e56df4f->enter($__internal_b5b4b8a218b47a65734f47f7b348ad4d12e411bef098e746dfa560228e56df4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "  
 <table border=1 class=\"table\" >
    <tr>
<th>id</th>
<th>date de reservation</th>
<th>client</th>
<th>nom du bien</th>
</tr>
<tr>
";
        // line 17
        $this->displayBlock('style', $context, $blocks);
        // line 24
        echo " 
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new Twig_Error_Runtime('Variable "x" does not exist.', 25, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
            // line 26
            echo "       <tr>
  
     

  <td scope=\"col\" class=\"table-info\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "id", array()), "html", null, true);
            echo "</td>
          <td scope=\"col\" class=\"table-info\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "date", array()), "html", null, true);
            echo "</td>

    <td scope=\"col\" class=\"table-info\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
        <td scope=\"col\" class=\"table-info\">   <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat", array("idb" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 34, $this->getSourceContext()); })()), "id", array()), "idc" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 34, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\">valider</a>
</td>

     </tr> 
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "      aucun utilisateur de ce login trouver
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['use'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  </tr>
</table>

";
        
        $__internal_b5b4b8a218b47a65734f47f7b348ad4d12e411bef098e746dfa560228e56df4f->leave($__internal_b5b4b8a218b47a65734f47f7b348ad4d12e411bef098e746dfa560228e56df4f_prof);

        
        $__internal_274f3d9e44b74d530815bfe671eb2489ae6ea25a852838f787b2c40821238e1f->leave($__internal_274f3d9e44b74d530815bfe671eb2489ae6ea25a852838f787b2c40821238e1f_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_7b1c325ecbf18cecad0025d444e3b2aac6eeb4df0980f51f10c7b93ad050cc5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1c325ecbf18cecad0025d444e3b2aac6eeb4df0980f51f10c7b93ad050cc5b->enter($__internal_7b1c325ecbf18cecad0025d444e3b2aac6eeb4df0980f51f10c7b93ad050cc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ce7f313d253c694ed9f51a9135e6697d06ce589e92759a9b79365c7e390badc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7f313d253c694ed9f51a9135e6697d06ce589e92759a9b79365c7e390badc6->enter($__internal_ce7f313d253c694ed9f51a9135e6697d06ce589e92759a9b79365c7e390badc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_ce7f313d253c694ed9f51a9135e6697d06ce589e92759a9b79365c7e390badc6->leave($__internal_ce7f313d253c694ed9f51a9135e6697d06ce589e92759a9b79365c7e390badc6_prof);

        
        $__internal_7b1c325ecbf18cecad0025d444e3b2aac6eeb4df0980f51f10c7b93ad050cc5b->leave($__internal_7b1c325ecbf18cecad0025d444e3b2aac6eeb4df0980f51f10c7b93ad050cc5b_prof);

    }

    // line 17
    public function block_style($context, array $blocks = array())
    {
        $__internal_80be01359bebe01b9cfb903141953dd182b9f630970b6006ea09d8e258e71c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80be01359bebe01b9cfb903141953dd182b9f630970b6006ea09d8e258e71c28->enter($__internal_80be01359bebe01b9cfb903141953dd182b9f630970b6006ea09d8e258e71c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_be1ca59c682deab5812a62cfb6cebb8afce6079e1d8fcdad562ac59bbd41e3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1ca59c682deab5812a62cfb6cebb8afce6079e1d8fcdad562ac59bbd41e3b4->enter($__internal_be1ca59c682deab5812a62cfb6cebb8afce6079e1d8fcdad562ac59bbd41e3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 18
        echo "<style>
img{
  width:100px;
}
</style>
";
        
        $__internal_be1ca59c682deab5812a62cfb6cebb8afce6079e1d8fcdad562ac59bbd41e3b4->leave($__internal_be1ca59c682deab5812a62cfb6cebb8afce6079e1d8fcdad562ac59bbd41e3b4_prof);

        
        $__internal_80be01359bebe01b9cfb903141953dd182b9f630970b6006ea09d8e258e71c28->leave($__internal_80be01359bebe01b9cfb903141953dd182b9f630970b6006ea09d8e258e71c28_prof);

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
        return array (  153 => 18,  144 => 17,  132 => 6,  123 => 5,  110 => 41,  103 => 39,  93 => 34,  89 => 33,  84 => 31,  80 => 30,  74 => 26,  69 => 25,  66 => 24,  64 => 17,  53 => 8,  51 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layout.html.twig\" %}


{% block body %}
{% block header %}
{{parent()}}
{% endblock %}
  
 <table border=1 class=\"table\" >
    <tr>
<th>id</th>
<th>date de reservation</th>
<th>client</th>
<th>nom du bien</th>
</tr>
<tr>
{% block style %}
<style>
img{
  width:100px;
}
</style>
{% endblock %}
 
{% for use in x %}
       <tr>
  
     

  <td scope=\"col\" class=\"table-info\">{{use.id}}</td>
          <td scope=\"col\" class=\"table-info\">{{use.date}}</td>

    <td scope=\"col\" class=\"table-info\">{{use.client.nomComplet}}</td>
        <td scope=\"col\" class=\"table-info\">   <a href=\"{{path('contrat',{'idb':bien.id,'idc':client.id})}}\">valider</a>
</td>

     </tr> 
      {% else %}
      aucun utilisateur de ce login trouver
{% endfor %}
  </tr>
</table>

{% endblock %}", "KEURGUIimmoBundle:front:reser.html.twig", "/var/www/html/projet_file_rouge/keurgui/src/KEURGUI/immoBundle/Resources/views/front/reser.html.twig");
    }
}
