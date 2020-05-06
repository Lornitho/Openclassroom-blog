<?php

namespace App\src\Controller;

use App\src\Manager\Article;
use App\src\Manager\Comment;
use App\src\Manager\User;
use App\config\Request;
use App\src\Model\View;


abstract class Controller
{
    protected $article;
    protected $comment;
    protected $user;
    protected $view;
    private $request;
    protected $get;
    protected $post;
    protected $session;

    public function __construct()
    {
        $this->article = new Article();
        $this->comment = new Comment();
        $this->user = new User();
        $this->view = new View();
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
    }
}