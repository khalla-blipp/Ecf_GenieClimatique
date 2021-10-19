<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Officine;
use App\Entity\Technicien;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Panneau de Configuration');
    }

    public function configureMenuItems(): iterable
    { 
        return [  
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home'),
        
        MenuItem::section('Users'),

        yield MenuItem::linkToCrud('Users', 'fas fa-user', User::class) , 

        MenuItem::section('Officines'),
        yield MenuItem::linkToCrud('Officines', 'fas fa-universal-access', Officine::class),
        

        MenuItem::section('Techniciens'),
        yield MenuItem::linkToCrud('Techniciens', 'fas  fa-heart', Technicien::class),
        ];
    }
}
