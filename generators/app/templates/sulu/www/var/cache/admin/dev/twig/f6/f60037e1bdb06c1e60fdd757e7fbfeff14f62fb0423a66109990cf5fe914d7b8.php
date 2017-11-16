<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90a662fd30b5de17dc27a0eb467da5a90f4109d4b5972543e0c728c88d6f7ec extends Twig_Template
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
        $__internal_dd67d0692480c2ea083aa84a7fcc80fd202aa97aca450750710168e67711eb22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd67d0692480c2ea083aa84a7fcc80fd202aa97aca450750710168e67711eb22->enter($__internal_dd67d0692480c2ea083aa84a7fcc80fd202aa97aca450750710168e67711eb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_24678ce90b3f412b9199e29e03e0b91d2ae8be1391327fc08e815ae9f968b907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24678ce90b3f412b9199e29e03e0b91d2ae8be1391327fc08e815ae9f968b907->enter($__internal_24678ce90b3f412b9199e29e03e0b91d2ae8be1391327fc08e815ae9f968b907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd67d0692480c2ea083aa84a7fcc80fd202aa97aca450750710168e67711eb22->leave($__internal_dd67d0692480c2ea083aa84a7fcc80fd202aa97aca450750710168e67711eb22_prof);

        
        $__internal_24678ce90b3f412b9199e29e03e0b91d2ae8be1391327fc08e815ae9f968b907->leave($__internal_24678ce90b3f412b9199e29e03e0b91d2ae8be1391327fc08e815ae9f968b907_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1378027b73ecfb98eaf421e318a9d686067b3180e760f4fdd5d98bd91f2abec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1378027b73ecfb98eaf421e318a9d686067b3180e760f4fdd5d98bd91f2abec9->enter($__internal_1378027b73ecfb98eaf421e318a9d686067b3180e760f4fdd5d98bd91f2abec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c648a7ac0ed5a85372f52c0334b6d5791523bc1e4b73bfc47c3b75ffbe795887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c648a7ac0ed5a85372f52c0334b6d5791523bc1e4b73bfc47c3b75ffbe795887->enter($__internal_c648a7ac0ed5a85372f52c0334b6d5791523bc1e4b73bfc47c3b75ffbe795887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c648a7ac0ed5a85372f52c0334b6d5791523bc1e4b73bfc47c3b75ffbe795887->leave($__internal_c648a7ac0ed5a85372f52c0334b6d5791523bc1e4b73bfc47c3b75ffbe795887_prof);

        
        $__internal_1378027b73ecfb98eaf421e318a9d686067b3180e760f4fdd5d98bd91f2abec9->leave($__internal_1378027b73ecfb98eaf421e318a9d686067b3180e760f4fdd5d98bd91f2abec9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9716d0c243a01991df50a965dbb1a0a41310617b7d5b9c9d963e4933977c97c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9716d0c243a01991df50a965dbb1a0a41310617b7d5b9c9d963e4933977c97c3->enter($__internal_9716d0c243a01991df50a965dbb1a0a41310617b7d5b9c9d963e4933977c97c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_957543843193e5747268eab2af6f7f18fb6e1279e4e7772b994babb06f44803d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957543843193e5747268eab2af6f7f18fb6e1279e4e7772b994babb06f44803d->enter($__internal_957543843193e5747268eab2af6f7f18fb6e1279e4e7772b994babb06f44803d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_957543843193e5747268eab2af6f7f18fb6e1279e4e7772b994babb06f44803d->leave($__internal_957543843193e5747268eab2af6f7f18fb6e1279e4e7772b994babb06f44803d_prof);

        
        $__internal_9716d0c243a01991df50a965dbb1a0a41310617b7d5b9c9d963e4933977c97c3->leave($__internal_9716d0c243a01991df50a965dbb1a0a41310617b7d5b9c9d963e4933977c97c3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b02162823d70e21c000ced4808aee74d7e2ac7b56a1829585ac3be3a9fa65602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02162823d70e21c000ced4808aee74d7e2ac7b56a1829585ac3be3a9fa65602->enter($__internal_b02162823d70e21c000ced4808aee74d7e2ac7b56a1829585ac3be3a9fa65602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_75488b61a9e380319ff961fc956fca0ece5383bf56d0936bb61ee7b8220d3ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75488b61a9e380319ff961fc956fca0ece5383bf56d0936bb61ee7b8220d3ab3->enter($__internal_75488b61a9e380319ff961fc956fca0ece5383bf56d0936bb61ee7b8220d3ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_75488b61a9e380319ff961fc956fca0ece5383bf56d0936bb61ee7b8220d3ab3->leave($__internal_75488b61a9e380319ff961fc956fca0ece5383bf56d0936bb61ee7b8220d3ab3_prof);

        
        $__internal_b02162823d70e21c000ced4808aee74d7e2ac7b56a1829585ac3be3a9fa65602->leave($__internal_b02162823d70e21c000ced4808aee74d7e2ac7b56a1829585ac3be3a9fa65602_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
