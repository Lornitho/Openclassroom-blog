<?php
namespace App\config;
use App\src\controller\BackController;
use App\src\controller\ErrorController;
use App\src\controller\FrontController;
use Exception;

class Router
{
    private $frontController;
    private $backController;
    private $errorController;
    private $request;
    
    public function __construct()
    {
        $this->request = new Request();
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->errorController = new ErrorController();
        
    }
    public function run()
    {
        $this->request->getSession()->set('test', 'value');
        var_dump($this->request->getSession()->get('test'));
    
        
        
        
        $route = $this->request->getGet()->get('route');
        

        try{
            if(isset($route))
            {
                if($route=== 'billet'){
                    $this->frontController->article($this->request->getGet()->get('articleId'));
                }
                elseif($route === 'addArticle'){
                    $this->backController->addArticle($this->request->getPost());
                }

                else{
                    echo 'page inconnue';
                }
            }
            else{
                require '../templates/home.php';
            }
        }
        catch (Exception $e)
        {
            echo 'Erreur';
        }
    }
}