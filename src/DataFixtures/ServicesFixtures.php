<?php

namespace App\DataFixtures;

use App\Entity\Services;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ServicesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         //service 1
        $services = new Services();
        $services->setTitre('Calcul de votre retraite');
        $services->setDescription('La possibilité de calculer votre retraite en ligne, en quelques clics, est un service proposé par la Caisse nationale d’assurance vieillesse (Cnav).');
        $services->setIconName('calculator');
        $services->setIsActive(true);
        $services->setSlug('calcul-de-votre-retraite');
        $manager->persist($services);         
        
        //service 2
        $services = new Services();
        $services->setTitre('Expertise retraite');
        $services->setDescription('Expert retraite est un service de conseil et d’information sur la retraite, le droit à la retraite et la préparation de la retraite.');
        $services->setIconName('calendar');
        $services->setIsActive(true);
        $services->setSlug('expertise-retraite');
        $manager->persist($services);        
        
        //service 3
        $services = new Services();
        $services->setTitre('Régularisation de carrière');
        $services->setDescription('La régularisation de carrière permet de prendre en compte des périodes d’activité professionnelle non prises en compte dans le calcul de la retraite.');
        $services->setIconName('chart-line');
        $services->setIsActive(true);
        $services->setSlug('regularisation-de-carriere');
        $manager->persist($services);



        $manager->flush();
    }
}
