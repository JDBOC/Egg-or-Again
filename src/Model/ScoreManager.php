<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace App\Model;

/**
 *
 */
class ScoreManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'score';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }


    /**
     * @param array $score
     * @return int
     */
    public function insert(array $score): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO $this->table (name1, name2, score1, score2)
         VALUES (:name1, :name2, :score1, :score2)");
        $statement->bindValue('name1', $score['player1'], \PDO::PARAM_STR);
        $statement->bindValue('name2', $score['player2'], \PDO::PARAM_STR);
        $statement->bindValue('score1', $score['score1'], \PDO::PARAM_INT);
        $statement->bindValue('score2', $score['score2'], \PDO::PARAM_INT);

        if ($statement->execute()) {
            return (int)$this->pdo->lastInsertId();
        }
    }
}
