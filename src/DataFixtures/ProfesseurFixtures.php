<?php

namespace App\DataFixtures;

use App\Entity\Professeur;
use App\Entity\Module;
use App\Repository\ProfesseurRepository;
use App\Repository\ModuleRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class ProfesseurFixtures extends Fixture 
{

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $data = [
            [
                "nomComplet" => "Baila Wane",
                "isArchived"  => false
            ],
            [
                "nomComplet" => "Djiby Niang",
                "isArchived"  => false
            ],
            [
                "nomComplet" => "Issa Sow",
                "isArchived"  => false
            ],
            [
                "nomComplet" => "Lamine Kane",
                "isArchived"  => false
            ]
        ];

        foreach ($data as $i => $profData) {
                $professeur = new Professeur();
                $professeur->setNomComplet($profData["nomComplet"]);
                $professeur->setIsArchived($profData["isArchived"]);

                $manager->persist($professeur);
                //stocker la ref pour le reuse dans module
                $this->addReference("Professeur".$i, $professeur);
            }
            $manager->flush();
    }





}
