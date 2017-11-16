<?php

/* SuluAdminBundle:Security:login.html.twig */
class __TwigTemplate_e3138e15fe2610accf09ab0ba5e1951ebb496cb4810e4ebdaf3c7332b80f8c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9efb02b8a06da08e0e12a7aabdb24758d5124b29ba00aacf9c2e879ccce5800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9efb02b8a06da08e0e12a7aabdb24758d5124b29ba00aacf9c2e879ccce5800->enter($__internal_d9efb02b8a06da08e0e12a7aabdb24758d5124b29ba00aacf9c2e879ccce5800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluAdminBundle:Security:login.html.twig"));

        $__internal_5d062659a15b477d4da2e18f6c901d7b4157bb00ff0dd44fecf38064935a847e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d062659a15b477d4da2e18f6c901d7b4157bb00ff0dd44fecf38064935a847e->enter($__internal_5d062659a15b477d4da2e18f6c901d7b4157bb00ff0dd44fecf38064935a847e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluAdminBundle:Security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "</head>
<body>
    <div id=\"main\" class=\"login\">
        <div data-aura-component=\"login@suluadmin\"
             data-aura-login-check=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sulu_admin.login_check");
        echo "\"
             data-aura-reset-mail-url=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sulu_security.reset_password.email");
        echo "\"
             data-aura-resend-url=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sulu_security.reset_password.email.resend");
        echo "\"
             data-aura-login-url=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sulu_admin.login");
        echo "\"
             data-aura-csrf-token=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
             ";
        // line 32
        if (array_key_exists("token", $context)) {
            // line 33
            echo "                data-aura-reset-token=\"";
            echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()), "html", null, true);
            echo "\"
                data-aura-reset-mode=\"true\"
             ";
        }
        // line 36
        echo "             data-aura-reset-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sulu_security.reset_password.reset");
        echo "\"></div>

        <div id=\"labels-container\" class='login-label-container' data-aura-component=\"labels@suluadmin\"></div>
    </div>
    <script type=\"text/javascript\">
        ";
        // line 42
        echo "        var SULU = {
            debug: true,
            locales: ";
        // line 44
        echo json_encode((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 44, $this->getSourceContext()); })()));
        echo ",
            translatedLocales: ";
        // line 45
        echo json_encode((isset($context["translated_locales"]) || array_key_exists("translated_locales", $context) ? $context["translated_locales"] : (function () { throw new Twig_Error_Runtime('Variable "translated_locales" does not exist.', 45, $this->getSourceContext()); })()));
        echo ",
            translations: ";
        // line 46
        echo json_encode((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new Twig_Error_Runtime('Variable "translations" does not exist.', 46, $this->getSourceContext()); })()));
        echo ",
            fallbackLocale: '";
        // line 47
        echo (isset($context["fallback_locale"]) || array_key_exists("fallback_locale", $context) ? $context["fallback_locale"] : (function () { throw new Twig_Error_Runtime('Variable "fallback_locale" does not exist.', 47, $this->getSourceContext()); })());
        echo "'
        };
        ";
        // line 50
        echo "    </script>

    ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "</body>
