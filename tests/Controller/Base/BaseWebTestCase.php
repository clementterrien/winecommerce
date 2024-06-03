<?php

namespace App\Tests\Controller\Base;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class BaseWebTestCase extends WebTestCase
{

    use NavbarTestTrait;

}


trait NavbarTestTrait
{
    protected function assertNavbarIsDisplayed(WebTestCase $testCase, $crawler): void
    {
        // Check that the navbar container exists
        $navbarContainer = $crawler->filter('div#navbar-container')->first();
        $testCase->assertNotNull($navbarContainer);

        // Check that the navbar container exists
        $navbarElement = $crawler->filter('nav#my-navbar')->first();
        $testCase->assertNotNull($navbarElement);
    
    }
}


