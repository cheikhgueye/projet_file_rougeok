<?php

/* KEURGUIimmoBundle:front:search_bien.html.twig */
class __TwigTemplate_ba1b82e74ec0a21e2f375f27ec2bb92b5bb5a054f71d72ee6e6b28e8f275e1b6 extends Twig_Template
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
        $__internal_f58e29bd249616dccdbb6e1b59fbe17697c430bd4440211ecfc15265f643fd50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58e29bd249616dccdbb6e1b59fbe17697c430bd4440211ecfc15265f643fd50->enter($__internal_f58e29bd249616dccdbb6e1b59fbe17697c430bd4440211ecfc15265f643fd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:search_bien.html.twig"));

        $__internal_488cf01c63e3a9e3c4970c40b376f699c96f7a634b0d09f318b39cba763ca9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488cf01c63e3a9e3c4970c40b376f699c96f7a634b0d09f318b39cba763ca9bc->enter($__internal_488cf01c63e3a9e3c4970c40b376f699c96f7a634b0d09f318b39cba763ca9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f58e29bd249616dccdbb6e1b59fbe17697c430bd4440211ecfc15265f643fd50->leave($__internal_f58e29bd249616dccdbb6e1b59fbe17697c430bd4440211ecfc15265f643fd50_prof);

        
        $__internal_488cf01c63e3a9e3c4970c40b376f699c96f7a634b0d09f318b39cba763ca9bc->leave($__internal_488cf01c63e3a9e3c4970c40b376f699c96f7a634b0d09f318b39cba763ca9bc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_67063be4ac8af0de3f9c690d64995795f05ead6afc36a2f3c2ce97f8dc96da35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67063be4ac8af0de3f9c690d64995795f05ead6afc36a2f3c2ce97f8dc96da35->enter($__internal_67063be4ac8af0de3f9c690d64995795f05ead6afc36a2f3c2ce97f8dc96da35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c47e61748720965bb3f03ccddc14b9191f6973189df0c123241c3bf7b42545cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47e61748720965bb3f03ccddc14b9191f6973189df0c123241c3bf7b42545cc->enter($__internal_c47e61748720965bb3f03ccddc14b9191f6973189df0c123241c3bf7b42545cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "

";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start');
        echo "
<section  class=\"row\" style=\"height:355px; margin-top:0px\" >
 <div class=\"col-12\"> <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/m1.jpg"), "html", null, true);
        echo "\" style=\"height:355px; width:100%\" alt=\"\"></div>
<div class=\"col\"style=\"z-index:1 ; position:absolute;background-color: Grey; margin-top:50px;height:100px;opacity: 0.8;\">

<div class=\"row\">
<div class=\"col-2\"style=\"font-size:25px;color:white;\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "types", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "types", array()), 'widget', array("attr" => array("class" => "task_field")));
        echo "</div>
<div class=\"col-1\"></div>
<div class=\"col-2\"style=\"font-size:25px;color:white;\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "localites", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "localites", array()), 'widget');
        echo "</div>
<div class=\"col-1\"></div>
<div class=\"col-2\"style=\"font-size:25px;color:white;\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "prix", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "prix", array()), 'widget');
        echo "</div>
<div class=\"col-1\"></div>
<div class=\"col-2\" style=\"margin-top:45px;\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "chercher", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "chercher", array()), 'widget');
        echo "</div>
<div class=\"col-1\"></div>
</div>
</div>


 </section>



";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'form_end');
        echo "
<section>

";
        // line 35
        $this->displayBlock('style', $context, $blocks);
        // line 45
        echo " ";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "id_client"), "method", true, true)) {
            // line 46
            echo "<div class=\"row\">

";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new Twig_Error_Runtime('Variable "x" does not exist.', 48, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
                // line 49
                echo "<div class=\"col-md-4\">
<div class=\"container\">
 <div class=\"card\" style=\"width:300px\">
      ";
                // line 52
                $context["c"] = 0;
                // line 53
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "image", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 54
                    echo "    ";
                    if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 54, $this->getSourceContext()); })()) == 0)) {
                        // line 55
                        echo "       <td scope=\"col\" class=\"table-info\">  <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                        echo "\" class=\"img-circle\" alt=\"Leanna!\"></td>
       ";
                        // line 56
                        $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 56, $this->getSourceContext()); })()) + 1);
                        echo " 
         ";
                    }
                    // line 58
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
         <div class=\"card-body\">
      <h4 class=\"card-title\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "type", array()), "nom", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "nom", array()), "html", null, true);
                echo "</h4>
       <h4 class=\"card-title\">";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "localite", array()), "html", null, true);
                echo "</h4>

      <p >";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "description", array()), "html", null, true);
                echo "//";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 63, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "qwerty"), "method"), "html", null, true);
                echo "</p>
   <a href=\"";
                // line 64
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
            // line 70
            echo "
 </section>
";
        }
        // line 73
        echo " ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "id_client"), "method", true, true)) {
            // line 74
            echo " <div class=\"row\">

";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new Twig_Error_Runtime('Variable "x" does not exist.', 76, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
                // line 77
                echo "<div class=\"col-md-4\">
<div class=\"container\">
 <div class=\"card\" style=\"width:300px\">
      ";
                // line 80
                $context["c"] = 0;
                // line 81
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "image", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 82
                    echo "    ";
                    if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 82, $this->getSourceContext()); })()) == 0)) {
                        // line 83
                        echo "       <td scope=\"col\" class=\"table-info\">  <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                        echo "\" class=\"img-circle\" alt=\"Leanna!\"></td>
       ";
                        // line 84
                        $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 84, $this->getSourceContext()); })()) + 1);
                        echo " 
         ";
                    }
                    // line 86
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
         <div class=\"card-body\">
      <h4 class=\"card-title\">";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "type", array()), "nom", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "nom", array()), "html", null, true);
                echo "</h4>
       <h4 class=\"card-title\">";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "localite", array()), "html", null, true);
                echo "</h4>

      <p >";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "description", array()), "html", null, true);
                echo "//";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 91, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "qwerty"), "method"), "html", null, true);
                echo "</p>
   <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 92, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "id_client"), "method"), "idb" => twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "id", array()))), "html", null, true);
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
            // line 98
            echo "
 </section>
