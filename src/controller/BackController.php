<?php

namespace App\src\controller;

use App\config\Parameter;
use App\src\DAO\ArticleDAO;
use App\src\model\View;

class BackController extends Controller
{
    
    public function addArticle($post)
    {
        
        $articleDAO=new ArticleDAO;
        $view=new View; 
        $parameter=new Parameter($post);
        if($parameter->get('submit')) {
            $articleDAO->addArticle($post);
            $this->session->set('add_article', 'Le nouvel article a bien été ajouté');
            header('Location: ../public/index.php');
        }
        
        return $view->render('add_article', [
            'post' => $post
        ]);
    }
}