</html>
";
        
        $__internal_d9efb02b8a06da08e0e12a7aabdb24758d5124b29ba00aacf9c2e879ccce5800->leave($__internal_d9efb02b8a06da08e0e12a7aabdb24758d5124b29ba00aacf9c2e879ccce5800_prof);

        
        $__internal_5d062659a15b477d4da2e18f6c901d7b4157bb00ff0dd44fecf38064935a847e->leave($__internal_5d062659a15b477d4da2e18f6c901d7b4157bb00ff0dd44fecf38064935a847e_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4927a1d41d8730443bf3c078bf9d7288c70e952b2f23ca050dcc3bb56fe91454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4927a1d41d8730443bf3c078bf9d7288c70e952b2f23ca050dcc3bb56fe91454->enter($__internal_4927a1d41d8730443bf3c078bf9d7288c70e952b2f23ca050dcc3bb56fe91454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5d5ebe960ee235937320be7a745ecb3012482eeeb717abb4444fc3ba4af0e4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5ebe960ee235937320be7a745ecb3012482eeeb717abb4444fc3ba4af0e4fb->enter($__internal_5d5ebe960ee235937320be7a745ecb3012482eeeb717abb4444fc3ba4af0e4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "    <!-- build:css login.min.css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/js/vendor/husky/husky.min.css\"/>
    <!-- endbuild -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/css/main.css\"/>
    ";
        
        $__internal_5d5ebe960ee235937320be7a745ecb3012482eeeb717abb4444fc3ba4af0e4fb->leave($__internal_5d5ebe960ee235937320be7a745ecb3012482eeeb717abb4444fc3ba4af0e4fb_prof);

        
        $__internal_4927a1d41d8730443bf3c078bf9d7288c70e952b2f23ca050dcc3bb56fe91454->leave($__internal_4927a1d41d8730443bf3c078bf9d7288c70e952b2f23ca050dcc3bb56fe91454_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92dac4b4b9790e2194f30711254d63b8986829fa414972d2d080d7e57bdfd1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92dac4b4b9790e2194f30711254d63b8986829fa414972d2d080d7e57bdfd1f6->enter($__internal_92dac4b4b9790e2194f30711254d63b8986829fa414972d2d080d7e57bdfd1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d50cd2b468ed3e3ad970cc4c23be7bf82bc686a33740902e294cbce8ca3a266b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50cd2b468ed3e3ad970cc4c23be7bf82bc686a33740902e294cbce8ca3a266b->enter($__internal_d50cd2b468ed3e3ad970cc4c23be7bf82bc686a33740902e294cbce8ca3a266b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    <!-- build:js login.min.js -->
    <script data-main=\"/bundles/suluadmin/js/login\" src=\"/bundles/suluadmin/js/vendor/husky/husky.js\"></script>
    <!-- endbuild -->
    ";
        
        $__internal_d50cd2b468ed3e3ad970cc4c23be7bf82bc686a33740902e294cbce8ca3a266b->leave($__internal_d50cd2b468ed3e3ad970cc4c23be7bf82bc686a33740902e294cbce8ca3a266b_prof);

        
        $__internal_92dac4b4b9790e2194f30711254d63b8986829fa414972d2d080d7e57bdfd1f6->leave($__internal_92dac4b4b9790e2194f30711254d63b8986829fa414972d2d080d7e57bdfd1f6_prof);

    }

    public function getTemplateName()
    {
        return "SuluAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 53,  156 => 52,  141 => 17,  132 => 16,  120 => 57,  118 => 52,  114 => 50,  109 => 47,  105 => 46,  101 => 45,  97 => 44,  93 => 42,  84 => 36,  77 => 33,  75 => 32,  71 => 31,  67 => 30,  63 => 29,  59 => 28,  55 => 27,  49 => 23,  47 => 16,  38 => 10,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>{{ name }}</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    {% block stylesheets %}
    <!-- build:css login.min.css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/js/vendor/husky/husky.min.css\"/>
    <!-- endbuild -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/css/main.css\"/>
    {% endblock stylesheets %}
</head>
<body>
    <div id=\"main\" class=\"login\">
        <div data-aura-component=\"login@suluadmin\"
             data-aura-login-check=\"{{ path('sulu_admin.login_check') }}\"
             data-aura-reset-mail-url=\"{{ path('sulu_security.reset_password.email') }}\"
             data-aura-resend-url=\"{{ path('sulu_security.reset_password.email.resend') }}\"
             data-aura-login-url=\"{{ path('sulu_admin.login') }}\"
             data-aura-csrf-token=\"{{ csrf_token('authenticate') }}\"
             {% if token is defined %}
                data-aura-reset-token=\"{{ token }}\"
                data-aura-reset-mode=\"true\"
             {% endif %}
             data-aura-reset-url=\"{{ path('sulu_security.reset_password.reset') }}\"></div>

        <div id=\"labels-container\" class='login-label-container' data-aura-component=\"labels@suluadmin\"></div>
    </div>
    <script type=\"text/javascript\">
        {% autoescape false %}
        var SULU = {
            debug: true,
            locales: {{ locales | json_encode }},
            translatedLocales: {{ translated_locales | json_encode }},
            translations: {{ translations | json_encode }},
            fallbackLocale: '{{ fallback_locale }}'
        };
        {% endautoescape %}
    </script>

    {% block javascripts %}
    <!-- build:js login.min.js -->
    <script data-main=\"/bundles/suluadmin/js/login\" src=\"/bundles/suluadmin/js/vendor/husky/husky.js\"></script>
    <!-- endbuild -->
    {% endblock javascripts %}
</body>
</html>
", "SuluAdminBundle:Security:login.html.twig", "/var/www/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Resources/views/Security/login.html.twig");
    }
}
