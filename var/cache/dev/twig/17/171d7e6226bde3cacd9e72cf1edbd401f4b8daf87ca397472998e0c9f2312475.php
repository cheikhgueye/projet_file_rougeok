<?php

/* :paiement:show.html.twig */
class __TwigTemplate_7dba3108ab21cba18020f82a171380c356d6ebc44de92fd29479975da695bf62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":paiement:show.html.twig", 1);
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
        $__internal_215c24703ccea4eb2ba88b2d624f4c5a652e0be2def2792d96eb32ef5e5eaeee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215c24703ccea4eb2ba88b2d624f4c5a652e0be2def2792d96eb32ef5e5eaeee->enter($__internal_215c24703ccea4eb2ba88b2d624f4c5a652e0be2def2792d96eb32ef5e5eaeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:show.html.twig"));

        $__internal_8f156c12600d3074c1684ec7258d21301647d5b55bce986339f1263c816cbe6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f156c12600d3074c1684ec7258d21301647d5b55bce986339f1263c816cbe6a->enter($__internal_8f156c12600d3074c1684ec7258d21301647d5b55bce986339f1263c816cbe6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_215c24703ccea4eb2ba88b2d624f4c5a652e0be2def2792d96eb32ef5e5eaeee->leave($__internal_215c24703ccea4eb2ba88b2d624f4c5a652e0be2def2792d96eb32ef5e5eaeee_prof);

        
        $__internal_8f156c12600d3074c1684ec7258d21301647d5b55bce986339f1263c816cbe6a->leave($__internal_8f156c12600d3074c1684ec7258d21301647d5b55bce986339f1263c816cbe6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2634e8399bae50dcdfc5f6e72c5a33da2f680e9478d7ab650c8f874c6f99afe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2634e8399bae50dcdfc5f6e72c5a33da2f680e9478d7ab650c8f874c6f99afe1->enter($__internal_2634e8399bae50dcdfc5f6e72c5a33da2f680e9478d7ab650c8f874c6f99afe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0733aebf9eac62a6e6d895ea71b85969a140d266bb6bf5f974b5f54187abc67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0733aebf9eac62a6e6d895ea71b85969a140d266bb6bf5f974b5f54187abc67d->enter($__internal_0733aebf9eac62a6e6d895ea71b85969a140d266bb6bf5f974b5f54187abc67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Paiement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new Twig_Error_Runtime('Variable "paiement" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datepaiement</th>
                <td>";
        // line 14
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new Twig_Error_Runtime('Variable "paiement" does not exist.', 14, $this->getSourceContext()); })()), "datePaiement", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new Twig_Error_Runtime('Variable "paiement" does not exist.', 14, $this->getSourceContext()); })()), "datePaiement", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new Twig_Error_Runtime('Variable "paiement" does not exist.', 18, $this->getSourceContext()); })()), "montant", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paiement"]) || array_key_exists("paiement", $context) ? $context["paiement"] : (function () { throw new Twig_Error_Runtime('Variable "paiement" does not exist.', 28, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 31, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 33, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0733aebf9eac62a6e6d895ea71b85969a140d266bb6bf5f974b5f54187abc67d->leave($__internal_0733aebf9eac62a6e6d895ea71b85969a140d266bb6bf5f974b5f54187abc67d_prof);

        
        $__internal_2634e8399bae50dcdfc5f6e72c5a33da2f680e9478d7ab650c8f874c6f99afe1->leave($__internal_2634e8399bae50dcdfc5f6e72c5a33da2f680e9478d7ab650c8f874c6f99afe1_prof);

    }

    public function getTemplateName()
    {
        return ":paiement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  95 => 31,  89 => 28,  83 => 25,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Paiement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ paiement.id }}</td>
            </tr>
            <tr>
                <th>Datepaiement</th>
                <td>{% if paiement.datePaiement %}{{ paiement.datePaiement|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>{{ paiement.montant }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('paiement_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('paiement_edit', { 'id': paiement.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":paiement:show.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/paiement/show.html.twig");
    }
}