";
        }
        
        $__internal_c47e61748720965bb3f03ccddc14b9191f6973189df0c123241c3bf7b42545cc->leave($__internal_c47e61748720965bb3f03ccddc14b9191f6973189df0c123241c3bf7b42545cc_prof);

        
        $__internal_67063be4ac8af0de3f9c690d64995795f05ead6afc36a2f3c2ce97f8dc96da35->leave($__internal_67063be4ac8af0de3f9c690d64995795f05ead6afc36a2f3c2ce97f8dc96da35_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_b5ce37d21114017db85266fce082fe0c8ce41fddeb01da6a9960caab28d4499a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ce37d21114017db85266fce082fe0c8ce41fddeb01da6a9960caab28d4499a->enter($__internal_b5ce37d21114017db85266fce082fe0c8ce41fddeb01da6a9960caab28d4499a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b7280bff9e70c743e1b33468173db95ccc35226e29668f3cb14b7db6f6d402e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7280bff9e70c743e1b33468173db95ccc35226e29668f3cb14b7db6f6d402e2->enter($__internal_b7280bff9e70c743e1b33468173db95ccc35226e29668f3cb14b7db6f6d402e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_b7280bff9e70c743e1b33468173db95ccc35226e29668f3cb14b7db6f6d402e2->leave($__internal_b7280bff9e70c743e1b33468173db95ccc35226e29668f3cb14b7db6f6d402e2_prof);

        
        $__internal_b5ce37d21114017db85266fce082fe0c8ce41fddeb01da6a9960caab28d4499a->leave($__internal_b5ce37d21114017db85266fce082fe0c8ce41fddeb01da6a9960caab28d4499a_prof);

    }

    // line 35
    public function block_style($context, array $blocks = array())
    {
        $__internal_c2f2b6d23c00dbd04c415d055f3dcbaea9e54be326dcf61d662769780bd35025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f2b6d23c00dbd04c415d055f3dcbaea9e54be326dcf61d662769780bd35025->enter($__internal_c2f2b6d23c00dbd04c415d055f3dcbaea9e54be326dcf61d662769780bd35025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_48668a6ba8f7b47b09681c788cb354a2ef255991d39164a0754198dcf9b17ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48668a6ba8f7b47b09681c788cb354a2ef255991d39164a0754198dcf9b17ba4->enter($__internal_48668a6ba8f7b47b09681c788cb354a2ef255991d39164a0754198dcf9b17ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 36
        echo "<style>

img{
  
  width:300px;
}

</style>
";
        
        $__internal_48668a6ba8f7b47b09681c788cb354a2ef255991d39164a0754198dcf9b17ba4->leave($__internal_48668a6ba8f7b47b09681c788cb354a2ef255991d39164a0754198dcf9b17ba4_prof);

        
        $__internal_c2f2b6d23c00dbd04c415d055f3dcbaea9e54be326dcf61d662769780bd35025->leave($__internal_c2f2b6d23c00dbd04c415d055f3dcbaea9e54be326dcf61d662769780bd35025_prof);

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
        return array (  305 => 36,  296 => 35,  284 => 6,  275 => 5,  262 => 98,  250 => 92,  244 => 91,  239 => 89,  233 => 88,  224 => 86,  219 => 84,  214 => 83,  211 => 82,  206 => 81,  204 => 80,  199 => 77,  195 => 76,  191 => 74,  188 => 73,  183 => 70,  171 => 64,  165 => 63,  160 => 61,  154 => 60,  145 => 58,  140 => 56,  135 => 55,  132 => 54,  127 => 53,  125 => 52,  120 => 49,  116 => 48,  112 => 46,  109 => 45,  107 => 35,  101 => 32,  87 => 22,  81 => 20,  75 => 18,  69 => 16,  62 => 12,  57 => 10,  53 => 8,  51 => 5,  42 => 4,  11 => 1,);
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
 <div class=\"col-12\"> <img src=\"{{ asset('images/m1.jpg') }}\" style=\"height:355px; width:100%\" alt=\"\"></div>
<div class=\"col\"style=\"z-index:1 ; position:absolute;background-color: Grey; margin-top:50px;height:100px;opacity: 0.8;\">

<div class=\"row\">
<div class=\"col-2\"style=\"font-size:25px;color:white;\">{{ form_label(form.types) }}{{ form_widget(form.types,{'attr': {'class': 'task_field'}}) }}</div>
<div class=\"col-1\"></div>
<div class=\"col-2\"style=\"font-size:25px;color:white;\">{{ form_label(form.localites) }}{{ form_widget(form.localites) }}</div>
<div class=\"col-1\"></div>
<div class=\"col-2\"style=\"font-size:25px;color:white;\">{{ form_label(form.prix) }}{{ form_widget(form.prix) }}</div>
<div class=\"col-1\"></div>
<div class=\"col-2\" style=\"margin-top:45px;\">{{ form_label(form.chercher) }}{{ form_widget(form.chercher) }}</div>
<div class=\"col-1\"></div>
</div>
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

", "KEURGUIimmoBundle:front:search_bien.html.twig", "/var/www/html/projet_file_rougeok/src/KEURGUI/immoBundle/Resources/views/front/search_bien.html.twig");
    }
}
