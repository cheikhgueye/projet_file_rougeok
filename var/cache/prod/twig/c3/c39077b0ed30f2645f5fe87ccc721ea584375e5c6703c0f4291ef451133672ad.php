<?php

/* KEURGUIimmoBundle:front:search_bien.html.twig */
class __TwigTemplate_4cc7accc8e035b3ba2f01b73c65fc40848dba2993f3142637367255037c8f54c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "

";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "types", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "types", array()), 'widget', array("attr" => array("class" => "task_field")));
        echo "</div>
<div class=\"col-1\"></div>
<div class=\"col-2\"style=\"font-size:25px;color:white;\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "localites", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "localites", array()), 'widget');
        echo "</div>
<div class=\"col-1\"></div>
<div class=\"col-2\"style=\"font-size:25px;color:white;\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "prix", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "prix", array()), 'widget');
        echo "</div>
<div class=\"col-1\"></div>
<div class=\"col-2\" style=\"margin-top:45px;\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "chercher", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "chercher", array()), 'widget');
        echo "</div>
<div class=\"col-1\"></div>
</div>
</div>


 </section>



";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
            $context['_seq'] = twig_ensure_traversable(($context["x"] ?? null));
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
                    if ((($context["c"] ?? null) == 0)) {
                        // line 54
                        echo "       <td scope=\"col\" class=\"table-info\">  <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                        echo "\" class=\"img-circle\" alt=\"Leanna!\"></td>
       ";
                        // line 55
                        $context["c"] = (($context["c"] ?? null) + 1);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "get", array(0 => "qwerty"), "method"), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["x"] ?? null));
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
                    if ((($context["c"] ?? null) == 0)) {
                        // line 82
                        echo "       <td scope=\"col\" class=\"table-info\">  <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                        echo "\" class=\"img-circle\" alt=\"Leanna!\"></td>
       ";
                        // line 83
                        $context["c"] = (($context["c"] ?? null) + 1);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "get", array(0 => "qwerty"), "method"), "html", null, true);
                echo "</p>
   <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "get", array(0 => "id_client"), "method"), "idb" => twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "id", array()))), "html", null, true);
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
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 35
    public function block_style($context, array $blocks = array())
    {
        // line 36
        echo "<style>

img{
  width:300px;
}

</style>
";
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
        return array (  263 => 36,  260 => 35,  254 => 6,  251 => 5,  244 => 97,  232 => 91,  226 => 90,  221 => 88,  215 => 87,  206 => 85,  201 => 83,  196 => 82,  193 => 81,  188 => 80,  186 => 79,  181 => 76,  177 => 75,  173 => 73,  170 => 72,  165 => 69,  153 => 63,  147 => 62,  142 => 60,  136 => 59,  127 => 57,  122 => 55,  117 => 54,  114 => 53,  109 => 52,  107 => 51,  102 => 48,  98 => 47,  94 => 45,  91 => 44,  89 => 35,  83 => 32,  69 => 22,  63 => 20,  57 => 18,  51 => 16,  44 => 12,  39 => 10,  35 => 8,  33 => 5,  30 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KEURGUIimmoBundle:front:search_bien.html.twig", "/var/www/html/projet_file_rougeok/src/KEURGUI/immoBundle/Resources/views/front/search_bien.html.twig");
    }
}
