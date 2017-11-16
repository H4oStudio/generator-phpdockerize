<?php

/* SuluWebsiteBundle:Profiler:layout.html.twig */
class __TwigTemplate_dc28b16e1bbf5cd90a3860cf25b1f0b6b9eb9410b393e1e7da1c671ff6097b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "SuluWebsiteBundle:Profiler:layout.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_065894087345580597d1b66e54b8859adb609071f4c44968b54eb1a9a3aaa5f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065894087345580597d1b66e54b8859adb609071f4c44968b54eb1a9a3aaa5f1->enter($__internal_065894087345580597d1b66e54b8859adb609071f4c44968b54eb1a9a3aaa5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluWebsiteBundle:Profiler:layout.html.twig"));

        $__internal_9978271c69505ac4dcc921b68f1de082bf0413cd6b8e0be7c6903bb40ed1a63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9978271c69505ac4dcc921b68f1de082bf0413cd6b8e0be7c6903bb40ed1a63b->enter($__internal_9978271c69505ac4dcc921b68f1de082bf0413cd6b8e0be7c6903bb40ed1a63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluWebsiteBundle:Profiler:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_065894087345580597d1b66e54b8859adb609071f4c44968b54eb1a9a3aaa5f1->leave($__internal_065894087345580597d1b66e54b8859adb609071f4c44968b54eb1a9a3aaa5f1_prof);

        
        $__internal_9978271c69505ac4dcc921b68f1de082bf0413cd6b8e0be7c6903bb40ed1a63b->leave($__internal_9978271c69505ac4dcc921b68f1de082bf0413cd6b8e0be7c6903bb40ed1a63b_prof);

    }

    // line 18
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f2c0b4ca7c29c4d74b493a940f987d18b43e0aabb9b60c562750e7908c4fd7fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c0b4ca7c29c4d74b493a940f987d18b43e0aabb9b60c562750e7908c4fd7fc->enter($__internal_f2c0b4ca7c29c4d74b493a940f987d18b43e0aabb9b60c562750e7908c4fd7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d9bdfe38eb2f9d0541bf4a406951a57a9f5ec5e5b38080b655ba893d304b4ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bdfe38eb2f9d0541bf4a406951a57a9f5ec5e5b38080b655ba893d304b4ec5->enter($__internal_d9bdfe38eb2f9d0541bf4a406951a57a9f5ec5e5b38080b655ba893d304b4ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 19
        echo "    ";
        $context["self"] = $this;
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        ";
        echo $context["self"]->macro_logo();
        echo "
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "
    ";
        // line 24
        ob_start();
        // line 25
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Portal</b>
            <span>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "data", array(0 => "portal"), "method"), "name", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Webspace</b>
            <span>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 31, $this->getSourceContext()); })()), "data", array(0 => "webspace"), "method"), "name", array()), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 33
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 33, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method")) {
            // line 34
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Structure</b>
            <span>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 36, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "template", array()), "html", null, true);
            echo "</span>
        </div>
        ";
        }
        // line 39
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Localization</b>
            <span>
                ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 42, $this->getSourceContext()); })()), "data", array(0 => "localization"), "method"), "html", null, true);
        echo "
                ";
        // line 43
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 43, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method")) {
            // line 44
            echo "                (";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 44, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "shadowOn", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 44, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "shadowBaseLanguage", array())) : ("no shadow")), "html", null, true);
            echo ")
                ";
        }
        // line 46
        echo "            </span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "SuluWebsiteBundle:Profiler:layout.html.twig", 49)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 49, $this->getSourceContext()); })()))));
        
        $__internal_d9bdfe38eb2f9d0541bf4a406951a57a9f5ec5e5b38080b655ba893d304b4ec5->leave($__internal_d9bdfe38eb2f9d0541bf4a406951a57a9f5ec5e5b38080b655ba893d304b4ec5_prof);

        
        $__internal_f2c0b4ca7c29c4d74b493a940f987d18b43e0aabb9b60c562750e7908c4fd7fc->leave($__internal_f2c0b4ca7c29c4d74b493a940f987d18b43e0aabb9b60c562750e7908c4fd7fc_prof);

    }

    // line 52
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8db0e39f2012ace11c03dfa7107f5417aaaa1448c0a87f645cb82d75a18b01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8db0e39f2012ace11c03dfa7107f5417aaaa1448c0a87f645cb82d75a18b01d->enter($__internal_f8db0e39f2012ace11c03dfa7107f5417aaaa1448c0a87f645cb82d75a18b01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cfd4a4ba09becf62f9a873f22fc8f240d1a28f168bcb2aa7b1effc6fe96a16a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd4a4ba09becf62f9a873f22fc8f240d1a28f168bcb2aa7b1effc6fe96a16a6->enter($__internal_cfd4a4ba09becf62f9a873f22fc8f240d1a28f168bcb2aa7b1effc6fe96a16a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 53
        $context["self"] = $this;
        // line 54
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 55
        echo $context["self"]->macro_logo();
        echo "</span>
    <strong>Sulu</strong>
</span>
";
        
        $__internal_cfd4a4ba09becf62f9a873f22fc8f240d1a28f168bcb2aa7b1effc6fe96a16a6->leave($__internal_cfd4a4ba09becf62f9a873f22fc8f240d1a28f168bcb2aa7b1effc6fe96a16a6_prof);

        
        $__internal_f8db0e39f2012ace11c03dfa7107f5417aaaa1448c0a87f645cb82d75a18b01d->leave($__internal_f8db0e39f2012ace11c03dfa7107f5417aaaa1448c0a87f645cb82d75a18b01d_prof);

    }

    // line 60
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a97b2d49fd7dcbf3f901f2238e02015284de5f1893f7f806e7f1919aac2bac82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97b2d49fd7dcbf3f901f2238e02015284de5f1893f7f806e7f1919aac2bac82->enter($__internal_a97b2d49fd7dcbf3f901f2238e02015284de5f1893f7f806e7f1919aac2bac82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1634c8cb60137781fced00051486b4fd70a322e8d57d31e872acebe637a5a018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1634c8cb60137781fced00051486b4fd70a322e8d57d31e872acebe637a5a018->enter($__internal_1634c8cb60137781fced00051486b4fd70a322e8d57d31e872acebe637a5a018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 61
        echo "    ";
        $context["self"] = $this;
        // line 62
        echo "    <h2>Webspace</h2>
    <table>
        <tbody>
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 65, $this->getSourceContext()); })()), "data", array(0 => "webspace"), "method"));
        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
            // line 66
            echo "            <tr>
                <th>";
            // line 67
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "</th>
                <td>
                ";
            // line 69
            if (twig_test_iterable($context["value"])) {
                // line 70
                echo "                    ";
                echo twig_escape_filter($this->env, json_encode($context["value"]), "html", null, true);
                echo "
                ";
            } else {
                // line 72
                echo "                    ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                ";
            }
            // line 74
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>
    </table>
    <h2>Portal</h2>
    <table>
        <tbody>
            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 82, $this->getSourceContext()); })()), "data", array(0 => "portal"), "method"));
        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
            // line 83
            echo "            <tr>
                <th>";
            // line 84
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "</th>
                <td>
                ";
            // line 86
            if (twig_test_iterable($context["value"])) {
                // line 87
                echo "                    ";
                echo twig_escape_filter($this->env, json_encode($context["value"]), "html", null, true);
                echo "
                ";
            } else {
                // line 89
                echo "                    ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                ";
            }
            // line 91
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </tbody>
    </table>
    <h2>Structure</h2>
    <table>
        <tbody>
            ";
        // line 99
        echo $context["self"]->macro_table_row("id", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 99, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "id", array()));
        echo "
            ";
        // line 100
        echo $context["self"]->macro_table_row("path", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 100, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "path", array()));
        echo "
            ";
        // line 101
        echo $context["self"]->macro_table_row("nodeType", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 101, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "nodeType", array()));
        echo "
            ";
        // line 102
        echo $context["self"]->macro_table_row("internal", ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 102, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "internal", array())) ? ("yes") : ("no")));
        echo "
            ";
        // line 103
        echo $context["self"]->macro_table_row("nodeState", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 103, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "nodeState", array()));
        echo "
            ";
        // line 104
        echo $context["self"]->macro_table_row("published", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 104, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "published", array()), "format", array(0 => "Y-m-d H:i:s"), "method"));
        echo "
            ";
        // line 105
        echo $context["self"]->macro_table_row("nodeState", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 105, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "nodeState", array()));
        echo "
            ";
        // line 106
        echo $context["self"]->macro_table_row("navContexts", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 106, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "navContexts", array()));
        echo "
            ";
        // line 107
        echo $context["self"]->macro_table_row("enabledShadowLanguages", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 107, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "enabledShadowLanguages", array()));
        echo "
            ";
        // line 108
        echo $context["self"]->macro_table_row("concreteLanguages", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 108, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "concreteLanguages", array()));
        echo "
            ";
        // line 109
        echo $context["self"]->macro_table_row("shadowOn", ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 109, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "shadowOn", array())) ? ("yes") : ("no")));
        echo "
            ";
        // line 110
        echo $context["self"]->macro_table_row("shadowBaseLanguage", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 110, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "shadowBaseLanguage", array()));
        echo "
            ";
        // line 111
        echo $context["self"]->macro_table_row("template", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 111, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "template", array()));
        echo "
            ";
        // line 112
        echo $context["self"]->macro_table_row("has children", ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 112, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "hasSub", array())) ? ("yes") : ("no")));
        echo "
            ";
        // line 113
        echo $context["self"]->macro_table_row("creator", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 113, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "creator", array()));
        echo "
            ";
        // line 114
        echo $context["self"]->macro_table_row("changer", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 114, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "changer", array()));
        echo "
            ";
        // line 115
        echo $context["self"]->macro_table_row("created", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 115, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "created", array()), "format", array(0 => "Y-m-d H:i:s"), "method"));
        echo "
            ";
        // line 116
        echo $context["self"]->macro_table_row("changed", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 116, $this->getSourceContext()); })()), "data", array(0 => "structure"), "method"), "changed", array()), "format", array(0 => "Y-m-d H:i:s"), "method"));
        echo "
        </tbody>
    </table>
