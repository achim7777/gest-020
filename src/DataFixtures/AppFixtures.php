<?php

namespace App\DataFixtures;

use App\Factory\EnseignantsFactory;
use App\Factory\EtudiantsFactory;
use App\Factory\FilieresFactory;
use App\Factory\ModulesFactory;
use App\Factory\NotesFactory;
use App\Factory\SemestresFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        EnseignantsFactory::createMany(50);
        EtudiantsFactory::createMany(50);
        FilieresFactory::createMany(50);
        ModulesFactory::createMany(50);
        NotesFactory::createMany(50);
        SemestresFactory::createMany(50);
        UserFactory::createOne();


        $manager->flush();
    }
}
