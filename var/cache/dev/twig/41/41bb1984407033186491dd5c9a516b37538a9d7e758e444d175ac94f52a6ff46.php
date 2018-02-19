<?php

/* :contrat:index.html.twig */
class __TwigTemplate_75e65dc8a03e669f3410ce699b5c154e7d067123a51c0b652e404a8725f9e138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contrat:index.html.twig", 1);
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
        $__internal_0f81cc7bf1d51504ecf122ce3b504c7e3948db186687611f57c1936ea95a93ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f81cc7bf1d51504ecf122ce3b504c7e3948db186687611f57c1936ea95a93ed->enter($__internal_0f81cc7bf1d51504ecf122ce3b504c7e3948db186687611f57c1936ea95a93ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:index.html.twig"));

        $__internal_82ba82261fd43387f693451cbcc18486f329f36978cb4c6aa92cdff4e2369835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ba82261fd43387f693451cbcc18486f329f36978cb4c6aa92cdff4e2369835->enter($__internal_82ba82261fd43387f693451cbcc18486f329f36978cb4c6aa92cdff4e2369835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f81cc7bf1d51504ecf122ce3b504c7e3948db186687611f57c1936ea95a93ed->leave($__internal_0f81cc7bf1d51504ecf122ce3b504c7e3948db186687611f57c1936ea95a93ed_prof);

        
        $__internal_82ba82261fd43387f693451cbcc18486f329f36978cb4c6aa92cdff4e2369835->leave($__internal_82ba82261fd43387f693451cbcc18486f329f36978cb4c6aa92cdff4e2369835_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8d62b12d0400ea02aa8e801eb31d531ee64da2c26047a67585a1357998ee10d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d62b12d0400ea02aa8e801eb31d531ee64da2c26047a67585a1357998ee10d->enter($__internal_a8d62b12d0400ea02aa8e801eb31d531ee64da2c26047a67585a1357998ee10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_689c16e86b2915fdd1feb849de295f2c44b5087cfb64a975c9a62abef16b2761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689c16e86b2915fdd1feb849de295f2c44b5087cfb64a975c9a62abef16b2761->enter($__internal_689c16e86b2915fdd1feb849de295f2c44b5087cfb64a975c9a62abef16b2761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contrats list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datecontrat</th>
                <th>Caution</th>
                <th>Duree</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new Twig_Error_Runtime('Variable "contrats" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["contrat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contrat"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["contrat"], "datecontrat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contrat"], "datecontrat", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contrat"], "caution", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["contrat"], "duree", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contrat"], "duree", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["contrat"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["contrat"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_new");
        echo "\">Create a new contrat</a>
        </li>
    </ul>
";
        
        $__internal_689c16e86b2915fdd1feb849de295f2c44b5087cfb64a975c9a62abef16b2761->leave($__internal_689c16e86b2915fdd1feb849de295f2c44b5087cfb64a975c9a62abef16b2761_prof);

        
        $__internal_a8d62b12d0400ea02aa8e801eb31d531ee64da2c26047a67585a1357998ee10d->leave($__internal_a8d62b12d0400ea02aa8e801eb31d531ee64da2c26047a67585a1357998ee10d_prof);

    }

    public function getTemplateName()
    {
        return ":contrat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  114 => 35,  102 => 29,  96 => 26,  87 => 22,  83 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Contrats list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datecontrat</th>
                <th>Caution</th>
                <th>Duree</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for contrat in contrats %}
            <tr>
                <td><a href=\"{{ path('contrat_show', { 'id': contrat.id }) }}\">{{ contrat.id }}</a></td>
                <td>{% if contrat.datecontrat %}{{ contrat.datecontrat|date('Y-m-d') }}{% endif %}</td>
                <td>{{ contrat.caution }}</td>
                <td>{% if contrat.duree %}{{ contrat.duree|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('contrat_show', { 'id': contrat.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('contrat_edit', { 'id': contrat.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('contrat_new') }}\">Create a new contrat</a>
        </li>
    </ul>
{% endblock %}
", ":contrat:index.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/contrat/index.html.twig");
    }
}
