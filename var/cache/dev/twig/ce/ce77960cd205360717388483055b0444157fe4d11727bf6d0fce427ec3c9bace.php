<?php

/* KEURGUIimmoBundle:front:search_bien.html.twig */
class __TwigTemplate_9cfbaf053b988446baf7f83272d82e60a4774f261a873943c46942a572ee579d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layout.html.twig", "KEURGUIimmoBundle:front:search_bien.html.twig", 1);
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
        $__internal_1a3e15a9f96d16c45e55460cb7895c4de3fa85cc74940ad685383c2ff8601594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3e15a9f96d16c45e55460cb7895c4de3fa85cc74940ad685383c2ff8601594->enter($__internal_1a3e15a9f96d16c45e55460cb7895c4de3fa85cc74940ad685383c2ff8601594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:search_bien.html.twig"));

        $__internal_aba39d68aca7f5ba9d55e25f5d5daad7b6c8cb6eb944727879a7666c21246334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba39d68aca7f5ba9d55e25f5d5daad7b6c8cb6eb944727879a7666c21246334->enter($__internal_aba39d68aca7f5ba9d55e25f5d5daad7b6c8cb6eb944727879a7666c21246334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a3e15a9f96d16c45e55460cb7895c4de3fa85cc74940ad685383c2ff8601594->leave($__internal_1a3e15a9f96d16c45e55460cb7895c4de3fa85cc74940ad685383c2ff8601594_prof);

        
        $__internal_aba39d68aca7f5ba9d55e25f5d5daad7b6c8cb6eb944727879a7666c21246334->leave($__internal_aba39d68aca7f5ba9d55e25f5d5daad7b6c8cb6eb944727879a7666c21246334_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b45d9e26893e28eb9fc83ecf305c7bd6ef9c15eb941375667cd96e417d1417b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b45d9e26893e28eb9fc83ecf305c7bd6ef9c15eb941375667cd96e417d1417b->enter($__internal_7b45d9e26893e28eb9fc83ecf305c7bd6ef9c15eb941375667cd96e417d1417b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_657cc0fa101e1d1fc3635063348fb7782e2a690bf2f350c6c86ba2190f859a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657cc0fa101e1d1fc3635063348fb7782e2a690bf2f350c6c86ba2190f859a6d->enter($__internal_657cc0fa101e1d1fc3635063348fb7782e2a690bf2f350c6c86ba2190f859a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "

";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start');
        echo "
<section  class=\"row\" style=\"height:355px; margin-top:0px\" >
 <div class=\"col\"> <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/m1.jpg"), "html", null, true);
        echo "\" style=\"height:355px; width:100%\" alt=\"\"></div>
<div class=\"col-12\"style=\"z-index:1 ; position:absolute;background-color: Grey; margin-top:50px;height:100px;opacity: 0.8;\">
<table >
    <tr>
    <td> ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "types", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "types", array()), 'widget', array("attr" => array("class" => "task_field")));
        echo "</td>
    <td> ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "localites", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "localites", array()), 'widget');
        echo "</td>
    <td> ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "prix", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "prix", array()), 'widget');
        echo "</td>
    <td> ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "chercher", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "chercher", array()), 'widget');
        echo "</td>
    </tr>
</table>
</div>


 </section>



";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'form_end');
        echo "
<section>

";
        // line 32
        $this->displayBlock('style', $context, $blocks);
        // line 41
        echo " ";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "id_client"), "method", true, true)) {
            // line 42
            echo "<div class=\"row\">

";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new Twig_Error_Runtime('Variable "x" does not exist.', 44, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
                // line 45
                echo "<div class=\"col-md-4\">
<div class=\"container\">
 <div class=\"card\" style=\"width:300px\">
      ";
                // line 48
                $context["c"] = 0;
                // line 49
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "image", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 50
                    echo "    ";
                    if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 50, $this->getSourceContext()); })()) == 0)) {
                        // line 51
                        echo "       <td scope=\"col\" class=\"table-info\">  <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                        echo "\" class=\"img-circle\" alt=\"Leanna!\"></td>
       ";
                        // line 52
                        $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 52, $this->getSourceContext()); })()) + 1);
                        echo " 
         ";
                    }
                    // line 54
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
         <div class=\"card-body\">
      <h4 class=\"card-title\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "type", array()), "nom", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "nom", array()), "html", null, true);
                echo "</h4>
       <h4 class=\"card-title\">";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "localite", array()), "html", null, true);
                echo "</h4>

      <p >";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "description", array()), "html", null, true);
                echo "//";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 59, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "qwerty"), "method"), "html", null, true);
                echo "</p>
   <a href=\"";
                // line 60
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserve");
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
            // line 66
            echo "
 </section>
