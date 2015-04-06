<?php

/*
 * This file is part of a XenForo add-on.
 *
 * (c) Jeremy P <http://xenforo.com/community/members/jeremy-p.450/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jrahmy\PollsList\Route\Prefix;

/**
 * Provides static methods to extend the XenForo API.
 *
 * @author Jeremy P <http://xenforo.com/community/members/jeremy-p.450/>
 */
class Polls implements \XenForo_Route_Interface
{
    /**
     * Match a specific route for an already matched prefix.
     *
     * @param string                        $routePath Routing path.
     * @param \Zend_Controller_Request_Http $request   The current request object.
     * @param \XenForo_Router               $router    The XenForo Router.
     *
     * @return false|\XenForo_RouteMatch A route match.
     */
    public function match($routePath, \Zend_Controller_Request_Http $request, \XenForo_Router $router)
    {
        return $router->getRouteMatch('Jrahmy\PollsList\ControllerPublic\Polls', $routePath, 'forums');
    }
}
