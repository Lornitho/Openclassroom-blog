<?php
namespace App\src\DAO;
use App\src\model\Article;
use App\config\Parameter;
class ArticleDAO extends DAO
{
    private function buildObject($row)
    {
        $article = new Article();
        $article->setId($row['id']);
        $article->setTitre($row['titre']);
        $article->setText($row['description']);
        $article->setDateAjout($row['dateAjout']);
        return $article;
    }


    public function getArticles()
    {
        $sql = 'SELECT * FROM billet ORDER BY dateAjout DESC';
        $result = $this->createQuery($sql);
        $articles = [];
        foreach ($result as $row){
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
    } 

    public function getArticle($articleId)
    {
        $sql = 'SELECT * FROM billet WHERE id = ?';
        $result = $this->createQuery($sql, [$articleId]);
        $article = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($article);
    }
    public function addArticle($article)
    {
        //Permet de récupérer les variables $title, $content
        extract($article);
        $sql = 'INSERT INTO billet (titre, description, dateAjout, idUser) VALUES (?, ?, NOW(),1)';
        $this->createQuery($sql, [$titre, $description]);
    }
    
}