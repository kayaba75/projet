<?php

namespace App\DataFixtures;

use App\Entity\Slider;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class SliderFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $slider = new Slider();
        $slider->setRankNumber(1);
        $slider->setTag("home");
        $slider->setIsActive(true); 
        $slider->setImageName('slider1.jpg');
        $manager->persist($slider);

        $slider = new Slider();
        $slider->setRankNumber(2);
        $slider->setTag("home");
        $slider->setIsActive(true); 
        $slider->setImageName('slider2.jpg');
        $manager->persist($slider);

        $manager->flush();
    }
}
