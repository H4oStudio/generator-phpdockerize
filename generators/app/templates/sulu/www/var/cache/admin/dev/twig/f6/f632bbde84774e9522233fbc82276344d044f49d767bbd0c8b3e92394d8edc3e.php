<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7c1133dd474cc5f9b97448001324645571f865c5f956f2f80e5b6c02cd0e2c4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5fab839033ef817aa0c9d603a1f29a28d1e024a68df74c5bf171a095bfa0305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fab839033ef817aa0c9d603a1f29a28d1e024a68df74c5bf171a095bfa0305->enter($__internal_a5fab839033ef817aa0c9d603a1f29a28d1e024a68df74c5bf171a095bfa0305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b958e9455e1c7ff281554cf0b44f7d1274ea71f0a34034b699e9de2c0c89c8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b958e9455e1c7ff281554cf0b44f7d1274ea71f0a34034b699e9de2c0c89c8d8->enter($__internal_b958e9455e1c7ff281554cf0b44f7d1274ea71f0a34034b699e9de2c0c89c8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5fab839033ef817aa0c9d603a1f29a28d1e024a68df74c5bf171a095bfa0305->leave($__internal_a5fab839033ef817aa0c9d603a1f29a28d1e024a68df74c5bf171a095bfa0305_prof);

        
        $__internal_b958e9455e1c7ff281554cf0b44f7d1274ea71f0a34034b699e9de2c0c89c8d8->leave($__internal_b958e9455e1c7ff281554cf0b44f7d1274ea71f0a34034b699e9de2c0c89c8d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f48b32fcbac86e680482542e89ca51ee4385e481496734f2befbe378d63e1317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48b32fcbac86e680482542e89ca51ee4385e481496734f2befbe378d63e1317->enter($__internal_f48b32fcbac86e680482542e89ca51ee4385e481496734f2befbe378d63e1317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4912bbf849b56ffb230428596771a6116a8406bab1b5234f1602f622ca35d957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4912bbf849b56ffb230428596771a6116a8406bab1b5234f1602f622ca35d957->enter($__internal_4912bbf849b56ffb230428596771a6116a8406bab1b5234f1602f622ca35d957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4912bbf849b56ffb230428596771a6116a8406bab1b5234f1602f622ca35d957->leave($__internal_4912bbf849b56ffb230428596771a6116a8406bab1b5234f1602f622ca35d957_prof);

        
        $__internal_f48b32fcbac86e680482542e89ca51ee4385e481496734f2befbe378d63e1317->leave($__internal_f48b32fcbac86e680482542e89ca51ee4385e481496734f2befbe378d63e1317_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
