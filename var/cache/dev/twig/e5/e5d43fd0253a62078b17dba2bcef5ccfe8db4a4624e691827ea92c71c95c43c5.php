<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_536960ac75bb62291d7d1d0852165944e5d296ca55adc62151410890c370ecc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc291870be01dc2ed8dfcbb9ce91380e26849d65da6a8f831ed652b1ecc22ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc291870be01dc2ed8dfcbb9ce91380e26849d65da6a8f831ed652b1ecc22ec1->enter($__internal_fc291870be01dc2ed8dfcbb9ce91380e26849d65da6a8f831ed652b1ecc22ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_96853254c2232963e3aa686547ac2f1cff8603790bbd148a21a6092f746f363f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96853254c2232963e3aa686547ac2f1cff8603790bbd148a21a6092f746f363f->enter($__internal_96853254c2232963e3aa686547ac2f1cff8603790bbd148a21a6092f746f363f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_fc291870be01dc2ed8dfcbb9ce91380e26849d65da6a8f831ed652b1ecc22ec1->leave($__internal_fc291870be01dc2ed8dfcbb9ce91380e26849d65da6a8f831ed652b1ecc22ec1_prof);

        
        $__internal_96853254c2232963e3aa686547ac2f1cff8603790bbd148a21a6092f746f363f->leave($__internal_96853254c2232963e3aa686547ac2f1cff8603790bbd148a21a6092f746f363f_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a5b955fdcc8bc8104cf4a649063b969e52e366b3935ac4de36cc2eb4a15f2481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b955fdcc8bc8104cf4a649063b969e52e366b3935ac4de36cc2eb4a15f2481->enter($__internal_a5b955fdcc8bc8104cf4a649063b969e52e366b3935ac4de36cc2eb4a15f2481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_d192baf7ddc1102a760db70309e6be890b113a731cecde0e9502e8bd2a2a329d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d192baf7ddc1102a760db70309e6be890b113a731cecde0e9502e8bd2a2a329d->enter($__internal_d192baf7ddc1102a760db70309e6be890b113a731cecde0e9502e8bd2a2a329d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_d192baf7ddc1102a760db70309e6be890b113a731cecde0e9502e8bd2a2a329d->leave($__internal_d192baf7ddc1102a760db70309e6be890b113a731cecde0e9502e8bd2a2a329d_prof);

        
        $__internal_a5b955fdcc8bc8104cf4a649063b969e52e366b3935ac4de36cc2eb4a15f2481->leave($__internal_a5b955fdcc8bc8104cf4a649063b969e52e366b3935ac4de36cc2eb4a15f2481_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0522248267db4da2319093737d4f7eba3ff6e2e2c5c8d532c92486cf08259719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0522248267db4da2319093737d4f7eba3ff6e2e2c5c8d532c92486cf08259719->enter($__internal_0522248267db4da2319093737d4f7eba3ff6e2e2c5c8d532c92486cf08259719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_79c18145d0d353019238e673b1466c3e329a53b894c29a3f684d5572a69a263a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c18145d0d353019238e673b1466c3e329a53b894c29a3f684d5572a69a263a->enter($__internal_79c18145d0d353019238e673b1466c3e329a53b894c29a3f684d5572a69a263a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_79c18145d0d353019238e673b1466c3e329a53b894c29a3f684d5572a69a263a->leave($__internal_79c18145d0d353019238e673b1466c3e329a53b894c29a3f684d5572a69a263a_prof);

        
        $__internal_0522248267db4da2319093737d4f7eba3ff6e2e2c5c8d532c92486cf08259719->leave($__internal_0522248267db4da2319093737d4f7eba3ff6e2e2c5c8d532c92486cf08259719_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_312167611242eeee5877fda9272354e09160e10e5271fa85e95b0e31674727a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312167611242eeee5877fda9272354e09160e10e5271fa85e95b0e31674727a1->enter($__internal_312167611242eeee5877fda9272354e09160e10e5271fa85e95b0e31674727a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a5d0fc713d6c7e0709e24b723a110ec70afd470f63aca7c908e8148308629d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d0fc713d6c7e0709e24b723a110ec70afd470f63aca7c908e8148308629d7a->enter($__internal_a5d0fc713d6c7e0709e24b723a110ec70afd470f63aca7c908e8148308629d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_a5d0fc713d6c7e0709e24b723a110ec70afd470f63aca7c908e8148308629d7a->leave($__internal_a5d0fc713d6c7e0709e24b723a110ec70afd470f63aca7c908e8148308629d7a_prof);

        
        $__internal_312167611242eeee5877fda9272354e09160e10e5271fa85e95b0e31674727a1->leave($__internal_312167611242eeee5877fda9272354e09160e10e5271fa85e95b0e31674727a1_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0710d11ff3adfcb3e7b16a8f74ea76a31e9e45d41077d0bd8813a18556dc19be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0710d11ff3adfcb3e7b16a8f74ea76a31e9e45d41077d0bd8813a18556dc19be->enter($__internal_0710d11ff3adfcb3e7b16a8f74ea76a31e9e45d41077d0bd8813a18556dc19be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_76fa01914d628f673b4f154863719821d1e99b58ffb207ae4e0f88dcf0428d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fa01914d628f673b4f154863719821d1e99b58ffb207ae4e0f88dcf0428d17->enter($__internal_76fa01914d628f673b4f154863719821d1e99b58ffb207ae4e0f88dcf0428d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_76fa01914d628f673b4f154863719821d1e99b58ffb207ae4e0f88dcf0428d17->leave($__internal_76fa01914d628f673b4f154863719821d1e99b58ffb207ae4e0f88dcf0428d17_prof);

        
        $__internal_0710d11ff3adfcb3e7b16a8f74ea76a31e9e45d41077d0bd8813a18556dc19be->leave($__internal_0710d11ff3adfcb3e7b16a8f74ea76a31e9e45d41077d0bd8813a18556dc19be_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cc423be1c84fc5fee11175b9d5b91f38c0fce23bb3bd59fe345fe9495bc97bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc423be1c84fc5fee11175b9d5b91f38c0fce23bb3bd59fe345fe9495bc97bc3->enter($__internal_cc423be1c84fc5fee11175b9d5b91f38c0fce23bb3bd59fe345fe9495bc97bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_18249c5527ddec949954f05273a8aea13734b0e7f43cdc5a7a1d044bb4193684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18249c5527ddec949954f05273a8aea13734b0e7f43cdc5a7a1d044bb4193684->enter($__internal_18249c5527ddec949954f05273a8aea13734b0e7f43cdc5a7a1d044bb4193684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_18249c5527ddec949954f05273a8aea13734b0e7f43cdc5a7a1d044bb4193684->leave($__internal_18249c5527ddec949954f05273a8aea13734b0e7f43cdc5a7a1d044bb4193684_prof);

        
        $__internal_cc423be1c84fc5fee11175b9d5b91f38c0fce23bb3bd59fe345fe9495bc97bc3->leave($__internal_cc423be1c84fc5fee11175b9d5b91f38c0fce23bb3bd59fe345fe9495bc97bc3_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e0c49c31a1f3f8a04399c6ddf2271cbe9188e7588f5aeade25873ba0ae387187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c49c31a1f3f8a04399c6ddf2271cbe9188e7588f5aeade25873ba0ae387187->enter($__internal_e0c49c31a1f3f8a04399c6ddf2271cbe9188e7588f5aeade25873ba0ae387187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3f065828feea45e6ea0eadfe647b57705c1aff77c279078d5c53d51273b16a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f065828feea45e6ea0eadfe647b57705c1aff77c279078d5c53d51273b16a3d->enter($__internal_3f065828feea45e6ea0eadfe647b57705c1aff77c279078d5c53d51273b16a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_3f065828feea45e6ea0eadfe647b57705c1aff77c279078d5c53d51273b16a3d->leave($__internal_3f065828feea45e6ea0eadfe647b57705c1aff77c279078d5c53d51273b16a3d_prof);

        
        $__internal_e0c49c31a1f3f8a04399c6ddf2271cbe9188e7588f5aeade25873ba0ae387187->leave($__internal_e0c49c31a1f3f8a04399c6ddf2271cbe9188e7588f5aeade25873ba0ae387187_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_f6814bb91271cd98556c7229485d1d58a74c37ebca2ff8c8491d8901c3c36c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6814bb91271cd98556c7229485d1d58a74c37ebca2ff8c8491d8901c3c36c08->enter($__internal_f6814bb91271cd98556c7229485d1d58a74c37ebca2ff8c8491d8901c3c36c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_e5100b331bc7c72df386773dd59d6935980d4a28a76b80cd0c0d50d03312f9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5100b331bc7c72df386773dd59d6935980d4a28a76b80cd0c0d50d03312f9a0->enter($__internal_e5100b331bc7c72df386773dd59d6935980d4a28a76b80cd0c0d50d03312f9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e5100b331bc7c72df386773dd59d6935980d4a28a76b80cd0c0d50d03312f9a0->leave($__internal_e5100b331bc7c72df386773dd59d6935980d4a28a76b80cd0c0d50d03312f9a0_prof);

        
        $__internal_f6814bb91271cd98556c7229485d1d58a74c37ebca2ff8c8491d8901c3c36c08->leave($__internal_f6814bb91271cd98556c7229485d1d58a74c37ebca2ff8c8491d8901c3c36c08_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_c98c2dcfb5e5affc1f96def4cd10f93684f7294becf3b62eef0baeca18c34bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c98c2dcfb5e5affc1f96def4cd10f93684f7294becf3b62eef0baeca18c34bcb->enter($__internal_c98c2dcfb5e5affc1f96def4cd10f93684f7294becf3b62eef0baeca18c34bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_07f4a81876d484bbe0c7b905af9ee63665804e00e28347fb42b8e6baca1d792d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f4a81876d484bbe0c7b905af9ee63665804e00e28347fb42b8e6baca1d792d->enter($__internal_07f4a81876d484bbe0c7b905af9ee63665804e00e28347fb42b8e6baca1d792d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_07f4a81876d484bbe0c7b905af9ee63665804e00e28347fb42b8e6baca1d792d->leave($__internal_07f4a81876d484bbe0c7b905af9ee63665804e00e28347fb42b8e6baca1d792d_prof);

        
        $__internal_c98c2dcfb5e5affc1f96def4cd10f93684f7294becf3b62eef0baeca18c34bcb->leave($__internal_c98c2dcfb5e5affc1f96def4cd10f93684f7294becf3b62eef0baeca18c34bcb_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_e966d432c9e99d1c2d70cb7e461414c3bb9229a152c2ccb868304802892dbe30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e966d432c9e99d1c2d70cb7e461414c3bb9229a152c2ccb868304802892dbe30->enter($__internal_e966d432c9e99d1c2d70cb7e461414c3bb9229a152c2ccb868304802892dbe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_5fc5a89f0b91ffdf8c9202bc5a2e30e19ad84f182533d555c86d686dfa9f5e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc5a89f0b91ffdf8c9202bc5a2e30e19ad84f182533d555c86d686dfa9f5e70->enter($__internal_5fc5a89f0b91ffdf8c9202bc5a2e30e19ad84f182533d555c86d686dfa9f5e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5fc5a89f0b91ffdf8c9202bc5a2e30e19ad84f182533d555c86d686dfa9f5e70->leave($__internal_5fc5a89f0b91ffdf8c9202bc5a2e30e19ad84f182533d555c86d686dfa9f5e70_prof);

        
        $__internal_e966d432c9e99d1c2d70cb7e461414c3bb9229a152c2ccb868304802892dbe30->leave($__internal_e966d432c9e99d1c2d70cb7e461414c3bb9229a152c2ccb868304802892dbe30_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_31cb3da049b7034d7aff0c5af49c11aff1cc048b0f8d25ddc79878652e39ee60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31cb3da049b7034d7aff0c5af49c11aff1cc048b0f8d25ddc79878652e39ee60->enter($__internal_31cb3da049b7034d7aff0c5af49c11aff1cc048b0f8d25ddc79878652e39ee60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_2fb8f288a85ff88ee5cd65f647b6b19303d9e0d86597e605760f7f600cf50db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb8f288a85ff88ee5cd65f647b6b19303d9e0d86597e605760f7f600cf50db7->enter($__internal_2fb8f288a85ff88ee5cd65f647b6b19303d9e0d86597e605760f7f600cf50db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_2fb8f288a85ff88ee5cd65f647b6b19303d9e0d86597e605760f7f600cf50db7->leave($__internal_2fb8f288a85ff88ee5cd65f647b6b19303d9e0d86597e605760f7f600cf50db7_prof);

        
        $__internal_31cb3da049b7034d7aff0c5af49c11aff1cc048b0f8d25ddc79878652e39ee60->leave($__internal_31cb3da049b7034d7aff0c5af49c11aff1cc048b0f8d25ddc79878652e39ee60_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/projet_file_rouge/keurgui/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
