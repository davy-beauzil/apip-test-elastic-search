<?php

namespace App\DataFixtures;

use App\Entity\Greeting;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GreetingFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i = 1 ; $i < 20 ; $i++){
            $greeting = new Greeting();
            $greeting->name = "gretting $i";
             $manager->persist($greeting);
        }
        $manager->flush();
    }
}
