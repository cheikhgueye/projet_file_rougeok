<?php

/* :proprietaire:show.html.twig */
class __TwigTemplate_eb70fc518ab8111426603bc90671c87cf74f47d77173d5608d05642a7d6ce073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":proprietaire:show.html.twig", 1);
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
        $__internal_eb083ebb1dfd6f729939909c064c2773ccc9ac95a1b59ef2bb0b5d1473227811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb083ebb1dfd6f729939909c064c2773ccc9ac95a1b59ef2bb0b5d1473227811->enter($__internal_eb083ebb1dfd6f729939909c064c2773ccc9ac95a1b59ef2bb0b5d1473227811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:show.html.twig"));

        $__internal_863ebbb3078e11523dc7e7b454cf8e4e907a44e785ceabae5ad8e5af1e365f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863ebbb3078e11523dc7e7b454cf8e4e907a44e785ceabae5ad8e5af1e365f8c->enter($__internal_863ebbb3078e11523dc7e7b454cf8e4e907a44e785ceabae5ad8e5af1e365f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb083ebb1dfd6f729939909c064c2773ccc9ac95a1b59ef2bb0b5d1473227811->leave($__internal_eb083ebb1dfd6f729939909c064c2773ccc9ac95a1b59ef2bb0b5d1473227811_prof);

        
        $__internal_863ebbb3078e11523dc7e7b454cf8e4e907a44e785ceabae5ad8e5af1e365f8c->leave($__internal_863ebbb3078e11523dc7e7b454cf8e4e907a44e785ceabae5ad8e5af1e365f8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fc5ad834a0c58dec3254de061fbeee967525f18b52a1706dda994b39e3f84ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc5ad834a0c58dec3254de061fbeee967525f18b52a1706dda994b39e3f84ac->enter($__internal_7fc5ad834a0c58dec3254de061fbeee967525f18b52a1706dda994b39e3f84ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73ed20975c2304b7ceec5bf8e2c6c7bd863d85252593ff86a71883209d9cedb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ed20975c2304b7ceec5bf8e2c6c7bd863d85252593ff86a71883209d9cedb4->enter($__internal_73ed20975c2304b7ceec5bf8e2c6c7bd863d85252593ff86a71883209d9cedb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proprietaire</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new Twig_Error_Runtime('Variable "proprietaire" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numpiece</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new Twig_Error_Runtime('Variable "proprietaire" does not exist.', 14, $this->getSourceContext()); })()), "numpiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomcomplet</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new Twig_Error_Runtime('Variable "proprietaire" does not exist.', 18, $this->getSourceContext()); })()), "nomcomplet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new Twig_Error_Runtime('Variable "proprietaire" does not exist.', 22, $this->getSourceContext()); })()), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new Twig_Error_Runtime('Variable "proprietaire" does not exist.', 26, $this->getSourceContext()); })()), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new Twig_Error_Runtime('Variable "proprietaire" does not exist.', 30, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comptebancaire</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new Twig_Error_Runtime('Variable "proprietaire" does not exist.', 34, $this->getSourceContext()); })()), "comptebancaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prixpropritaire</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new Twig_Error_Runtime('Variable "proprietaire" does not exist.', 38, $this->getSourceContext()); })()), "prixPropritaire", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new Twig_Error_Runtime('Variable "proprietaire" does not exist.', 48, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 51, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 53, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_73ed20975c2304b7ceec5bf8e2c6c7bd863d85252593ff86a71883209d9cedb4->leave($__internal_73ed20975c2304b7ceec5bf8e2c6c7bd863d85252593ff86a71883209d9cedb4_prof);

        
        $__internal_7fc5ad834a0c58dec3254de061fbeee967525f18b52a1706dda994b39e3f84ac->leave($__internal_7fc5ad834a0c58dec3254de061fbeee967525f18b52a1706dda994b39e3f84ac_prof);

    }

    public function getTemplateName()
    {
        return ":proprietaire:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 53,  128 => 51,  122 => 48,  116 => 45,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Proprietaire</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ proprietaire.id }}</td>
            </tr>
            <tr>
                <th>Numpiece</th>
                <td>{{ proprietaire.numpiece }}</td>
            </tr>
            <tr>
                <th>Nomcomplet</th>
                <td>{{ proprietaire.nomcomplet }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ proprietaire.adresse }}</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>{{ proprietaire.tel }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ proprietaire.email }}</td>
            </tr>
            <tr>
                <th>Comptebancaire</th>
                <td>{{ proprietaire.comptebancaire }}</td>
            </tr>
            <tr>
                <th>Prixpropritaire</th>
                <td>{{ proprietaire.prixPropritaire }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('proprietaire_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('proprietaire_edit', { 'id': proprietaire.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":proprietaire:show.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/proprietaire/show.html.twig");
    }
}
