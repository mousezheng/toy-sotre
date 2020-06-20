<?php

/**
 * Created by : PhpStorm
 * User: mousezheng
 * Date: 2020/6/20
 * Time: 下午2:10
 */

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UrlTest extends WebTestCase
{
    public function testGet()
    {
        $client = static::createClient();
        $id     = time();
        $client->request('Post', sprintf('/url/toy/%d', $id));
        self::assertEquals(200, $client->getResponse()->getStatusCode());
        self::assertEquals(json_encode([$id]), $client->getResponse()->getContent());
    }

    //    public function testPost()
    //    {
    //    }
    //
    //    public function testDelete()
    //    {
    //    }
}
