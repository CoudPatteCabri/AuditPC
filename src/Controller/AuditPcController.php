<?php

namespace App\Controller;

use App\Entity\SERVICE;
use App\Form\AuditFormType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuditPcController extends AbstractController
{
    #[Route('/', name: 'app_audit_pc')]


    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {   
        $audit = new SERVICE();
        $form = $this->createForm(AuditFormType::class, $audit, );

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Do something with the submitted data
            // For example, persist to database
            
            $entityManager->persist($audit);
            $entityManager->flush();

            return $this->redirectToRoute('app_audit_pc');
        }

        return $this->render('index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
