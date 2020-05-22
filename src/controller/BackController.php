<?php

namespace App\src\Controller;

use App\config\Parameter;

class BackController extends Controller
{
    /*
    * Page d'adminsitration
    */
    public function administration()
    {

        if(!$this->session->get('id'))
        {
            return $this->view->render('error404');
        }
        $articles = $this->article->getArticles();
        $comments = $this->comment->getFlagComments();
        return $this->view->render('administration', [
            'articles' => $articles,
            'comments' => $comments
        ]);
    }
    public function showAllArticles()
    {
        $articles = $this->article->getArticles();
        return $this->view->render('articles', [
            'articles' => $articles,
        ]);
    }


    public function addArticle(Parameter $post)
    {
       

        if(!$this->session->get('id')){
            return $this->view->render('error404');
        }
        if($post->get('submit')){
           
            $this->article->addArticle($post);

            $this->session->set('add_article', 'Le nouvel article a bien été ajouté');
            header('Location: ../public/index.php?route=administration');
        }
        return $this->view->render('add_article', [
            'post' => $post
        ]);
    }
    public function editArticle(Parameter $post, $articleId)
    {
       
        if(!$this->session->get('id'))
        {
            return $this->view->render('error404');
        }

        $article = $this->article->getArticle($articleId);
        if($post->get('submit')) {
    
            $this->article->editArticle($post, $articleId);
            $this->session->set('edit_article', 'L\' article a bien été modifié');
            header('Location: ../public/index.php?route=administration');
        }

        return $this->view->render('edit_article', [
            'article' => $article
        ]);
    }
    public function deleteArticle($articleId)
    {
        if(!$this->session->get('id')){
            return $this->view->render('error404');
        }
        $this->article->deleteArticle($articleId);
        $this->session->set('delete_article', 'L\' article a bien été supprimé');
        header('Location: ../public/index.php?route=administration');
    }

    public function deleteComment($commentId)
    {
        if(!$this->session->get('id')){
            return $this->view->render('error404');
        }
        $this->comment->deleteComment($commentId);
        $this->session->set('delete_comment', 'Le commentaire a bien été supprimé');
        header('Location: ../public/index.php');
    }
    public function unflagComment($commentId)
    {
        if(!$this->session->get('id')){
            return $this->view->render('error404');
        }
        $this->comment->unflagComment($commentId);
        $this->session->set('unflag_comment', 'Le commentaire a bien été désignalé');
        header('Location: ../public/index.php?route=administration');
    }

    public function profile()
    {
        if(!$this->session->get('id')){
            return $this->view->render('error404');
        }
        return $this->view->render('profile');
    }
    public function updatePassword(Parameter $post)
    {
        if($post->get('submit')) {
            $this->user->updatePassword($post, $this->session->get('username'));
            $this->session->set('update_password', 'Le mot de passe a été mis à jour');
            header('Location: ../public/index.php?route=profile');
        }
        return $this->view->render('update_password');
    }
    public function logout()
    {
        $this->session->stop();
        $this->session->start();
        $this->session->set('logout', 'À bientôt');
        header('Location: ../public/index.php');
    }
}