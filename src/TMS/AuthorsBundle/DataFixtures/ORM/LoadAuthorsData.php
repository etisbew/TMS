<?php
namespace TMS\AuthorsBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use TMS\AuthorsBundle\Entity\Authors;
 
class LoadAuthorsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
         $authors1= new Authors();
         $authors1->setUser('fdf');
         $authors1->setParentSubmission('test');
         $authors1->setName('varsha');
         $authors1->setDOB(new \DateTime('1992-08-07'));
         $authors1->setDeadWhen(new \DateTime('1950-12-01'));
         $authors1->setAnonymous('welcome');
         $authors1->setPseudonymousn('Test salt');
         $authors1->setPseudonym('Active');
         $authors1->setContribution('text');
         $authors1->setCompletedYear(1);
         $authors1->setPublishedWhen(new \DateTime('2000-12-01'));
         $authors1->setPublishedWhere('India');
         $authors1->setIsbn('Hyd');
         $authors1->setNationality('indian');
		 $authors1->setCitizen('indian');
         
        
		 
    	 $authors2= new Authors();
         $authors2->setUser('ghh');
         $authors2->setParentSubmission('test');
         $authors2->setName('Archana');
         $authors2->setDOB(new \DateTime('1950-12-01'));
         $authors2->setDeadWhen(new \DateTime('1960-12-01'));
         $authors2->setAnonymous('welcome');
         $authors2->setPseudonymousn('Test salt');
         $authors2->setPseudonym('Active');
         $authors2->setContribution('text');
         $authors2->setCompletedYear(1);
         $authors2->setPublishedWhen(new \DateTime('2000-12-01'));
         $authors2->setPublishedWhere('India');
         $authors2->setIsbn('Hyd');
         $authors2->setNationality('indian');
		 $authors2->setCitizen('indian');

 
         $em->persist($authors1);
         $em->persist($authors2);
         $em->flush();
    }
 
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
?>