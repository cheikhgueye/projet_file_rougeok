<?php

/* KEURGUIimmoBundle::index.html.twig */
class __TwigTemplate_89507eb65171918b8473eb0b2ccc3f644863ccba6711862e1509e44d7a79c993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "KEURGUIimmoBundle::index.html.twig", 1);
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
        $__internal_dc5eb294a1680c2e03343ad3664ba229688fb55d0eb5b1467ef16da107bdd5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5eb294a1680c2e03343ad3664ba229688fb55d0eb5b1467ef16da107bdd5a2->enter($__internal_dc5eb294a1680c2e03343ad3664ba229688fb55d0eb5b1467ef16da107bdd5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::index.html.twig"));

        $__internal_5806d3b699148e3c88e9b288cec8c9068354728321cae501f096bba68d95812a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5806d3b699148e3c88e9b288cec8c9068354728321cae501f096bba68d95812a->enter($__internal_5806d3b699148e3c88e9b288cec8c9068354728321cae501f096bba68d95812a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc5eb294a1680c2e03343ad3664ba229688fb55d0eb5b1467ef16da107bdd5a2->leave($__internal_dc5eb294a1680c2e03343ad3664ba229688fb55d0eb5b1467ef16da107bdd5a2_prof);

        
        $__internal_5806d3b699148e3c88e9b288cec8c9068354728321cae501f096bba68d95812a->leave($__internal_5806d3b699148e3c88e9b288cec8c9068354728321cae501f096bba68d95812a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_536766293d75af688d83522e2a979b3c70ac498bea3a2e3731bbb83a91aa7d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536766293d75af688d83522e2a979b3c70ac498bea3a2e3731bbb83a91aa7d9c->enter($__internal_536766293d75af688d83522e2a979b3c70ac498bea3a2e3731bbb83a91aa7d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95351d1e601ee29908abd58d90986351b96e4b455e3cf34f5781c13e06c81de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95351d1e601ee29908abd58d90986351b96e4b455e3cf34f5781c13e06c81de0->enter($__internal_95351d1e601ee29908abd58d90986351b96e4b455e3cf34f5781c13e06c81de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_95351d1e601ee29908abd58d90986351b96e4b455e3cf34f5781c13e06c81de0->leave($__internal_95351d1e601ee29908abd58d90986351b96e4b455e3cf34f5781c13e06c81de0_prof);

        
        $__internal_536766293d75af688d83522e2a979b3c70ac498bea3a2e3731bbb83a91aa7d9c->leave($__internal_536766293d75af688d83522e2a979b3c70ac498bea3a2e3731bbb83a91aa7d9c_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle::index.html.twig";
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
", "KEURGUIimmoBundle::index.html.twig", "/var/www/html/projet_file_rouge/keurgui/src/KEURGUI/immoBundle/Resources/views/index.html.twig");
    }
}
