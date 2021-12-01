<?php
// src/Controller/EmployeeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Employee;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * @Route("/employee")
 */

class EmployeeController extends AbstractController
{
    /**
    * @Route("/add", name="add_employee")
    */

    public function addEmployee(Request $request) :response
    {
        // Création de l'entité
        $Employee = new Employee();
        $Employee->setSalary(2000);
        $Employee->setBonus(2200);
        $Employee->setName('Martin');
        $Employee->setFirstname('Edmond');
        $Employee->setOccupation('Director');
        
        $em = $this->getDoctrine()->getManager();
    
        $em->persist($Employee);
        $em->flush();
    
        return $this->render('Employee/add.html.twig', array('Employee' => $Employee));
    }
}