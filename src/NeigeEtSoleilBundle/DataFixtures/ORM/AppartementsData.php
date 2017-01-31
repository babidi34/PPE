<?php

namespace NeigeEtSoleilBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use NeigeEtSoleilBundle\Entity\TypeAppartement;

class TypeAppartementData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $typeAppartement1 = new TypeAppartement();
        $typeAppartement1->setDescriptif('Studio');
        $manager->persist($typeAppartement1);
  
        $typeAppartement2 = new TypeAppartement();
        $typeAppartement2->setDescriptif('F2');
        $manager->persist($typeAppartement2);        
        
        $manager->flush();
        
        $this->addReference('typeAppartement1', $typeAppartement1);
        $this->addReference('typeAppartement2', $typeAppartement2);
    }
    
    public function getOrder()
    {
        return 1;
    }
}
