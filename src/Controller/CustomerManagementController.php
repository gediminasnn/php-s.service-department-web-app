<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CustomerManagementController extends AbstractController
{
    /**
     * @Route("/customer/management", name="customer_management")
     */
    public function customerManagementPanel(UrlGeneratorInterface $urlGenerator): Response
    {
        if($this->isGranted('IS_ANONYMOUS')){
            return new RedirectResponse($urlGenerator->generate('home'));
        }
        return $this->render('customer_management/index.html.twig');
    }


}
