<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_352f48f2677a1331cd48a962e28818b66972f848e927c926a95dd0c3ea48fbd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_484b7e1d703ca38545e2db527c119a3b06d78a8fbe399efe7c5ce7936da3345d = $this->env->getExtension("native_profiler");
        $__internal_484b7e1d703ca38545e2db527c119a3b06d78a8fbe399efe7c5ce7936da3345d->enter($__internal_484b7e1d703ca38545e2db527c119a3b06d78a8fbe399efe7c5ce7936da3345d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_484b7e1d703ca38545e2db527c119a3b06d78a8fbe399efe7c5ce7936da3345d->leave($__internal_484b7e1d703ca38545e2db527c119a3b06d78a8fbe399efe7c5ce7936da3345d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a18262fe089f60b842eceb599678d23d5de4b2e2b9db116a141b138d83971a0 = $this->env->getExtension("native_profiler");
        $__internal_5a18262fe089f60b842eceb599678d23d5de4b2e2b9db116a141b138d83971a0->enter($__internal_5a18262fe089f60b842eceb599678d23d5de4b2e2b9db116a141b138d83971a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5a18262fe089f60b842eceb599678d23d5de4b2e2b9db116a141b138d83971a0->leave($__internal_5a18262fe089f60b842eceb599678d23d5de4b2e2b9db116a141b138d83971a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39552bd17ddc5acd133c6be9ca961a494ac23b013b5a17f57f7c543d96c03d62 = $this->env->getExtension("native_profiler");
        $__internal_39552bd17ddc5acd133c6be9ca961a494ac23b013b5a17f57f7c543d96c03d62->enter($__internal_39552bd17ddc5acd133c6be9ca961a494ac23b013b5a17f57f7c543d96c03d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_39552bd17ddc5acd133c6be9ca961a494ac23b013b5a17f57f7c543d96c03d62->leave($__internal_39552bd17ddc5acd133c6be9ca961a494ac23b013b5a17f57f7c543d96c03d62_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2d67a3b7afe279de23fb1deb256f8c54099b56dba77a4b363b5bd1e6259e019 = $this->env->getExtension("native_profiler");
        $__internal_f2d67a3b7afe279de23fb1deb256f8c54099b56dba77a4b363b5bd1e6259e019->enter($__internal_f2d67a3b7afe279de23fb1deb256f8c54099b56dba77a4b363b5bd1e6259e019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2d67a3b7afe279de23fb1deb256f8c54099b56dba77a4b363b5bd1e6259e019->leave($__internal_f2d67a3b7afe279de23fb1deb256f8c54099b56dba77a4b363b5bd1e6259e019_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
