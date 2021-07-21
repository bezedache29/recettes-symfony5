<?php

namespace App\DataFixtures;

use App\Entity\Aliment;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Aliments
        $a1 = new Aliment();
        $a1->setNom('Carotte')
            ->setPrix(1.8)
            ->setImage("legumes/carotte.png")
            ->setCalories(36)
            ->setProteines(0.77)
            ->setGlucides(6.45)
            ->setLipides(0.26)
        ;
        $manager->persist($a1);

        $a2 = new Aliment();
        $a2->setNom('Patate')
            ->setPrix(1.5)
            ->setImage("legumes/patate.png")
            ->setCalories(80)
            ->setProteines(1.8)
            ->setGlucides(16.7)
            ->setLipides(0.34)
        ;
        $manager->persist($a2);

        $a3 = new Aliment();
        $a3->setNom('Tomate')
            ->setPrix(2.3)
            ->setImage("legumes/tomate.png")
            ->setCalories(18)
            ->setProteines(0.86)
            ->setGlucides(2.26)
            ->setLipides(0.24)
        ;
        $manager->persist($a3);

        $a4 = new Aliment();
        $a4->setNom('Pomme')
            ->setPrix(2.35)
            ->setImage("legumes/pomme.png")
            ->setCalories(52)
            ->setProteines(0.25)
            ->setGlucides(11.6)
            ->setLipides(0.25)
        ;
        $manager->persist($a4);


        $manager->flush();
    }
}
