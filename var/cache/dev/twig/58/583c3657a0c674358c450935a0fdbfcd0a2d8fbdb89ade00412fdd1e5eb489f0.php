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
        $__internal_9fc5cfdccd83bfb24d6e4581288cba88831d726bcc31dbee712edc5ea7141c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc5cfdccd83bfb24d6e4581288cba88831d726bcc31dbee712edc5ea7141c1a->enter($__internal_9fc5cfdccd83bfb24d6e4581288cba88831d726bcc31dbee712edc5ea7141c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KEURGUIimmo/layout.html.twig"));

        $__internal_caf2814bf8b574f3649b68a9232c288803d0563bf3dfe036b1bbf17d705e1847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf2814bf8b574f3649b68a9232c288803d0563bf3dfe036b1bbf17d705e1847->enter($__internal_caf2814bf8b574f3649b68a9232c288803d0563bf3dfe036b1bbf17d705e1847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KEURGUIimmo/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fc5cfdccd83bfb24d6e4581288cba88831d726bcc31dbee712edc5ea7141c1a->leave($__internal_9fc5cfdccd83bfb24d6e4581288cba88831d726bcc31dbee712edc5ea7141c1a_prof);

        
        $__internal_caf2814bf8b574f3649b68a9232c288803d0563bf3dfe036b1bbf17d705e1847->leave($__internal_caf2814bf8b574f3649b68a9232c288803d0563bf3dfe036b1bbf17d705e1847_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1440dca8e9d00194be61c8fb68420122b715e04e4ffc54792cfd12456133d1c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1440dca8e9d00194be61c8fb68420122b715e04e4ffc54792cfd12456133d1c6->enter($__internal_1440dca8e9d00194be61c8fb68420122b715e04e4ffc54792cfd12456133d1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c2b5e3449c79b0eabcd18a654a5fdf6e3f216e75b5449749cb4b8262e45e3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2b5e3449c79b0eabcd18a654a5fdf6e3f216e75b5449749cb4b8262e45e3b2->enter($__internal_9c2b5e3449c79b0eabcd18a654a5fdf6e3f216e75b5449749cb4b8262e45e3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "      
        ";
        // line 4
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo "

";
        
        $__internal_9c2b5e3449c79b0eabcd18a654a5fdf6e3f216e75b5449749cb4b8262e45e3b2->leave($__internal_9c2b5e3449c79b0eabcd18a654a5fdf6e3f216e75b5449749cb4b8262e45e3b2_prof);

        
        $__internal_1440dca8e9d00194be61c8fb68420122b715e04e4ffc54792cfd12456133d1c6->leave($__internal_1440dca8e9d00194be61c8fb68420122b715e04e4ffc54792cfd12456133d1c6_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_7324801ac2e91566413db8cde08e561c1fb8108503ef99627106aae749e09c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7324801ac2e91566413db8cde08e561c1fb8108503ef99627106aae749e09c6f->enter($__internal_7324801ac2e91566413db8cde08e561c1fb8108503ef99627106aae749e09c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_272bfbcc49774be8435715234a10a4cb47cafb65b5001f502d11d9c0ecd0c43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272bfbcc49774be8435715234a10a4cb47cafb65b5001f502d11d9c0ecd0c43a->enter($__internal_272bfbcc49774be8435715234a10a4cb47cafb65b5001f502d11d9c0ecd0c43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_272bfbcc49774be8435715234a10a4cb47cafb65b5001f502d11d9c0ecd0c43a->leave($__internal_272bfbcc49774be8435715234a10a4cb47cafb65b5001f502d11d9c0ecd0c43a_prof);

        
        $__internal_7324801ac2e91566413db8cde08e561c1fb8108503ef99627106aae749e09c6f->leave($__internal_7324801ac2e91566413db8cde08e561c1fb8108503ef99627106aae749e09c6f_prof);

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
