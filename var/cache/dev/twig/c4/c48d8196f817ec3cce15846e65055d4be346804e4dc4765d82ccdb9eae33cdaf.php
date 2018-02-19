<?php

/* form_table_layout.html.twig */
class __TwigTemplate_a9d9e61439db4592eb05dd707b8fdd1102c398af384bb259d9b7112c2207ea35 extends Twig_Template
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
        $__internal_0957d68f76da0f99bbf1b36853062ce3864ee89edb485cdda6fb49741fc8cad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0957d68f76da0f99bbf1b36853062ce3864ee89edb485cdda6fb49741fc8cad9->enter($__internal_0957d68f76da0f99bbf1b36853062ce3864ee89edb485cdda6fb49741fc8cad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_2e680eb12e67a8f28da8d6b161dc08ea9d1a77730093b52c0089c71dfc0b0773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e680eb12e67a8f28da8d6b161dc08ea9d1a77730093b52c0089c71dfc0b0773->enter($__internal_2e680eb12e67a8f28da8d6b161dc08ea9d1a77730093b52c0089c71dfc0b0773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_0957d68f76da0f99bbf1b36853062ce3864ee89edb485cdda6fb49741fc8cad9->leave($__internal_0957d68f76da0f99bbf1b36853062ce3864ee89edb485cdda6fb49741fc8cad9_prof);

        
        $__internal_2e680eb12e67a8f28da8d6b161dc08ea9d1a77730093b52c0089c71dfc0b0773->leave($__internal_2e680eb12e67a8f28da8d6b161dc08ea9d1a77730093b52c0089c71dfc0b0773_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8c5645bea480d718748be5f685618ab0c1b278021897b92a18c189e6c5feb89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5645bea480d718748be5f685618ab0c1b278021897b92a18c189e6c5feb89e->enter($__internal_8c5645bea480d718748be5f685618ab0c1b278021897b92a18c189e6c5feb89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_926fcc8409dd048db809ef7fbd14fea4ffae1b91e480732c6e0e591e41a84814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926fcc8409dd048db809ef7fbd14fea4ffae1b91e480732c6e0e591e41a84814->enter($__internal_926fcc8409dd048db809ef7fbd14fea4ffae1b91e480732c6e0e591e41a84814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_926fcc8409dd048db809ef7fbd14fea4ffae1b91e480732c6e0e591e41a84814->leave($__internal_926fcc8409dd048db809ef7fbd14fea4ffae1b91e480732c6e0e591e41a84814_prof);

        
        $__internal_8c5645bea480d718748be5f685618ab0c1b278021897b92a18c189e6c5feb89e->leave($__internal_8c5645bea480d718748be5f685618ab0c1b278021897b92a18c189e6c5feb89e_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2925aaf68fe819cdda5849be64b8f77f49ace024af18b51d99b571146ff307b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2925aaf68fe819cdda5849be64b8f77f49ace024af18b51d99b571146ff307b0->enter($__internal_2925aaf68fe819cdda5849be64b8f77f49ace024af18b51d99b571146ff307b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_72ac700151585e12cb312b8c0ebecaf3e7b88a01045722bc9b755ce49fdbff0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ac700151585e12cb312b8c0ebecaf3e7b88a01045722bc9b755ce49fdbff0c->enter($__internal_72ac700151585e12cb312b8c0ebecaf3e7b88a01045722bc9b755ce49fdbff0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_72ac700151585e12cb312b8c0ebecaf3e7b88a01045722bc9b755ce49fdbff0c->leave($__internal_72ac700151585e12cb312b8c0ebecaf3e7b88a01045722bc9b755ce49fdbff0c_prof);

        
        $__internal_2925aaf68fe819cdda5849be64b8f77f49ace024af18b51d99b571146ff307b0->leave($__internal_2925aaf68fe819cdda5849be64b8f77f49ace024af18b51d99b571146ff307b0_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_c20110236beb4330f1bcd4a1005caf6ecaa3023faaa24facb59f548193913a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20110236beb4330f1bcd4a1005caf6ecaa3023faaa24facb59f548193913a10->enter($__internal_c20110236beb4330f1bcd4a1005caf6ecaa3023faaa24facb59f548193913a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_7e8a2f2ee11d1e70b89f08905c10e56361cd5806f4f34947d9ce4c14ae40ad46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8a2f2ee11d1e70b89f08905c10e56361cd5806f4f34947d9ce4c14ae40ad46->enter($__internal_7e8a2f2ee11d1e70b89f08905c10e56361cd5806f4f34947d9ce4c14ae40ad46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_7e8a2f2ee11d1e70b89f08905c10e56361cd5806f4f34947d9ce4c14ae40ad46->leave($__internal_7e8a2f2ee11d1e70b89f08905c10e56361cd5806f4f34947d9ce4c14ae40ad46_prof);

        
        $__internal_c20110236beb4330f1bcd4a1005caf6ecaa3023faaa24facb59f548193913a10->leave($__internal_c20110236beb4330f1bcd4a1005caf6ecaa3023faaa24facb59f548193913a10_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_8d5e1bd7c7b89f796ee8260b7211ff3a0af813dec51feabdba5cb7fdffa9cd10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5e1bd7c7b89f796ee8260b7211ff3a0af813dec51feabdba5cb7fdffa9cd10->enter($__internal_8d5e1bd7c7b89f796ee8260b7211ff3a0af813dec51feabdba5cb7fdffa9cd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_56a3f87f7fa15d4183d1f522aac2118d4e28b46dc22dafbd9cd04c7eb9a0b914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a3f87f7fa15d4183d1f522aac2118d4e28b46dc22dafbd9cd04c7eb9a0b914->enter($__internal_56a3f87f7fa15d4183d1f522aac2118d4e28b46dc22dafbd9cd04c7eb9a0b914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_56a3f87f7fa15d4183d1f522aac2118d4e28b46dc22dafbd9cd04c7eb9a0b914->leave($__internal_56a3f87f7fa15d4183d1f522aac2118d4e28b46dc22dafbd9cd04c7eb9a0b914_prof);

        
        $__internal_8d5e1bd7c7b89f796ee8260b7211ff3a0af813dec51feabdba5cb7fdffa9cd10->leave($__internal_8d5e1bd7c7b89f796ee8260b7211ff3a0af813dec51feabdba5cb7fdffa9cd10_prof);

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
", "form_table_layout.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
