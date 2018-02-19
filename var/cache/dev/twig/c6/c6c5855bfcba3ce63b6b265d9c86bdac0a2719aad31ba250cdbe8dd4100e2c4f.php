<?php

/* :bien:index.html.twig */
class __TwigTemplate_3b2f4caafd6e896b9b39306a400db18b0837a52e35bfcc3e77fb01695854453b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":bien:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e6667b6465894efb6ab86c24c2a852a509593b70cd4c3886b010e091f7c34ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6667b6465894efb6ab86c24c2a852a509593b70cd4c3886b010e091f7c34ea->enter($__internal_9e6667b6465894efb6ab86c24c2a852a509593b70cd4c3886b010e091f7c34ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:index.html.twig"));

        $__internal_9335fdf3b725c78e1b2c74a38fedc907b9319665e2b2d4769a37476cc325949e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9335fdf3b725c78e1b2c74a38fedc907b9319665e2b2d4769a37476cc325949e->enter($__internal_9335fdf3b725c78e1b2c74a38fedc907b9319665e2b2d4769a37476cc325949e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e6667b6465894efb6ab86c24c2a852a509593b70cd4c3886b010e091f7c34ea->leave($__internal_9e6667b6465894efb6ab86c24c2a852a509593b70cd4c3886b010e091f7c34ea_prof);

        
        $__internal_9335fdf3b725c78e1b2c74a38fedc907b9319665e2b2d4769a37476cc325949e->leave($__internal_9335fdf3b725c78e1b2c74a38fedc907b9319665e2b2d4769a37476cc325949e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c668fbd907558902a9a9c081f96f12f6089fb793e9e12b6e5ca83e8f9eb6734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c668fbd907558902a9a9c081f96f12f6089fb793e9e12b6e5ca83e8f9eb6734->enter($__internal_6c668fbd907558902a9a9c081f96f12f6089fb793e9e12b6e5ca83e8f9eb6734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d27aa0fec80edf94e17def745b79fee13d0993b0ce4ca3eb264e93700a6227c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27aa0fec80edf94e17def745b79fee13d0993b0ce4ca3eb264e93700a6227c9->enter($__internal_d27aa0fec80edf94e17def745b79fee13d0993b0ce4ca3eb264e93700a6227c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Biens list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombien</th>
                <th>Etat</th>
                <th>Description</th>
                <th>Prixlocation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "nomBien", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "etat", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "prixLocation", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_new");
        echo "\">Create a new bien</a>
        </li>
    </ul>
";
        
        $__internal_d27aa0fec80edf94e17def745b79fee13d0993b0ce4ca3eb264e93700a6227c9->leave($__internal_d27aa0fec80edf94e17def745b79fee13d0993b0ce4ca3eb264e93700a6227c9_prof);

        
        $__internal_6c668fbd907558902a9a9c081f96f12f6089fb793e9e12b6e5ca83e8f9eb6734->leave($__internal_6c668fbd907558902a9a9c081f96f12f6089fb793e9e12b6e5ca83e8f9eb6734_prof);

    }

    public function getTemplateName()
    {
        return ":bien:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  119 => 37,  107 => 31,  101 => 28,  94 => 24,  90 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Biens list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombien</th>
                <th>Etat</th>
                <th>Description</th>
                <th>Prixlocation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for bien in biens %}
            <tr>
                <td><a href=\"{{ path('bien_show', { 'id': bien.id }) }}\">{{ bien.id }}</a></td>
                <td>{{ bien.nomBien }}</td>
                <td>{% if bien.etat %}Yes{% else %}No{% endif %}</td>
                <td>{{ bien.description }}</td>
                <td>{{ bien.prixLocation }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('bien_show', { 'id': bien.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('bien_edit', { 'id': bien.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('bien_new') }}\">Create a new bien</a>
        </li>
    </ul>
{% endblock %}
", ":bien:index.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/bien/index.html.twig");
    }
}