";
        }
        // line 69
        echo " ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "id_client"), "method", true, true)) {
            // line 70
            echo " <div class=\"row\">

";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new Twig_Error_Runtime('Variable "x" does not exist.', 72, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
                // line 73
                echo "<div class=\"col-md-4\">
<div class=\"container\">
 <div class=\"card\" style=\"width:300px\">
      ";
                // line 76
                $context["c"] = 0;
                // line 77
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "image", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 78
                    echo "    ";
                    if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 78, $this->getSourceContext()); })()) == 0)) {
                        // line 79
                        echo "       <td scope=\"col\" class=\"table-info\">  <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                        echo "\" class=\"img-circle\" alt=\"Leanna!\"></td>
       ";
                        // line 80
                        $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 80, $this->getSourceContext()); })()) + 1);
                        echo " 
         ";
                    }
                    // line 82
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
         <div class=\"card-body\">
      <h4 class=\"card-title\">";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "type", array()), "nom", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "nom", array()), "html", null, true);
                echo "</h4>
       <h4 class=\"card-title\">";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "localite", array()), "html", null, true);
                echo "</h4>

      <p >";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "description", array()), "html", null, true);
                echo "//";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 87, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "qwerty"), "method"), "html", null, true);
                echo "</p>
   <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 88, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "id_client"), "method"), "idb" => twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "id", array()))), "html", null, true);
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
            // line 94
            echo "
 </section>
