<?php

/* base.html.twig */
class __TwigTemplate_0d7daf705a60bf74432f7d4ce524e1d1e30d7636e60c3b45c5ef4a53156b2043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97d515a605808070255194623937b178c6c61ee0961237e56ed9e3b8cc90e069 = $this->env->getExtension("native_profiler");
        $__internal_97d515a605808070255194623937b178c6c61ee0961237e56ed9e3b8cc90e069->enter($__internal_97d515a605808070255194623937b178c6c61ee0961237e56ed9e3b8cc90e069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_97d515a605808070255194623937b178c6c61ee0961237e56ed9e3b8cc90e069->leave($__internal_97d515a605808070255194623937b178c6c61ee0961237e56ed9e3b8cc90e069_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_87297e3587c9c9c66e5a3681dedcacb9c192dbf532c4a91570a5565bd3d5f2a1 = $this->env->getExtension("native_profiler");
        $__internal_87297e3587c9c9c66e5a3681dedcacb9c192dbf532c4a91570a5565bd3d5f2a1->enter($__internal_87297e3587c9c9c66e5a3681dedcacb9c192dbf532c4a91570a5565bd3d5f2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_87297e3587c9c9c66e5a3681dedcacb9c192dbf532c4a91570a5565bd3d5f2a1->leave($__internal_87297e3587c9c9c66e5a3681dedcacb9c192dbf532c4a91570a5565bd3d5f2a1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9eaa2fb3fe583495cc115a2060b256537256d2a5dedbc8a1989fc124defa93dd = $this->env->getExtension("native_profiler");
        $__internal_9eaa2fb3fe583495cc115a2060b256537256d2a5dedbc8a1989fc124defa93dd->enter($__internal_9eaa2fb3fe583495cc115a2060b256537256d2a5dedbc8a1989fc124defa93dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9eaa2fb3fe583495cc115a2060b256537256d2a5dedbc8a1989fc124defa93dd->leave($__internal_9eaa2fb3fe583495cc115a2060b256537256d2a5dedbc8a1989fc124defa93dd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8464ae3802b6f4f60b28dd7877592aa69ebf0d5cb1d6781af25fde65c8d67032 = $this->env->getExtension("native_profiler");
        $__internal_8464ae3802b6f4f60b28dd7877592aa69ebf0d5cb1d6781af25fde65c8d67032->enter($__internal_8464ae3802b6f4f60b28dd7877592aa69ebf0d5cb1d6781af25fde65c8d67032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8464ae3802b6f4f60b28dd7877592aa69ebf0d5cb1d6781af25fde65c8d67032->leave($__internal_8464ae3802b6f4f60b28dd7877592aa69ebf0d5cb1d6781af25fde65c8d67032_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9bd9e0ca5ec751f29f0f122b907d269b898680fa55cc38d9980c91be5f774aa4 = $this->env->getExtension("native_profiler");
        $__internal_9bd9e0ca5ec751f29f0f122b907d269b898680fa55cc38d9980c91be5f774aa4->enter($__internal_9bd9e0ca5ec751f29f0f122b907d269b898680fa55cc38d9980c91be5f774aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9bd9e0ca5ec751f29f0f122b907d269b898680fa55cc38d9980c91be5f774aa4->leave($__internal_9bd9e0ca5ec751f29f0f122b907d269b898680fa55cc38d9980c91be5f774aa4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
