<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class StartingController extends GuzzleController
{
    public function chooseCharacter()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['username'])) {
                // Tape un username
                $_SESSION['username1']=$_POST['username1'];
                $_SESSION['username2']=$_POST['username2'];
            }
                // Recupère l'id personnage
            $_SESSION['userId1'] = $_POST['userId1'];
            $_SESSION['userId2'] = $_POST['userId2'];
        }
        // Affiche 4 cartes de personnages aléatoire pour le joueur 1
        $list1 = [];
        $idList1 = [];
        while (count($idList1) < 4) {
            $character1 = $this->characterRandom();
            if (!in_array($character1['id'], $idList1)) {
                $idList1[] = $character1['id'];
                $list1[] = $character1;
            }
        }
        // Affiche 4 cartes de personnages aléatoire pour le joueur 2
        $list2 = [];
        $idList2 = [];
        while (count($idList2) < 4) {
            $character2 = $this->characterRandom();
            if (!in_array($character2['id'], $idList2)) {
                $idList2[] = $character2['id'];
                $list2[] = $character2;
            }
        }
        return $this->twig->render('Home/form.html.twig', ['characters1' => $list1, 'characters2' => $list2]);
    }
}
