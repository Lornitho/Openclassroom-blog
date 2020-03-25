<?php
namespace App\src\DAO;
use App\src\model\Commentaire;

class CommentDAO extends DAO
{
    private function buildObject($row)
    {
        $comment= new Commentaire;
        $comment->setId($row['id']);
        $comment->setUsername($row['username']);
        $comment->setText($row['text']);
        $comment->setDateComment($row['datecomment']);
        $comment->setIdbillet($row['idbillet']);
        return $comment;

    }
   public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT * FROM commentaire WHERE idbillet =  ? ORDER BY datecomment DESC';
        $result=$this->createQuery($sql, [$articleId]);
        $commentaires=[];
        foreach($result as $row)
        {
            $commentaireId=$row['id'];
            $commentaires[$commentaireId]=$this->buildObject($row);

            
        }
        $result->closeCursor();
        return $commentaires;
    }
    
}