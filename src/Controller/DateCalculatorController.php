<?php

namespace App\Controller;

use App\Form\DateCalculatorType;
use App\Model\DateCalculatorModel;
use App\Service\DateCalculatorService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DateCalculatorController extends AbstractController
{
    /**
     * @Route("/", name="app_date_calculator")
     */
    public function index(Request $request, DateCalculatorService $dateCalculatorService): Response
    {
        $model = new DateCalculatorModel();
        $result = null;

        $form = $this->createForm(DateCalculatorType::class, $model);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $model = $form->getData();

            $result = $dateCalculatorService->calculateResult($model);
        }

        return $this->render('base.html.twig', [
            'form' => $form->createView(),
            'result' => $result
        ]);
    }
}
