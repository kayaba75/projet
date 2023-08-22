<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture implements FixtureGroupInterface

{
private $encoder; // pour le hashage du mot de passe

// méthode pour le hashage du mot de passe
public function __construct(UserPasswordHasherInterface $encoder)
{
    
    $this->encoder = $encoder;
}


    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('admin@sauv.com');
        $user->setRoles(['ROLE_USER' , 'ROLE_ADMIN']);
        $user->setPassword($this->encoder->hashPassword($user, "Lol123"));
        $manager->persist($user);

        $user = new User();
        $user->setEmail('user@sauv.com');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword($this->encoder->hashPassword($user, "Lol123"));
        $manager->persist($user);

        $manager->flush();
    }
    public static function getGroups(): array
    {
        return ['user'];
    }
}
