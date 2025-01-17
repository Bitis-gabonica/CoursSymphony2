<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ClientFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i <=20; $i++) { 
            $client= new Client();
            $client->setSurname("surname".$i);
            $client->setAdresse("adresse".$i);
            $client->setTelephone("77100101".$i);
            $manager->persist($client);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
