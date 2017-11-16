<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class websiteDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',  '_requestAnalyzer' => false,));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_home
            if ('/_profiler' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_home');
                }

                return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_requestAnalyzer' => false,  '_route' => '_profiler_home',);
            }

            if (0 === strpos($pathinfo, '/_profiler/search')) {
                // _profiler_search
                if ('/_profiler/search' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_requestAnalyzer' => false,  '_route' => '_profiler_search',);
                }

                // _profiler_search_bar
                if ('/_profiler/search_bar' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_requestAnalyzer' => false,  '_route' => '_profiler_search_bar',);
                }

            }

            // _profiler_phpinfo
            if ('/_profiler/phpinfo' === $pathinfo) {
                return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_requestAnalyzer' => false,  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  '_requestAnalyzer' => false,));
            }

            // _profiler_open_file
            if ('/_profiler/open' === $pathinfo) {
                return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_requestAnalyzer' => false,  '_route' => '_profiler_open_file',);
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',  '_requestAnalyzer' => false,));
            }

            // _profiler_router
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',  '_requestAnalyzer' => false,));
            }

            // _profiler_exception
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',  '_requestAnalyzer' => false,));
            }

            // _profiler_exception_css
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',  '_requestAnalyzer' => false,));
            }

        }

        // sulu_media.website.image.proxy
        if (0 === strpos($pathinfo, '/uploads/media') && preg_match('#^/uploads/media/(?P<slug>.*)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_media.website.image.proxy')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaStreamController::getImageAction',  '_requestAnalyzer' => false,));
        }

        // sulu_media.website.media.download
        if (0 === strpos($pathinfo, '/media') && preg_match('#^/media/(?P<id>[^/]++)/download/(?P<slug>.*)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_media.website.media.download')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaStreamController::downloadAction',  '_requestAnalyzer' => false,));
        }

        $host = $context->getHost();

        if (preg_match('#^(?P<host>.+)$#si', $host, $hostMatches)) {
            // sulu_search.website_search
            if (preg_match('#^(?P<prefix>.*)/search$#s', $pathinfo, $matches) && (($request->get("_sulu")->getAttribute("portalInformation") !== null) && ($request->get("_sulu")->getAttribute("portalInformation")->getType() === 1))) {
                return $this->mergeDefaults(array_replace($hostMatches, $matches, array('_route' => 'sulu_search.website_search')), array (  '_controller' => 'sulu_search.controller.website_search:queryAction',));
            }

        }

        // sulu_website.sitemap_index
        if ('/sitemap.xml' === $pathinfo) {
            return array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\SitemapController::indexAction',  '_route' => 'sulu_website.sitemap_index',);
        }

        if (0 === strpos($pathinfo, '/sitemaps')) {
            // sulu_website.paginated_sitemap
            if (preg_match('#^/sitemaps/(?P<alias>[^/\\-]++)\\-(?P<page>\\d+)\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_website.paginated_sitemap')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\SitemapController::sitemapPaginatedAction',));
            }

            // sulu_website.sitemap
            if (preg_match('#^/sitemaps/(?P<alias>[^/\\.]++)\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_website.sitemap')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\SitemapController::sitemapAction',));
            }

        }

        if (preg_match('#^(?P<host>.+)$#si', $host, $hostMatches)) {
            // _twig_error_test
            if (preg_match('#^(?P<prefix>.*)/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches) && (($request->get("_sulu")->getAttribute("portalInformation") !== null) && ($request->get("_sulu")->getAttribute("portalInformation")->getType() === 1))) {
                return $this->mergeDefaults(array_replace($hostMatches, $matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
