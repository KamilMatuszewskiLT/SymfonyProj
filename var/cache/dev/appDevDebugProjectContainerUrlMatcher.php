<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // _assetic_4a5f0f3
        if ('/js/4a5f0f3.js' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '4a5f0f3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4a5f0f3',);
        }

        if (0 === strpos($pathinfo, '/js/4a5f0f3_')) {
            // _assetic_4a5f0f3_0
            if ('/js/4a5f0f3_jquery.min_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4a5f0f3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4a5f0f3_0',);
            }

            // _assetic_4a5f0f3_1
            if ('/js/4a5f0f3_scripts_2.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4a5f0f3',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_4a5f0f3_1',);
            }

            // _assetic_4a5f0f3_2
            if ('/js/4a5f0f3_JQueryScripts_3.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4a5f0f3',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_4a5f0f3_2',);
            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // app_classes_display
        if ('/class/display' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ClassesController::displayAction',  '_route' => 'app_classes_display',);
        }

        // class_delete
        if (0 === strpos($pathinfo, '/class/delete') && preg_match('#^/class/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'class_delete')), array (  '_controller' => 'AppBundle\\Controller\\ClassesController::deleteAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/student')) {
            // app_marks_addmark
            if (0 === strpos($pathinfo, '/student/addMark') && preg_match('#^/student/addMark/(?P<studId>\\d+)/(?P<classId>\\d+)/(?P<mark>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_marks_addmark')), array (  '_controller' => 'AppBundle\\Controller\\MarksController::addMark',));
            }

            if (0 === strpos($pathinfo, '/student/d')) {
                // mark_delete
                if (0 === strpos($pathinfo, '/student/delMark') && preg_match('#^/student/delMark/(?P<studId>\\d+)/(?P<markId>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mark_delete')), array (  '_controller' => 'AppBundle\\Controller\\MarksController::deleteAction',));
                }

                // student_delete
                if (0 === strpos($pathinfo, '/student/delete') && preg_match('#^/student/delete/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_delete')), array (  '_controller' => 'AppBundle\\Controller\\StudentController::deleteAction',));
                }

                // app_student_display
                if ('/student/display' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StudentController::displayAction',  '_route' => 'app_student_display',);
                }

            }

            elseif (0 === strpos($pathinfo, '/student/update')) {
                // student_update
                if (preg_match('#^/student/update/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_update')), array (  '_controller' => 'AppBundle\\Controller\\StudentController_UpdateAction::updateAction',));
                }

                // student_update_pdf
                if (preg_match('#^/student/update/(?P<id>\\d+)(?:/(?P<param>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_update_pdf')), array (  'param' => NULL,  '_controller' => 'AppBundle\\Controller\\StudentController_UpdateAction::updateAction',));
                }

                // app_student_updateclassaction_updateclass
                if (preg_match('#^/student/update/(?P<id>\\d+)/(?P<classId>\\d+)/(?P<action>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_student_updateclassaction_updateclass')), array (  '_controller' => 'AppBundle\\Controller\\StudentController_UpdateClassAction::updateClassAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_easyadmin;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'easyadmin'));
                }

                return $ret;
            }
            not_easyadmin:

            // admin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin'));
                }

                return $ret;
            }
            not_admin:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
