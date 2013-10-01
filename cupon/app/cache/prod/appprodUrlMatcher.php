<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // usuario_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'usuario_homepage'));
        }

        // tienda_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'tienda_homepage'));
        }

        // ciudad_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\CiudadBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ciudad_homepage'));
        }

        // oferta_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'oferta_homepage'));
        }

        // pagina_ayuda
        if ($pathinfo === '/ayuda') {
            return array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::ayudaAction',  '_route' => 'pagina_ayuda',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
