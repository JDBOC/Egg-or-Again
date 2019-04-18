<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use GuzzleHttp\Client;

class GuzzleController extends AbstractController
{

    public function allEggs()
    {
        $client = new Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/',]);

        $response = $client->request('GET', 'eggs/');
        $body = $response->getBody();
        $eggs=json_decode($body->getContents());


        return $eggs;
    }


    public function eggId($id)
    {
        $client = new Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/',]);
        $uri='eggs/'.$id;
        $response = $client->request('GET', $uri);
        $body = $response->getBody();
        $eggs=json_decode($body->getContents());


        return $eggs;
    }


    public function eggRandom()
    {
        $client = new Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/',]);

        $response = $client->request('GET', 'eggs/random');
        $body = $response->getBody();
        $eggs=json_decode($body->getContents());


        return $eggs;
    }


    public function allCharacters()
    {
        $client = new Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/',]);

        $response = $client->request('GET', 'characters/');
        $body = $response->getBody();
        $chars=json_decode($body->getContents());


        return $chars;
    }


    public function characterId($id)
    {
        $client = new Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/',]);
        $uri='characters/'.$id;
        $response = $client->request('GET', $uri);
        $body = $response->getBody();
        $chars=json_decode($body->getContents());


        return $chars;
    }


    public function characterRandom()
    {
        $client = new Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/',]);

        $response = $client->request('GET', 'characters/random');
        $body = $response->getBody();
        $chars=json_decode($body->getContents());


        return $chars;
    }
}