";
        }
        
        $__internal_657cc0fa101e1d1fc3635063348fb7782e2a690bf2f350c6c86ba2190f859a6d->leave($__internal_657cc0fa101e1d1fc3635063348fb7782e2a690bf2f350c6c86ba2190f859a6d_prof);

        
        $__internal_7b45d9e26893e28eb9fc83ecf305c7bd6ef9c15eb941375667cd96e417d1417b->leave($__internal_7b45d9e26893e28eb9fc83ecf305c7bd6ef9c15eb941375667cd96e417d1417b_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_a5dc46a869065e36dfb0096c5afa13e41bfd0e4b0851b632df542dbe7f353033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5dc46a869065e36dfb0096c5afa13e41bfd0e4b0851b632df542dbe7f353033->enter($__internal_a5dc46a869065e36dfb0096c5afa13e41bfd0e4b0851b632df542dbe7f353033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_64ab1eb19168555ffd0c3e526e1a6fcfe96c772a97295a161a40430456d62fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ab1eb19168555ffd0c3e526e1a6fcfe96c772a97295a161a40430456d62fec->enter($__internal_64ab1eb19168555ffd0c3e526e1a6fcfe96c772a97295a161a40430456d62fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_64ab1eb19168555ffd0c3e526e1a6fcfe96c772a97295a161a40430456d62fec->leave($__internal_64ab1eb19168555ffd0c3e526e1a6fcfe96c772a97295a161a40430456d62fec_prof);

        
        $__internal_a5dc46a869065e36dfb0096c5afa13e41bfd0e4b0851b632df542dbe7f353033->leave($__internal_a5dc46a869065e36dfb0096c5afa13e41bfd0e4b0851b632df542dbe7f353033_prof);

    }

    // line 32
    public function block_style($context, array $blocks = array())
    {
        $__internal_b987fbdfe476653352f8d3a7782d62c80c27df872f06d8ae55a0ac8f92978fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b987fbdfe476653352f8d3a7782d62c80c27df872f06d8ae55a0ac8f92978fba->enter($__internal_b987fbdfe476653352f8d3a7782d62c80c27df872f06d8ae55a0ac8f92978fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_1421fa96a5c1c8aa518c70ddf265e19fc84da7d9adb1a3c7afb181e596b257be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1421fa96a5c1c8aa518c70ddf265e19fc84da7d9adb1a3c7afb181e596b257be->enter($__internal_1421fa96a5c1c8aa518c70ddf265e19fc84da7d9adb1a3c7afb181e596b257be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 33
        echo "<style>

img{
  width:300px;
}

</style>
";
        
        $__internal_1421fa96a5c1c8aa518c70ddf265e19fc84da7d9adb1a3c7afb181e596b257be->leave($__internal_1421fa96a5c1c8aa518c70ddf265e19fc84da7d9adb1a3c7afb181e596b257be_prof);

        
        $__internal_b987fbdfe476653352f8d3a7782d62c80c27df872f06d8ae55a0ac8f92978fba->leave($__internal_b987fbdfe476653352f8d3a7782d62c80c27df872f06d8ae55a0ac8f92978fba_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:search_bien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 33,  293 => 32,  281 => 6,  272 => 5,  259 => 94,  247 => 88,  241 => 87,  236 => 85,  230 => 84,  221 => 82,  216 => 80,  211 => 79,  208 => 78,  203 => 77,  201 => 76,  196 => 73,  192 => 72,  188 => 70,  185 => 69,  180 => 66,  168 => 60,  162 => 59,  157 => 57,  151 => 56,  142 => 54,  137 => 52,  132 => 51,  129 => 50,  124 => 49,  122 => 48,  117 => 45,  113 => 44,  109 => 42,  106 => 41,  104 => 32,  98 => 29,  84 => 19,  79 => 18,  74 => 17,  69 => 16,  62 => 12,  57 => 10,  53 => 8,  51 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layout.html.twig\" %}


{% block body %}
{% block header %}
{{parent()}}
{% endblock %}


{{ form_start(form) }}
<section  class=\"row\" style=\"height:355px; margin-top:0px\" >
 <div class=\"col\"> <img src=\"{{ asset('images/m1.jpg') }}\" style=\"height:355px; width:100%\" alt=\"\"></div>
<div class=\"col-12\"style=\"z-index:1 ; position:absolute;background-color: Grey; margin-top:50px;height:100px;opacity: 0.8;\">
<table >
    <tr>
    <td> {{ form_label(form.types) }}{{ form_widget(form.types,{'attr': {'class': 'task_field'}}) }}</td>
    <td> {{ form_label(form.localites) }}{{ form_widget(form.localites) }}</td>
    <td> {{ form_label(form.prix) }}{{ form_widget(form.prix) }}</td>
    <td> {{ form_label(form.chercher) }}{{ form_widget(form.chercher) }}</td>
    </tr>
</table>
</div>


 </section>



{{ form_end(form) }}
<section>

{% block style %}
<style>

img{
  width:300px;
}

</style>
{% endblock %}
 {% if app.session.get('id_client') is not defined %}
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

      <p >{{use.description }}//{{ app.session.get('qwerty') }}</p>
   <a href=\"{{path('reserve')}}\">reserver</a>
    </div>
  </div>
    </div>
  </div>
{% endfor %}

 </section>
{% endif %}
 {% if app.session.get('id_client') is  defined %}
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

      <p >{{use.description }}//{{ app.session.get('qwerty') }}</p>
   <a href=\"{{path('reserver',{'id':app.session.get('id_client') ,'idb':use.id})}}\">reserver</a>
    </div>
  </div>
    </div>
  </div>
{% endfor %}

 </section>
{% endif %}
{% endblock %}

", "KEURGUIimmoBundle:front:search_bien.html.twig", "/var/www/html/projet_file_rouge/keurgui/src/KEURGUI/immoBundle/Resources/views/front/search_bien.html.twig");
    }
}
