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
        $__internal_b7274b2f4623a8fc3a3a26ae8c49e3ff2eef0020b2efe96e2e230a2d39518d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7274b2f4623a8fc3a3a26ae8c49e3ff2eef0020b2efe96e2e230a2d39518d3b->enter($__internal_b7274b2f4623a8fc3a3a26ae8c49e3ff2eef0020b2efe96e2e230a2d39518d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:search_bien.html.twig"));

        $__internal_4132818dd7268c768ee3bda81fba2c8388618a9cd6c7fdf150786cbcc297267f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4132818dd7268c768ee3bda81fba2c8388618a9cd6c7fdf150786cbcc297267f->enter($__internal_4132818dd7268c768ee3bda81fba2c8388618a9cd6c7fdf150786cbcc297267f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7274b2f4623a8fc3a3a26ae8c49e3ff2eef0020b2efe96e2e230a2d39518d3b->leave($__internal_b7274b2f4623a8fc3a3a26ae8c49e3ff2eef0020b2efe96e2e230a2d39518d3b_prof);

        
        $__internal_4132818dd7268c768ee3bda81fba2c8388618a9cd6c7fdf150786cbcc297267f->leave($__internal_4132818dd7268c768ee3bda81fba2c8388618a9cd6c7fdf150786cbcc297267f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eba42e71c7d7b46b1654d6fcae12c2d4d80f1e6c00528f817b7f226901b5c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eba42e71c7d7b46b1654d6fcae12c2d4d80f1e6c00528f817b7f226901b5c74->enter($__internal_1eba42e71c7d7b46b1654d6fcae12c2d4d80f1e6c00528f817b7f226901b5c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eef67d4349a08314bbd614ee5c78291e5b0b21d5aa4501c180cc40b164f6c1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef67d4349a08314bbd614ee5c78291e5b0b21d5aa4501c180cc40b164f6c1e9->enter($__internal_eef67d4349a08314bbd614ee5c78291e5b0b21d5aa4501c180cc40b164f6c1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 44
        echo " ";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "id_client"), "method", true, true)) {
            // line 45
            echo "<div class=\"row\">

";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new Twig_Error_Runtime('Variable "x" does not exist.', 47, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
                // line 48
                echo "<div class=\"col-md-4\">
<div class=\"container\">
 <div class=\"card\" style=\"width:300px\">
      ";
                // line 51
                $context["c"] = 0;
                // line 52
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "image", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 53
                    echo "    ";
                    if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 53, $this->getSourceContext()); })()) == 0)) {
                        // line 54
                        echo "       <td scope=\"col\" class=\"table-info\">  <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                        echo "\" class=\"img-circle\" alt=\"Leanna!\"></td>
       ";
                        // line 55
                        $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 55, $this->getSourceContext()); })()) + 1);
                        echo " 
         ";
                    }
                    // line 57
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
         <div class=\"card-body\">
      <h4 class=\"card-title\">";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "type", array()), "nom", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "nom", array()), "html", null, true);
                echo "</h4>
       <h4 class=\"card-title\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "localite", array()), "html", null, true);
                echo "</h4>

      <p >";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "description", array()), "html", null, true);
                echo "//";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 62, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "qwerty"), "method"), "html", null, true);
                echo "</p>
   <a href=\"";
                // line 63
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
            // line 69
            echo "
 </section>
";
        }
        // line 72
        echo " ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "id_client"), "method", true, true)) {
            // line 73
            echo " <div class=\"row\">

";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new Twig_Error_Runtime('Variable "x" does not exist.', 75, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
                // line 76
                echo "<div class=\"col-md-4\">
<div class=\"container\">
 <div class=\"card\" style=\"width:300px\">
      ";
                // line 79
                $context["c"] = 0;
                // line 80
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "image", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 81
                    echo "    ";
                    if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 81, $this->getSourceContext()); })()) == 0)) {
                        // line 82
                        echo "       <td scope=\"col\" class=\"table-info\">  <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                        echo "\" class=\"img-circle\" alt=\"Leanna!\"></td>
       ";
                        // line 83
                        $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 83, $this->getSourceContext()); })()) + 1);
                        echo " 
         ";
                    }
                    // line 85
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
         <div class=\"card-body\">
      <h4 class=\"card-title\">";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "type", array()), "nom", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "nom", array()), "html", null, true);
                echo "</h4>
       <h4 class=\"card-title\">";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "localite", array()), "html", null, true);
                echo "</h4>

      <p >";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "description", array()), "html", null, true);
                echo "//";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 90, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "qwerty"), "method"), "html", null, true);
                echo "</p>
   <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 91, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "id_client"), "method"), "idb" => twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "id", array()))), "html", null, true);
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
            // line 97
            echo "
 </section>
