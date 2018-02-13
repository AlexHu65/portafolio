<?php

/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 7/27/2017
 * Time: 6:27 PM
 */

use GuzzleHttp\Client;

class Guzzle extends CI_Controller
{
    public function request($url = 'http://httpbin.org', $uri = '/html')
    {

        $client = new Client(['base_uri' => $url]);
        $response = $client->get($uri);
        echo $response->getBody();
    }


    public function curl(){


    }


}