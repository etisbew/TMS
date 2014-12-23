<?php
namespace TMS\UserJoinPageBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use TMS\UserJoinPageBundle\Entity\UserType;
 
class LoadUserTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $artist = new UserType();
        $artist->setName('Artist');
 
        $fan = new UserType();
        $fan->setName('Fan');
 
        $lyricist = new UserType();
        $lyricist->setName('Lyricist');
 
        $em->persist($artist);
        $em->persist($fan);
        $em->persist($lyricist);
        //$em->persist($administrator);
        $em->flush();
 
        $this->addReference('category-artist', $artist);
        $this->addReference('category-fan', $fan);
        $this->addReference('category-lyricist', $lyricist);
        //$this->addReference('category-administrator', $administrator);
    }
 
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
?>