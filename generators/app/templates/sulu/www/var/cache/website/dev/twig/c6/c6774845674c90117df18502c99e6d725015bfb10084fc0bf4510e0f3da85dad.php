<?php

/* master.html.twig */
class __TwigTemplate_68dc81a012b2d1d57684199dc12681abda80323a7a67e5cfca52a632c8f2e575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'style' => array($this, 'block_style'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'aside' => array($this, 'block_aside'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96aaef45387f2d07567d2b57f6ee7e58a2c0b408a67229d5a0a53868c773152e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96aaef45387f2d07567d2b57f6ee7e58a2c0b408a67229d5a0a53868c773152e->enter($__internal_96aaef45387f2d07567d2b57f6ee7e58a2c0b408a67229d5a0a53868c773152e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "master.html.twig"));

        $__internal_aeddfe6b31397751779af6aa3d7bfb6c78bf206b6db70f1070d0359d81ac65f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeddfe6b31397751779af6aa3d7bfb6c78bf206b6db70f1070d0359d81ac65f7->enter($__internal_aeddfe6b31397751779af6aa3d7bfb6c78bf206b6db70f1070d0359d81ac65f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "master.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        ";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "
        ";
        // line 10
        $this->displayBlock('style', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "        </header>

        <form action=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sulu_search.website_search");
        echo "\" method=\"GET\">
            <input name=\"q\" type=\"text\" placeholder=\"Search\" />
            <input type=\"submit\" value=\"Go\" />
        </form>

        <section id=\"content\" vocab=\"http://schema.org/\" typeof=\"Content\">
            ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "        </section>

        <aside>
            ";
        // line 39
        $this->displayBlock('aside', $context, $blocks);
        // line 40
        echo "        </aside>

        <footer>
            ";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 46
        echo "        </footer>

        ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    </body>
</html>
";
        
        $__internal_96aaef45387f2d07567d2b57f6ee7e58a2c0b408a67229d5a0a53868c773152e->leave($__internal_96aaef45387f2d07567d2b57f6ee7e58a2c0b408a67229d5a0a53868c773152e_prof);

        
        $__internal_aeddfe6b31397751779af6aa3d7bfb6c78bf206b6db70f1070d0359d81ac65f7->leave($__internal_aeddfe6b31397751779af6aa3d7bfb6c78bf206b6db70f1070d0359d81ac65f7_prof);

    }

    // line 8
    public function block_meta($context, array $blocks = array())
    {
        $__internal_c90ec4a8b5f686d3ef33b7dde514f68f00025f84549299259b0d0a18acbfb978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90ec4a8b5f686d3ef33b7dde514f68f00025f84549299259b0d0a18acbfb978->enter($__internal_c90ec4a8b5f686d3ef33b7dde514f68f00025f84549299259b0d0a18acbfb978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_412e0fc301c70eb3e52d7f0a91eb9f8bed377eba4181d440d13dc1b5f4f391c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412e0fc301c70eb3e52d7f0a91eb9f8bed377eba4181d440d13dc1b5f4f391c6->enter($__internal_412e0fc301c70eb3e52d7f0a91eb9f8bed377eba4181d440d13dc1b5f4f391c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        
        $__internal_412e0fc301c70eb3e52d7f0a91eb9f8bed377eba4181d440d13dc1b5f4f391c6->leave($__internal_412e0fc301c70eb3e52d7f0a91eb9f8bed377eba4181d440d13dc1b5f4f391c6_prof);

        
        $__internal_c90ec4a8b5f686d3ef33b7dde514f68f00025f84549299259b0d0a18acbfb978->leave($__internal_c90ec4a8b5f686d3ef33b7dde514f68f00025f84549299259b0d0a18acbfb978_prof);

    }

    // line 10
    public function block_style($context, array $blocks = array())
    {
        $__internal_e4e9d53a7ad9c6356524bd4a94a316010e5f59b94dcde8b4b124e012bc5269d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e9d53a7ad9c6356524bd4a94a316010e5f59b94dcde8b4b124e012bc5269d9->enter($__internal_e4e9d53a7ad9c6356524bd4a94a316010e5f59b94dcde8b4b124e012bc5269d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_2eba646236f4ed568705dac5fe3aa3db4b03c556954d08721a49a70a26ff455d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eba646236f4ed568705dac5fe3aa3db4b03c556954d08721a49a70a26ff455d->enter($__internal_2eba646236f4ed568705dac5fe3aa3db4b03c556954d08721a49a70a26ff455d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_2eba646236f4ed568705dac5fe3aa3db4b03c556954d08721a49a70a26ff455d->leave($__internal_2eba646236f4ed568705dac5fe3aa3db4b03c556954d08721a49a70a26ff455d_prof);

        
        $__internal_e4e9d53a7ad9c6356524bd4a94a316010e5f59b94dcde8b4b124e012bc5269d9->leave($__internal_e4e9d53a7ad9c6356524bd4a94a316010e5f59b94dcde8b4b124e012bc5269d9_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_a1211b86865c64047708c5bab93225481dca27e7df33beedcce1a4a7b5805486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1211b86865c64047708c5bab93225481dca27e7df33beedcce1a4a7b5805486->enter($__internal_a1211b86865c64047708c5bab93225481dca27e7df33beedcce1a4a7b5805486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_01b36668c2167e3e7c4755de2ec1b1e0a35c91dc2973c66bf70f5085526e974d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b36668c2167e3e7c4755de2ec1b1e0a35c91dc2973c66bf70f5085526e974d->enter($__internal_01b36668c2167e3e7c4755de2ec1b1e0a35c91dc2973c66bf70f5085526e974d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "                <nav>
                    <ul>
                        <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension')->getContentRootPath(), "html", null, true);
        echo "\">Homepage</a></li>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('sulu_navigation_root_tree')->getCallable(), array("main")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                            <li>
                                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension')->getContentPath(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array())), "html", null, true);
            echo "\"
                                   title=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </ul>
                </nav>
            ";
        
        $__internal_01b36668c2167e3e7c4755de2ec1b1e0a35c91dc2973c66bf70f5085526e974d->leave($__internal_01b36668c2167e3e7c4755de2ec1b1e0a35c91dc2973c66bf70f5085526e974d_prof);

        
        $__internal_a1211b86865c64047708c5bab93225481dca27e7df33beedcce1a4a7b5805486->leave($__internal_a1211b86865c64047708c5bab93225481dca27e7df33beedcce1a4a7b5805486_prof);

    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        $__internal_c23ffd73ec5e2e0326a4c36373ea7b45e063230185e681396f0e0acad9ff5a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23ffd73ec5e2e0326a4c36373ea7b45e063230185e681396f0e0acad9ff5a34->enter($__internal_c23ffd73ec5e2e0326a4c36373ea7b45e063230185e681396f0e0acad9ff5a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f75f90f40461b500cb2e14bdb59cc937d03ded0f53c79b4cd9fddab2d77bffd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75f90f40461b500cb2e14bdb59cc937d03ded0f53c79b4cd9fddab2d77bffd8->enter($__internal_f75f90f40461b500cb2e14bdb59cc937d03ded0f53c79b4cd9fddab2d77bffd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f75f90f40461b500cb2e14bdb59cc937d03ded0f53c79b4cd9fddab2d77bffd8->leave($__internal_f75f90f40461b500cb2e14bdb59cc937d03ded0f53c79b4cd9fddab2d77bffd8_prof);

        
        $__internal_c23ffd73ec5e2e0326a4c36373ea7b45e063230185e681396f0e0acad9ff5a34->leave($__internal_c23ffd73ec5e2e0326a4c36373ea7b45e063230185e681396f0e0acad9ff5a34_prof);

    }

    // line 39
    public function block_aside($context, array $blocks = array())
    {
        $__internal_cc9bcbc9b4ce00e3690ba0b937efeef6c752768f31671600dc1ab67f9fb2e3a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc9bcbc9b4ce00e3690ba0b937efeef6c752768f31671600dc1ab67f9fb2e3a2->enter($__internal_cc9bcbc9b4ce00e3690ba0b937efeef6c752768f31671600dc1ab67f9fb2e3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_0b61b77093099be02bb954cc2f623f7c0277b7caf70bee7aa8a45aa42f6a0aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b61b77093099be02bb954cc2f623f7c0277b7caf70bee7aa8a45aa42f6a0aff->enter($__internal_0b61b77093099be02bb954cc2f623f7c0277b7caf70bee7aa8a45aa42f6a0aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        
        $__internal_0b61b77093099be02bb954cc2f623f7c0277b7caf70bee7aa8a45aa42f6a0aff->leave($__internal_0b61b77093099be02bb954cc2f623f7c0277b7caf70bee7aa8a45aa42f6a0aff_prof);

        
        $__internal_cc9bcbc9b4ce00e3690ba0b937efeef6c752768f31671600dc1ab67f9fb2e3a2->leave($__internal_cc9bcbc9b4ce00e3690ba0b937efeef6c752768f31671600dc1ab67f9fb2e3a2_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9786de3b31880b5d7cc1fffdd4642e3a48bb8d0270bc74489d9e4a176abfb66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9786de3b31880b5d7cc1fffdd4642e3a48bb8d0270bc74489d9e4a176abfb66c->enter($__internal_9786de3b31880b5d7cc1fffdd4642e3a48bb8d0270bc74489d9e4a176abfb66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_41e71e63338220dcfa080cb4407b76770f385c2c8b7ce137823646204b98893e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e71e63338220dcfa080cb4407b76770f385c2c8b7ce137823646204b98893e->enter($__internal_41e71e63338220dcfa080cb4407b76770f385c2c8b7ce137823646204b98893e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 44
        echo "                <p>Copyright ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " SULU</p>
            ";
        
        $__internal_41e71e63338220dcfa080cb4407b76770f385c2c8b7ce137823646204b98893e->leave($__internal_41e71e63338220dcfa080cb4407b76770f385c2c8b7ce137823646204b98893e_prof);

        
        $__internal_9786de3b31880b5d7cc1fffdd4642e3a48bb8d0270bc74489d9e4a176abfb66c->leave($__internal_9786de3b31880b5d7cc1fffdd4642e3a48bb8d0270bc74489d9e4a176abfb66c_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b479abe74b163e7578e200c48f68705ffcedb8e5b8a2500231711d1b4820d607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b479abe74b163e7578e200c48f68705ffcedb8e5b8a2500231711d1b4820d607->enter($__internal_b479abe74b163e7578e200c48f68705ffcedb8e5b8a2500231711d1b4820d607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2ffda4c49c139c28ecce4c6cd280854612e8fc296c29c3df2326dfdc54403421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ffda4c49c139c28ecce4c6cd280854612e8fc296c29c3df2326dfdc54403421->enter($__internal_2ffda4c49c139c28ecce4c6cd280854612e8fc296c29c3df2326dfdc54403421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2ffda4c49c139c28ecce4c6cd280854612e8fc296c29c3df2326dfdc54403421->leave($__internal_2ffda4c49c139c28ecce4c6cd280854612e8fc296c29c3df2326dfdc54403421_prof);

        
        $__internal_b479abe74b163e7578e200c48f68705ffcedb8e5b8a2500231711d1b4820d607->leave($__internal_b479abe74b163e7578e200c48f68705ffcedb8e5b8a2500231711d1b4820d607_prof);

    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 48,  230 => 44,  221 => 43,  204 => 39,  187 => 35,  175 => 24,  164 => 21,  160 => 20,  157 => 19,  153 => 18,  149 => 17,  145 => 15,  136 => 14,  119 => 10,  102 => 8,  90 => 49,  88 => 48,  84 => 46,  82 => 43,  77 => 40,  75 => 39,  70 => 36,  68 => 35,  59 => 29,  55 => 27,  53 => 14,  48 => 11,  46 => 10,  43 => 9,  41 => 8,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        {% block meta %}{% endblock %}

        {% block style %}{% endblock %}
    </head>
    <body>
        <header>
            {% block header %}
                <nav>
                    <ul>
                        <li><a href=\"{{ sulu_content_root_path() }}\">Homepage</a></li>
                        {% for item in sulu_navigation_root_tree('main') %}
                            <li>
                                <a href=\"{{ sulu_content_path(item.url) }}\"
                                   title=\"{{ item.title }}\">{{ item.title }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </nav>
            {% endblock %}
        </header>

        <form action=\"{{ path('sulu_search.website_search') }}\" method=\"GET\">
            <input name=\"q\" type=\"text\" placeholder=\"Search\" />
            <input type=\"submit\" value=\"Go\" />
        </form>

        <section id=\"content\" vocab=\"http://schema.org/\" typeof=\"Content\">
            {% block content %}{% endblock %}
        </section>

        <aside>
            {% block aside %}{% endblock %}
        </aside>

        <footer>
            {% block footer %}
                <p>Copyright {{ 'now'|date('Y') }} SULU</p>
            {% endblock %}
        </footer>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "master.html.twig", "/var/www/app/Resources/views/master.html.twig");
    }
}
