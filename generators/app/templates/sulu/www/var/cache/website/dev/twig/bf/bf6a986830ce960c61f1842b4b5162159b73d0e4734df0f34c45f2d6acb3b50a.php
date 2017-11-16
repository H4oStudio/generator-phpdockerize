<?php

/* templates/homepage.html.twig */
class __TwigTemplate_582feed90dfcb5faad0b1064e1113184b31dd280f1927fe7f44cbc4fc91bb218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "templates/homepage.html.twig", 1);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14b3d901fd1283494e9f09759f7419e027eed126e4c3c79ee8bb9ef34ed60aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b3d901fd1283494e9f09759f7419e027eed126e4c3c79ee8bb9ef34ed60aed->enter($__internal_14b3d901fd1283494e9f09759f7419e027eed126e4c3c79ee8bb9ef34ed60aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/homepage.html.twig"));

        $__internal_e7d8b4c8a87c83db10d855b4947dfe5c1f95b5d22b3fde57ed14023c05d878fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d8b4c8a87c83db10d855b4947dfe5c1f95b5d22b3fde57ed14023c05d878fa->enter($__internal_e7d8b4c8a87c83db10d855b4947dfe5c1f95b5d22b3fde57ed14023c05d878fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b3d901fd1283494e9f09759f7419e027eed126e4c3c79ee8bb9ef34ed60aed->leave($__internal_14b3d901fd1283494e9f09759f7419e027eed126e4c3c79ee8bb9ef34ed60aed_prof);

        
        $__internal_e7d8b4c8a87c83db10d855b4947dfe5c1f95b5d22b3fde57ed14023c05d878fa->leave($__internal_e7d8b4c8a87c83db10d855b4947dfe5c1f95b5d22b3fde57ed14023c05d878fa_prof);

    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        $__internal_97767c765d195c01da9558c75ee4c95910f13af474009e79b90845782a52b062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97767c765d195c01da9558c75ee4c95910f13af474009e79b90845782a52b062->enter($__internal_97767c765d195c01da9558c75ee4c95910f13af474009e79b90845782a52b062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_6f47007e3f959f21de23f72728e590cb9c3fbea8c4f4fca15bba6717ecbe5dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f47007e3f959f21de23f72728e590cb9c3fbea8c4f4fca15bba6717ecbe5dd7->enter($__internal_6f47007e3f959f21de23f72728e590cb9c3fbea8c4f4fca15bba6717ecbe5dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 4
        echo "    ";
        $this->loadTemplate("SuluWebsiteBundle:Extension:seo.html.twig", "templates/homepage.html.twig", 4)->display(array_merge($context, array("seo" => ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
($context["extension"] ?? null), "seo", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["extension"] ?? null), "seo", array()), array())) : (array())), "content" => ((        // line 6
array_key_exists("content", $context)) ? (_twig_default_filter((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 6, $this->getSourceContext()); })()), array())) : (array())), "urls" => ((        // line 7
array_key_exists("urls", $context)) ? (_twig_default_filter((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new Twig_Error_Runtime('Variable "urls" does not exist.', 7, $this->getSourceContext()); })()), array())) : (array())), "shadowBaseLocale" => ((        // line 8
array_key_exists("shadowBaseLocale", $context)) ? (_twig_default_filter((isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new Twig_Error_Runtime('Variable "shadowBaseLocale" does not exist.', 8, $this->getSourceContext()); })()))) : ("")), "defaultLocale" => ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 9
($context["request"] ?? null), "defaultLocale", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["request"] ?? null), "defaultLocale", array()), "de")) : ("de")))));
        
        $__internal_6f47007e3f959f21de23f72728e590cb9c3fbea8c4f4fca15bba6717ecbe5dd7->leave($__internal_6f47007e3f959f21de23f72728e590cb9c3fbea8c4f4fca15bba6717ecbe5dd7_prof);

        
        $__internal_97767c765d195c01da9558c75ee4c95910f13af474009e79b90845782a52b062->leave($__internal_97767c765d195c01da9558c75ee4c95910f13af474009e79b90845782a52b062_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2993bf8b8c86111c911842cd5e6245395a94611eedcdc38e1572217b79c17b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2993bf8b8c86111c911842cd5e6245395a94611eedcdc38e1572217b79c17b6->enter($__internal_b2993bf8b8c86111c911842cd5e6245395a94611eedcdc38e1572217b79c17b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f780f7a1a9bd0864ce12b01a0e6052ad66321396cd9aa34e97c061f5b2f18da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f780f7a1a9bd0864ce12b01a0e6052ad66321396cd9aa34e97c061f5b2f18da2->enter($__internal_f780f7a1a9bd0864ce12b01a0e6052ad66321396cd9aa34e97c061f5b2f18da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <h1 property=\"title\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 14, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h1>

    <div property=\"article\">
        ";
        // line 17
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 17, $this->getSourceContext()); })()), "article", array());
        echo "
    </div>
";
        
        $__internal_f780f7a1a9bd0864ce12b01a0e6052ad66321396cd9aa34e97c061f5b2f18da2->leave($__internal_f780f7a1a9bd0864ce12b01a0e6052ad66321396cd9aa34e97c061f5b2f18da2_prof);

        
        $__internal_b2993bf8b8c86111c911842cd5e6245395a94611eedcdc38e1572217b79c17b6->leave($__internal_b2993bf8b8c86111c911842cd5e6245395a94611eedcdc38e1572217b79c17b6_prof);

    }

    public function getTemplateName()
    {
        return "templates/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  75 => 14,  66 => 13,  56 => 9,  55 => 8,  54 => 7,  53 => 6,  52 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}

{% block meta %}
    {% include \"SuluWebsiteBundle:Extension:seo.html.twig\" with {
        \"seo\": extension.seo|default([]),
        \"content\": content|default([]),
        \"urls\": urls|default([]),
        \"shadowBaseLocale\": shadowBaseLocale|default(),
        \"defaultLocale\": request.defaultLocale|default('de')
    } %}
{% endblock %}

{% block content %}
    <h1 property=\"title\">{{ content.title }}</h1>

    <div property=\"article\">
        {{ content.article|raw }}
    </div>
{% endblock %}
", "templates/homepage.html.twig", "/var/www/app/Resources/views/templates/homepage.html.twig");
    }
}
