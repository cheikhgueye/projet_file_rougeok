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
        $__internal_d8325b01b36b0b0d5c7b00e2ceb277a38731c2200fcf147871d4921232363195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8325b01b36b0b0d5c7b00e2ceb277a38731c2200fcf147871d4921232363195->enter($__internal_d8325b01b36b0b0d5c7b00e2ceb277a38731c2200fcf147871d4921232363195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:affiche.html.twig"));

        $__internal_e0c70c831b4f4da97e53d090f2e29adfd28c7da2e169377466cbbbc30daa957d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c70c831b4f4da97e53d090f2e29adfd28c7da2e169377466cbbbc30daa957d->enter($__internal_e0c70c831b4f4da97e53d090f2e29adfd28c7da2e169377466cbbbc30daa957d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8325b01b36b0b0d5c7b00e2ceb277a38731c2200fcf147871d4921232363195->leave($__internal_d8325b01b36b0b0d5c7b00e2ceb277a38731c2200fcf147871d4921232363195_prof);

        
        $__internal_e0c70c831b4f4da97e53d090f2e29adfd28c7da2e169377466cbbbc30daa957d->leave($__internal_e0c70c831b4f4da97e53d090f2e29adfd28c7da2e169377466cbbbc30daa957d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b79e05aa8d73f9113816d61bd67a6e6382905af2ef08b1866fc6a67f416726b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b79e05aa8d73f9113816d61bd67a6e6382905af2ef08b1866fc6a67f416726b->enter($__internal_6b79e05aa8d73f9113816d61bd67a6e6382905af2ef08b1866fc6a67f416726b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d37334f4f3eaea15b328cfd1c823969b93b3c8a24db8dbaa41a5b1fb7a25561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d37334f4f3eaea15b328cfd1c823969b93b3c8a24db8dbaa41a5b1fb7a25561->enter($__internal_2d37334f4f3eaea15b328cfd1c823969b93b3c8a24db8dbaa41a5b1fb7a25561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 25
        echo "

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
        
        $__internal_2d37334f4f3eaea15b328cfd1c823969b93b3c8a24db8dbaa41a5b1fb7a25561->leave($__internal_2d37334f4f3eaea15b328cfd1c823969b93b3c8a24db8dbaa41a5b1fb7a25561_prof);

        
        $__internal_6b79e05aa8d73f9113816d61bd67a6e6382905af2ef08b1866fc6a67f416726b->leave($__internal_6b79e05aa8d73f9113816d61bd67a6e6382905af2ef08b1866fc6a67f416726b_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_a337cf6c11e792f03954b41b8f6f0685dbc81f8959c3d45a7b22ec2f6c79ef02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a337cf6c11e792f03954b41b8f6f0685dbc81f8959c3d45a7b22ec2f6c79ef02->enter($__internal_a337cf6c11e792f03954b41b8f6f0685dbc81f8959c3d45a7b22ec2f6c79ef02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3a27ef396f8751ded1ab514ccad43e23587c67ca50c41e505912554a6b2b4736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a27ef396f8751ded1ab514ccad43e23587c67ca50c41e505912554a6b2b4736->enter($__internal_3a27ef396f8751ded1ab514ccad43e23587c67ca50c41e505912554a6b2b4736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_3a27ef396f8751ded1ab514ccad43e23587c67ca50c41e505912554a6b2b4736->leave($__internal_3a27ef396f8751ded1ab514ccad43e23587c67ca50c41e505912554a6b2b4736_prof);

        
        $__internal_a337cf6c11e792f03954b41b8f6f0685dbc81f8959c3d45a7b22ec2f6c79ef02->leave($__internal_a337cf6c11e792f03954b41b8f6f0685dbc81f8959c3d45a7b22ec2f6c79ef02_prof);

    }

    // line 29
    public function block_style($context, array $blocks = array())
    {
        $__internal_dfa09ff344442801fc05a11b7adca7c1dde18d8e883111b90ea5d514f08788b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa09ff344442801fc05a11b7adca7c1dde18d8e883111b90ea5d514f08788b4->enter($__internal_dfa09ff344442801fc05a11b7adca7c1dde18d8e883111b90ea5d514f08788b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_775f9106a64abb65b95ad7ad727b27319876aaf2ac127c63b4a595b5d6afbb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775f9106a64abb65b95ad7ad727b27319876aaf2ac127c63b4a595b5d6afbb4e->enter($__internal_775f9106a64abb65b95ad7ad727b27319876aaf2ac127c63b4a595b5d6afbb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 30
        echo "<style>

img{
  width:300px;
}

</style>
";
        
        $__internal_775f9106a64abb65b95ad7ad727b27319876aaf2ac127c63b4a595b5d6afbb4e->leave($__internal_775f9106a64abb65b95ad7ad727b27319876aaf2ac127c63b4a595b5d6afbb4e_prof);

        
        $__internal_dfa09ff344442801fc05a11b7adca7c1dde18d8e883111b90ea5d514f08788b4->leave($__internal_dfa09ff344442801fc05a11b7adca7c1dde18d8e883111b90ea5d514f08788b4_prof);

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
        return array (  180 => 30,  171 => 29,  159 => 6,  150 => 5,  130 => 57,  126 => 56,  121 => 54,  115 => 53,  106 => 51,  101 => 49,  96 => 48,  93 => 47,  88 => 46,  86 => 45,  81 => 42,  77 => 41,  72 => 38,  70 => 29,  64 => 25,  58 => 11,  53 => 8,  51 => 5,  42 => 4,  11 => 1,);
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
</div>
</div> #}


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