";
        
        $__internal_1634c8cb60137781fced00051486b4fd70a322e8d57d31e872acebe637a5a018->leave($__internal_1634c8cb60137781fced00051486b4fd70a322e8d57d31e872acebe637a5a018_prof);

        
        $__internal_a97b2d49fd7dcbf3f901f2238e02015284de5f1893f7f806e7f1919aac2bac82->leave($__internal_a97b2d49fd7dcbf3f901f2238e02015284de5f1893f7f806e7f1919aac2bac82_prof);

    }

    // line 3
    public function macro_logo(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0e832b061a117d7b48c80aeffd21bd0b551b6df7e4862d1de9807c009f7f7d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0e832b061a117d7b48c80aeffd21bd0b551b6df7e4862d1de9807c009f7f7d05->enter($__internal_0e832b061a117d7b48c80aeffd21bd0b551b6df7e4862d1de9807c009f7f7d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "logo"));

            $__internal_e004a39a6342c2b8ce24f42fce2fffe3c07a09ee3368f8e378f3a14fbe3213b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e004a39a6342c2b8ce24f42fce2fffe3c07a09ee3368f8e378f3a14fbe3213b4->enter($__internal_e004a39a6342c2b8ce24f42fce2fffe3c07a09ee3368f8e378f3a14fbe3213b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "logo"));

            // line 4
            echo "    <?xml version=\"1.0\" encoding=\"UTF-8\"?>
    <svg width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
        <title>Artboard</title>
        <desc>Created with Sketch.</desc>
        <defs></defs>
        <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
            <g id=\"Artboard\" fill=\"#FFFFFF\">
                <path d=\"M23.8841274,12.750735 C24.1025274,12.394735 24.0041274,11.902735 23.6665274,11.657135 L17.9913274,7.53393504 C17.6537274,7.28833504 17.3417274,6.74753504 17.2977274,6.33233504 L16.9009274,2.55153504 C16.8577274,2.13633504 16.4977274,1.90513504 16.1017274,2.03713504 L0.51612745,7.24913504 C0.12012745,7.38193504 -0.0942725502,7.81313504 0.0401274498,8.20913504 L2.99132745,16.899535 C3.12572745,17.294735 3.56972745,17.690735 3.97772745,17.778735 L18.0929274,20.830735 C18.5009274,20.918735 19.0137274,20.699535 19.2313274,20.343535 L23.8841274,12.750735 L23.8841274,12.750735 Z M11.0425274,8.89153504 C10.7961274,9.22913504 10.2609274,9.43153504 9.85292745,9.34193504 L3.22572745,7.88433504 C2.81772745,7.79473504 2.80812745,7.61313504 3.20412745,7.48033504 L14.2153274,3.79793504 C14.6113274,3.66513504 14.7337274,3.83313504 14.4881274,4.17073504 L11.0425274,8.89153504 L11.0425274,8.89153504 Z M15.5241274,4.56913504 C15.7705274,4.23153504 16.0073274,4.29553504 16.0513274,4.71073504 L17.4057274,17.626735 C17.4489274,18.041935 17.2841274,18.105135 17.0393274,17.766735 L11.9305274,10.717935 C11.6857274,10.379535 11.6865274,9.82753504 11.9329274,9.48993504 L15.5241274,4.56913504 L15.5241274,4.56913504 Z M1.53372745,9.27393504 C1.39932745,8.87873504 1.62332745,8.62833504 2.03132745,8.71793504 L9.76652745,10.419535 C10.1745274,10.509135 10.7089274,10.859535 10.9537274,11.197135 L16.5249274,18.882735 C16.7697274,19.221135 16.6369274,19.425135 16.2281274,19.336335 L4.79692745,16.860335 C4.38892745,16.771535 3.94492745,16.376335 3.81052745,15.980335 L1.53372745,9.27393504 L1.53372745,9.27393504 Z M17.6065274,9.27713504 C17.5633274,8.86193504 17.8041274,8.72273504 18.1417274,8.96833504 L22.2353274,11.942735 C22.5729274,12.188335 22.6713274,12.680335 22.4529274,13.036335 L19.0481274,18.601135 C18.8305274,18.957135 18.6161274,18.909135 18.5729274,18.493935 L17.6065274,9.27713504 L17.6065274,9.27713504 Z\" id=\"Shape\"></path>
            </g>
        </g>
    </svg>