";
        }
        
        $__internal_eef67d4349a08314bbd614ee5c78291e5b0b21d5aa4501c180cc40b164f6c1e9->leave($__internal_eef67d4349a08314bbd614ee5c78291e5b0b21d5aa4501c180cc40b164f6c1e9_prof);

        
        $__internal_1eba42e71c7d7b46b1654d6fcae12c2d4d80f1e6c00528f817b7f226901b5c74->leave($__internal_1eba42e71c7d7b46b1654d6fcae12c2d4d80f1e6c00528f817b7f226901b5c74_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_93c44fca2b050dbd65197289b4bf257810948fc007bc35029f3431aecb1f3938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c44fca2b050dbd65197289b4bf257810948fc007bc35029f3431aecb1f3938->enter($__internal_93c44fca2b050dbd65197289b4bf257810948fc007bc35029f3431aecb1f3938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_5dd540c092f2b5cb8b1da1a8ddab75c81833e57675e697a1e63e7b3937d1afbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd540c092f2b5cb8b1da1a8ddab75c81833e57675e697a1e63e7b3937d1afbe->enter($__internal_5dd540c092f2b5cb8b1da1a8ddab75c81833e57675e697a1e63e7b3937d1afbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_5dd540c092f2b5cb8b1da1a8ddab75c81833e57675e697a1e63e7b3937d1afbe->leave($__internal_5dd540c092f2b5cb8b1da1a8ddab75c81833e57675e697a1e63e7b3937d1afbe_prof);

        
        $__internal_93c44fca2b050dbd65197289b4bf257810948fc007bc35029f3431aecb1f3938->leave($__internal_93c44fca2b050dbd65197289b4bf257810948fc007bc35029f3431aecb1f3938_prof);

    }

    // line 35
    public function block_style($context, array $blocks = array())
    {
        $__internal_e5f39214d79f5dbb37428bbe4841e29051686f7886ec958a6fafc17667990603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f39214d79f5dbb37428bbe4841e29051686f7886ec958a6fafc17667990603->enter($__internal_e5f39214d79f5dbb37428bbe4841e29051686f7886ec958a6fafc17667990603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_c5483244c74a248d258b6ead8159e7046e9c7524c1d295385122174d505c68a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5483244c74a248d258b6ead8159e7046e9c7524c1d295385122174d505c68a1->enter($__internal_c5483244c74a248d258b6ead8159e7046e9c7524c1d295385122174d505c68a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 36
        echo "<style>

img{
  width:300px;
}

</style>
";
        
        $__internal_c5483244c74a248d258b6ead8159e7046e9c7524c1d295385122174d505c68a1->leave($__internal_c5483244c74a248d258b6ead8159e7046e9c7524c1d295385122174d505c68a1_prof);

        
        $__internal_e5f39214d79f5dbb37428bbe4841e29051686f7886ec958a6fafc17667990603->leave($__internal_e5f39214d79f5dbb37428bbe4841e29051686f7886ec958a6fafc17667990603_prof);

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
        return array (  305 => 36,  296 => 35,  284 => 6,  275 => 5,  262 => 97,  250 => 91,  244 => 90,  239 => 88,  233 => 87,  224 => 85,  219 => 83,  214 => 82,  211 => 81,  206 => 80,  204 => 79,  199 => 76,  195 => 75,  191 => 73,  188 => 72,  183 => 69,  171 => 63,  165 => 62,  160 => 60,  154 => 59,  145 => 57,  140 => 55,  135 => 54,  132 => 53,  127 => 52,  125 => 51,  120 => 48,  116 => 47,  112 => 45,  109 => 44,  107 => 35,  101 => 32,  87 => 22,  81 => 20,  75 => 18,  69 => 16,  62 => 12,  57 => 10,  53 => 8,  51 => 5,  42 => 4,  11 => 1,);
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
