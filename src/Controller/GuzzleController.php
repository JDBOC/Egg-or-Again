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
    /**
     * @return mixed
     * @throws
     */
    public function allEggs()
    {
        $client = new Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/',]);

        $response = $client->request('GET', 'eggs/');
        $body = $response->getBody();
        $eggs=json_decode($body->getContents());


        return $eggs;
    }

    /**
     * @param $id
     * @return mixed
     * @throws
     */
    public function eggId($id)
    {
        $client = new Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/',]);
        $uri='eggs/'.$id;
        $response = $client->request('GET', $uri);
        $body = $response->getBody();
        $eggs=json_decode($body->getContents());


        return $eggs;
    }

    /**
     * @return mixed
     * @throws
     */
    public function eggRandom()
    {
        $client = new Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/',]);

        $response = $client->request('GET', 'eggs/random');
        $body = $response->getBody();
        $eggs=json_decode($body->getContents());


        return $eggs;
    }

    /**
     * @return mixed
     * @throws
     */
    public function allCharacters()
    {
        $client = new Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/',]);

        $response = $client->request('GET', 'characters/');
        $body = $response->getBody();
        $eggs=json_decode($body->getContents());


        return $eggs;
    }

    /**
     * @param $id
     * @return mixed
     * @throws
     */
    public function characterId($id)
    {
        $client = new Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/',]);
        $uri='character/'.$id;
        $response = $client->request('GET', $uri);
        $body = $response->getBody();
        $eggs=json_decode($body->getContents());


        return $eggs;
    }

    /**
     * @return mixed
     * @throws
     */
    public function characterRandom()
    {
        $client = new Client(['base_uri' => 'http://easteregg.wildcodeschool.fr/api/',]);

        $response = $client->request('GET', 'characters/random');
        $body = $response->getBody();
        $eggs=json_decode($body->getContents());


        return $eggs;
    }



}