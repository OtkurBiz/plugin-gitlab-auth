<?php

namespace Kanboard\Plugin\GitlabAuth\Controller;

use Kanboard\Controller\Oauth as BaseOAuth;

/**
 * OAuth Controller
 *
 * @package  controller
 * @author   Frederic Guillot
 */
class Oauth extends BaseOAuth
{
    /**
     * Handle authentication
     *
     * @access public
     */
    public function handler()
    {
        $this->step1('Gitlab');
    }
}
