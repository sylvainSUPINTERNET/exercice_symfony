<?php

namespace AwesomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/" , name="home")
     */
    public function indexAction()
    {
        return $this->render('AwesomeBundle:Default:index.html.twig');
    }

    /**
     * @Route("login" , name="login")
     */
    public function loginAction()
    {
        return $this->render('AwesomeBundle:Default:login.html.twig');
    }

    /**
     * @Route("profile" , name="profile")
     */
    public function profileAction()
    {
        return $this->render('AwesomeBundle:Default:profile.html.twig');
    }



}