";
            
            $__internal_e004a39a6342c2b8ce24f42fce2fffe3c07a09ee3368f8e378f3a14fbe3213b4->leave($__internal_e004a39a6342c2b8ce24f42fce2fffe3c07a09ee3368f8e378f3a14fbe3213b4_prof);

            
            $__internal_0e832b061a117d7b48c80aeffd21bd0b551b6df7e4862d1de9807c009f7f7d05->leave($__internal_0e832b061a117d7b48c80aeffd21bd0b551b6df7e4862d1de9807c009f7f7d05_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 121
    public function macro_table_row($__field__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ce6ea2c5a2ebef75cb6b2c40bdf5c841e2c0f9c23a2daf0298e8a88c9897f443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ce6ea2c5a2ebef75cb6b2c40bdf5c841e2c0f9c23a2daf0298e8a88c9897f443->enter($__internal_ce6ea2c5a2ebef75cb6b2c40bdf5c841e2c0f9c23a2daf0298e8a88c9897f443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "table_row"));

            $__internal_ac36bed141f170a6bde99195cf6defdfd2d7a6c235a47b133cc64104b34f8fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ac36bed141f170a6bde99195cf6defdfd2d7a6c235a47b133cc64104b34f8fc5->enter($__internal_ac36bed141f170a6bde99195cf6defdfd2d7a6c235a47b133cc64104b34f8fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "table_row"));

            // line 122
            echo "    <tr>
        <th>";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new Twig_Error_Runtime('Variable "field" does not exist.', 123, $this->getSourceContext()); })()), "html", null, true);
            echo "</th>
        <td>
        ";
            // line 125
            if (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 125, $this->getSourceContext()); })()))) {
                // line 126
                echo "            ";
                echo twig_escape_filter($this->env, json_encode((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 126, $this->getSourceContext()); })())), "html", null, true);
                echo "
        ";
            } else {
                // line 128
                echo "            ";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 128, $this->getSourceContext()); })()), "html", null, true);
                echo "
        ";
            }
            // line 130
            echo "    </tr>
