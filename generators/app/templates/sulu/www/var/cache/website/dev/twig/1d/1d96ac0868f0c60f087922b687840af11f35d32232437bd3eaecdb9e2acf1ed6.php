<?php

/* SuluWebsiteBundle:Extension:seo.html.twig */
class __TwigTemplate_1d68b04b825a2248293a8a7ecf856bf29260c9b162f1a914e842c4b66583041a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'robots' => array($this, 'block_robots'),
            'urls' => array($this, 'block_urls'),
            'canonical' => array($this, 'block_canonical'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9714eeb7b5415d86b754868756f42694e222f8244250e6cb8aa3a730476db47a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9714eeb7b5415d86b754868756f42694e222f8244250e6cb8aa3a730476db47a->enter($__internal_9714eeb7b5415d86b754868756f42694e222f8244250e6cb8aa3a730476db47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluWebsiteBundle:Extension:seo.html.twig"));

        $__internal_ace24bea963413ce8eba349bfc77aca54cc65c107ceca02b7a760e4c0864692a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace24bea963413ce8eba349bfc77aca54cc65c107ceca02b7a760e4c0864692a->enter($__internal_ace24bea963413ce8eba349bfc77aca54cc65c107ceca02b7a760e4c0864692a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluWebsiteBundle:Extension:seo.html.twig"));

        // line 10
        $context["seo"] = twig_array_merge(((array_key_exists("seo", $context)) ? (_twig_default_filter((isset($context["seo"]) || array_key_exists("seo", $context) ? $context["seo"] : (function () { throw new Twig_Error_Runtime('Variable "seo" does not exist.', 10, $this->getSourceContext()); })()), array())) : (array())), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "attributes", array(), "any", false, true), "get", array(0 => "_seo", 1 => array()), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "attributes", array(), "any", false, true), "get", array(0 => "_seo", 1 => array()), "method"), array())) : (array())));
        // line 13
        $context["seoTitle"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "title", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["content"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["content"] ?? null), "title", array()))) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["content"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["content"] ?? null), "title", array()))) : (""))));
        // line 14
        $context["seoDescription"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "description", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "description", array()))) : (""));
        // line 15
        $context["seoKeywords"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "keywords", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "keywords", array()))) : (""));
        // line 16
        echo "
