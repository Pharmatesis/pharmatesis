<?php
require_once 'model/PharmatesisModel.php';

/**
 * Main controller
 * @name MainController.php
 * @author Jonathan Lozano
 * @date 2017-02-23
 * @version 1.0
 */
class MainController {

    /**
     * The model that gives data services
     * @var ArticleModel
     */
    private $model;

    function __construct() {
        $this->model = new PharmatesisModel();
    }

    //put your code here
    public function processRequest() {
        $action = "";
        //retrieve action from client.
        if (filter_has_var(INPUT_GET, 'action')) {
            $action = filter_input(INPUT_GET, 'action');
        }

        switch ($action) {
            case 'login':
                $this->login(); 
                break;
            case 'register':
                $this->register(); //list all articles
                break;
            case 'articleForm':
                $this->articleForm(); //show a form for an article
                break;
            case 'add':
                $this->add();
                break;
            case 'remove':
                $this->removeArticle();
                break;
            case 'modify':
                $this->modifyArticle();
                break;
            case 'listCategoryForm':
                $this->listCategoryForm();
                break;
            case 'listCategory':
                $this->listCategory();
                break;
            default :
                break;
        }
    }

    /**
    * Method to show login view
    * @name login
    * @author Jonathan Lozano
    * @date 2017-02-23
    * @version 1.0
    */
    public function login() {
        //TODO
        include 'views/login.php';
    }

    /**
    * Method to show register view
    * @name login
    * @author Jonathan Lozano
    * @date 2017-02-23
    * @version 1.0
    */
    public function register() {
        
        include 'views/register.php';
    }    
    
    /**
     * List all articles.
     */
    public function listAll() {
        $articleList = null;
        $articleList = $this->model->searchAll();
        include 'views/list-articles.php';
    }

    /**
     * List articles by category founded.
     */
    public function listCategory() {
        $category = ArticleFormValidation::getCategory();
        $articleList = false;
        
        if(!is_null($category)){
            $articleList = $this->model->searchCategory($category);
        }
        if($articleList){
            include 'views/list-articles.php';
        }else{
            $err = "Category not found";
            include 'views/list-category-form.php';
        }
    }

    /**
     * adds the article sent by article form to data source
     */
    public function add(){
        $article = ArticleFormValidation::getData();
        $add = null;
        
        if(!is_null($article)){
            $add = $this->model->add($article);
        }
        if($add){
            $msg = "Article successfully added";
        }else{
            $err = "Error adding article";
        }
        include 'views/article-form.php';
    }
    
    /**
     * remove the article sent by article form from data source
     */
    public function removeArticle(){
        $article = ArticleFormValidation::getDataId();
        $remove = false;
        if(!is_null($article)){
            $remove = $this->model->remove($article);
        }
        if($remove){
            $msg = "Article successfully removed";
        }else{
            $err = "Error removing article";
        }
        include 'views/article-form.php';
    }
    
    /**
     * find the article sent by article form from data source 
     */
    public function findArticle() {
        $article = ArticleFormValidation::getDataId();
        $result = null;
        if(!is_null($article)){
            $result = $this->model->searchById($article);
        }
        if(is_null($result)){
            $err = 'Article not found in our DDBB';
        }
        include 'views/article-form.php';
    }
    
    /**
     * modify the article sent by article form from data source
     */
    public function modifyArticle() {
        
        $article = ArticleFormValidation::getData();
        $mod = false;
        if(!is_null($article)){
            $mod = $this->model->modify($article);
        }
        if($mod){
            $msg = 'Article updated correctly';
        }else{
            $err = 'Error updating article';
        }
        include 'views/article-form.php';
    }

}