";
            
            $__internal_ac36bed141f170a6bde99195cf6defdfd2d7a6c235a47b133cc64104b34f8fc5->leave($__internal_ac36bed141f170a6bde99195cf6defdfd2d7a6c235a47b133cc64104b34f8fc5_prof);

            
            $__internal_ce6ea2c5a2ebef75cb6b2c40bdf5c841e2c0f9c23a2daf0298e8a88c9897f443->leave($__internal_ce6ea2c5a2ebef75cb6b2c40bdf5c841e2c0f9c23a2daf0298e8a88c9897f443_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SuluWebsiteBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 130,  417 => 128,  411 => 126,  409 => 125,  404 => 123,  401 => 122,  382 => 121,  355 => 4,  338 => 3,  324 => 116,  320 => 115,  316 => 114,  312 => 113,  308 => 112,  304 => 111,  300 => 110,  296 => 109,  292 => 108,  288 => 107,  284 => 106,  280 => 105,  276 => 104,  272 => 103,  268 => 102,  264 => 101,  260 => 100,  256 => 99,  249 => 94,  241 => 91,  235 => 89,  229 => 87,  227 => 86,  222 => 84,  219 => 83,  215 => 82,  208 => 77,  200 => 74,  194 => 72,  188 => 70,  186 => 69,  181 => 67,  178 => 66,  174 => 65,  169 => 62,  166 => 61,  157 => 60,  143 => 55,  140 => 54,  138 => 53,  129 => 52,  118 => 49,  113 => 46,  107 => 44,  105 => 43,  101 => 42,  96 => 39,  90 => 36,  86 => 34,  84 => 33,  79 => 31,  72 => 27,  68 => 25,  66 => 24,  63 => 23,  57 => 21,  54 => 20,  51 => 19,  42 => 18,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% macro logo() %}
    <?xml version=\"1.0\" encoding=\"UTF-8\"?>
    <svg width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
        <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
        <title>Artboard</title>
        <desc>Created with Sketch.</desc>
        <defs></defs>
        <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
            <g id=\"Artboard\" fill=\"#FFFFFF\">
                <path d=\"M23.8841274,12.750735 C24.1025274,12.394735 24.0041274,11.902735 23.6665274,11.657135 L17.9913274,7.53393504 C17.6537274,7.28833504 17.3417274,6.74753504 17.2977274,6.33233504 L16.9009274,2.55153504 C16.8577274,2.13633504 16.4977274,1.90513504 16.1017274,2.03713504 L0.51612745,7.24913504 C0.12012745,7.38193504 -0.0942725502,7.81313504 0.0401274498,8.20913504 L2.99132745,16.899535 C3.12572745,17.294735 3.56972745,17.690735 3.97772745,17.778735 L18.0929274,20.830735 C18.5009274,20.918735 19.0137274,20.699535 19.2313274,20.343535 L23.8841274,12.750735 L23.8841274,12.750735 Z M11.0425274,8.89153504 C10.7961274,9.22913504 10.2609274,9.43153504 9.85292745,9.34193504 L3.22572745,7.88433504 C2.81772745,7.79473504 2.80812745,7.61313504 3.20412745,7.48033504 L14.2153274,3.79793504 C14.6113274,3.66513504 14.7337274,3.83313504 14.4881274,4.17073504 L11.0425274,8.89153504 L11.0425274,8.89153504 Z M15.5241274,4.56913504 C15.7705274,4.23153504 16.0073274,4.29553504 16.0513274,4.71073504 L17.4057274,17.626735 C17.4489274,18.041935 17.2841274,18.105135 17.0393274,17.766735 L11.9305274,10.717935 C11.6857274,10.379535 11.6865274,9.82753504 11.9329274,9.48993504 L15.5241274,4.56913504 L15.5241274,4.56913504 Z M1.53372745,9.27393504 C1.39932745,8.87873504 1.62332745,8.62833504 2.03132745,8.71793504 L9.76652745,10.419535 C10.1745274,10.509135 10.7089274,10.859535 10.9537274,11.197135 L16.5249274,18.882735 C16.7697274,19.221135 16.6369274,19.425135 16.2281274,19.336335 L4.79692745,16.860335 C4.38892745,16.771535 3.94492745,16.376335 3.81052745,15.980335 L1.53372745,9.27393504 L1.53372745,9.27393504 Z M17.6065274,9.27713504 C17.5633274,8.86193504 17.8041274,8.72273504 18.1417274,8.96833504 L22.2353274,11.942735 C22.5729274,12.188335 22.6713274,12.680335 22.4529274,13.036335 L19.0481274,18.601135 C18.8305274,18.957135 18.6161274,18.909135 18.5729274,18.493935 L17.6065274,9.27713504 L17.6065274,9.27713504 Z\" id=\"Shape\"></path>
            </g>
        </g>
    </svg>
{% endmacro %}

