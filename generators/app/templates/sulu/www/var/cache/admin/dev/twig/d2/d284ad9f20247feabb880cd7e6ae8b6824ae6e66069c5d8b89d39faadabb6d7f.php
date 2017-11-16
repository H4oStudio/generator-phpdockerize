<?php

/* DoctrinePHPCRBundle:Collector:phpcr.html.twig */
class __TwigTemplate_124e4336eb0701d4193dc975198191291fb971690932f3ca23741b1d53ea6725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "DoctrinePHPCRBundle:Collector:phpcr.html.twig", 1);
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
        $__internal_e3647d8f087e90ea51b68402ce3ce4db94357a95c3d9f4fba63a4a13a4707150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3647d8f087e90ea51b68402ce3ce4db94357a95c3d9f4fba63a4a13a4707150->enter($__internal_e3647d8f087e90ea51b68402ce3ce4db94357a95c3d9f4fba63a4a13a4707150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrinePHPCRBundle:Collector:phpcr.html.twig"));

        $__internal_f31d85f53529fe56e76e28b56dea0b5c0c9ebcbc58e7d7c2c0920817400faeee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31d85f53529fe56e76e28b56dea0b5c0c9ebcbc58e7d7c2c0920817400faeee->enter($__internal_f31d85f53529fe56e76e28b56dea0b5c0c9ebcbc58e7d7c2c0920817400faeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrinePHPCRBundle:Collector:phpcr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3647d8f087e90ea51b68402ce3ce4db94357a95c3d9f4fba63a4a13a4707150->leave($__internal_e3647d8f087e90ea51b68402ce3ce4db94357a95c3d9f4fba63a4a13a4707150_prof);

        
        $__internal_f31d85f53529fe56e76e28b56dea0b5c0c9ebcbc58e7d7c2c0920817400faeee->leave($__internal_f31d85f53529fe56e76e28b56dea0b5c0c9ebcbc58e7d7c2c0920817400faeee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40d5988eda119374ebc1749cb8e2ac654798f7d8801840e8d6c2ad55c9e46f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d5988eda119374ebc1749cb8e2ac654798f7d8801840e8d6c2ad55c9e46f03->enter($__internal_40d5988eda119374ebc1749cb8e2ac654798f7d8801840e8d6c2ad55c9e46f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f9677733d520b04b2c86da0f474761b3eebfd49d3461b36c719da879139d8ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9677733d520b04b2c86da0f474761b3eebfd49d3461b36c719da879139d8ce2->enter($__internal_f9677733d520b04b2c86da0f474761b3eebfd49d3461b36c719da879139d8ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "callcount", array()) > 0)) {
            // line 5
            echo "        ";
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 5, $this->getSourceContext()); })()), 1)) : (1));
            // line 6
            echo "
        ";
            // line 7
            ob_start();
            // line 8
            echo "            ";
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 8, $this->getSourceContext()); })()) == 1)) {
                // line 9
                echo "                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAN5JREFUeNpiZAACe3v7+UAqgYF0kHjw4MEFyAJMUFqBgTyAoY+JgcqABUo3AvEHIBYgQe8DIF6ALsiISzUwXN9DLQBZpAgMqw9QcZA3z2OxvBGopgGflwWQaAO0cMPmE3uahiE2sAHmZaBXDiCJX0CSQwYTsYYhMIzWkxA5jWiWoboQaJgDkAogwYcHgfgATdMhuoEXoJgY8AHddYTS4XqkSAkk14XIABSW4DCFhi3FBlIlDNHDCEYTG65Y0yEoa9WjFU0foGnuAjk5JQFHYXuRGJfSJQwfEAhTvAAgwAArLzncFel3VAAAAABJRU5ErkJggg==\" />
                <span class=\"sf-toolbar-status";
                // line 10
                if ((50 < twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "callcount", array()))) {
                    echo " sf-toolbar-status-yellow";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "callcount", array()), "html", null, true);
                echo "</span>
                ";
                // line 11
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->getSourceContext()); })()), "callcount", array()) > 0)) {
                    // line 12
                    echo "                    <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 12, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
                    echo " ms</span>
                ";
                }
                // line 14
                echo "            ";
            } else {
                // line 15
                echo "                    ";
                $context["status"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 15, $this->getSourceContext()); })()), "callcount", array()) > 50)) ? ("yellow") : (""));
                // line 16
                echo "
                    ";
                // line 17
                echo twig_include($this->env, $context, "@DoctrinePHPCR/Collector/icon.svg");
                echo "

                    <span class=\"sf-toolbar-value\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->getSourceContext()); })()), "callcount", array()), "html", null, true);
                echo "</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">";
                // line 22
                echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
                echo "</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
            ";
            }
            // line 26
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 27
            echo "
        ";
            // line 28
            ob_start();
            // line 29
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>PHPCR Calls</b>
                <span class=\"sf-toolbar-status\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 31, $this->getSourceContext()); })()), "callcount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Call time</b>
                <span>";
            // line 35
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 35, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 38
            echo "
        ";
            // line 39
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 39, $this->getSourceContext()); })()), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 39, $this->getSourceContext()); })()), "")) : (""))));
            echo "
    ";
        }
        
        $__internal_f9677733d520b04b2c86da0f474761b3eebfd49d3461b36c719da879139d8ce2->leave($__internal_f9677733d520b04b2c86da0f474761b3eebfd49d3461b36c719da879139d8ce2_prof);

        
        $__internal_40d5988eda119374ebc1749cb8e2ac654798f7d8801840e8d6c2ad55c9e46f03->leave($__internal_40d5988eda119374ebc1749cb8e2ac654798f7d8801840e8d6c2ad55c9e46f03_prof);

    }

    // line 43
    public function block_menu($context, array $blocks = array())
    {
        $__internal_88d832e9f14f2d9dfe82d256afacdac580f4727867bbb33799ccec7ef3f4a499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d832e9f14f2d9dfe82d256afacdac580f4727867bbb33799ccec7ef3f4a499->enter($__internal_88d832e9f14f2d9dfe82d256afacdac580f4727867bbb33799ccec7ef3f4a499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_36db5b50a160c6e7f0703d71979520ccd29b18363f4976f4f1daf952f76fe621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36db5b50a160c6e7f0703d71979520ccd29b18363f4976f4f1daf952f76fe621->enter($__internal_36db5b50a160c6e7f0703d71979520ccd29b18363f4976f4f1daf952f76fe621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 44
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 44, $this->getSourceContext()); })()), 1)) : (1));
        // line 45
        echo "
    ";
        // line 46
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 46, $this->getSourceContext()); })()) == 1)) {
            // line 47
            echo "        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>PHPCR</strong>
            <span class=\"count\">
                <span>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 51, $this->getSourceContext()); })()), "callcount", array()), "html", null, true);
            echo "</span>
                <span>";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 52, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </span>
        </span>
    ";
        } else {
            // line 56
            echo "        <span class=\"label ";
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 56, $this->getSourceContext()); })()), "callcount", array()) == 0)) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 57
            echo twig_include($this->env, $context, "@DoctrinePHPCR/Collector/icon.svg");
            echo "</span>
            <strong>PHPCR</strong>
        </span>
    ";
        }
        
        $__internal_36db5b50a160c6e7f0703d71979520ccd29b18363f4976f4f1daf952f76fe621->leave($__internal_36db5b50a160c6e7f0703d71979520ccd29b18363f4976f4f1daf952f76fe621_prof);

        
        $__internal_88d832e9f14f2d9dfe82d256afacdac580f4727867bbb33799ccec7ef3f4a499->leave($__internal_88d832e9f14f2d9dfe82d256afacdac580f4727867bbb33799ccec7ef3f4a499_prof);

    }

    // line 63
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66f95077e41a6dd6fddd74b1de7900851ed3dbb00823ca7f5112f2124159fe28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f95077e41a6dd6fddd74b1de7900851ed3dbb00823ca7f5112f2124159fe28->enter($__internal_66f95077e41a6dd6fddd74b1de7900851ed3dbb00823ca7f5112f2124159fe28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e9a75f81c8f1ac9dc0b385a7ce4d0f6f18e5a02620e8ef37296b9b20887f09e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a75f81c8f1ac9dc0b385a7ce4d0f6f18e5a02620e8ef37296b9b20887f09e0->enter($__internal_e9a75f81c8f1ac9dc0b385a7ce4d0f6f18e5a02620e8ef37296b9b20887f09e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 64
        echo "    <h2>Calls</h2>

    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 66, $this->getSourceContext()); })()), "calls", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["calls"]) {
            // line 67
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 67, $this->getSourceContext()); })()), "connections", array())) > 1)) {
                // line 68
                echo "            <h3>Connection <em>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo "</em></h3>
        ";
            }
            // line 70
            echo "
        ";
            // line 71
            if (twig_test_empty($context["calls"])) {
                // line 72
                echo "            <div class=\"empty\">
                <p>No calls.</p>
            </div>
        ";
            } else {
                // line 76
                echo "            <table class=\"alt\" id=\"callsPlaceholder-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\">
                <thead>
                <tr>
                    <th onclick=\"javascript:sortTable(this, 0, 'queries-";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                    <th onclick=\"javascript:sortTable(this, 1, 'queries-";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\">
                ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["calls"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["call"]) {
                    // line 86
                    echo "                    <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
                    echo "\">
                        <td>";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "</td>
                        <td class=\"nowrap\">";
                    // line 88
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "executionMS", array()) * 1000)), "html", null, true);
                    echo "&nbsp;ms</td>
                        <td>
                            ";
                    // line 90
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "method", array());
                    echo "<br>

                            <strong class=\"font-normal text-small\">Parameters:</strong>
                            ";
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\YamlExtension')->encode(twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "params", array())), "html", null, true);
                    echo " <br>
                            <strong class=\"font-normal text-small\">Environment:</strong>
                            ";
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\YamlExtension')->encode(twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "env", array())), "html", null, true);
                    echo " <br>
                            ";
                    // line 96
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "caller", array(), "any", true, true)) {
                        // line 97
                        echo "                                <strong class=\"font-normal text-small\">Callers</strong>
                                <ul>
                                    ";
                        // line 99
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["call"], "caller", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["caller"]) {
                            // line 100
                            echo "                                        <li> - ";
                            echo twig_escape_filter($this->env, $context["caller"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caller'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 102
                        echo "                                </ul>
                            ";
                    }
                    // line 104
                    echo "                        </td>
                    </tr>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                </tbody>
            </table>
        ";
            }
            // line 110
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['calls'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "
    <h2>Database Connections</h2>

    ";
        // line 114
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 114, $this->getSourceContext()); })()), "connections", array())) {
            // line 115
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "DoctrinePHPCRBundle:Collector:phpcr.html.twig", 115)->display(array("data" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 115, $this->getSourceContext()); })()), "connections", array())));
            // line 116
            echo "    ";
        } else {
            // line 117
            echo "        <div class=\"empty\">
            <p>No connections.</p>
        </div>
    ";
        }
        // line 121
        echo "
    <h2>Document Managers</h2>

    ";
        // line 124
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 124, $this->getSourceContext()); })()), "managers", array())) {
            // line 125
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "DoctrinePHPCRBundle:Collector:phpcr.html.twig", 125)->display(array("data" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 125, $this->getSourceContext()); })()), "managers", array())));
            // line 126
            echo "    ";
        } else {
            // line 127
            echo "        <div class=\"empty\">
            <p>No document managers.</p>
        </div>
    ";
        }
        // line 131
        echo "
    <h2>Document Mapping</h2>

    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 134, $this->getSourceContext()); })()), "documents", array()));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 135
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 135, $this->getSourceContext()); })()), "managers", array())) > 1)) {
                // line 136
                echo "            <h3>Manager <small>";
                echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                echo "</small></h3>
        ";
            }
            // line 138
            echo "
        ";
            // line 139
            if (twig_test_empty($context["classes"])) {
                // line 140
                echo "            <div class=\"empty\">
                <p>No loaded documents.</p>
            </div>
        ";
            } else {
                // line 144
                echo "            <table>
                <thead>
                    <tr>
                        <th scope=\"col\">Class</th>
                    </tr>
                </thead>

                <tbody>
                ";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 153
                    echo "                    <tr>
                        <td>";
                    // line 154
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "                </tbody>
            </table>
        ";
            }
            // line 160
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e9a75f81c8f1ac9dc0b385a7ce4d0f6f18e5a02620e8ef37296b9b20887f09e0->leave($__internal_e9a75f81c8f1ac9dc0b385a7ce4d0f6f18e5a02620e8ef37296b9b20887f09e0_prof);

        
        $__internal_66f95077e41a6dd6fddd74b1de7900851ed3dbb00823ca7f5112f2124159fe28->leave($__internal_66f95077e41a6dd6fddd74b1de7900851ed3dbb00823ca7f5112f2124159fe28_prof);

    }

    public function getTemplateName()
    {
        return "DoctrinePHPCRBundle:Collector:phpcr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 160,  479 => 157,  470 => 154,  467 => 153,  463 => 152,  453 => 144,  447 => 140,  445 => 139,  442 => 138,  436 => 136,  433 => 135,  429 => 134,  424 => 131,  418 => 127,  415 => 126,  412 => 125,  410 => 124,  405 => 121,  399 => 117,  396 => 116,  393 => 115,  391 => 114,  386 => 111,  372 => 110,  367 => 107,  351 => 104,  347 => 102,  338 => 100,  334 => 99,  330 => 97,  328 => 96,  324 => 95,  319 => 93,  313 => 90,  308 => 88,  304 => 87,  295 => 86,  278 => 85,  274 => 84,  267 => 80,  263 => 79,  256 => 76,  250 => 72,  248 => 71,  245 => 70,  239 => 68,  236 => 67,  219 => 66,  215 => 64,  206 => 63,  191 => 57,  186 => 56,  179 => 52,  175 => 51,  169 => 47,  167 => 46,  164 => 45,  161 => 44,  152 => 43,  139 => 39,  136 => 38,  130 => 35,  123 => 31,  119 => 29,  117 => 28,  114 => 27,  111 => 26,  104 => 22,  98 => 19,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  78 => 12,  76 => 11,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% if collector.callcount > 0 %}
        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% if profiler_markup_version == 1 %}
                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAN5JREFUeNpiZAACe3v7+UAqgYF0kHjw4MEFyAJMUFqBgTyAoY+JgcqABUo3AvEHIBYgQe8DIF6ALsiISzUwXN9DLQBZpAgMqw9QcZA3z2OxvBGopgGflwWQaAO0cMPmE3uahiE2sAHmZaBXDiCJX0CSQwYTsYYhMIzWkxA5jWiWoboQaJgDkAogwYcHgfgATdMhuoEXoJgY8AHddYTS4XqkSAkk14XIABSW4DCFhi3FBlIlDNHDCEYTG65Y0yEoa9WjFU0foGnuAjk5JQFHYXuRGJfSJQwfEAhTvAAgwAArLzncFel3VAAAAABJRU5ErkJggg==\" />
                <span class=\"sf-toolbar-status{% if 50 < collector.callcount %} sf-toolbar-status-yellow{% endif %}\">{{ collector.callcount }}</span>
                {% if collector.callcount > 0 %}
                    <span class=\"sf-toolbar-info-piece-additional-detail\">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                {% endif %}
            {% else %}
                    {% set status = collector.callcount > 50 ? 'yellow' %}

                    {{ include('@DoctrinePHPCR/Collector/icon.svg') }}

                    <span class=\"sf-toolbar-value\">{{ collector.callcount }}</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time * 1000) }}</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>PHPCR Calls</b>
                <span class=\"sf-toolbar-status\">{{ collector.callcount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Call time</b>
                <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if profiler_markup_version == 1 %}
        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>PHPCR</strong>
            <span class=\"count\">
                <span>{{ collector.callcount }}</span>
                <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>
            </span>
        </span>
    {% else %}
        <span class=\"label {{ collector.callcount == 0 ? 'disabled' }}\">
            <span class=\"icon\">{{ include('@DoctrinePHPCR/Collector/icon.svg') }}</span>
            <strong>PHPCR</strong>
        </span>
    {% endif %}
{% endblock %}

