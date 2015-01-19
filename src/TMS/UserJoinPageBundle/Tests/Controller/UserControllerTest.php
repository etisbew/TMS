<?php

namespace TMS\UserJoinPageBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Console\Input\ArrayInput;
use Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand;
use Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand;
use Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand;

class UserControllerTest extends WebTestCase
{
    
	 private $em;
    private $application;
 
    public function setUp()
    {
        static::$kernel = static::createKernel();
        static::$kernel->boot();
 
        $this->application = new Application(static::$kernel);
 
        // drop the database
        $command = new DropDatabaseDoctrineCommand();
        $this->application->add($command);
        $input = new ArrayInput(array(
            'command' => 'doctrine:database:drop',
            '--force' => true
        ));
        $command->run($input, new NullOutput());
 
        // we have to close the connection after dropping the database so we don't get "No database selected" error
        $connection = $this->application->getKernel()->getContainer()->get('doctrine')->getConnection();
        if ($connection->isConnected()) {
            $connection->close();
        }
 
        // create the database
        $command = new CreateDatabaseDoctrineCommand();
        $this->application->add($command);
        $input = new ArrayInput(array(
            'command' => 'doctrine:database:create',
        ));
        $command->run($input, new NullOutput());
 
        // create schema
        $command = new CreateSchemaDoctrineCommand();
        $this->application->add($command);
        $input = new ArrayInput(array(
            'command' => 'doctrine:schema:create',
        ));
        $command->run($input, new NullOutput());
 
        // get the Entity Manager
        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();
 
        // load fixtures
        $client = static::createClient();
        $loader = new \Symfony\Bridge\Doctrine\DataFixtures\ContainerAwareLoader($client->getContainer());
        $loader->loadFromDirectory(static::$kernel->locateResource('@TMSUserJoinPageBundle/DataFixtures/ORM'));
        $purger = new \Doctrine\Common\DataFixtures\Purger\ORMPurger($this->em);
        $executor = new \Doctrine\Common\DataFixtures\Executor\ORMExecutor($this->em, $purger);
        $executor->execute($loader->getFixtures());
    }
 
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/tms_user/');
 
        $this->assertEquals('TMS\UserJoinPageBundle\Controller\UserController::indexAction', $client->getRequest()->attributes->get('_controller'));
		
		// $crawler = $client->click($crawler->selectLink('Create a new entry')->link());
        //$this->assertTrue($crawler->filter('.users td.position:contains("Expired")')->count() == 0);
		
