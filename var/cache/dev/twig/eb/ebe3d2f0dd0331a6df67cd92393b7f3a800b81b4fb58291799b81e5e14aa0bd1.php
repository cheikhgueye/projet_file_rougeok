<?php

/* :image:index.html.twig */
class __TwigTemplate_cd1df3e748f2b7eb7050a1da403efa02c2cc21d252fcacf2713d80619065a139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":image:index.html.twig", 1);
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
        $__internal_bbd5a26ad7954ab9212f44b9d973b98585ca2b16b1652f3830121a38a2d101e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbd5a26ad7954ab9212f44b9d973b98585ca2b16b1652f3830121a38a2d101e9->enter($__internal_bbd5a26ad7954ab9212f44b9d973b98585ca2b16b1652f3830121a38a2d101e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:index.html.twig"));

        $__internal_348d8a630f871e49b9b3c08f4bcff7f915a37af2fb2ed31575d3da412ce806bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348d8a630f871e49b9b3c08f4bcff7f915a37af2fb2ed31575d3da412ce806bc->enter($__internal_348d8a630f871e49b9b3c08f4bcff7f915a37af2fb2ed31575d3da412ce806bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbd5a26ad7954ab9212f44b9d973b98585ca2b16b1652f3830121a38a2d101e9->leave($__internal_bbd5a26ad7954ab9212f44b9d973b98585ca2b16b1652f3830121a38a2d101e9_prof);

        
        $__internal_348d8a630f871e49b9b3c08f4bcff7f915a37af2fb2ed31575d3da412ce806bc->leave($__internal_348d8a630f871e49b9b3c08f4bcff7f915a37af2fb2ed31575d3da412ce806bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2193feeb56196569cd778d5a5fc17c782ae5eaf76603ff2d8034604a99d84f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2193feeb56196569cd778d5a5fc17c782ae5eaf76603ff2d8034604a99d84f7->enter($__internal_b2193feeb56196569cd778d5a5fc17c782ae5eaf76603ff2d8034604a99d84f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81cbd12106f754cb6d32d2e6df6ec4c30a438a3df508f2b72b9af0c42f142576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cbd12106f754cb6d32d2e6df6ec4c30a438a3df508f2b72b9af0c42f142576->enter($__internal_81cbd12106f754cb6d32d2e6df6ec4c30a438a3df508f2b72b9af0c42f142576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Images list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "image", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_new");
        echo "\">Create a new image</a>
        </li>
    </ul>
";
        
        $__internal_81cbd12106f754cb6d32d2e6df6ec4c30a438a3df508f2b72b9af0c42f142576->leave($__internal_81cbd12106f754cb6d32d2e6df6ec4c30a438a3df508f2b72b9af0c42f142576_prof);

        
        $__internal_b2193feeb56196569cd778d5a5fc17c782ae5eaf76603ff2d8034604a99d84f7->leave($__internal_b2193feeb56196569cd778d5a5fc17c782ae5eaf76603ff2d8034604a99d84f7_prof);

    }

    public function getTemplateName()
    {
        return ":image:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Images list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for image in images %}
            <tr>
                <td><a href=\"{{ path('image_show', { 'id': image.id }) }}\">{{ image.id }}</a></td>
                <td>{{ image.image }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('image_show', { 'id': image.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('image_edit', { 'id': image.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('image_new') }}\">Create a new image</a>
        </li>
    </ul>
{% endblock %}
", ":image:index.html.twig", "/var/www/html/projet_file_rouge/keurgui/app/Resources/views/image/index.html.twig");
    }
}
