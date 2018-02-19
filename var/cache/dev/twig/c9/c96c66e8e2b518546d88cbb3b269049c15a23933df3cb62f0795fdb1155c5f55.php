<?php

/* KEURGUIimmoBundle:front:y.html.twig */
class __TwigTemplate_7c10e5ad3a2b28085a009133279726d6c3d0a908cb045e94cf8c196ba555e557 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37968d2d93cd9dafa245305431af3b8ea45c4c25b12220f00c6fa59d0e039a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37968d2d93cd9dafa245305431af3b8ea45c4c25b12220f00c6fa59d0e039a13->enter($__internal_37968d2d93cd9dafa245305431af3b8ea45c4c25b12220f00c6fa59d0e039a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:y.html.twig"));

        $__internal_7cbc0a8edf5d14acc0363a7f5ca5db3f4b8826e19fc6c54905fea6252953ad16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbc0a8edf5d14acc0363a7f5ca5db3f4b8826e19fc6c54905fea6252953ad16->enter($__internal_7cbc0a8edf5d14acc0363a7f5ca5db3f4b8826e19fc6c54905fea6252953ad16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:y.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
     <script src=\"";
        // line 2
        echo "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js";
        echo "\"></script>

 <table border=1 class=\"table\" >
    <tr>
<th>id</th>
<th>date de reservation</th>
<th>client</th>
<th>nom du bien</th>
</tr>
<tr>
";
        // line 12
        $this->displayBlock('style', $context, $blocks);
        // line 19
        echo " 
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new Twig_Error_Runtime('Variable "x" does not exist.', 20, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
            // line 21
            echo "       <tr>
  
     

  <td scope=\"col\" class=\"table-info\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "id", array()), "html", null, true);
            echo "</td>
          <td scope=\"col\" class=\"table-info\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "date", array()), "html", null, true);
            echo "</td>

    <td scope=\"col\" class=\"table-info\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
        <td scope=\"col\" class=\"table-info\">   <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat", array("idb" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "client", array()), "id", array()))), "html", null, true);
            echo "\">valider</a>
</td>

     </tr> 
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['use'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </tr>
</table>

";
        
        $__internal_37968d2d93cd9dafa245305431af3b8ea45c4c25b12220f00c6fa59d0e039a13->leave($__internal_37968d2d93cd9dafa245305431af3b8ea45c4c25b12220f00c6fa59d0e039a13_prof);

        
        $__internal_7cbc0a8edf5d14acc0363a7f5ca5db3f4b8826e19fc6c54905fea6252953ad16->leave($__internal_7cbc0a8edf5d14acc0363a7f5ca5db3f4b8826e19fc6c54905fea6252953ad16_prof);

    }

    // line 12
    public function block_style($context, array $blocks = array())
    {
        $__internal_61dbdc0d7c315620bd90730f60a992455734d3269e56deb0d7975f831eeba337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61dbdc0d7c315620bd90730f60a992455734d3269e56deb0d7975f831eeba337->enter($__internal_61dbdc0d7c315620bd90730f60a992455734d3269e56deb0d7975f831eeba337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_94bd56091e456a5bdbd127324eab2f7a916363861b27b9645f3daa9fd55e6f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bd56091e456a5bdbd127324eab2f7a916363861b27b9645f3daa9fd55e6f23->enter($__internal_94bd56091e456a5bdbd127324eab2f7a916363861b27b9645f3daa9fd55e6f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 13
        echo "<style>
img{
  width:100px;
}
</style>
";
        
        $__internal_94bd56091e456a5bdbd127324eab2f7a916363861b27b9645f3daa9fd55e6f23->leave($__internal_94bd56091e456a5bdbd127324eab2f7a916363861b27b9645f3daa9fd55e6f23_prof);

        
        $__internal_61dbdc0d7c315620bd90730f60a992455734d3269e56deb0d7975f831eeba337->leave($__internal_61dbdc0d7c315620bd90730f60a992455734d3269e56deb0d7975f831eeba337_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:y.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 13,  98 => 12,  85 => 35,  71 => 29,  67 => 28,  62 => 26,  58 => 25,  52 => 21,  47 => 20,  44 => 19,  42 => 12,  29 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
     <script src=\"{{\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\" }}\"></script>

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
        <td scope=\"col\" class=\"table-info\">   <a href=\"{{path('contrat',{'idb':use.client.id})}}\">valider</a>
</td>

     </tr> 
      {% else %}
{% endfor %}
  </tr>
</table>

", "KEURGUIimmoBundle:front:y.html.twig", "/var/www/html/projet_file_rouge/keurgui/src/KEURGUI/immoBundle/Resources/views/front/y.html.twig");
    }
}
