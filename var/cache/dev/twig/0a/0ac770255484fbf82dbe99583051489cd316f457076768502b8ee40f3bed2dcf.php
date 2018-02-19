<?php

/* @KEURGUIimmo/layout.html.twig */
class __TwigTemplate_7cb5c36cb5000c369a0f5f17c94bc36c17ad1f5df1176720a584154f2f8ed581 extends Twig_Template
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
        $__internal_a6ed1f4c0a6e53552500d7f307ceba64a6f227acc57eb3f5e7f1f26276a644d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ed1f4c0a6e53552500d7f307ceba64a6f227acc57eb3f5e7f1f26276a644d3->enter($__internal_a6ed1f4c0a6e53552500d7f307ceba64a6f227acc57eb3f5e7f1f26276a644d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KEURGUIimmo/layout.html.twig"));

        $__internal_7007bafb149db746f6665e3b19dc132ec32a45e629cdff956126281162e87948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7007bafb149db746f6665e3b19dc132ec32a45e629cdff956126281162e87948->enter($__internal_7007bafb149db746f6665e3b19dc132ec32a45e629cdff956126281162e87948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KEURGUIimmo/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6ed1f4c0a6e53552500d7f307ceba64a6f227acc57eb3f5e7f1f26276a644d3->leave($__internal_a6ed1f4c0a6e53552500d7f307ceba64a6f227acc57eb3f5e7f1f26276a644d3_prof);

        
        $__internal_7007bafb149db746f6665e3b19dc132ec32a45e629cdff956126281162e87948->leave($__internal_7007bafb149db746f6665e3b19dc132ec32a45e629cdff956126281162e87948_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_968e5b5fce174946f8b42c71522a77a827a1c624590d39503334a20d860810a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968e5b5fce174946f8b42c71522a77a827a1c624590d39503334a20d860810a4->enter($__internal_968e5b5fce174946f8b42c71522a77a827a1c624590d39503334a20d860810a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ab4330fe6ee6569daa708b3fe1eeb134680ac731dcf119f295f37de3502d5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab4330fe6ee6569daa708b3fe1eeb134680ac731dcf119f295f37de3502d5d4->enter($__internal_8ab4330fe6ee6569daa708b3fe1eeb134680ac731dcf119f295f37de3502d5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "      
        ";
        // line 4
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_8ab4330fe6ee6569daa708b3fe1eeb134680ac731dcf119f295f37de3502d5d4->leave($__internal_8ab4330fe6ee6569daa708b3fe1eeb134680ac731dcf119f295f37de3502d5d4_prof);

        
        $__internal_968e5b5fce174946f8b42c71522a77a827a1c624590d39503334a20d860810a4->leave($__internal_968e5b5fce174946f8b42c71522a77a827a1c624590d39503334a20d860810a4_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_c642e0aba22205a24f731bd1d1082d81a14c0ed096715c335e773993adcda76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c642e0aba22205a24f731bd1d1082d81a14c0ed096715c335e773993adcda76b->enter($__internal_c642e0aba22205a24f731bd1d1082d81a14c0ed096715c335e773993adcda76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8962286d11fd644b97bbd83062b4f36525a9f0be88898f35f5d88e3af2ff8a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8962286d11fd644b97bbd83062b4f36525a9f0be88898f35f5d88e3af2ff8a6e->enter($__internal_8962286d11fd644b97bbd83062b4f36525a9f0be88898f35f5d88e3af2ff8a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_8962286d11fd644b97bbd83062b4f36525a9f0be88898f35f5d88e3af2ff8a6e->leave($__internal_8962286d11fd644b97bbd83062b4f36525a9f0be88898f35f5d88e3af2ff8a6e_prof);

        
        $__internal_c642e0aba22205a24f731bd1d1082d81a14c0ed096715c335e773993adcda76b->leave($__internal_c642e0aba22205a24f731bd1d1082d81a14c0ed096715c335e773993adcda76b_prof);

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
        return array (  91 => 20,  74 => 6,  71 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
{% endblock %}", "@KEURGUIimmo/layout.html.twig", "/var/www/html/projet_file_rouge/keurgui/src/KEURGUI/immoBundle/Resources/views/layout.html.twig");
    }
}
