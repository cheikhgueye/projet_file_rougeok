<?php

namespace KEURGUI\immoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class frontControllerTest extends WebTestCase
{
    public function testSearchbien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'front/bien/search');
    }

}
