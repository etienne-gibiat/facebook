<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Utilisateur;
use App\Entity\Ecrit;
use App\Entity\Lien;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;


//require_once 'vendor/autoload.php';


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // initialisation de l'objet Faker
        // on peut préciser en paramètre la localisation, 
        // pour avoir des données qui semblent "françaises"
        $faker = Faker\Factory::create('fr_FR');
         // On configure dans quelles langues nous voulons nos données

        // on créé 10 personnes
        for ($i = 0; $i < 4; $i++) {
            $utilisateur = new Utilisateur();
            $utilisateur->setLogin($faker->freeEmail);
            $utilisateur->setMdp($faker->Password);
            $utilisateur->setAvatar($faker->imageUrl($width = 640, $height = 480));
            $utilisateur->setRemember(false);

            if($i > 1)
            {$lastUtilisateur = $utilisateur;
                $lien = new Lien();
                $lien->setIdUtilisateur1($lastUtilisateur->getId());
                $lien->setIdUtilisateur2($utilisateur->getId());
                $lien->setEtat("good");
                $manager->persist($lien);
            }
            

            $manager->persist($utilisateur);
        }

        $manager->flush();
    }
}
