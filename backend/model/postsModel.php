<?php
include_once '../backend/bdd/bdd.php';

class PostsModel
{
    private $bdd;

    public function __construct()
    {
       $this->bdd = Bdd::connexion();
    }

    public function createPost($title,$content,$id_user)
    {
        $user = $this->bdd->prepare("INSERT INTO posts(title, content, id_user) VALUES (?,?,?);");
        return $user->execute([$title,$content,$id_user]);
    }

    public function addImages($images){

        $id_user = $_SESSION['user']['id_user'];
        $query = "INSERT INTO posts(link_image, id_user) VALUES ";
        $queryParts = [];
        $queryExecute = [];

        foreach ($images as $image)
        {
            // $queryParts[] = "('" . $image . "'," . $id_user . ")";
            $queryParts[] = "(?,?)";            
            
            $queryPartsExecute[] = $image;
            $queryPartsExecute[] = $id_user;
        }
        $fullQuery = $query . implode(',', $queryParts);
        
        $request = $this->bdd->prepare($fullQuery);
        return $request->execute($queryPartsExecute);
    }

    public function getPosts()
    {
        return $this->bdd->query("SELECT posts.*, users.* FROM posts INNER JOIN users ON users.id_user = posts.id_user;")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPostsByUser($id)
    {
        return $this->bdd->query("SELECT * FROM posts WHERE id_user=$id")->fetchAll(PDO::FETCH_ASSOC);
    }

}

// test 
/*
$articles = new ArticlesModel;
var_dump($articles->getArticles());
*/