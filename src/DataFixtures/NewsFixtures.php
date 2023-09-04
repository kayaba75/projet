<?php

namespace App\DataFixtures;

use App\Entity\News;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class NewsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $news = new News();
        $news->setTitre('Legislation retraite');
        $news->setDescription("Loreum ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.");
        $news->setImageName('1.jpg');
        $news->setSlug('legislation-retraite');
        $news->setCreatedAt(new \DateTime());
        $news->setUpdatedAt(new \DateTime());
        $news->setIsActive(true);
        $manager->persist($news);        
        
        $news = new News();
        $news->setTitre('La nouvelle réforme');
        $news->setDescription("Loreum ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.");
        $news->setImageName('2.webp');
        $news->setSlug('la-nouvelle-reforme');
        $news->setCreatedAt(new \DateTime());
        $news->setUpdatedAt(new \DateTime());
        $news->setIsActive(true);
        $manager->persist($news);        
        
        $news = new News();
        $news->setTitre('La vaccination obligatoire');
        $news->setDescription("Loreum ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.");
        $news->setImageName('3.jpg');
        $news->setSlug('la-vaccination-obligatoire');
        $news->setCreatedAt(new \DateTime());
        $news->setUpdatedAt(new \DateTime());
        $news->setIsActive(true);
        $manager->persist($news);        
        

        $manager->flush();
    }
}
