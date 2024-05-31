<?php
namespace App\Tests\Controller;

use App\Tests\Controller\Base\BaseWebTestCase;

class HomeControllerTest extends BaseWebTestCase
{
    public function testHome()
    {
        $client = static::createClient();
        $uri = $client->getContainer()->get('router')->generate('home');
        $crawler = $client->request('GET', $uri);
        
        $this->assertResponseIsSuccessful();
        $this->assertNavbarIsDisplayed($this, $crawler);
    }


}
