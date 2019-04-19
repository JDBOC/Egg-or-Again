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
            if (isset($_POST['btnForm1']) && $_POST['btnForm1']== true) {
                $_SESSION['username1']=$_POST['username1'];
                return $this->twig->render(
                    'Form/formDeux.html.twig',
                    ['characters1' => $_SESSION['charList1'], 'characters2' => $_SESSION['charList2']]
                );
            }
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['btnForm2']) && $_POST['btnForm2']== true) {
                $_SESSION['username2']=$_POST['username2'];
                        return $this->twig->render(
                            'Form/formTrois.html.twig',
                            ['characters1' => $_SESSION['charList1'], ['username1'=>$_SESSION['username1']]]
                        );
            }
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['btnForm3']) && $_POST['btnForm3']== true) {
                $_SESSION['userId1'] = $_POST['userId1'];
                return $this->twig->render(
                    'Form/formTrois.html.twig',
                    ['characters2' => $_SESSION['charList2'], ['username2'=>$_SESSION['username2']]]
                );
            }
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['btnForm4']) && $_POST['btnForm4']== true) {
                $_SESSION['userId2'] = $_POST['userId2'];
                return $this->twig->render('Home/game.html.twig');
            }
        }
        
        // Affiche 4 cartes de personnages aléatoire pour le joueur 1
        $list1 = [];
        $idList1 = [];
        while (count($idList1) < 4) {
            $character1 = $this->characterRandom();
            if (!in_array($character1->id, $idList1)) {
                $idList1[] = $character1->id;
                $list1[] = $character1;
            }
        }
        // Affiche 4 cartes de personnages aléatoire pour le joueur 2
        $list2 = [];
        $idList2 = [];
        while (count($idList2) < 4) {
            $character2 = $this->characterRandom();
            if (!in_array($character2->id, $idList2)) {
                $idList2[] = $character2->id;
                $list2[] = $character2;
            }
        }
        $_SESSION['charList1']=$list1;
        $_SESSION['charList2']=$list2;
        return $this->twig->render(
            'Form/formUn.html.twig',
            ['characters1' => $_SESSION['charList1'], 'characters2' => $_SESSION['charList2']]
        );
    }
}
