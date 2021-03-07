<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        $projects = array("Hello", "How", "Are", "You");
        // used by pagination
        $total_rows = sizeof($projects);
        return $this->render('user/index.html.twig', [
            'projects' => $projects,
            'total_rows' => $total_rows,
        ]);
    }

    /**
     * @Route("/user/create", name="user_create")
     */
    public function create(): Response
    {
        $projects = array("Hello", "How", "Are", "You");
        // used by pagination
        $total_rows = sizeof($projects);
        return $this->render('user/new.html.twig', [
            'projects' => $projects,
            'total_rows' => $total_rows,
        ]);
    }

    /**
     * @Route("/user/update", name="user_update")
     */
    public function update(): Response
    {
        $projects = array("Hello", "How", "Are", "You");
        // used by pagination
        $total_rows = sizeof($projects);
        return $this->render('user/edit.html.twig', [
            'projects' => $projects,
            'total_rows' => $total_rows,
        ]);
    }
}
