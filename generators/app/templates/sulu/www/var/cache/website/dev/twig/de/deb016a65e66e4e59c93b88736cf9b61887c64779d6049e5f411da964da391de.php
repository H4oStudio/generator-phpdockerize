<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_067b222f0af097151da28e2a9911e34e6111c3c2f9470adfd0b7e4e877474110 extends Twig_Template
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
        $__internal_fae1b1e4742775ecf07ade162bab2655a4032460ba56cc383f2be18ee8c3a3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae1b1e4742775ecf07ade162bab2655a4032460ba56cc383f2be18ee8c3a3ca->enter($__internal_fae1b1e4742775ecf07ade162bab2655a4032460ba56cc383f2be18ee8c3a3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_93e15e87bb076dd7faa0ca087fa1ade251ea6fc00a0cb8440b432b27bfd7d433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e15e87bb076dd7faa0ca087fa1ade251ea6fc00a0cb8440b432b27bfd7d433->enter($__internal_93e15e87bb076dd7faa0ca087fa1ade251ea6fc00a0cb8440b432b27bfd7d433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fae1b1e4742775ecf07ade162bab2655a4032460ba56cc383f2be18ee8c3a3ca->leave($__internal_fae1b1e4742775ecf07ade162bab2655a4032460ba56cc383f2be18ee8c3a3ca_prof);

        
        $__internal_93e15e87bb076dd7faa0ca087fa1ade251ea6fc00a0cb8440b432b27bfd7d433->leave($__internal_93e15e87bb076dd7faa0ca087fa1ade251ea6fc00a0cb8440b432b27bfd7d433_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_44522c0856eee21aa2faa96dd49ec245a6bd385cd69caa913a3c247e05290b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44522c0856eee21aa2faa96dd49ec245a6bd385cd69caa913a3c247e05290b8b->enter($__internal_44522c0856eee21aa2faa96dd49ec245a6bd385cd69caa913a3c247e05290b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd68fb071ba94d04adc747c654c8967510be20350e1422f79a871673a63f18b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd68fb071ba94d04adc747c654c8967510be20350e1422f79a871673a63f18b9->enter($__internal_fd68fb071ba94d04adc747c654c8967510be20350e1422f79a871673a63f18b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fd68fb071ba94d04adc747c654c8967510be20350e1422f79a871673a63f18b9->leave($__internal_fd68fb071ba94d04adc747c654c8967510be20350e1422f79a871673a63f18b9_prof);

        
        $__internal_44522c0856eee21aa2faa96dd49ec245a6bd385cd69caa913a3c247e05290b8b->leave($__internal_44522c0856eee21aa2faa96dd49ec245a6bd385cd69caa913a3c247e05290b8b_prof);

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
