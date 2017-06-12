<?php
/**
 * Created by PhpStorm.
 * User: malecek
 * Date: 12.6.2017
 * Time: 15:52
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    /**
     * @Route("/")
     */
    public function showAction()
    {
        return $this->render('main.html.twig');
    }
}