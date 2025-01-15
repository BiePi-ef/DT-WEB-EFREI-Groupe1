<?php
include_once '../backend/bdd/bdd.php';

class PostsController {
    private $bdd;

    public function __construct() {
        $this->bdd = Bdd::connexion();
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
}
