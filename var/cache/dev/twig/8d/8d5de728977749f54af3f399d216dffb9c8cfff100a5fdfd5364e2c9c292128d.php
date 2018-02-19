<?php

/* KEURGUIimmoBundle:front:formLog.html.twig */
class __TwigTemplate_bbb75109b566abce76a93e73ced44d177c5df99452d4479c9f33240aa9e0044b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layout.html.twig", "KEURGUIimmoBundle:front:formLog.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec6a60309f14709c7ba987c4cc2f1051e18176e0927baa656444f98a73b91503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6a60309f14709c7ba987c4cc2f1051e18176e0927baa656444f98a73b91503->enter($__internal_ec6a60309f14709c7ba987c4cc2f1051e18176e0927baa656444f98a73b91503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:formLog.html.twig"));

        $__internal_c0154c891d6975d253d1661b5765f12b0b68f412a5e9f9e6339e58cf3c2687e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0154c891d6975d253d1661b5765f12b0b68f412a5e9f9e6339e58cf3c2687e3->enter($__internal_c0154c891d6975d253d1661b5765f12b0b68f412a5e9f9e6339e58cf3c2687e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:formLog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec6a60309f14709c7ba987c4cc2f1051e18176e0927baa656444f98a73b91503->leave($__internal_ec6a60309f14709c7ba987c4cc2f1051e18176e0927baa656444f98a73b91503_prof);

        
        $__internal_c0154c891d6975d253d1661b5765f12b0b68f412a5e9f9e6339e58cf3c2687e3->leave($__internal_c0154c891d6975d253d1661b5765f12b0b68f412a5e9f9e6339e58cf3c2687e3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_719633ed726838d2edb13a4cbd6ec2180e194b92ea7054b2d10192da3a90241e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719633ed726838d2edb13a4cbd6ec2180e194b92ea7054b2d10192da3a90241e->enter($__internal_719633ed726838d2edb13a4cbd6ec2180e194b92ea7054b2d10192da3a90241e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_083af986750ee0593a45b4641c046e119cd7234178fc62c2ddbf7e2369bae804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083af986750ee0593a45b4641c046e119cd7234178fc62c2ddbf7e2369bae804->enter($__internal_083af986750ee0593a45b4641c046e119cd7234178fc62c2ddbf7e2369bae804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "



";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form');
        echo "


";
        
        $__internal_083af986750ee0593a45b4641c046e119cd7234178fc62c2ddbf7e2369bae804->leave($__internal_083af986750ee0593a45b4641c046e119cd7234178fc62c2ddbf7e2369bae804_prof);

        
        $__internal_719633ed726838d2edb13a4cbd6ec2180e194b92ea7054b2d10192da3a90241e->leave($__internal_719633ed726838d2edb13a4cbd6ec2180e194b92ea7054b2d10192da3a90241e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_e142ef9235d42f8bf468e9a10825bef5c3367ece066872832619746e0a240ff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e142ef9235d42f8bf468e9a10825bef5c3367ece066872832619746e0a240ff0->enter($__internal_e142ef9235d42f8bf468e9a10825bef5c3367ece066872832619746e0a240ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a252767221e5a2ce467d18548ff4e3d9dc4de28eb99e28ee563833fa764bce39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a252767221e5a2ce467d18548ff4e3d9dc4de28eb99e28ee563833fa764bce39->enter($__internal_a252767221e5a2ce467d18548ff4e3d9dc4de28eb99e28ee563833fa764bce39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_a252767221e5a2ce467d18548ff4e3d9dc4de28eb99e28ee563833fa764bce39->leave($__internal_a252767221e5a2ce467d18548ff4e3d9dc4de28eb99e28ee563833fa764bce39_prof);

        
        $__internal_e142ef9235d42f8bf468e9a10825bef5c3367ece066872832619746e0a240ff0->leave($__internal_e142ef9235d42f8bf468e9a10825bef5c3367ece066872832619746e0a240ff0_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:formLog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 6,  72 => 5,  58 => 12,  52 => 8,  50 => 5,  41 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layout.html.twig\" %}


{% block body %}
{% block header %}
{{parent()}}
{% endblock %}




{{form(form)}}


{% endblock %}", "KEURGUIimmoBundle:front:formLog.html.twig", "/var/www/html/projet_file_rouge/keurgui/src/KEURGUI/immoBundle/Resources/views/front/formLog.html.twig");
    }
}
