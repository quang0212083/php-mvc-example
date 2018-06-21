<?php

class Post {
    // we define 5 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $first_name;
    public $last_name;
    public $author;
    public $content;
    public $created;
    public $modified;

    public function __construct($id, $author, $content) {
      $this->id = $id;
      $this->author  = $author;
      $this->content = $content;
    }

    /**
     * @return array
     */
    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM posts');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['id'], $post['author'], $post['content']);
      }

      return $list;
    }

    /**
     * @param $id
     * @return Post
    */
    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Post($post['id'], $post['author'], $post['content']);
    }
    public static function add($arr) {
      $db = Db::getInstance();
      $time = date("Y-m-d h:sa:i");
      $sql = "INSERT INTO `posts` (`id`, `first_name`, `last_name`, `author`, `content`, `created`, `modified`) VALUES (NULL, '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['author']."', '".$_POST['content']."', '".$time."', '".$time."')";
    
      $query = $db->query($sql);
      if($query)
      {
        echo "Successful!";
      }
      else {
        echo "Error!";
      }
  } 

    public static function delete($id) {
      try
      {
       $db = Db::getInstance();
       // we make sure $id is an integer
       $id = intval($id);
       $sql = "DELETE FROM `posts` WHERE id= $id";
       $query = $db->exec($sql);
       echo "Successful!";
      }
      catch(PDOException $e)
    {
    echo $query . "<br>" . $e->getMessage();
    }
    }

     public static function update($array) {
      try
      {
       $db = Db::getInstance();
       // we make sure $id is an integer
       $id = $_POST['id'];
       $id = intval($id);
       $sql = "UPDATE `posts` SET `first_name`='".$_POST['first_name']."','".`last_name`."'='".$_POST['last_name']."','".`author`."'='".$_POST['author']."','".`content`."'='".$_POST['content']."' WHERE id = $id ";
       $query = $db->query($sql);
        echo "Successful!";
      }
      catch(PDOException $e)
    {
    echo $query . "<br>" . $e->getMessage();
    }
      }
    }
?>