{% block toolbar %}
    {% import _self as self %}
    {% set icon %}
        {{ self.logo }}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Portal</b>
            <span>{{ collector.data('portal').name }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Webspace</b>
            <span>{{ collector.data('webspace').name }}</span>
        </div>
        {% if collector.data('structure') %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Structure</b>
            <span>{{ collector.data('structure').template }}</span>
        </div>
        {% endif %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Localization</b>
            <span>
                {{ collector.data('localization') }}
                {% if collector.data('structure') %}
                ({{ collector.data('structure').shadowOn ? collector.data('structure').shadowBaseLanguage : 'no shadow' }})
                {% endif %}
            </span>
        </div>
    {% endset %}
    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
{% import _self as self %}
<span class=\"label\">
    <span class=\"icon\">{{ self.logo }}</span>
    <strong>Sulu</strong>
</span>
{% endblock %}

{% block panel %}
    {% import _self as self %}
    <h2>Webspace</h2>
    <table>
        <tbody>
            {% for field, value in collector.data('webspace') %}
            <tr>
                <th>{{ field }}</th>
                <td>
                {% if value is iterable %}
                    {{ value|json_encode }}
                {% else %}
                    {{ value }}
                {% endif %}
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    <h2>Portal</h2>
    <table>
        <tbody>
            {% for field, value in collector.data('portal') %}
            <tr>
                <th>{{ field }}</th>
                <td>
                {% if value is iterable %}
                    {{ value|json_encode }}
                {% else %}
                    {{ value }}
                {% endif %}
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    <h2>Structure</h2>
    <table>
        <tbody>
            {{ self.table_row('id', collector.data('structure').id) }}
            {{ self.table_row('path', collector.data('structure').path) }}
            {{ self.table_row('nodeType', collector.data('structure').nodeType) }}
            {{ self.table_row('internal', collector.data('structure').internal ? 'yes' : 'no') }}
            {{ self.table_row('nodeState', collector.data('structure').nodeState) }}
            {{ self.table_row('published', collector.data('structure').published.format('Y-m-d H:i:s')) }}
            {{ self.table_row('nodeState', collector.data('structure').nodeState) }}
            {{ self.table_row('navContexts', collector.data('structure').navContexts) }}
            {{ self.table_row('enabledShadowLanguages', collector.data('structure').enabledShadowLanguages) }}
            {{ self.table_row('concreteLanguages', collector.data('structure').concreteLanguages) }}
            {{ self.table_row('shadowOn', collector.data('structure').shadowOn ? 'yes' : 'no') }}
            {{ self.table_row('shadowBaseLanguage', collector.data('structure').shadowBaseLanguage) }}
            {{ self.table_row('template', collector.data('structure').template) }}
            {{ self.table_row('has children', collector.data('structure').hasSub ? 'yes' : 'no') }}
            {{ self.table_row('creator', collector.data('structure').creator) }}
            {{ self.table_row('changer', collector.data('structure').changer) }}
            {{ self.table_row('created', collector.data('structure').created.format('Y-m-d H:i:s')) }}
            {{ self.table_row('changed', collector.data('structure').changed.format('Y-m-d H:i:s')) }}
        </tbody>
    </table>
{% endblock %}

{% macro table_row(field, value) %}
    <tr>
        <th>{{ field }}</th>
        <td>
        {% if value is iterable %}
            {{ value | json_encode }}
        {% else %}
            {{ value }}
        {% endif %}
    </tr>
{% endmacro %}
", "SuluWebsiteBundle:Profiler:layout.html.twig", "/var/www/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Resources/views/Profiler/layout.html.twig");
    }
}