{% block panel %}
    <h2>Calls</h2>

    {% for connection, calls in collector.calls %}
        {% if collector.connections|length > 1 %}
            <h3>Connection <em>{{ connection }}</em></h3>
        {% endif %}

        {% if calls is empty %}
            <div class=\"empty\">
                <p>No calls.</p>
            </div>
        {% else %}
            <table class=\"alt\" id=\"callsPlaceholder-{{ loop.index }}\">
                <thead>
                <tr>
                    <th onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                    <th onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-{{ loop.index }}\">
                {% for i, call in calls %}
                    <tr id=\"queryNo-{{ i }}-{{ loop.parent.loop.index }}\" class=\"{{ cycle(['odd', 'even'], i) }}\">
                        <td>{{ loop.index }}</td>
                        <td class=\"nowrap\">{{ '%0.2f'|format(call.executionMS * 1000) }}&nbsp;ms</td>
                        <td>
                            {{ call.method|raw }}<br>

                            <strong class=\"font-normal text-small\">Parameters:</strong>
                            {{ call.params|yaml_encode }} <br>
                            <strong class=\"font-normal text-small\">Environment:</strong>
                            {{ call.env|yaml_encode }} <br>
                            {% if call.caller is defined %}
                                <strong class=\"font-normal text-small\">Callers</strong>
                                <ul>
                                    {% for caller in call.caller %}
                                        <li> - {{ caller }}</li>
                                    {% endfor %}
                                </ul>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <h2>Database Connections</h2>

    {% if collector.connections %}
        {% include 'WebProfilerBundle:Profiler:table.html.twig' with {data: collector.connections} only %}
    {% else %}
        <div class=\"empty\">
            <p>No connections.</p>
        </div>
    {% endif %}

    <h2>Document Managers</h2>

    {% if collector.managers %}
        {% include 'WebProfilerBundle:Profiler:table.html.twig' with {data: collector.managers} only %}
    {% else %}
        <div class=\"empty\">
            <p>No document managers.</p>
        </div>
    {% endif %}

    <h2>Document Mapping</h2>

    {% for manager, classes in collector.documents %}
        {% if collector.managers|length > 1 %}
            <h3>Manager <small>{{ manager }}</small></h3>
        {% endif %}

        {% if classes is empty %}
            <div class=\"empty\">
                <p>No loaded documents.</p>
            </div>
        {% else %}
            <table>
                <thead>
                    <tr>
                        <th scope=\"col\">Class</th>
                    </tr>
                </thead>

                <tbody>
                {% for class in classes %}
                    <tr>
                        <td>{{ class }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}
{% endblock %}
", "DoctrinePHPCRBundle:Collector:phpcr.html.twig", "/var/www/vendor/doctrine/phpcr-bundle/Resources/views/Collector/phpcr.html.twig");
    }
}
