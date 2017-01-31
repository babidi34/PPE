<?php

namespace NeigeEtSoleilBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use NeigeEtSoleilBundle\Entity\Appartements;

class AppartementsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $appartement1 = new Appartements();
        $appartement1->setNomImmeubleA('Test Immeuble');
        $appartement1->setPrix('60');
        $appartement1->setSuperficie('40');
        $appartement1->setVilleA('Test Town');
        $appartement1->setCpA('28500');
        $appartement1->setDisponible('1');
        $appartement1->setTypeAppartement($this->getReference('typeAppartement1'));
        $manager->persist($appartement1);
        
        $appartement2 = new Appartements();
        $appartement2->setNomImmeubleA('Immeuble Neige');
        $appartement2->setPrix('40');
        $appartement2->setVilleA('Test City');
        $appartement2->setCpA('95200');
        $appartement2->setSuperficie('30');
        $appartement2->setDisponible('1');
        $appartement2->setTypeAppartement($this->getReference('typeAppartement2'));
        $manager->persist($appartement2);
        
        $manager->flush();
    }
    
    public function getOrder() {
        return 2;
    }
}
