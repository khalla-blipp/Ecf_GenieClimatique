<?php

namespace App\Controller\Admin;

use App\Entity\Officine;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OfficineCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Officine::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
