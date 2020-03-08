<?php

namespace App\Controller;

use App\Form\PropertyAnalyticsFormType;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View;

class PropertyAnalyticsController extends AbstractController
{
    /**
     *
     * @Get("/property-analytics")
     *
     * @param Request $request
     *
     * @return View\JsonpHandler
     *
     *
     */
    public function getPropertyAnalyticsAction(Request $request) {
//        die('Property Analytics');
        $form = $this->createForm(PropertyAnalyticsFormType::class);

        // Process the form submitted
//        $form->;

        var_dump($form->getData());
//        var_dump($form->isSubmitted());
        exit;
        if ($form->isSubmitted()) {
            var_dump($request);
        }

        die;


    }

}