<?php

namespace App\DataFixtures;

use App\Entity\CalculHome;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CalculHomeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $CalculHome = new CalculHome();
        $manager->persist($CalculHome);
        $CalculHome->setTitre('Votre conseiller retraite');
        $CalculHome->setDescription("L'experise de nos conseillers retraite 
        vous permettra d'optimiser votre retraite et de la préparer au mieux le départ à la retraite qui est 
        un moment important de la vie d'un salarié ou d'un chef d'entreprise. C'est pourquoi, il est important de nous choisir.");
        $CalculHome->setImageBgName("tree-g0bd897c29_1920.jpg");
        $CalculHome->setIsActive(true);

        $manager->flush();
    }
}
