<?php
include_once '../backend/model/postsModel.php';

class PostsController
{
    private $model;

    // methode executé à l'instanciation
    public function __construct()
    {
        $this->model = new PostsModel;
    }

    public function getUserAccueilPage()
    {
        include_once './siteUser/indexUser.php';
    }

    public function createPost($title,$content,$id_user,$images){

        if(isset($_POST['email']))
        {   
            $title = $_POST['title'];
            $content = $_POST['content'];
            $id_user = $_POST['id_user'];
            $images = $_POST['images'];


            $isPostCreated = $this->model->createPost($title,$content,$id_user);
            // images is an array of images links
            $areImagesCreated = $this->model->addImages($images);

            if($isPostCreated)
            {
                echo "post enregistré ok";
            }
            if($areImagesCreated)
            {
                echo "</br> images enregistrées ok";
            }
            else
            {
                echo "erreur lors de l'enregistrement du post";

                // insert page creation post again
                // $this->getFromCommande();

            }

        }
        else{
            // insert page creation post again
            // $this->getFromCommande();
        }

    }

    public function getPosts()
    {
        $posts = $this->model->getPosts();
        $this->getUserAccueilPage();
    }

    public function getPostByUser($id)
    {
        $posts = $this->model->getPostsByUser($id);
        include_once 'view/article.php';
    }
}