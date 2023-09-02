<?php

namespace App\DataFixtures;

use App\Entity\Partenaires;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PartenairesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $partenaires = new Partenaires();
        $partenaires->setTitre('Cnav');
        $partenaires->setImageName("Caisse_Nationale_d'Assurance_Vieillesse.png");
        $partenaires->setIsActive(true);
        $manager->persist($partenaires);        
        
        $partenaires = new Partenaires();
        $partenaires->setTitre('msa');
        $partenaires->setImageName("logo_msa.png");
        $partenaires->setIsActive(true);
        $manager->persist($partenaires);        
        
        
        $partenaires = new Partenaires();
        $partenaires->setTitre('ursaaf');
        $partenaires->setImageName("URSSAF_Logo.png");
        $partenaires->setIsActive(true);
        $manager->persist($partenaires);        
        
        
        $partenaires = new Partenaires();
        $partenaires->setTitre('ircantec');
        $partenaires->setImageName("logo_ircantec.png");
        $partenaires->setIsActive(true);
        $manager->persist($partenaires);        
        
        
        $partenaires = new Partenaires();
        $partenaires->setTitre('Ssi');
        $partenaires->setImageName("ssi.webp");
        $partenaires->setIsActive(true);
        $manager->persist($partenaires);        
        
        
        $partenaires = new Partenaires();
        $partenaires->setTitre('agirc');
        $partenaires->setImageName("agirc.png");
        $partenaires->setIsActive(true);
        $manager->persist($partenaires);





        $manager->flush();
    }
}