";
        // line 17
        $context["seoRobots"] = "";
        // line 18
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "noIndex", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "noIndex", array()), false)) : (false))) {
            // line 19
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new Twig_Error_Runtime('Variable "seoRobots" does not exist.', 19, $this->getSourceContext()); })()) . "noIndex");
        } else {
            // line 21
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new Twig_Error_Runtime('Variable "seoRobots" does not exist.', 21, $this->getSourceContext()); })()) . "index");
        }
        // line 23
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "noFollow", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "noFollow", array()), false)) : (false))) {
            // line 24
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new Twig_Error_Runtime('Variable "seoRobots" does not exist.', 24, $this->getSourceContext()); })()) . ",noFollow");
        } else {
            // line 26
            $context["seoRobots"] = ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new Twig_Error_Runtime('Variable "seoRobots" does not exist.', 26, $this->getSourceContext()); })()) . ",follow");
        }
        // line 29
        $context["seoCanonical"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "canonicalUrl", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["seo"] ?? null), "canonicalUrl", array()))) : (""));
        // line 31
        if ((( !(isset($context["seoCanonical"]) || array_key_exists("seoCanonical", $context) ? $context["seoCanonical"] : (function () { throw new Twig_Error_Runtime('Variable "seoCanonical" does not exist.', 31, $this->getSourceContext()); })()) && (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new Twig_Error_Runtime('Variable "shadowBaseLocale" does not exist.', 31, $this->getSourceContext()); })())) && ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["urls"] ?? null), (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new Twig_Error_Runtime('Variable "shadowBaseLocale" does not exist.', 31, $this->getSourceContext()); })()), array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["urls"] ?? null), (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new Twig_Error_Runtime('Variable "shadowBaseLocale" does not exist.', 31, $this->getSourceContext()); })()), array(), "array"))) : ("")))) {
            // line 32
            echo "    ";
            $context["seoCanonical"] = $this->env->getExtension('Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension')->getContentPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new Twig_Error_Runtime('Variable "urls" does not exist.', 32, $this->getSourceContext()); })()), (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new Twig_Error_Runtime('Variable "shadowBaseLocale" does not exist.', 32, $this->getSourceContext()); })()), array(), "array"), null, (isset($context["shadowBaseLocale"]) || array_key_exists("shadowBaseLocale", $context) ? $context["shadowBaseLocale"] : (function () { throw new Twig_Error_Runtime('Variable "shadowBaseLocale" does not exist.', 32, $this->getSourceContext()); })()));
        }
        // line 37
        $this->displayBlock('title', $context, $blocks);
        // line 43
        $this->displayBlock('description', $context, $blocks);
        // line 49
        $this->displayBlock('keywords', $context, $blocks);
        // line 55
        $this->displayBlock('robots', $context, $blocks);
        // line 61
        $this->displayBlock('urls', $context, $blocks);
        // line 73
        $this->displayBlock('canonical', $context, $blocks);
        
        $__internal_9714eeb7b5415d86b754868756f42694e222f8244250e6cb8aa3a730476db47a->leave($__internal_9714eeb7b5415d86b754868756f42694e222f8244250e6cb8aa3a730476db47a_prof);

        
        $__internal_ace24bea963413ce8eba349bfc77aca54cc65c107ceca02b7a760e4c0864692a->leave($__internal_ace24bea963413ce8eba349bfc77aca54cc65c107ceca02b7a760e4c0864692a_prof);

    }

    // line 37
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7aa6abb5c1b0860fe4b4f9f3bd070c539769274496844fd8d24a923355ff3d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7aa6abb5c1b0860fe4b4f9f3bd070c539769274496844fd8d24a923355ff3d3->enter($__internal_d7aa6abb5c1b0860fe4b4f9f3bd070c539769274496844fd8d24a923355ff3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_799b03a037bec7327819d1c1f29f8f38314d66b7d16c87257384509807cfd8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799b03a037bec7327819d1c1f29f8f38314d66b7d16c87257384509807cfd8e8->enter($__internal_799b03a037bec7327819d1c1f29f8f38314d66b7d16c87257384509807cfd8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 38
        if ((isset($context["seoTitle"]) || array_key_exists("seoTitle", $context) ? $context["seoTitle"] : (function () { throw new Twig_Error_Runtime('Variable "seoTitle" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            echo "<title>";
            echo twig_escape_filter($this->env, (isset($context["seoTitle"]) || array_key_exists("seoTitle", $context) ? $context["seoTitle"] : (function () { throw new Twig_Error_Runtime('Variable "seoTitle" does not exist.', 39, $this->getSourceContext()); })()), "html", null, true);
            echo "</title>";
        }
        
        $__internal_799b03a037bec7327819d1c1f29f8f38314d66b7d16c87257384509807cfd8e8->leave($__internal_799b03a037bec7327819d1c1f29f8f38314d66b7d16c87257384509807cfd8e8_prof);

        
        $__internal_d7aa6abb5c1b0860fe4b4f9f3bd070c539769274496844fd8d24a923355ff3d3->leave($__internal_d7aa6abb5c1b0860fe4b4f9f3bd070c539769274496844fd8d24a923355ff3d3_prof);

    }

    // line 43
    public function block_description($context, array $blocks = array())
    {
        $__internal_3d884d259a6b6cf88882a17c7de405d556b74d5ce0baebafd9531f8efd2d8cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d884d259a6b6cf88882a17c7de405d556b74d5ce0baebafd9531f8efd2d8cb0->enter($__internal_3d884d259a6b6cf88882a17c7de405d556b74d5ce0baebafd9531f8efd2d8cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_039beb765b8a8c1dfb070b9867f61da1eb6bec2f27cb40689e9a3b2d790c4b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039beb765b8a8c1dfb070b9867f61da1eb6bec2f27cb40689e9a3b2d790c4b86->enter($__internal_039beb765b8a8c1dfb070b9867f61da1eb6bec2f27cb40689e9a3b2d790c4b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 44
        if ((isset($context["seoDescription"]) || array_key_exists("seoDescription", $context) ? $context["seoDescription"] : (function () { throw new Twig_Error_Runtime('Variable "seoDescription" does not exist.', 44, $this->getSourceContext()); })())) {
            // line 45
            echo "<meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["seoDescription"]) || array_key_exists("seoDescription", $context) ? $context["seoDescription"] : (function () { throw new Twig_Error_Runtime('Variable "seoDescription" does not exist.', 45, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_039beb765b8a8c1dfb070b9867f61da1eb6bec2f27cb40689e9a3b2d790c4b86->leave($__internal_039beb765b8a8c1dfb070b9867f61da1eb6bec2f27cb40689e9a3b2d790c4b86_prof);

        
        $__internal_3d884d259a6b6cf88882a17c7de405d556b74d5ce0baebafd9531f8efd2d8cb0->leave($__internal_3d884d259a6b6cf88882a17c7de405d556b74d5ce0baebafd9531f8efd2d8cb0_prof);

    }

    // line 49
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_86d20dad779747e39fcabe56d680ba1127d0a9378e84d7b9ee3af0d92df6d2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d20dad779747e39fcabe56d680ba1127d0a9378e84d7b9ee3af0d92df6d2f1->enter($__internal_86d20dad779747e39fcabe56d680ba1127d0a9378e84d7b9ee3af0d92df6d2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_3aded56bd6a7e1ba426238bc4cfa72bd2bd1a873c3b899b21409547fab1b973b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aded56bd6a7e1ba426238bc4cfa72bd2bd1a873c3b899b21409547fab1b973b->enter($__internal_3aded56bd6a7e1ba426238bc4cfa72bd2bd1a873c3b899b21409547fab1b973b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        // line 50
        if ((isset($context["seoKeywords"]) || array_key_exists("seoKeywords", $context) ? $context["seoKeywords"] : (function () { throw new Twig_Error_Runtime('Variable "seoKeywords" does not exist.', 50, $this->getSourceContext()); })())) {
            // line 51
            echo "<meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["seoKeywords"]) || array_key_exists("seoKeywords", $context) ? $context["seoKeywords"] : (function () { throw new Twig_Error_Runtime('Variable "seoKeywords" does not exist.', 51, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_3aded56bd6a7e1ba426238bc4cfa72bd2bd1a873c3b899b21409547fab1b973b->leave($__internal_3aded56bd6a7e1ba426238bc4cfa72bd2bd1a873c3b899b21409547fab1b973b_prof);

        
        $__internal_86d20dad779747e39fcabe56d680ba1127d0a9378e84d7b9ee3af0d92df6d2f1->leave($__internal_86d20dad779747e39fcabe56d680ba1127d0a9378e84d7b9ee3af0d92df6d2f1_prof);

    }

    // line 55
    public function block_robots($context, array $blocks = array())
    {
        $__internal_0dc0a092e76be3120b0bc1cedeaf58c55515676dd057bb248a5f3c15c20d2fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc0a092e76be3120b0bc1cedeaf58c55515676dd057bb248a5f3c15c20d2fff->enter($__internal_0dc0a092e76be3120b0bc1cedeaf58c55515676dd057bb248a5f3c15c20d2fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "robots"));

        $__internal_f3b0969ee695ca7057ddb51e2f59e733c09b08bf6622fa538b2c276f104582b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b0969ee695ca7057ddb51e2f59e733c09b08bf6622fa538b2c276f104582b6->enter($__internal_f3b0969ee695ca7057ddb51e2f59e733c09b08bf6622fa538b2c276f104582b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "robots"));

        // line 56
        if ((isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new Twig_Error_Runtime('Variable "seoRobots" does not exist.', 56, $this->getSourceContext()); })())) {
            // line 57
            echo "<meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["seoRobots"]) || array_key_exists("seoRobots", $context) ? $context["seoRobots"] : (function () { throw new Twig_Error_Runtime('Variable "seoRobots" does not exist.', 57, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_f3b0969ee695ca7057ddb51e2f59e733c09b08bf6622fa538b2c276f104582b6->leave($__internal_f3b0969ee695ca7057ddb51e2f59e733c09b08bf6622fa538b2c276f104582b6_prof);

        
        $__internal_0dc0a092e76be3120b0bc1cedeaf58c55515676dd057bb248a5f3c15c20d2fff->leave($__internal_0dc0a092e76be3120b0bc1cedeaf58c55515676dd057bb248a5f3c15c20d2fff_prof);

    }

    // line 61
    public function block_urls($context, array $blocks = array())
    {
        $__internal_fe1cb0481f57f6c1658f5fbcfcceefa8beac9d9ff46b41680616b1b8c3072947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1cb0481f57f6c1658f5fbcfcceefa8beac9d9ff46b41680616b1b8c3072947->enter($__internal_fe1cb0481f57f6c1658f5fbcfcceefa8beac9d9ff46b41680616b1b8c3072947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urls"));

        $__internal_25b1ad5a89d0f9280197eece574f76bde24e36da29e2c235c749c640943e4d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b1ad5a89d0f9280197eece574f76bde24e36da29e2c235c749c640943e4d76->enter($__internal_25b1ad5a89d0f9280197eece574f76bde24e36da29e2c235c749c640943e4d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urls"));

        // line 63
        if ((twig_length_filter($this->env, (isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new Twig_Error_Runtime('Variable "urls" does not exist.', 63, $this->getSourceContext()); })())) > 1)) {
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new Twig_Error_Runtime('Variable "urls" does not exist.', 64, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["locale"] => $context["url"]) {
                // line 65
                if (((isset($context["defaultLocale"]) || array_key_exists("defaultLocale", $context) ? $context["defaultLocale"] : (function () { throw new Twig_Error_Runtime('Variable "defaultLocale" does not exist.', 65, $this->getSourceContext()); })()) == $context["locale"])) {
                    // line 66
                    echo "<link rel=\"alternate\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension')->getContentPath($context["url"], null, $context["locale"]), "html", null, true);
                    echo "\" hreflang=\"x-default\"/>";
                }
                // line 68
                echo "<link rel=\"alternate\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sulu\Bundle\WebsiteBundle\Twig\Content\ContentPathTwigExtension')->getContentPath($context["url"], null, $context["locale"]), "html", null, true);
                echo "\" hreflang=\"";
                echo twig_escape_filter($this->env, twig_replace_filter($context["locale"], array("_" => "-")), "html", null, true);
                echo "\"/>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_25b1ad5a89d0f9280197eece574f76bde24e36da29e2c235c749c640943e4d76->leave($__internal_25b1ad5a89d0f9280197eece574f76bde24e36da29e2c235c749c640943e4d76_prof);

        
        $__internal_fe1cb0481f57f6c1658f5fbcfcceefa8beac9d9ff46b41680616b1b8c3072947->leave($__internal_fe1cb0481f57f6c1658f5fbcfcceefa8beac9d9ff46b41680616b1b8c3072947_prof);

    }

    // line 73
    public function block_canonical($context, array $blocks = array())
    {
        $__internal_04da702636d93a1604bf779533c84306c76798dbc7419e0bc71a223cbc458908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04da702636d93a1604bf779533c84306c76798dbc7419e0bc71a223cbc458908->enter($__internal_04da702636d93a1604bf779533c84306c76798dbc7419e0bc71a223cbc458908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "canonical"));

        $__internal_ea812d0f168319781d351e284e831ea3f10b6a727d19ebd89c2102d448894d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea812d0f168319781d351e284e831ea3f10b6a727d19ebd89c2102d448894d5c->enter($__internal_ea812d0f168319781d351e284e831ea3f10b6a727d19ebd89c2102d448894d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "canonical"));

        // line 75
        echo "<link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("seoCanonical", $context)) ? (_twig_default_filter((isset($context["seoCanonical"]) || array_key_exists("seoCanonical", $context) ? $context["seoCanonical"] : (function () { throw new Twig_Error_Runtime('Variable "seoCanonical" does not exist.', 75, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 75, $this->getSourceContext()); })()), "request", array()), "uri", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 75, $this->getSourceContext()); })()), "request", array()), "uri", array()))), "html", null, true);
        echo "\"/>";
        
        $__internal_ea812d0f168319781d351e284e831ea3f10b6a727d19ebd89c2102d448894d5c->leave($__internal_ea812d0f168319781d351e284e831ea3f10b6a727d19ebd89c2102d448894d5c_prof);

        
        $__internal_04da702636d93a1604bf779533c84306c76798dbc7419e0bc71a223cbc458908->leave($__internal_04da702636d93a1604bf779533c84306c76798dbc7419e0bc71a223cbc458908_prof);

    }

    public function getTemplateName()
    {
        return "SuluWebsiteBundle:Extension:seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 75,  225 => 73,  206 => 68,  201 => 66,  199 => 65,  195 => 64,  193 => 63,  184 => 61,  171 => 57,  169 => 56,  160 => 55,  147 => 51,  145 => 50,  136 => 49,  123 => 45,  121 => 44,  112 => 43,  99 => 39,  97 => 38,  88 => 37,  78 => 73,  76 => 61,  74 => 55,  72 => 49,  70 => 43,  68 => 37,  64 => 32,  62 => 31,  60 => 29,  57 => 26,  54 => 24,  52 => 23,  49 => 21,  46 => 19,  44 => 18,  42 => 17,  39 => 16,  37 => 15,  35 => 14,  33 => 13,  31 => 10,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#-
 # content array
 # defaultLocale string
 # seo array
 # shadowBaseLocale string
 # urls array
-#}

{#- merge seo data with _seo from attributes for custom urls -#}
{% set seo = seo|default([])|merge(app.request.attributes.get('_seo', [])|default([])) %}

{#- fallback to content title when no seo title is set -#}
{% set seoTitle = seo.title|default(content.title|default()) %}
{% set seoDescription = seo.description|default() %}
{% set seoKeywords = seo.keywords|default() %}

{% set seoRobots = '' %}
{%- if seo.noIndex|default(false) -%}
    {% set seoRobots = seoRobots ~ 'noIndex' -%}
{%- else -%}
    {% set seoRobots = seoRobots ~ 'index' -%}
{%- endif -%}
{%- if seo.noFollow|default(false) -%}
    {% set seoRobots = seoRobots ~ ',noFollow' -%}
{%- else -%}
    {% set seoRobots = seoRobots ~ ',follow' -%}
{%- endif -%}

{% set seoCanonical = seo.canonicalUrl|default() %}

{%- if not seoCanonical and shadowBaseLocale and urls[shadowBaseLocale]|default() %}
    {% set seoCanonical = sulu_content_path(urls[shadowBaseLocale], null, shadowBaseLocale) %}
{%- endif -%}

{#- render blocks -#}

{%- block title -%}
    {%- if seoTitle -%}
        <title>{{ seoTitle }}</title>
    {%- endif -%}
{%- endblock -%}

{%- block description -%}
    {%- if seoDescription -%}
        <meta name=\"description\" content=\"{{ seoDescription }}\"/>
    {%- endif -%}
{%- endblock -%}

{%- block keywords -%}
    {%- if seoKeywords -%}
        <meta name=\"keywords\" content=\"{{ seoKeywords }}\"/>
    {%- endif -%}
{%- endblock -%}

{%- block robots -%}
    {%- if seoRobots -%}
        <meta name=\"robots\" content=\"{{ seoRobots }}\"/>
    {%- endif -%}
{%- endblock -%}

{%- block urls -%}
    {#- when only one language do not show alternative -#}
    {%- if urls|length > 1 -%}
        {%- for locale, url in urls -%}
            {%- if defaultLocale == locale -%}
                <link rel=\"alternate\" href=\"{{ sulu_content_path(url, null, locale) }}\" hreflang=\"x-default\"/>
            {%- endif -%}
            <link rel=\"alternate\" href=\"{{ sulu_content_path(url, null, locale) }}\" hreflang=\"{{ locale|replace({'_': '-'}) }}\"/>
        {%- endfor -%}
    {%- endif -%}
{%- endblock -%}

{%- block canonical -%}
    {#- Set canonical to itself if a bot clone the page -#}
    <link rel=\"canonical\" href=\"{{ seoCanonical|default(app.request.uri) }}\"/>
{%- endblock -%}
", "SuluWebsiteBundle:Extension:seo.html.twig", "/var/www/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/views/Extension/seo.html.twig");
    }
}
