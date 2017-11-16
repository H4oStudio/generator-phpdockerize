<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ca60273b670900e1b6da8e77632d6a1601b9e67f5c5a46ecd60ca3a1186c5938 extends Twig_Template
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
        $__internal_265a6780335b1ca5d3d1708ff6ea6b748dac2883981cc6707038bb743f63eb88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265a6780335b1ca5d3d1708ff6ea6b748dac2883981cc6707038bb743f63eb88->enter($__internal_265a6780335b1ca5d3d1708ff6ea6b748dac2883981cc6707038bb743f63eb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_631683b491acd4d4d4e26857b506c4b4cf9082187c6c6c0f496037df15813869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631683b491acd4d4d4e26857b506c4b4cf9082187c6c6c0f496037df15813869->enter($__internal_631683b491acd4d4d4e26857b506c4b4cf9082187c6c6c0f496037df15813869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265a6780335b1ca5d3d1708ff6ea6b748dac2883981cc6707038bb743f63eb88->leave($__internal_265a6780335b1ca5d3d1708ff6ea6b748dac2883981cc6707038bb743f63eb88_prof);

        
        $__internal_631683b491acd4d4d4e26857b506c4b4cf9082187c6c6c0f496037df15813869->leave($__internal_631683b491acd4d4d4e26857b506c4b4cf9082187c6c6c0f496037df15813869_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed3bb5bd3bd73fa5daa1458f7ba5e3dd3e00c8e7be57fed2e03737297ff71b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3bb5bd3bd73fa5daa1458f7ba5e3dd3e00c8e7be57fed2e03737297ff71b6f->enter($__internal_ed3bb5bd3bd73fa5daa1458f7ba5e3dd3e00c8e7be57fed2e03737297ff71b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_366a44b0a74a5d41d48d6d962b2f5c3403612eed454bb59230f70566ad358a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366a44b0a74a5d41d48d6d962b2f5c3403612eed454bb59230f70566ad358a6c->enter($__internal_366a44b0a74a5d41d48d6d962b2f5c3403612eed454bb59230f70566ad358a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_366a44b0a74a5d41d48d6d962b2f5c3403612eed454bb59230f70566ad358a6c->leave($__internal_366a44b0a74a5d41d48d6d962b2f5c3403612eed454bb59230f70566ad358a6c_prof);

        
        $__internal_ed3bb5bd3bd73fa5daa1458f7ba5e3dd3e00c8e7be57fed2e03737297ff71b6f->leave($__internal_ed3bb5bd3bd73fa5daa1458f7ba5e3dd3e00c8e7be57fed2e03737297ff71b6f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dad38b45635dd45a1771d5d5cece37bd6d753f6cfe28cca050f2ce865e8db600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad38b45635dd45a1771d5d5cece37bd6d753f6cfe28cca050f2ce865e8db600->enter($__internal_dad38b45635dd45a1771d5d5cece37bd6d753f6cfe28cca050f2ce865e8db600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f45dbdf73d4388dd0041f1dca755f679b7365df7cbfa9fa3a9ac9cf5870632f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45dbdf73d4388dd0041f1dca755f679b7365df7cbfa9fa3a9ac9cf5870632f5->enter($__internal_f45dbdf73d4388dd0041f1dca755f679b7365df7cbfa9fa3a9ac9cf5870632f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f45dbdf73d4388dd0041f1dca755f679b7365df7cbfa9fa3a9ac9cf5870632f5->leave($__internal_f45dbdf73d4388dd0041f1dca755f679b7365df7cbfa9fa3a9ac9cf5870632f5_prof);

        
        $__internal_dad38b45635dd45a1771d5d5cece37bd6d753f6cfe28cca050f2ce865e8db600->leave($__internal_dad38b45635dd45a1771d5d5cece37bd6d753f6cfe28cca050f2ce865e8db600_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb9604f293e258f6bfd6d5d9e912de2e9c32a916489b898c946ec0a439523158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9604f293e258f6bfd6d5d9e912de2e9c32a916489b898c946ec0a439523158->enter($__internal_fb9604f293e258f6bfd6d5d9e912de2e9c32a916489b898c946ec0a439523158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_53ae8a5ec53729700fb5e1aaa93d1b59580718442f94fdf6f8d0757e0615817a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ae8a5ec53729700fb5e1aaa93d1b59580718442f94fdf6f8d0757e0615817a->enter($__internal_53ae8a5ec53729700fb5e1aaa93d1b59580718442f94fdf6f8d0757e0615817a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_53ae8a5ec53729700fb5e1aaa93d1b59580718442f94fdf6f8d0757e0615817a->leave($__internal_53ae8a5ec53729700fb5e1aaa93d1b59580718442f94fdf6f8d0757e0615817a_prof);

        
        $__internal_fb9604f293e258f6bfd6d5d9e912de2e9c32a916489b898c946ec0a439523158->leave($__internal_fb9604f293e258f6bfd6d5d9e912de2e9c32a916489b898c946ec0a439523158_prof);

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
