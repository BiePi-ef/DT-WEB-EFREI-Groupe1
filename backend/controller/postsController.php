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

    public function createPost(){

        if(isset($_POST['title']))
        {
            echo "works";
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
                // $this->();

            }

        }
        else{
            include_once './createPost.php';
        }

    }

    public function getPosts()
    {
        $posts = $this->model->getPosts();
        $imagesArray = [];

        for ($i = 0; $i<count($posts); $i ++)
        {
            $imagesArray = $this->getImagesByIdPost($posts[$i]['id_post']);

            $posts[$i]['images'] = [];
            foreach ($imagesArray as $imageArray)
            {
                array_push($posts[$i]['images'], $imageArray['link_image']);
            }
        }

        // quand la page d'accueil a chargé :
        $link = "";
        // si l'user est connecté :
        if (isset($_SESSION['user'])){
            $link = '?page=createPost';
        } else
        {
            $link = '?page=loginUser';
        }
        include_once './accueil.php';
    }

    // public function getPostByUser($id)
    // {
    //     $posts = $this->model->getPostsByUser($id);
    //     include_once 'view/article.php';
    // }

    public function getImagesByIdPost($id)
    {
        return $this->model->getImagesByIdPost($id);
    }
}
