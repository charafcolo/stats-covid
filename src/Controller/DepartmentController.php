<?php

namespace App\Controller;

use DateTime;
use App\Service\CallApiService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DepartmentController extends AbstractController
{
    /**
     * @Route("/department/{department}", name="app_department")
     */
    public function index(string $department, CallApiService $callApiService): Response
    {
        
        return $this->render('department/index.html.twig', [
            'data' => $callApiService->getDepartmentData($department),
        ]);
    }
}
