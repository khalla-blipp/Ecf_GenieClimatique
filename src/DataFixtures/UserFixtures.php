<?php

namespace App\DataFixtures ;
use Doctrine\Bundle\FixturesBundle\Fixture ;
use Doctrine\Persistence\ObjectManager ;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface ;
use App\Entity\User ;


class UserFixtures extends Fixture 
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface  $passwordEncoder )
    {
         $this->passwordEncoder = $passwordEncoder ;
    }

    public function load(ObjectManager $manager)
    {
       $user = new User() ;
       $user->setEmail('mamadou@pati.fr', 'pape@hi.fr');
       $user->setRoles(["ROLE_ADMIN"]) ;
       $user->setPassword($this->passwordEncoder->encodePassword(
           $user,
           "azert789", "azert741"
       ));

       
       $manager->persist($user);
       $manager->flush();
    }
}
