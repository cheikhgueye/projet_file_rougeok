<?php

/* :paiement:index.html.twig */
class __TwigTemplate_7cc0d115e629eddfebe8712000e8be9a7cf376a3b15f55635bc4c9991755ef56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":paiement:index.html.twig", 1);
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
        $__internal_8beda59edb8e0e607e77953ce4a14478648204abde75569fa23edaa134e6313b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8beda59edb8e0e607e77953ce4a14478648204abde75569fa23edaa134e6313b->enter($__internal_8beda59edb8e0e607e77953ce4a14478648204abde75569fa23edaa134e6313b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:index.html.twig"));

        $__internal_db86e4ccebbfde18943b624d68a9b8111d8ca0f82eb76d2b7873763a6f7594ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db86e4ccebbfde18943b624d68a9b8111d8ca0f82eb76d2b7873763a6f7594ef->enter($__internal_db86e4ccebbfde18943b624d68a9b8111d8ca0f82eb76d2b7873763a6f7594ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8beda59edb8e0e607e77953ce4a14478648204abde75569fa23edaa134e6313b->leave($__internal_8beda59edb8e0e607e77953ce4a14478648204abde75569fa23edaa134e6313b_prof);

        
        $__internal_db86e4ccebbfde18943b624d68a9b8111d8ca0f82eb76d2b7873763a6f7594ef->leave($__internal_db86e4ccebbfde18943b624d68a9b8111d8ca0f82eb76d2b7873763a6f7594ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb296d0fdf24ae609f2e3a2f38e18a915965ae35c480f6026595b51124d60d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb296d0fdf24ae609f2e3a2f38e18a915965ae35c480f6026595b51124d60d09->enter($__internal_cb296d0fdf24ae609f2e3a2f38e18a915965ae35c480f6026595b51124d60d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ed0ffd429cce9d3768d612aee2cc32622f6c46fd9ee8df4ddb864ae604221b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed0ffd429cce9d3768d612aee2cc32622f6c46fd9ee8df4ddb864ae604221b7->enter($__internal_1ed0ffd429cce9d3768d612aee2cc32622f6c46fd9ee8df4ddb864ae604221b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Paiements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datepaiement</th>
                <th>Montant</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paiements"]) || array_key_exists("paiements", $context) ? $context["paiements"] : (function () { throw new Twig_Error_Runtime('Variable "paiements" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "datePaiement", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "datePaiement", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "montant", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_new");
        echo "\">Create a new paiement</a>
        </li>
    </ul>
";
        
        $__internal_1ed0ffd429cce9d3768d612aee2cc32622f6c46fd9ee8df4ddb864ae604221b7->leave($__internal_1ed0ffd429cce9d3768d612aee2cc32622f6c46fd9ee8df4ddb864ae604221b7_prof);

        
        $__internal_cb296d0fdf24ae609f2e3a2f38e18a915965ae35c480f6026595b51124d60d09->leave($__internal_cb296d0fdf24ae609f2e3a2f38e18a915965ae35c480f6026595b51124d60d09_prof);

    }

    public function getTemplateName()
    {
        return ":paiement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  107 => 33,  95 => 27,  89 => 24,  82 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Paiements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datepaiement</th>
                <th>Montant</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for paiement in paiements %}
            <tr>
                <td><a href=\"{{ path('paiement_show', { 'id': paiement.id }) }}\">{{ paiement.id }}</a></td>
                <td>{% if paiement.datePaiement %}{{ paiement.datePaiement|date('Y-m-d') }}{% endif %}</td>
                <td>{{ paiement.montant }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('paiement_show', { 'id': paiement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('paiement_edit', { 'id': paiement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('paiement_new') }}\">Create a new paiement</a>
        </li>
    </ul>
{% endblock %}
", ":paiement:index.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/paiement/index.html.twig");
    }
}
