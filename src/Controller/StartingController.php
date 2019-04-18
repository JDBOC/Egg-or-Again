<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use GuzzleHttp\Exception\GuzzleException;
use Twig_Error_Loader;
use Twig_Error_Runtime;
use Twig_Error_Syntax;

class StartingController extends GuzzleController
{
    /**
     * @return string
     * @throws GuzzleException
     * @throws Twig_Error_Loader
     * @throws Twig_Error_Runtime
     * @throws Twig_Error_Syntax
     */
    public function chooseCharacter()
    {
        // Affiche 4 cartes de personnages aléatoire pour le joueur 1


        $idList1 = [];
        while (count($idList1 < 4)) {
            $character1 = $this->characterRandom();
            if (!in_array($character1['id'], $idList1)) {
                $idList1[] = $character1['id'];
                $list1[] = $character1;

            }
        }

        //joueur 1 en choisit 1


        // Affiche 4 cartes de personnages aléatoire pour le joueur 2

        $idList2 = [];
        while (count($idList2 < 4)) {
            $character2 = $this->characterRandom();
            if (!in_array($character2['id'], $idList2)) {
                $idList2[] = $character2['id'];
                $list2[] = $character2;
            }
        }
        //joueur 2 en choisit 1


        //La partie commence
        // Le compteur de chaque joueur s'initialise
        $compteur1 = 0;
        $compteur2 = 0;

        return $this->twig->render('Item/index.html.twig', ['characters1' => $list1], ['characters2' => $list2]);
    }
}
