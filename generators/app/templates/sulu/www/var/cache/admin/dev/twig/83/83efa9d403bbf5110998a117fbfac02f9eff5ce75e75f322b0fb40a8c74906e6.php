<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc707ea13f37bb833465cfeff858d8d0b3446f554dfb38edb29cca9372fc623c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7e4b9ee9d4a9eaa26466fed48dd13217a7781a987a2f7a5a25e6d25af5dd8514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4b9ee9d4a9eaa26466fed48dd13217a7781a987a2f7a5a25e6d25af5dd8514->enter($__internal_7e4b9ee9d4a9eaa26466fed48dd13217a7781a987a2f7a5a25e6d25af5dd8514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dab34cbd6f3aecdfb5ba9ef89de024f58a4ce78aa751acea81aa96a1ba281360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab34cbd6f3aecdfb5ba9ef89de024f58a4ce78aa751acea81aa96a1ba281360->enter($__internal_dab34cbd6f3aecdfb5ba9ef89de024f58a4ce78aa751acea81aa96a1ba281360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e4b9ee9d4a9eaa26466fed48dd13217a7781a987a2f7a5a25e6d25af5dd8514->leave($__internal_7e4b9ee9d4a9eaa26466fed48dd13217a7781a987a2f7a5a25e6d25af5dd8514_prof);

        
        $__internal_dab34cbd6f3aecdfb5ba9ef89de024f58a4ce78aa751acea81aa96a1ba281360->leave($__internal_dab34cbd6f3aecdfb5ba9ef89de024f58a4ce78aa751acea81aa96a1ba281360_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7362cec10624543a3279c90322ec873372b5d897391e0f311e0e3debc099083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7362cec10624543a3279c90322ec873372b5d897391e0f311e0e3debc099083->enter($__internal_a7362cec10624543a3279c90322ec873372b5d897391e0f311e0e3debc099083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_413514b3ee5f7076c5c040286ba20ab2dbbaabe3c99efb0495c89c42eabdd184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413514b3ee5f7076c5c040286ba20ab2dbbaabe3c99efb0495c89c42eabdd184->enter($__internal_413514b3ee5f7076c5c040286ba20ab2dbbaabe3c99efb0495c89c42eabdd184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_413514b3ee5f7076c5c040286ba20ab2dbbaabe3c99efb0495c89c42eabdd184->leave($__internal_413514b3ee5f7076c5c040286ba20ab2dbbaabe3c99efb0495c89c42eabdd184_prof);

        
        $__internal_a7362cec10624543a3279c90322ec873372b5d897391e0f311e0e3debc099083->leave($__internal_a7362cec10624543a3279c90322ec873372b5d897391e0f311e0e3debc099083_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d60856a175df29087baf9ada8c5bae75375744a92e69201dc33d8d2dfc51e026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60856a175df29087baf9ada8c5bae75375744a92e69201dc33d8d2dfc51e026->enter($__internal_d60856a175df29087baf9ada8c5bae75375744a92e69201dc33d8d2dfc51e026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4f510327ba295c0b82fe4b96268c767b5d742ea602f15386738279b5d70b61d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f510327ba295c0b82fe4b96268c767b5d742ea602f15386738279b5d70b61d1->enter($__internal_4f510327ba295c0b82fe4b96268c767b5d742ea602f15386738279b5d70b61d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4f510327ba295c0b82fe4b96268c767b5d742ea602f15386738279b5d70b61d1->leave($__internal_4f510327ba295c0b82fe4b96268c767b5d742ea602f15386738279b5d70b61d1_prof);

        
        $__internal_d60856a175df29087baf9ada8c5bae75375744a92e69201dc33d8d2dfc51e026->leave($__internal_d60856a175df29087baf9ada8c5bae75375744a92e69201dc33d8d2dfc51e026_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9efaa8b2e6f89005c69dcbd21d78dbcc1e03a367cfcb3d0460226e6b7a05b580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9efaa8b2e6f89005c69dcbd21d78dbcc1e03a367cfcb3d0460226e6b7a05b580->enter($__internal_9efaa8b2e6f89005c69dcbd21d78dbcc1e03a367cfcb3d0460226e6b7a05b580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_50df9874a2b2583a4817daedc39791d41c3bfdb8f9f3131289c4e2841d410e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50df9874a2b2583a4817daedc39791d41c3bfdb8f9f3131289c4e2841d410e88->enter($__internal_50df9874a2b2583a4817daedc39791d41c3bfdb8f9f3131289c4e2841d410e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_50df9874a2b2583a4817daedc39791d41c3bfdb8f9f3131289c4e2841d410e88->leave($__internal_50df9874a2b2583a4817daedc39791d41c3bfdb8f9f3131289c4e2841d410e88_prof);

        
        $__internal_9efaa8b2e6f89005c69dcbd21d78dbcc1e03a367cfcb3d0460226e6b7a05b580->leave($__internal_9efaa8b2e6f89005c69dcbd21d78dbcc1e03a367cfcb3d0460226e6b7a05b580_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
