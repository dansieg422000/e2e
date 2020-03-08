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
        // Process the form
        $form = $this->createForm(PropertyAnalyticsFormType::class);

    }

}