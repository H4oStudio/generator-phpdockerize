<?php

/* SuluContentBundle:Template:seo.html.twig */
class __TwigTemplate_35baaedbd58d8c000ba1805b2fb8e513e69ceba54962bd560c191d294f084dbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a418d561e101cd212f54924490dae739c2b60e1ce9dd67ed2c5a8bc67647316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a418d561e101cd212f54924490dae739c2b60e1ce9dd67ed2c5a8bc67647316->enter($__internal_4a418d561e101cd212f54924490dae739c2b60e1ce9dd67ed2c5a8bc67647316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluContentBundle:Template:seo.html.twig"));

        $__internal_4f4c201aef413a3fe5b644f2425a44d2d7ad5c1ae84c91fc2772f8e5c4be25fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4c201aef413a3fe5b644f2425a44d2d7ad5c1ae84c91fc2772f8e5c4be25fe->enter($__internal_4f4c201aef413a3fe5b644f2425a44d2d7ad5c1ae84c91fc2772f8e5c4be25fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluContentBundle:Template:seo.html.twig"));

        // line 1
        echo "<form id=\"seo-form\" class=\"grid\">
    <div class=\"grid-row\">
        <label for=\"seo-title\"><%=translate('sulu.content.seo.serp')%></label>

        <div class=\"seo-excerpt\">
            <div id=\"seo-excerpt-title\" class=\"title\"></div>
            <div class=\"url\"><%= siteUrl %></div>
            <div id=\"seo-excerpt-description\" class=\"description\"></div>
        </div>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-title\"><%=translate('sulu.content.seo.title')%></label>
        <input type=\"text\" id=\"seo-title\" data-mapper-property=\"title\"
               class=\"form-element preview-update trigger-save-button\"/>

        <span class=\"smaller-font grey-font\">
            <%= sprintf(translate('sulu.content.seo.title.note'), options.maxTitleCharacters) %>
            <strong>
                <span id=\"title-left\"></span>
                <%= translate('sulu.content.seo.characters-left')%>
            </strong>
        </span>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-description\"><%=translate('sulu.content.seo.description')%></label>
        <textarea id=\"seo-description\" data-mapper-property=\"description\"
                  class=\"form-element preview-update trigger-save-button\"></textarea>

        <span class=\"smaller-font grey-font\">
            <%= sprintf(translate('sulu.content.seo.descriptions.note'), options.maxDescriptionCharacters) %>
            <strong>
                <span id=\"description-left\"></span>
                <%= translate('sulu.content.seo.characters-left')%>
            </strong>
        </span>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-keywords\"><%=translate('sulu.content.seo.keywords')%></label>
        <input type=\"text\" id=\"seo-keywords\" data-mapper-property=\"keywords\"
               class=\"form-element preview-update trigger-save-button\"/>
        <span class=\"smaller-font grey-font\">
            <%= sprintf(translate('sulu.content.seo.keywords.note'), options.maxKeywords) %>
            <strong>
                <span id=\"keywords-left\"></span>
                <%= translate('sulu.content.seo.keywords-left')%>
            </strong>
        </span>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-canonical\"><%=translate('sulu.content.seo.canonical')%></label>
        <input type=\"text\" id=\"seo-canonical\" data-mapper-property=\"canonicalUrl\"
               class=\"form-element preview-update trigger-save-button\"/>
    </div>
    <div class=\"form-group grid-row\">
        <label><%=translate('sulu.content.seo.robots')%></label>

        <div class=\"form-group grid-row\">
            <label for=\"seo-no-index\">
                <div class=\"custom-checkbox\">
                    <input type=\"checkbox\" id=\"seo-no-index\" data-mapper-property=\"noIndex\"
                           class=\"form-element preview-update trigger-save-button\"/>
                    <span class=\"icon\"></span>
                </div>
                <span class=\"clickable\"><%=translate('sulu.content.seo.robots.no-index')%></span>
            </label>
        </div>
        <div class=\"form-group grid-row\">
            <label for=\"seo-no-follow\">
                <div class=\"custom-checkbox\">
                    <input type=\"checkbox\" id=\"seo-no-follow\" data-mapper-property=\"noFollow\"
                           class=\"form-element preview-update trigger-save-button\"/>
                    <span class=\"icon\"></span>
                </div>
                <span class=\"clickable\"><%=translate('sulu.content.seo.robots.no-follow')%></span>
            </label>
        </div>
    </div>

    <div class=\"form-group grid-row\">
        <label><%=translate('sulu.content.seo.sitemap')%></label>

        <div class=\"form-group grid-row\">
            <label for=\"seo-hide-in-sitemap\">
                <span class=\"custom-checkbox\">
                    <input type=\"checkbox\" id=\"seo-hide-in-sitemap\" data-mapper-property=\"hideInSitemap\"
                           class=\"form-element preview-update trigger-save-button\"/>
                    <span class=\"icon\"></span>
                </span>
                <span class=\"clickable\"><%=translate('sulu.content.seo.sitemap.hide')%></span>
            </label>
        </div>
    </div>
</form>
";
        
        $__internal_4a418d561e101cd212f54924490dae739c2b60e1ce9dd67ed2c5a8bc67647316->leave($__internal_4a418d561e101cd212f54924490dae739c2b60e1ce9dd67ed2c5a8bc67647316_prof);

        
        $__internal_4f4c201aef413a3fe5b644f2425a44d2d7ad5c1ae84c91fc2772f8e5c4be25fe->leave($__internal_4f4c201aef413a3fe5b644f2425a44d2d7ad5c1ae84c91fc2772f8e5c4be25fe_prof);

    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:seo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form id=\"seo-form\" class=\"grid\">
    <div class=\"grid-row\">
        <label for=\"seo-title\"><%=translate('sulu.content.seo.serp')%></label>

        <div class=\"seo-excerpt\">
            <div id=\"seo-excerpt-title\" class=\"title\"></div>
            <div class=\"url\"><%= siteUrl %></div>
            <div id=\"seo-excerpt-description\" class=\"description\"></div>
        </div>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-title\"><%=translate('sulu.content.seo.title')%></label>
        <input type=\"text\" id=\"seo-title\" data-mapper-property=\"title\"
               class=\"form-element preview-update trigger-save-button\"/>

        <span class=\"smaller-font grey-font\">
            <%= sprintf(translate('sulu.content.seo.title.note'), options.maxTitleCharacters) %>
            <strong>
                <span id=\"title-left\"></span>
                <%= translate('sulu.content.seo.characters-left')%>
            </strong>
        </span>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-description\"><%=translate('sulu.content.seo.description')%></label>
        <textarea id=\"seo-description\" data-mapper-property=\"description\"
                  class=\"form-element preview-update trigger-save-button\"></textarea>

        <span class=\"smaller-font grey-font\">
            <%= sprintf(translate('sulu.content.seo.descriptions.note'), options.maxDescriptionCharacters) %>
            <strong>
                <span id=\"description-left\"></span>
                <%= translate('sulu.content.seo.characters-left')%>
            </strong>
        </span>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-keywords\"><%=translate('sulu.content.seo.keywords')%></label>
        <input type=\"text\" id=\"seo-keywords\" data-mapper-property=\"keywords\"
               class=\"form-element preview-update trigger-save-button\"/>
        <span class=\"smaller-font grey-font\">
            <%= sprintf(translate('sulu.content.seo.keywords.note'), options.maxKeywords) %>
            <strong>
                <span id=\"keywords-left\"></span>
                <%= translate('sulu.content.seo.keywords-left')%>
            </strong>
        </span>
    </div>
    <div class=\"grid-row form-group\">
        <label for=\"seo-canonical\"><%=translate('sulu.content.seo.canonical')%></label>
        <input type=\"text\" id=\"seo-canonical\" data-mapper-property=\"canonicalUrl\"
               class=\"form-element preview-update trigger-save-button\"/>
    </div>
    <div class=\"form-group grid-row\">
        <label><%=translate('sulu.content.seo.robots')%></label>

        <div class=\"form-group grid-row\">
            <label for=\"seo-no-index\">
                <div class=\"custom-checkbox\">
                    <input type=\"checkbox\" id=\"seo-no-index\" data-mapper-property=\"noIndex\"
                           class=\"form-element preview-update trigger-save-button\"/>
                    <span class=\"icon\"></span>
                </div>
                <span class=\"clickable\"><%=translate('sulu.content.seo.robots.no-index')%></span>
            </label>
        </div>
        <div class=\"form-group grid-row\">
            <label for=\"seo-no-follow\">
                <div class=\"custom-checkbox\">
                    <input type=\"checkbox\" id=\"seo-no-follow\" data-mapper-property=\"noFollow\"
                           class=\"form-element preview-update trigger-save-button\"/>
                    <span class=\"icon\"></span>
                </div>
                <span class=\"clickable\"><%=translate('sulu.content.seo.robots.no-follow')%></span>
            </label>
        </div>
    </div>

    <div class=\"form-group grid-row\">
        <label><%=translate('sulu.content.seo.sitemap')%></label>

        <div class=\"form-group grid-row\">
            <label for=\"seo-hide-in-sitemap\">
                <span class=\"custom-checkbox\">
                    <input type=\"checkbox\" id=\"seo-hide-in-sitemap\" data-mapper-property=\"hideInSitemap\"
                           class=\"form-element preview-update trigger-save-button\"/>
                    <span class=\"icon\"></span>
                </span>
                <span class=\"clickable\"><%=translate('sulu.content.seo.sitemap.hide')%></span>
            </label>
        </div>
    </div>
</form>
", "SuluContentBundle:Template:seo.html.twig", "/var/www/vendor/sulu/sulu/src/Sulu/Bundle/ContentBundle/Resources/views/Template/seo.html.twig");
    }
}
