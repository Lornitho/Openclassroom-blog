<?php

namespace App\src\Manager;

use App\config\Parameter;
use App\src\Model\ArticleModel;

class Article extends Database
{
    private function buildObject($row)
    {
        $article = new ArticleModel();
        $article->setId($row->id);
        $article->setTitle($row->title);
        $article->setContent($row->content);
        $article->setCreatedAt($row->createdAt);
        return $article;
    }
  

    public function getArticles()
    {
        $sql = 'SELECT * FROM article ORDER BY id DESC';
        $result = $this->createQuery($sql);
        $articles = [];
        foreach ($result as $row){
            $articleId = $row->id;
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
    }

    public function getArticle($articleId)
    {
        $sql = 'SELECT * FROM article WHERE id = ?';
        $result = $this->createQuery($sql, [$articleId]);
        $article = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($article);
    }

    public function addArticle(Parameter $post)
    {
       
        $sql = 'INSERT INTO article (title, content, createdAt) VALUES (?, ?, NOW())';
        $this->createQuery($sql, [$post->get('title'), $post->get('content')]);
       
    }
    public function editArticle(Parameter $post, $articleId)
    {
        $sql = 'UPDATE article SET title=:title, content=:content WHERE id=:articleId';
        $this->createQuery($sql, [
            'title' => $post->get('title'),
            'content' => $post->get('content'),
            'articleId' => $articleId
        ]);
    }
    public function deleteArticle($articleId)
    {
        $sql = 'DELETE FROM comment WHERE article_id = ?';
        $this->createQuery($sql, [$articleId]);
        $sql = 'DELETE FROM article WHERE id = ?';
        $this->createQuery($sql, [$articleId]);
    }
}