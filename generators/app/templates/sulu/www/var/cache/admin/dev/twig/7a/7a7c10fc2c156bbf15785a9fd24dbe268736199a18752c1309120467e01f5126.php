<?php

/* SuluAdminBundle:Admin:index.html.twig */
class __TwigTemplate_d18e0ca0b302cfcdeeed3a7093775d64410045ca008384b135b49495e02c1a0c extends Twig_Template
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
        $__internal_0c92dbbef386872efcf75128a7f13042536149f3ef7901d098704132f8685c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c92dbbef386872efcf75128a7f13042536149f3ef7901d098704132f8685c0c->enter($__internal_0c92dbbef386872efcf75128a7f13042536149f3ef7901d098704132f8685c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluAdminBundle:Admin:index.html.twig"));

        $__internal_8e26a9bbddf6d09a00f5e1aa26fb1280b11b0f0e884053e604757780372395c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e26a9bbddf6d09a00f5e1aa26fb1280b11b0f0e884053e604757780372395c4->enter($__internal_8e26a9bbddf6d09a00f5e1aa26fb1280b11b0f0e884053e604757780372395c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluAdminBundle:Admin:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
        <div class=\"spinner initial-loader\">
            <div class=\"double-bounce1 bouncer\"></div>
            <div class=\"double-bounce2 bouncer\"></div>
        </div>
        <div id=\"main\" data-aura-component=\"app@suluadmin\" data-aura-user=\"";
        // line 27
        echo twig_escape_filter($this->env, json_encode((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->getSourceContext()); })())), "html", null, true);
        echo "\">
            <div class=\"navigation-container\">
                <div class=\"sulu-navigation-labels\"></div>
                <div data-aura-component=\"navigation@husky\" data-aura-url=\"/admin/navigation\" data-aura-collapse=\"true\"
                     data-aura-user-name=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 31, $this->getSourceContext()); })()), "fullName", array()), "html", null, true);
        echo "\"
                     data-aura-system-name=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 32, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
                     data-aura-system-version=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["suluVersion"]) || array_key_exists("suluVersion", $context) ? $context["suluVersion"] : (function () { throw new Twig_Error_Runtime('Variable "suluVersion" does not exist.', 33, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
                     data-aura-user-locales='";
        // line 34
        echo twig_escape_filter($this->env, json_encode(twig_get_array_keys_filter((isset($context["translated_locales"]) || array_key_exists("translated_locales", $context) ? $context["translated_locales"] : (function () { throw new Twig_Error_Runtime('Variable "translated_locales" does not exist.', 34, $this->getSourceContext()); })()))), "html", null, true);
        echo "'
                     data-aura-user-locale=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 35, $this->getSourceContext()); })()), "locale", array()), "html", null, true);
        echo "\"
                     data-aura-logout-route=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"
                     data-aura-resize-width=\"1470\"
                     class=\"navigation-column\">
                </div>
            </div>
            <div class=\"content-container\">
                <div id=\"labels-container\" data-aura-component=\"labels@suluadmin\"></div>
                <div class=\"content-column fixed\">
                    <div class=\"wrapper\">
                        <div class=\"page\">
                            <main class=\"grid\" id=\"content\"></main>
                        </div>
                    </div>
                </div>

                <div class=\"sidebar-column max\">
                    <aside id=\"sidebar\" data-aura-component=\"sidebar@suluadmin\"></aside>
                </div>
            </div>
            <div id=\"overlayContainer\" data-aura-component=\"overlay@suluadmin\"></div>
        </div>

        <script type=\"text/javascript\">
            ";
        // line 60
        echo "            var SULU = {
                debug: true,
                user: ";
        // line 62
        echo json_encode((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 62, $this->getSourceContext()); })()));
        echo ",
                sections: ";
        // line 63
        echo json_encode((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 63, $this->getSourceContext()); })()));
        echo ",
                locales: ";
        // line 64
        echo json_encode((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 64, $this->getSourceContext()); })()));
        echo ",
                translatedLocales: ";
        // line 65
        echo json_encode((isset($context["translated_locales"]) || array_key_exists("translated_locales", $context) ? $context["translated_locales"] : (function () { throw new Twig_Error_Runtime('Variable "translated_locales" does not exist.', 65, $this->getSourceContext()); })()));
        echo ",
                translations: ";
        // line 66
        echo json_encode((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new Twig_Error_Runtime('Variable "translations" does not exist.', 66, $this->getSourceContext()); })()));
        echo ",
                fallbackLocale: '";
        // line 67
        echo (isset($context["fallback_locale"]) || array_key_exists("fallback_locale", $context) ? $context["fallback_locale"] : (function () { throw new Twig_Error_Runtime('Variable "fallback_locale" does not exist.', 67, $this->getSourceContext()); })());
        echo "'
            };
            ";
        // line 70
        echo "
            // CKEditor needs base path to load some other files
            var CKEDITOR_BASEPATH = '/bundles/suluadmin/js/vendor/husky/vendor/ckeditor/';
        </script>

        ";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "    </body>
