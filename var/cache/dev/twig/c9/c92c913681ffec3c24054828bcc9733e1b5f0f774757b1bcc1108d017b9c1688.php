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
        $__internal_50a421ac2e538b1221ddfc24e42ca11fed4f6c8fdb8c91ff6fd2e680298d3dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a421ac2e538b1221ddfc24e42ca11fed4f6c8fdb8c91ff6fd2e680298d3dcc->enter($__internal_50a421ac2e538b1221ddfc24e42ca11fed4f6c8fdb8c91ff6fd2e680298d3dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:affiche.html.twig"));

        $__internal_6002efb379d875c79d1be875ecd3b09c981af1b856e82bbb03df2e84d08446e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6002efb379d875c79d1be875ecd3b09c981af1b856e82bbb03df2e84d08446e2->enter($__internal_6002efb379d875c79d1be875ecd3b09c981af1b856e82bbb03df2e84d08446e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50a421ac2e538b1221ddfc24e42ca11fed4f6c8fdb8c91ff6fd2e680298d3dcc->leave($__internal_50a421ac2e538b1221ddfc24e42ca11fed4f6c8fdb8c91ff6fd2e680298d3dcc_prof);

        
        $__internal_6002efb379d875c79d1be875ecd3b09c981af1b856e82bbb03df2e84d08446e2->leave($__internal_6002efb379d875c79d1be875ecd3b09c981af1b856e82bbb03df2e84d08446e2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e1906dd60d444226ccbf49c67972fc23b84531d4933234570881ce82c34831d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1906dd60d444226ccbf49c67972fc23b84531d4933234570881ce82c34831d->enter($__internal_2e1906dd60d444226ccbf49c67972fc23b84531d4933234570881ce82c34831d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_901c7bfb7d8e8a35b290527947eafa1247846b355ea83c27ee5be5ce5315e435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901c7bfb7d8e8a35b290527947eafa1247846b355ea83c27ee5be5ce5315e435->enter($__internal_901c7bfb7d8e8a35b290527947eafa1247846b355ea83c27ee5be5ce5315e435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "  
";
        // line 9
        $this->displayBlock('style', $context, $blocks);
        // line 18
        echo " 
<div class=\"row\">

";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new Twig_Error_Runtime('Variable "x" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
            // line 22
            echo "<div class=\"col-md-4\">
<div class=\"container\">
 <div class=\"card\" style=\"width:300px\">
      ";
            // line 25
            $context["c"] = 0;
            // line 26
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "image", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 27
                echo "    ";
                if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 27, $this->getSourceContext()); })()) == 0)) {
                    // line 28
                    echo "       <td scope=\"col\" class=\"table-info\">  <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                    echo "\" class=\"img-circle\" alt=\"Leanna!\"></td>
       ";
                    // line 29
                    $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 29, $this->getSourceContext()); })()) + 1);
                    echo " 
         ";
                }
                // line 31
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
         <div class=\"card-body\">
      <h4 class=\"card-title\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "type", array()), "nom", array()), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "nom", array()), "html", null, true);
            echo "</h4>
       <h4 class=\"card-title\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "localite", array()), "html", null, true);
            echo "</h4>

      <p >";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "description", array()), "html", null, true);
            echo "</p>
   <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "id_client"), "method"), "idb" => twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "id", array()))), "html", null, true);
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
        
        $__internal_901c7bfb7d8e8a35b290527947eafa1247846b355ea83c27ee5be5ce5315e435->leave($__internal_901c7bfb7d8e8a35b290527947eafa1247846b355ea83c27ee5be5ce5315e435_prof);

        
        $__internal_2e1906dd60d444226ccbf49c67972fc23b84531d4933234570881ce82c34831d->leave($__internal_2e1906dd60d444226ccbf49c67972fc23b84531d4933234570881ce82c34831d_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_67dc208b2b1e908ba7d4dbcd76388b0451eb3e392a5e26f51973ee336298a136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67dc208b2b1e908ba7d4dbcd76388b0451eb3e392a5e26f51973ee336298a136->enter($__internal_67dc208b2b1e908ba7d4dbcd76388b0451eb3e392a5e26f51973ee336298a136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_56113cf75d98a0e3c461f4983388a620bfc5aab034c31406461543917783c678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56113cf75d98a0e3c461f4983388a620bfc5aab034c31406461543917783c678->enter($__internal_56113cf75d98a0e3c461f4983388a620bfc5aab034c31406461543917783c678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_56113cf75d98a0e3c461f4983388a620bfc5aab034c31406461543917783c678->leave($__internal_56113cf75d98a0e3c461f4983388a620bfc5aab034c31406461543917783c678_prof);

        
        $__internal_67dc208b2b1e908ba7d4dbcd76388b0451eb3e392a5e26f51973ee336298a136->leave($__internal_67dc208b2b1e908ba7d4dbcd76388b0451eb3e392a5e26f51973ee336298a136_prof);

    }

    // line 9
    public function block_style($context, array $blocks = array())
    {
        $__internal_a14fed54dca05caa2bc85bde02fafed89381c0b7aea75a9ea2cad272135b9298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14fed54dca05caa2bc85bde02fafed89381c0b7aea75a9ea2cad272135b9298->enter($__internal_a14fed54dca05caa2bc85bde02fafed89381c0b7aea75a9ea2cad272135b9298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_c3dfb464c51cc2989d5fd31033651529bd3ce762d8f1fc176b74767f5032ff8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3dfb464c51cc2989d5fd31033651529bd3ce762d8f1fc176b74767f5032ff8c->enter($__internal_c3dfb464c51cc2989d5fd31033651529bd3ce762d8f1fc176b74767f5032ff8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 10
        echo "<style>

img{
  width:300px;
}

</style>
";
        
        $__internal_c3dfb464c51cc2989d5fd31033651529bd3ce762d8f1fc176b74767f5032ff8c->leave($__internal_c3dfb464c51cc2989d5fd31033651529bd3ce762d8f1fc176b74767f5032ff8c_prof);

        
        $__internal_a14fed54dca05caa2bc85bde02fafed89381c0b7aea75a9ea2cad272135b9298->leave($__internal_a14fed54dca05caa2bc85bde02fafed89381c0b7aea75a9ea2cad272135b9298_prof);

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
        return array (  166 => 10,  157 => 9,  145 => 6,  136 => 5,  116 => 37,  112 => 36,  107 => 34,  101 => 33,  92 => 31,  87 => 29,  82 => 28,  79 => 27,  74 => 26,  72 => 25,  67 => 22,  63 => 21,  58 => 18,  56 => 9,  53 => 8,  51 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layout.html.twig\" %}


{% block body %}
{% block header %}
{{parent()}}
{% endblock %}
  
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
 <div class=\"card\" style=\"width:300px\">
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