		$link = $crawler->filter('a')->eq(1)->link();
$crawler = $client->click($link);
    }
	


    
    public function testUserForm()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Create a new entry in the database
        $crawler = $client->request('GET', '/tms_user/new');
       // $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /tms_authors/");
     //   $crawler = $client->click($crawler->selectLink('Create a new entry')->link());
        // $this->assertEquals('TMS\AuthorsBundle\Controller\AuthorsController::newAction', $client->getRequest()->attributes->get('_controller'));
        // Fill in the form and submit it
        $form = $crawler->selectButton('Join')->form(array(
			'tms_userjoinpagebundle_user[nick_name]'  => 'anu',
			'tms_userjoinpagebundle_user[first_name]'  => 'anu',
			'tms_userjoinpagebundle_user[email]'  => 'anu@test.com',
			'tms_userjoinpagebundle_user[password][first]'  => 'welcome',
			'tms_userjoinpagebundle_user[password][second]'  => 'welcome',
			'tms_userjoinpagebundle_user[user_type]'  => 23,	
        ));

        /*$client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('td:contains("Test")')->count(), 'Missing element td:contains("Test")');

        // Edit the entity
        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Update')->form(array(
            //'tms_authorsbundle_authors[field_name]'  => 'Foo',
            // ... other fields to fill
			'tms_authorsbundle_authors[name]'  => 'Test',
				//	'tms_authorsbundle_authors[name]'  => 'Test',
					'tms_authorsbundle_authors[anonymous]'  => 'anonymous test',
					'tms_authorsbundle_authors[pseudonym]'  => 'pseudonym test',
					'tms_authorsbundle_authors[contribution]'  => 'contribution test',
					'tms_authorsbundle_authors[completed_year]'  => 1,
					'tms_authorsbundle_authors[nationality]'  => 'indian',
					'tms_authorsbundle_authors[citizen]'  => 'indian',
        ));*/

       /* $client->submit($form);
        $crawler = $client->followRedirect();

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();*/
		
		$client->submit($form);
		$this->assertEquals('TMS\UserJoinPageBundle\Controller\UserController::createAction', $client->getRequest()->attributes->get('_controller'));
		$client->followRedirect();
        $this->assertEquals('TMS\UserJoinPageBundle\Controller\UserController::showAction', $client->getRequest()->attributes->get('_controller'));
		$kernel = static::createKernel();
		$kernel->boot();
		$em = $kernel->getContainer()->get('doctrine.orm.entity_manager');
	 
		$query = $em->createQuery('SELECT count(u.id) from TMSUserJoinPageBundle:User u ');
		//$query->setParameter('location', 'Atlanta, USA');
		$this->assertTrue(0 < $query->getSingleScalarResult());
		$crawler = $client->request('GET', '/tms_user/new');
		
		$form = $crawler->selectButton('Join')->form(array(
		//'tms_authorsbundle_authors[id]'      => 1,
			'tms_userjoinpagebundle_user[nick_name]'  => 'anu',
			'tms_userjoinpagebundle_user[first_name]'  => 'anu',
			'tms_userjoinpagebundle_user[email]'  => 'anu@test.com',
			'tms_userjoinpagebundle_user[password][first]'  => 'welcome',
			'tms_userjoinpagebundle_user[password][second]'  => 'welcome',
			'tms_userjoinpagebundle_user[user_type]'  => 23,	
		));
		//var_dump($client->getResponse()->getContent());
		$crawler = $client->submit($form);
	 
		// check if we have 3 errors
		//$this->assertTrue($crawler->filter('.error_list')->count() == 3);
	 
		// check if we have error on job_description field
	//	$this->assertTrue($crawler->filter('#completed_year')->siblings()->first()->filter('.error_list')->count() == 1);
	 
		// check if we have error on job_how_to_apply field
		//$this->assertTrue($crawler->filter('#nationality')->siblings()->first()->filter('.error_list')->count() == 1);
	 
		// check if we have error on job_email field
	//	$this->assertTrue($crawler->filter('#citizen')->siblings()->first()->filter('.error_list')->count() == 1);

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
	   
	    $client->followRedirect();

    return $client;
    }
	public function createUser($values = array())
	{
		$client = static::createClient();
		$crawler = $client->request('GET', '/tms_user/new');
		$form = $crawler->selectButton('Join')->form(array_merge(array(
			'tms_userjoinpagebundle_user[nick_name]'  => 'anu',
			'tms_userjoinpagebundle_user[first_name]'  => 'anu',
			'tms_userjoinpagebundle_user[email]'  => 'anu@test.com',
			'tms_userjoinpagebundle_user[password][first]'  => 'welcome',
			'tms_userjoinpagebundle_user[password][second]'  => 'welcome',
			'tms_userjoinpagebundle_user[user_type]'  => 22,	
	  ), $values));
	 
		$client->submit($form);
		$client->followRedirect();
	 
		/*if($publish) {
		  $crawler = $client->getCrawler();
		  $form = $crawler->selectButton('Publish')->form();
		  $client->submit($form);
		  $client->followRedirect();
		}*/
	 
	  return $client;
	}
	public function testDeleteUser()
	{
		$client = $this->createUser(array('tms_userjoinpagebundle_user[first_name]' => 'neethu'));
		$crawler = $client->getCrawler();
		$form = $crawler->selectButton('Delete')->form();
		$client->submit($form);
	 
		$kernel = static::createKernel();
		$kernel->boot();
		$em = $kernel->getContainer()->get('doctrine.orm.entity_manager');
	 
		$query = $em->createQuery('SELECT count(u.id) from TMSUserJoinPageBundle:User u WHERE u.first_name = :first_name');
		$query->setParameter('first_name', 'neethu');
		$this->assertTrue(0 == $query->getSingleScalarResult());
		//$this->assertTrue(0 < $query->getSingleScalarResult());
		 $client->followRedirect();

    return $client;
	}
	/*public function testEditUser()
	{
		$client = $this->createUser(array('tms_userjoinpagebundle_user[first_name]' => 'anu'));
		$crawler = $client->getCrawler();
		$crawler = $client->request('GET', sprintf('/tms_user/%s/edit', $this->getUserById('anu')));
		$this->assertTrue(404 === $client->getResponse()->getStatusCode());
	}*/
}
