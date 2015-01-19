<?php
namespace TMS\UserJoinPageBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use TMS\UserJoinPageBundle\Entity\User;
 
class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
         $user1 = new User();
         $user1->setUserType(5);
         $user1->setNickName('Meera');
         $user1->setFirstName('Archana');
         $user1->setLastName('Sahoo');
         $user1->setEmail('archana.s@etisbew.com');
         $user1->setPassword('welcome');
         $user1->setSalt('Test salt');
		 $user1->setRoles('ROLE_USER');
         $user1->setStatus('Active');
         $user1->setIdChatStatus(1);
         $user1->setSex('Female');
         $user1->setDescriptionMe('Description');
         $user1->setCountry('India');
         $user1->setCity('Hyd');
         $user1->setDateOfBirth(new \DateTime('2005-12-01'));
		 $user1->setDateReg(new \DateTime());
         $user1->setDateLastLogin(new \DateTime());
      //   $user1->setType('User');
         $user1->setFacebookUrl('fb.com');
         $user1->setTwitterUrl('tw.com');
         $user1->setYoutubeUrl('you.com');
         $user1->setMyspaceUrl('my.com');
         $user1->setIdPaypal('id paypal');
         $user1->setIdMedia(1);
         $user1->setRecordLabel('record label');
		 $user1->setIdMusicGenre(1);
		 
		 $user2 = new User();
         $user2->setUserType(6);
         $user2->setNickName('Anu');
         $user2->setFirstName('Anu');
         $user2->setLastName('reddy');
         $user2->setEmail('anu@test.com');
         $user2->setPassword('welcome');
         $user2->setSalt('Test salt');
		 $user2->setRoles('ROLE_USER');
         $user2->setStatus('Active');
         $user2->setIdChatStatus(1);
         $user2->setSex('Female');
         $user2->setDescriptionMe('Description');
         $user2->setCountry('India');
         $user2->setCity('Hyd');
         $user2->setDateOfBirth(new \DateTime('2005-12-01'));
		 $user2->setDateReg(new \DateTime());
         $user2->setDateLastLogin(new \DateTime());
        // $user2->setType('User');
         $user2->setFacebookUrl('fb.com');
         $user2->setTwitterUrl('tw.com');
         $user2->setYoutubeUrl('you.com');
         $user2->setMyspaceUrl('my.com');
         $user2->setIdPaypal('id paypal');
         $user2->setIdMedia(1);
         $user2->setRecordLabel('record label');
		 $user2->setIdMusicGenre(1);
 
         $em->persist($user1);
         $em->persist($user2);
         $em->flush();
    }
 
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
?>