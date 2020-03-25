<?php

namespace App\src\controller;
use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;
use App\src\model\View;
use App\src\controller\Controller;

class FrontController extends Controller
{
    

    public function home()
    {
        $articles = $this->articleDAO->getArticles();
        return $this->view->render('home', [
            'articles' => $articles
        ]);
    }

    public function article($articleId)
    {
        $articleDAO=new ArticleDAO;
        $commentDAO=new CommentDAO;
        $view=new View; 
        $article = $articleDAO->getArticle($articleId);
        $comments = $commentDAO->getCommentsFromArticle($articleId);
        return $view->render('billet', [
            'article' => $article,
            'comments' => $comments
        ]);
    }
}

