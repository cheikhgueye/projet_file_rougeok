<?php

/* @KEURGUIimmo/layout.html.twig */
class __TwigTemplate_59c7c8f0c9590466d56b4e94cbcb80fce20dc5227d30011061375d629b15dfb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@KEURGUIimmo/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90925a10c7452f546bc2dc18178fd1e9f1e21216a3545df92e4dab9580198f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90925a10c7452f546bc2dc18178fd1e9f1e21216a3545df92e4dab9580198f9f->enter($__internal_90925a10c7452f546bc2dc18178fd1e9f1e21216a3545df92e4dab9580198f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KEURGUIimmo/layout.html.twig"));

        $__internal_16725c79b58ca70c30a7f5f62197ea8dabb3933d549165a4a50fabf4e3f891f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16725c79b58ca70c30a7f5f62197ea8dabb3933d549165a4a50fabf4e3f891f5->enter($__internal_16725c79b58ca70c30a7f5f62197ea8dabb3933d549165a4a50fabf4e3f891f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KEURGUIimmo/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90925a10c7452f546bc2dc18178fd1e9f1e21216a3545df92e4dab9580198f9f->leave($__internal_90925a10c7452f546bc2dc18178fd1e9f1e21216a3545df92e4dab9580198f9f_prof);

        
        $__internal_16725c79b58ca70c30a7f5f62197ea8dabb3933d549165a4a50fabf4e3f891f5->leave($__internal_16725c79b58ca70c30a7f5f62197ea8dabb3933d549165a4a50fabf4e3f891f5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_79c7d9c82f9c7860ae48b489d76d9dc881f6091daf9a49385b453a35a5e8c8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c7d9c82f9c7860ae48b489d76d9dc881f6091daf9a49385b453a35a5e8c8a4->enter($__internal_79c7d9c82f9c7860ae48b489d76d9dc881f6091daf9a49385b453a35a5e8c8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea6fa3e279d8e9233be7c922edbc17c6a483331da49c12b50ea22f21ea2db9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6fa3e279d8e9233be7c922edbc17c6a483331da49c12b50ea22f21ea2db9d5->enter($__internal_ea6fa3e279d8e9233be7c922edbc17c6a483331da49c12b50ea22f21ea2db9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "      
        ";
        // line 4
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo "

";
        
        $__internal_ea6fa3e279d8e9233be7c922edbc17c6a483331da49c12b50ea22f21ea2db9d5->leave($__internal_ea6fa3e279d8e9233be7c922edbc17c6a483331da49c12b50ea22f21ea2db9d5_prof);

        
        $__internal_79c7d9c82f9c7860ae48b489d76d9dc881f6091daf9a49385b453a35a5e8c8a4->leave($__internal_79c7d9c82f9c7860ae48b489d76d9dc881f6091daf9a49385b453a35a5e8c8a4_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_1cf30b456d40735d95c615fdcbe6288f476223fd75faeea404c5bd55a65098d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf30b456d40735d95c615fdcbe6288f476223fd75faeea404c5bd55a65098d6->enter($__internal_1cf30b456d40735d95c615fdcbe6288f476223fd75faeea404c5bd55a65098d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c7829b3fdd659915a1e6f037d05b49a2cdf45c4807e1b37455ed06b151e9f941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7829b3fdd659915a1e6f037d05b49a2cdf45c4807e1b37455ed06b151e9f941->enter($__internal_c7829b3fdd659915a1e6f037d05b49a2cdf45c4807e1b37455ed06b151e9f941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "  <header class=\"row\" style=\"height:125px; margin-left:130px; margin-right:130px;\">
 <div class=\"col-3\"><a href=\"\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Capture du 2018-02-12 14-26-19.png"), "html", null, true);
        echo "\" style=\"width:200px\"alt=\"\"></a></div>
 
 
 
 <div class=\"col-7\">
 <ul style=\"display:flex; list-style:none; margin-top:35px;space-beetwen \" >
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black; text-decoration:none; \"> Accueil</a></li>
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black;text-decoration:none;\"> Nos Annonces</a></li>
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black;text-decoration:none;\">Notre Agence</a></li>
 </ul>
 
 </div>

 <div class=\"col-2\" style=\" margin-top:42px; color:black; \">
 <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("log");
        echo "\">se connecter</a>
 </ul>
 
 </div>
 
 </header>

";
        
        $__internal_c7829b3fdd659915a1e6f037d05b49a2cdf45c4807e1b37455ed06b151e9f941->leave($__internal_c7829b3fdd659915a1e6f037d05b49a2cdf45c4807e1b37455ed06b151e9f941_prof);

        
        $__internal_1cf30b456d40735d95c615fdcbe6288f476223fd75faeea404c5bd55a65098d6->leave($__internal_1cf30b456d40735d95c615fdcbe6288f476223fd75faeea404c5bd55a65098d6_prof);

    }

    public function getTemplateName()
    {
        return "@KEURGUIimmo/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  79 => 6,  76 => 5,  67 => 4,  55 => 28,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends \"::base.html.twig\" %}
{% block body %}
      
        {% block header %}
  <header class=\"row\" style=\"height:125px; margin-left:130px; margin-right:130px;\">
 <div class=\"col-3\"><a href=\"\"><img src=\"{{ asset('images/Capture du 2018-02-12 14-26-19.png') }}\" style=\"width:200px\"alt=\"\"></a></div>
 
 
 
 <div class=\"col-7\">
 <ul style=\"display:flex; list-style:none; margin-top:35px;space-beetwen \" >
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black; text-decoration:none; \"> Accueil</a></li>
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black;text-decoration:none;\"> Nos Annonces</a></li>
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black;text-decoration:none;\">Notre Agence</a></li>
 </ul>
 
 </div>

 <div class=\"col-2\" style=\" margin-top:42px; color:black; \">
 <a href=\"{{path('log')}}\">se connecter</a>
 </ul>
 
 </div>
 
 </header>

{% endblock %}


{% endblock %}", "@KEURGUIimmo/layout.html.twig", "/var/www/html/projet_file_rougeok/src/KEURGUI/immoBundle/Resources/views/layout.html.twig");
    }
}
