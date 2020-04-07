<?php
namespace App\src\Manager;

use App\src\Model\CommentModel;
use App\config\Parameter;

class Comment extends Database
{
    private function buildObject($row)
    {
        $comment = new CommentModel();
        $comment->setId($row->id);
        $comment->setPseudo($row->pseudo);
        $comment->setContent($row->content);
        $comment->setCreatedAt($row->createdAt);
        $comment->setFlag($row->flag);
        return $comment;
    }

    public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT * FROM comment WHERE article_id = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql, [$articleId]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row->id;
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }
    public function addComment(Parameter $post, $articleId)
    {
        $sql = 'INSERT INTO comment (pseudo, content, createdAt, flag, article_id) VALUES (?, ?, NOW(), ?, ?)';
        $this->createQuery($sql, [$post->get('pseudo'), $post->get('content'), 0, $articleId]);
    }
    public function flagComment($commentId)
    {
        $sql = 'UPDATE comment SET flag = ? WHERE id = ?';
        $this->createQuery($sql, [1, $commentId]);
    }

    public function deleteComment($commentId)
    {
        $sql = 'DELETE FROM comment WHERE id = ?';
        $this->createQuery($sql, [$commentId]);
    }
}