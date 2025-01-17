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

        if(isset($_POST['createPost']))
        {
            // echo var_dump($_POST['images_url']);

            echo "works";
            $title = $_POST['title'];
            $content = $_POST['content'];
            $id_user = $_SESSION['user']['id_user'];
            // $images = $_POST['images'];


            $isPostCreated = $this->model->createPost($title,$content,$id_user);
            // images is an array of images links
            // $areImagesCreated = $this->model->addImages($images);

            if($isPostCreated)
            {
                echo "post enregistré ok";
                // if($areImagesCreated)
                // {
                //     echo "</br> images enregistrées ok";
                // }
                header("Location: indexUser.php");
            }
            else
            {
                echo "erreur lors de l'enregistrement du post";
                include_once './createPost.php';
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

        // pour supprimer un post :
        // filter_input(INPUT_TYPE, 'CONTENT') permet d'acceder à $_TYPE['content'] de manière sécurisée.
        if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST' and isset($_POST['deletePost']))
        {
            if ($this->deletePostById($_POST['id_post']))
            {
                echo 'Le post ' . $_POST['post_title'] . ' a été supprimé avec succès !';
            }
            else
            {
                // echo 'ey';
            }
            unset($_POST['deletePost']);
            $this->getPosts();
        }

        include_once './accueil.php';
    }

    // public function getPostByUser($id)
    // {
    //     $posts = $this->model->getPostsByUser($id);
    //     include_once 'view/article.php';
    // }
    public function getUserPosts()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: login.php");
            exit();
        }
        
        $id_user = $_SESSION['user']['id_user'];
        $posts = $this->model->getPostsByUser($id_user);
        
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

        // Incluez la vue pour afficher les posts
        include_once './yourPosts.php';
    }


    public function getImagesByIdPost($id)
    {
        return $this->model->getImagesByIdPost($id);
    }

    public function deletePostById($id)
    {
        return $this->model->deletePostById($id);
    }
}
