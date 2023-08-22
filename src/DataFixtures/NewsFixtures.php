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
        $news->setTitre('Lorem libero donec');
        $news->setDescription("Loreum ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.");
        $news->setImageName('1.jpg');
        $news->setSlug('lorem-libero-donec');
        $news->setCreatedAt(new \DateTime());
        $news->setUpdatedAt(new \DateTime());
        $news->setIsActive(true);
        $manager->persist($news);        
        
        $news = new News();
        $news->setTitre('Lorem libero donec');
        $news->setDescription("Loreum ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.");
        $news->setImageName('2.webp');
        $news->setSlug('lorem-libero-donec');
        $news->setCreatedAt(new \DateTime());
        $news->setUpdatedAt(new \DateTime());
        $news->setIsActive(true);
        $manager->persist($news);        
        
        $news = new News();
        $news->setTitre('Lorem libero donec');
        $news->setDescription("Loreum ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.");
        $news->setImageName('3.jpg');
        $news->setSlug('lorem-libero-donec');
        $news->setCreatedAt(new \DateTime());
        $news->setUpdatedAt(new \DateTime());
        $news->setIsActive(true);
        $manager->persist($news);        
        

        $manager->flush();
    }
}
