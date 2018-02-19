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
            'style' => array($this, 'block_style'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7150eefe7f8f8cb42a66cb3d24a9c50c75d23fd8ba1ca1d80880613f4a5a60ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7150eefe7f8f8cb42a66cb3d24a9c50c75d23fd8ba1ca1d80880613f4a5a60ea->enter($__internal_7150eefe7f8f8cb42a66cb3d24a9c50c75d23fd8ba1ca1d80880613f4a5a60ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:reser.html.twig"));

        $__internal_a7028669ddd55c7fbb9b8c7f47e5f60bd7cd0462ef06750a7002b6c247247759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7028669ddd55c7fbb9b8c7f47e5f60bd7cd0462ef06750a7002b6c247247759->enter($__internal_a7028669ddd55c7fbb9b8c7f47e5f60bd7cd0462ef06750a7002b6c247247759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:reser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7150eefe7f8f8cb42a66cb3d24a9c50c75d23fd8ba1ca1d80880613f4a5a60ea->leave($__internal_7150eefe7f8f8cb42a66cb3d24a9c50c75d23fd8ba1ca1d80880613f4a5a60ea_prof);

        
        $__internal_a7028669ddd55c7fbb9b8c7f47e5f60bd7cd0462ef06750a7002b6c247247759->leave($__internal_a7028669ddd55c7fbb9b8c7f47e5f60bd7cd0462ef06750a7002b6c247247759_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f853de52f6f5ca744a55b35d07100cd5c88052f78012f7736f6ed3da4591d24d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f853de52f6f5ca744a55b35d07100cd5c88052f78012f7736f6ed3da4591d24d->enter($__internal_f853de52f6f5ca744a55b35d07100cd5c88052f78012f7736f6ed3da4591d24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f724579df6a5373ba19ac400f0fddc22051e55660f812b41d3949000000e98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f724579df6a5373ba19ac400f0fddc22051e55660f812b41d3949000000e98c->enter($__internal_4f724579df6a5373ba19ac400f0fddc22051e55660f812b41d3949000000e98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4f724579df6a5373ba19ac400f0fddc22051e55660f812b41d3949000000e98c->leave($__internal_4f724579df6a5373ba19ac400f0fddc22051e55660f812b41d3949000000e98c_prof);

        
        $__internal_f853de52f6f5ca744a55b35d07100cd5c88052f78012f7736f6ed3da4591d24d->leave($__internal_f853de52f6f5ca744a55b35d07100cd5c88052f78012f7736f6ed3da4591d24d_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_47452a7c4a3ee520e6e028ce2da37b1d22a0c8f41436f8abf89c03e88c5a0258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47452a7c4a3ee520e6e028ce2da37b1d22a0c8f41436f8abf89c03e88c5a0258->enter($__internal_47452a7c4a3ee520e6e028ce2da37b1d22a0c8f41436f8abf89c03e88c5a0258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b6daca6539fd839844fc76cb91980879ba112eaaf2403316635b4236f9739cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6daca6539fd839844fc76cb91980879ba112eaaf2403316635b4236f9739cd6->enter($__internal_b6daca6539fd839844fc76cb91980879ba112eaaf2403316635b4236f9739cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_b6daca6539fd839844fc76cb91980879ba112eaaf2403316635b4236f9739cd6->leave($__internal_b6daca6539fd839844fc76cb91980879ba112eaaf2403316635b4236f9739cd6_prof);

        
        $__internal_47452a7c4a3ee520e6e028ce2da37b1d22a0c8f41436f8abf89c03e88c5a0258->leave($__internal_47452a7c4a3ee520e6e028ce2da37b1d22a0c8f41436f8abf89c03e88c5a0258_prof);

    }

    // line 17
    public function block_style($context, array $blocks = array())
    {
        $__internal_adbae1c9d09d80c94940c356df8ae111f158c207de6f04362f00f952472ecbf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adbae1c9d09d80c94940c356df8ae111f158c207de6f04362f00f952472ecbf3->enter($__internal_adbae1c9d09d80c94940c356df8ae111f158c207de6f04362f00f952472ecbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_78c90e3c51c24a07cf1e12dd8f85863fe0dbbb7e98922323361b0d657da93703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c90e3c51c24a07cf1e12dd8f85863fe0dbbb7e98922323361b0d657da93703->enter($__internal_78c90e3c51c24a07cf1e12dd8f85863fe0dbbb7e98922323361b0d657da93703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 18
        echo "<style>
img{
  width:100px;
}
</style>
";
        
        $__internal_78c90e3c51c24a07cf1e12dd8f85863fe0dbbb7e98922323361b0d657da93703->leave($__internal_78c90e3c51c24a07cf1e12dd8f85863fe0dbbb7e98922323361b0d657da93703_prof);

        
        $__internal_adbae1c9d09d80c94940c356df8ae111f158c207de6f04362f00f952472ecbf3->leave($__internal_adbae1c9d09d80c94940c356df8ae111f158c207de6f04362f00f952472ecbf3_prof);

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

{% endblock %}", "KEURGUIimmoBundle:front:reser.html.twig", "/var/www/html/projet_file_rougeok/src/KEURGUI/immoBundle/Resources/views/front/reser.html.twig");
    }
}
