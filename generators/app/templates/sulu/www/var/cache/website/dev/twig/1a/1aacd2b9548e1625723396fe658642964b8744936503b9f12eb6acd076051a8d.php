<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a491f8f23b9108268fe80bdb9ba10e1f6a5a9dfb65a88a77576670cfd59673d0 extends Twig_Template
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
        $__internal_4cc2b369e36de729d615a7d4e55213dc6a3f170aca6befeaefc44f6d8afeb6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc2b369e36de729d615a7d4e55213dc6a3f170aca6befeaefc44f6d8afeb6bb->enter($__internal_4cc2b369e36de729d615a7d4e55213dc6a3f170aca6befeaefc44f6d8afeb6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b9009eb76bbfa8e0b399bb9c9d1b9caa6261f4215cdf0000cb9e820c33ba4582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9009eb76bbfa8e0b399bb9c9d1b9caa6261f4215cdf0000cb9e820c33ba4582->enter($__internal_b9009eb76bbfa8e0b399bb9c9d1b9caa6261f4215cdf0000cb9e820c33ba4582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cc2b369e36de729d615a7d4e55213dc6a3f170aca6befeaefc44f6d8afeb6bb->leave($__internal_4cc2b369e36de729d615a7d4e55213dc6a3f170aca6befeaefc44f6d8afeb6bb_prof);

        
        $__internal_b9009eb76bbfa8e0b399bb9c9d1b9caa6261f4215cdf0000cb9e820c33ba4582->leave($__internal_b9009eb76bbfa8e0b399bb9c9d1b9caa6261f4215cdf0000cb9e820c33ba4582_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1359d82c81ea25f70a80a19f220a4fc02ce8c238166b0b9c1533b3418d9f1ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1359d82c81ea25f70a80a19f220a4fc02ce8c238166b0b9c1533b3418d9f1ca->enter($__internal_e1359d82c81ea25f70a80a19f220a4fc02ce8c238166b0b9c1533b3418d9f1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_09adb0a3c3e7a3e9eebe52085ea23104aa38c79c9fc9b6f5db3d074b0d3f5d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09adb0a3c3e7a3e9eebe52085ea23104aa38c79c9fc9b6f5db3d074b0d3f5d7d->enter($__internal_09adb0a3c3e7a3e9eebe52085ea23104aa38c79c9fc9b6f5db3d074b0d3f5d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_09adb0a3c3e7a3e9eebe52085ea23104aa38c79c9fc9b6f5db3d074b0d3f5d7d->leave($__internal_09adb0a3c3e7a3e9eebe52085ea23104aa38c79c9fc9b6f5db3d074b0d3f5d7d_prof);

        
        $__internal_e1359d82c81ea25f70a80a19f220a4fc02ce8c238166b0b9c1533b3418d9f1ca->leave($__internal_e1359d82c81ea25f70a80a19f220a4fc02ce8c238166b0b9c1533b3418d9f1ca_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c14a95faebfb5afda0900735dad91e092d2889e0517d9af54b3b6e9fdb34d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c14a95faebfb5afda0900735dad91e092d2889e0517d9af54b3b6e9fdb34d06->enter($__internal_3c14a95faebfb5afda0900735dad91e092d2889e0517d9af54b3b6e9fdb34d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_50eb4dcbb284b5301f53d4f8fd4bf55e22efe1e609dff282b6d1d0ab3c4b4725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50eb4dcbb284b5301f53d4f8fd4bf55e22efe1e609dff282b6d1d0ab3c4b4725->enter($__internal_50eb4dcbb284b5301f53d4f8fd4bf55e22efe1e609dff282b6d1d0ab3c4b4725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_50eb4dcbb284b5301f53d4f8fd4bf55e22efe1e609dff282b6d1d0ab3c4b4725->leave($__internal_50eb4dcbb284b5301f53d4f8fd4bf55e22efe1e609dff282b6d1d0ab3c4b4725_prof);

        
        $__internal_3c14a95faebfb5afda0900735dad91e092d2889e0517d9af54b3b6e9fdb34d06->leave($__internal_3c14a95faebfb5afda0900735dad91e092d2889e0517d9af54b3b6e9fdb34d06_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5e2c422016a18016924ead58eb19038e7ce03b78104647bf08353f610451146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e2c422016a18016924ead58eb19038e7ce03b78104647bf08353f610451146->enter($__internal_c5e2c422016a18016924ead58eb19038e7ce03b78104647bf08353f610451146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d6ea1d384a52173e6311814b598529358294152fc2dc03a1097d4200609fbe5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ea1d384a52173e6311814b598529358294152fc2dc03a1097d4200609fbe5b->enter($__internal_d6ea1d384a52173e6311814b598529358294152fc2dc03a1097d4200609fbe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d6ea1d384a52173e6311814b598529358294152fc2dc03a1097d4200609fbe5b->leave($__internal_d6ea1d384a52173e6311814b598529358294152fc2dc03a1097d4200609fbe5b_prof);

        
        $__internal_c5e2c422016a18016924ead58eb19038e7ce03b78104647bf08353f610451146->leave($__internal_c5e2c422016a18016924ead58eb19038e7ce03b78104647bf08353f610451146_prof);

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