</html>
";
        
        $__internal_0c92dbbef386872efcf75128a7f13042536149f3ef7901d098704132f8685c0c->leave($__internal_0c92dbbef386872efcf75128a7f13042536149f3ef7901d098704132f8685c0c_prof);

        
        $__internal_8e26a9bbddf6d09a00f5e1aa26fb1280b11b0f0e884053e604757780372395c4->leave($__internal_8e26a9bbddf6d09a00f5e1aa26fb1280b11b0f0e884053e604757780372395c4_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d09c4368d3e536dcdd0893d7224839fad057dff5ed2f915f0d910ce4c561856c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09c4368d3e536dcdd0893d7224839fad057dff5ed2f915f0d910ce4c561856c->enter($__internal_d09c4368d3e536dcdd0893d7224839fad057dff5ed2f915f0d910ce4c561856c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bd18eb4c97fb303ae805536659d16761703845185e7ebffde6a77befc5c82f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd18eb4c97fb303ae805536659d16761703845185e7ebffde6a77befc5c82f25->enter($__internal_bd18eb4c97fb303ae805536659d16761703845185e7ebffde6a77befc5c82f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        <!-- build:css app.min.css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/js/vendor/husky/husky.min.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/css/main.css\"/>
        <!-- endbuild -->
        ";
        
        $__internal_bd18eb4c97fb303ae805536659d16761703845185e7ebffde6a77befc5c82f25->leave($__internal_bd18eb4c97fb303ae805536659d16761703845185e7ebffde6a77befc5c82f25_prof);

        
        $__internal_d09c4368d3e536dcdd0893d7224839fad057dff5ed2f915f0d910ce4c561856c->leave($__internal_d09c4368d3e536dcdd0893d7224839fad057dff5ed2f915f0d910ce4c561856c_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab290ba60b6a03808be56d8e854c9d6d47c050ec6c44a312a06007ffeee62bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab290ba60b6a03808be56d8e854c9d6d47c050ec6c44a312a06007ffeee62bb5->enter($__internal_ab290ba60b6a03808be56d8e854c9d6d47c050ec6c44a312a06007ffeee62bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_547f9f8bd913ab574e2f762c0809e56cc2ce0ffc0696028877f771ad34738407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547f9f8bd913ab574e2f762c0809e56cc2ce0ffc0696028877f771ad34738407->enter($__internal_547f9f8bd913ab574e2f762c0809e56cc2ce0ffc0696028877f771ad34738407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "        <!-- build:js app.min.js -->
        <script data-main=\"/bundles/suluadmin/js/main\" src=\"/bundles/suluadmin/js/vendor/husky/husky.js\"></script>
        <!-- endbuild -->
        ";
        
        $__internal_547f9f8bd913ab574e2f762c0809e56cc2ce0ffc0696028877f771ad34738407->leave($__internal_547f9f8bd913ab574e2f762c0809e56cc2ce0ffc0696028877f771ad34738407_prof);

        
        $__internal_ab290ba60b6a03808be56d8e854c9d6d47c050ec6c44a312a06007ffeee62bb5->leave($__internal_ab290ba60b6a03808be56d8e854c9d6d47c050ec6c44a312a06007ffeee62bb5_prof);

    }

    public function getTemplateName()
    {
        return "SuluAdminBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 76,  182 => 75,  168 => 16,  159 => 15,  147 => 80,  145 => 75,  138 => 70,  133 => 67,  129 => 66,  125 => 65,  121 => 64,  117 => 63,  113 => 62,  109 => 60,  83 => 36,  79 => 35,  75 => 34,  71 => 33,  67 => 32,  63 => 31,  56 => 27,  48 => 21,  46 => 15,  37 => 9,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>{{ name }}</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        {% block stylesheets %}
        <!-- build:css app.min.css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/js/vendor/husky/husky.min.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/css/main.css\"/>
        <!-- endbuild -->
        {% endblock stylesheets %}
    </head>
    <body>
        <div class=\"spinner initial-loader\">
            <div class=\"double-bounce1 bouncer\"></div>
            <div class=\"double-bounce2 bouncer\"></div>
        </div>
        <div id=\"main\" data-aura-component=\"app@suluadmin\" data-aura-user=\"{{ user| json_encode }}\">
            <div class=\"navigation-container\">
                <div class=\"sulu-navigation-labels\"></div>
                <div data-aura-component=\"navigation@husky\" data-aura-url=\"/admin/navigation\" data-aura-collapse=\"true\"
                     data-aura-user-name=\"{{ user.fullName }}\"
                     data-aura-system-name=\"{{ name }}\"
                     data-aura-system-version=\"{{ suluVersion }}\"
                     data-aura-user-locales='{{ translated_locales|keys|json_encode }}'
                     data-aura-user-locale=\"{{ user.locale }}\"
                     data-aura-logout-route=\"{{ path('logout') }}\"
                     data-aura-resize-width=\"1470\"
                     class=\"navigation-column\">
                </div>
            </div>
            <div class=\"content-container\">
                <div id=\"labels-container\" data-aura-component=\"labels@suluadmin\"></div>
                <div class=\"content-column fixed\">
                    <div class=\"wrapper\">
                        <div class=\"page\">
                            <main class=\"grid\" id=\"content\"></main>
                        </div>
                    </div>
                </div>

                <div class=\"sidebar-column max\">
                    <aside id=\"sidebar\" data-aura-component=\"sidebar@suluadmin\"></aside>
                </div>
            </div>
            <div id=\"overlayContainer\" data-aura-component=\"overlay@suluadmin\"></div>
        </div>

        <script type=\"text/javascript\">
            {% autoescape false %}
            var SULU = {
                debug: true,
                user: {{ user|json_encode }},
                sections: {{ config|json_encode }},
                locales: {{ locales|json_encode }},
                translatedLocales: {{ translated_locales|json_encode }},
                translations: {{ translations|json_encode }},
                fallbackLocale: '{{ fallback_locale }}'
            };
            {% endautoescape %}

            // CKEditor needs base path to load some other files
            var CKEDITOR_BASEPATH = '/bundles/suluadmin/js/vendor/husky/vendor/ckeditor/';
        </script>

        {% block javascripts %}
        <!-- build:js app.min.js -->
        <script data-main=\"/bundles/suluadmin/js/main\" src=\"/bundles/suluadmin/js/vendor/husky/husky.js\"></script>
        <!-- endbuild -->
        {% endblock javascripts %}
    </body>
</html>
", "SuluAdminBundle:Admin:index.html.twig", "/var/www/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Resources/views/Admin/index.html.twig");
    }
}
