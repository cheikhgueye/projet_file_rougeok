<?php

/* :reservation:index.html.twig */
class __TwigTemplate_90f6009d512e94736ac83c697bdbf0f8b406d49369edefd043fd611c83942ed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:index.html.twig", 1);
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
        $__internal_1e9f5b9ec1979a84eea3bb75a8106ff07af733926e09e44277c21d12b8b27822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9f5b9ec1979a84eea3bb75a8106ff07af733926e09e44277c21d12b8b27822->enter($__internal_1e9f5b9ec1979a84eea3bb75a8106ff07af733926e09e44277c21d12b8b27822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $__internal_47752157924da4844cdcac0881142eeae45b700c4128d5c5c7d49c1735265d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47752157924da4844cdcac0881142eeae45b700c4128d5c5c7d49c1735265d78->enter($__internal_47752157924da4844cdcac0881142eeae45b700c4128d5c5c7d49c1735265d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e9f5b9ec1979a84eea3bb75a8106ff07af733926e09e44277c21d12b8b27822->leave($__internal_1e9f5b9ec1979a84eea3bb75a8106ff07af733926e09e44277c21d12b8b27822_prof);

        
        $__internal_47752157924da4844cdcac0881142eeae45b700c4128d5c5c7d49c1735265d78->leave($__internal_47752157924da4844cdcac0881142eeae45b700c4128d5c5c7d49c1735265d78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d490be6df2cdf5910fec59b33d053fcdb7a6d44c8a54c5fc3914dc4ea730e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d490be6df2cdf5910fec59b33d053fcdb7a6d44c8a54c5fc3914dc4ea730e1b->enter($__internal_0d490be6df2cdf5910fec59b33d053fcdb7a6d44c8a54c5fc3914dc4ea730e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fb73f0878e1ab6f4538941649123799bb36858f13906fe24c97f9b589a9e74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb73f0878e1ab6f4538941649123799bb36858f13906fe24c97f9b589a9e74f->enter($__internal_9fb73f0878e1ab6f4538941649123799bb36858f13906fe24c97f9b589a9e74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datereservation</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new Twig_Error_Runtime('Variable "reservations" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "datereservation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "datereservation", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "etat", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_new");
        echo "\">Create a new reservation</a>
        </li>
    </ul>
";
        
        $__internal_9fb73f0878e1ab6f4538941649123799bb36858f13906fe24c97f9b589a9e74f->leave($__internal_9fb73f0878e1ab6f4538941649123799bb36858f13906fe24c97f9b589a9e74f_prof);

        
        $__internal_0d490be6df2cdf5910fec59b33d053fcdb7a6d44c8a54c5fc3914dc4ea730e1b->leave($__internal_0d490be6df2cdf5910fec59b33d053fcdb7a6d44c8a54c5fc3914dc4ea730e1b_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 38,  111 => 33,  99 => 27,  93 => 24,  82 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reservations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datereservation</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reservation in reservations %}
            <tr>
                <td><a href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\">{{ reservation.id }}</a></td>
                <td>{% if reservation.datereservation %}{{ reservation.datereservation|date('Y-m-d') }}{% endif %}</td>
                <td>{% if reservation.etat %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reservation_new') }}\">Create a new reservation</a>
        </li>
    </ul>
{% endblock %}
", ":reservation:index.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/reservation/index.html.twig");
    }
}
