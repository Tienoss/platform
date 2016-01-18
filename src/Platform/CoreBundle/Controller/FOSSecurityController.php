<?php

namespace Platform\CoreBundle\Controller;


use FOS\UserBundle\Controller\SecurityController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class FOSSecurityController
 *
 */
class FOSSecurityController extends SecurityController
{
    public function loginAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        $request = $this->container->get('request');


        if( !is_null( $invalidate_session = $request->get('is', NULL) ) )
        {
            if( $invalidate_session == 'uniq' )
            {
                $this->container->get('session')->getFlashBag()->add(
                    'error',
                    $this->container->get('translator')->trans( 'flash.login.already_connected' )
                );
            }
            elseif( $invalidate_session == 'subscription' )
            {
                $this->container->get('session')->getFlashBag()->add(
                    'sonata_flash_error',
                    $this->container->get('translator')->trans('flash_error_login_subscription', [], 'UserAdminTrans')
                );
            }
        }

        return parent::loginAction();
    }
}