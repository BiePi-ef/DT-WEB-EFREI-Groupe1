<?php
include_once '../backend/bdd/bdd.php';

class PostsModel {
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
        $query = "SELECT p.id_post, p.title, p.content, p.date_create FROM posts AS p
                    INNER JOIN users AS u ON u.id_user = p.id_user
                    ORDER BY p.date_create DESC 
                    LIMIT 50;";
        return $this->bdd->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getImagesByIdPost($id)
    {
        $query = "SELECT link_image FROM images
                    WHERE id_post = '$id'";
        return $this->bdd->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPostsByUser($id)
    {
        return $this->bdd->query("SELECT * FROM posts WHERE id_user=$id")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRecentPosts() {
        $query = "SELECT p.id_post, p.title, p.content, p.date_create, i.link_image
                  FROM posts p 
                  LEFT JOIN images i ON p.id_post = i.id_post 
                  ORDER BY p.date_create DESC 
                  LIMIT 10";
        $stmt = $this->bdd->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletePostById($id)
    {
        $query = "DELETE FROM posts WHERE id_post = $id;";
        return $this->bdd->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

}