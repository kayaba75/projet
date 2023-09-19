<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategorieFixtures extends Fixture
{
    public const LEGISLATION = 'legislation';
    public const SANTE = 'sante';
    public const MES_DROITS = 'mes_droits';
    public function load(ObjectManager $manager): void
    {
        $categorie = new Categorie();
        $categorie->setNom('Législation');
        $categorie->setDescription('Tout ce qui concerne la législation');
        $categorie->setIsActive(true);
        $categorie->setSlug('legislation');
        $manager->persist($categorie);
        $manager->flush();
        // rajouter un référence pour pouvoir l'utiliser dans une autre fixture
        $this->addReference(self::LEGISLATION, $categorie);        
        
        
        $categorie = new Categorie();
        $categorie->setNom('Santé');
        $categorie->setDescription('Tout ce qui concerne la santé');
        $categorie->setIsActive(true);
        $categorie->setSlug('sante');
        $manager->persist($categorie);
        $manager->flush();
        // rajouter un référence pour pouvoir l'utiliser dans une autre fixture
        $this->addReference(self::SANTE, $categorie);

        $categorie = new Categorie();
        $categorie->setNom('Mes droits');
        $categorie->setDescription('Tout ce qui concerne mes droits');
        $categorie->setIsActive(true);
        $categorie->setSlug('mes_droits');
        $manager->persist($categorie);
        $manager->flush();
        // rajouter un référence pour pouvoir l'utiliser dans une autre fixture
        $this->addReference(self::MES_DROITS, $categorie);




    }
}
