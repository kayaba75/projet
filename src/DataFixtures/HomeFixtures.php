<?php

namespace App\DataFixtures;

use App\Entity\Home;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class HomeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $home = new Home();
        $home->setTitre('Sauv');
        $home->setDescription('Bienvenue sur le site de Sauv');
        $home->setLogoName('logo.jpg');
        $home->setIsActive(true);
        // on persiste l'entité
        $manager->persist($home);
        // on déclenche l'enregistrement


        $home = new Home();
        $home->setTitre('Sauv');
        $home->setDescription("C'est noêl sur le site de Sauv");
        $home->setLogoName('logo.png');
        $home->setIsActive(false);
        // on persiste l'entité
        $manager->persist($home);


        // on déclenche l'enregistrement
        $manager->flush();
    }
}
