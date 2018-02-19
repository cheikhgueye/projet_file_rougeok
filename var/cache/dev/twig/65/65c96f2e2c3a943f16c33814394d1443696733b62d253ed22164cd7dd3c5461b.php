<?php

/* form_table_layout.html.twig */
class __TwigTemplate_cd8f180ad9e08f24024ed859e7ce2bd121854f3b9134b7476f2761e9bd257187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28dece8b395f3536007a708c10605010eda0448e51334b1896f1e3785b1f0ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28dece8b395f3536007a708c10605010eda0448e51334b1896f1e3785b1f0ac0->enter($__internal_28dece8b395f3536007a708c10605010eda0448e51334b1896f1e3785b1f0ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_db1f16f7c6cf7c2df657a2afdb0a996351b9bb76fd508f0f10f1a266b640438e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1f16f7c6cf7c2df657a2afdb0a996351b9bb76fd508f0f10f1a266b640438e->enter($__internal_db1f16f7c6cf7c2df657a2afdb0a996351b9bb76fd508f0f10f1a266b640438e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_28dece8b395f3536007a708c10605010eda0448e51334b1896f1e3785b1f0ac0->leave($__internal_28dece8b395f3536007a708c10605010eda0448e51334b1896f1e3785b1f0ac0_prof);

        
        $__internal_db1f16f7c6cf7c2df657a2afdb0a996351b9bb76fd508f0f10f1a266b640438e->leave($__internal_db1f16f7c6cf7c2df657a2afdb0a996351b9bb76fd508f0f10f1a266b640438e_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_99a89ffb8628097ed16e93903b7aa428fc75ed41941bad6e8c82c1ff9984d4aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a89ffb8628097ed16e93903b7aa428fc75ed41941bad6e8c82c1ff9984d4aa->enter($__internal_99a89ffb8628097ed16e93903b7aa428fc75ed41941bad6e8c82c1ff9984d4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a48972f466ab7f5ff89f9c7e7f702df68071ee30781088723c73bd519c12b221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48972f466ab7f5ff89f9c7e7f702df68071ee30781088723c73bd519c12b221->enter($__internal_a48972f466ab7f5ff89f9c7e7f702df68071ee30781088723c73bd519c12b221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_a48972f466ab7f5ff89f9c7e7f702df68071ee30781088723c73bd519c12b221->leave($__internal_a48972f466ab7f5ff89f9c7e7f702df68071ee30781088723c73bd519c12b221_prof);

        
        $__internal_99a89ffb8628097ed16e93903b7aa428fc75ed41941bad6e8c82c1ff9984d4aa->leave($__internal_99a89ffb8628097ed16e93903b7aa428fc75ed41941bad6e8c82c1ff9984d4aa_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e857656b49d68f33e9dd2e93295d0a0a7c8d0316f350306cbe6e92b46ca0dfd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e857656b49d68f33e9dd2e93295d0a0a7c8d0316f350306cbe6e92b46ca0dfd9->enter($__internal_e857656b49d68f33e9dd2e93295d0a0a7c8d0316f350306cbe6e92b46ca0dfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_7bae87e1332bc9cf149b9bdca6ce9acabefe0d8e8af7c72a9223aa7e5e2586cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bae87e1332bc9cf149b9bdca6ce9acabefe0d8e8af7c72a9223aa7e5e2586cd->enter($__internal_7bae87e1332bc9cf149b9bdca6ce9acabefe0d8e8af7c72a9223aa7e5e2586cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_7bae87e1332bc9cf149b9bdca6ce9acabefe0d8e8af7c72a9223aa7e5e2586cd->leave($__internal_7bae87e1332bc9cf149b9bdca6ce9acabefe0d8e8af7c72a9223aa7e5e2586cd_prof);

        
        $__internal_e857656b49d68f33e9dd2e93295d0a0a7c8d0316f350306cbe6e92b46ca0dfd9->leave($__internal_e857656b49d68f33e9dd2e93295d0a0a7c8d0316f350306cbe6e92b46ca0dfd9_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5e7bc227e0269c7ed24ff3484e363c9bb846f1ae31579c8ef1f5012db201a177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7bc227e0269c7ed24ff3484e363c9bb846f1ae31579c8ef1f5012db201a177->enter($__internal_5e7bc227e0269c7ed24ff3484e363c9bb846f1ae31579c8ef1f5012db201a177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_461f5c16f0cc09fb8fca5a5e7465699cf60871c8b38148b36a87df5e65e718d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461f5c16f0cc09fb8fca5a5e7465699cf60871c8b38148b36a87df5e65e718d0->enter($__internal_461f5c16f0cc09fb8fca5a5e7465699cf60871c8b38148b36a87df5e65e718d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_461f5c16f0cc09fb8fca5a5e7465699cf60871c8b38148b36a87df5e65e718d0->leave($__internal_461f5c16f0cc09fb8fca5a5e7465699cf60871c8b38148b36a87df5e65e718d0_prof);

        
        $__internal_5e7bc227e0269c7ed24ff3484e363c9bb846f1ae31579c8ef1f5012db201a177->leave($__internal_5e7bc227e0269c7ed24ff3484e363c9bb846f1ae31579c8ef1f5012db201a177_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_7f8146c478e2cbc2ecf45622ae85a005352d8b241a05f56c29e2b71064725606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8146c478e2cbc2ecf45622ae85a005352d8b241a05f56c29e2b71064725606->enter($__internal_7f8146c478e2cbc2ecf45622ae85a005352d8b241a05f56c29e2b71064725606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_42a6ec7118792793c5d4a53a77e18db808cf492db8638f55e5251d7c315f8af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a6ec7118792793c5d4a53a77e18db808cf492db8638f55e5251d7c315f8af4->enter($__internal_42a6ec7118792793c5d4a53a77e18db808cf492db8638f55e5251d7c315f8af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_42a6ec7118792793c5d4a53a77e18db808cf492db8638f55e5251d7c315f8af4->leave($__internal_42a6ec7118792793c5d4a53a77e18db808cf492db8638f55e5251d7c315f8af4_prof);

        
        $__internal_7f8146c478e2cbc2ecf45622ae85a005352d8b241a05f56c29e2b71064725606->leave($__internal_7f8146c478e2cbc2ecf45622ae85a005352d8b241a05f56c29e2b71064725606_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/projet_file_rougeok/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
