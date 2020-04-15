<?php
namespace App\src\controller;

use App\config\Parameter;

class FrontController extends Controller
{

    public function home()
    {
        $articles = $this->article->getArticles();
        return $this->view->render('home', [
            'articles' => $articles
        ]);
    }

    public function article($articleId)
    {
        $article = $this->article->getArticle($articleId);
        $comments = $this->comment->getCommentsFromArticle($articleId);
        return $this->view->render('single', [
            'article' => $article,
            'comments' => $comments
        ]);
    }
    public function addComment(Parameter $post, $articleId)
    {
        if($post->get('submit')) {
            $this->comment->addComment($post, $articleId);
            $this->session->set('add_comment', 'Le nouveau commentaire a bien été ajouté');
            header('Location: ../public/index.php?route=article&articleId='.$articleId);
        }
    }
    public function flagComment($commentId)
    {
        $this->comment->flagComment($commentId);
        $this->session->set('flag_comment', 'Le commentaire a bien été signalé');
        header('Location: ../public/index.php');
    }
    public function register(Parameter $post)
    {
        
        if($post->get('submit')) {
            $this->user->register($post);
            $this->session->set('register', 'Votre inscription a bien été effectuée');
            header('Location: ../public/index.php');    
        }
        return $this->view->render('register');
    }
    public function login(Parameter $post)
    {
        if($post->get('submit')) {
            $result = $this->user->login($post);
            if($result ['isPasswordValid']) {
                $this->session->set('login', 'Content de vous revoir');
                $this->session->set('id', $result['result']->id);
                $this->session->set('username', $post->get('username'));
                header('Location: ../public/index.php');
            }
            else {
                $this->session->set('error_login', 'Le pseudo ou le mot de passe sont incorrects');
                return $this->view->render('login', [
                    'post'=> $post
                ]);
            }
        }
        return $this->view->render('login');
    }
    public function contact(){
        mail('alemanpierre@gmail.com', 'formulaire de contact','test');
    }
}