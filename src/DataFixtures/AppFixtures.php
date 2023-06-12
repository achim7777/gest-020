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
        EnseignantsFactory::createMany(25);
        EtudiantsFactory::createMany(25);
        FilieresFactory::createMany(25);
        ModulesFactory::createMany(25);
        NotesFactory::createMany(25);
        SemestresFactory::createMany(25);
        UserFactory::createOne();


        $manager->flush();
    }
}
