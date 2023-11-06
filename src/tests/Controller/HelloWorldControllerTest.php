<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloWorldControllerTest extends WebTestCase
{
    public function testHelloPage()
    {
        $client = static::createClient();
        $client->request('GET', '/hello/world'); // Выполнение GET-запроса на URL /hello/world

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertSelectorTextContains('h1', 'HelloWorldController');
    }
}
