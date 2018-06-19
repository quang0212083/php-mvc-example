<?php

/**
 * Class Post
 */
class Post {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $author;
    public $content;

    /**
     * Post constructor.
     * @param $id
     * @param $author
     * @param $content
    */
    public function __construct($id, $author, $content) {
      $this->id      = $id;
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
      return $post;
      // return new Post($post['id'], $post['author'], $post['content']);
    }

    public static function add($ad){

      $time = date('Y-m-d h:sa:i');
      $db = Db::getInstance();
      $query = "INSERT INTO `posts` (`id`, `first_name`, `last_name`, `author`, `content`, `created`, `modified`) VALUES (NULL,'".$_POST['firstname']."', '".$_POST['lastname']."','".$_POST['author']."', '".$_POST['content']."','".$time."','".$time."') ";
      $query= $db->query($query);
      if($query)
      {
        echo "Added";
      }
      else
      {
        echo "ERROR";
      }

    }
    public static function update($id, $arr){
       $db = Db::getInstance();
       $id = intval($id);
      $time = date('Y-m-d h:sa:i');
      $req = "UPDATE `posts` SET `first_name` = '".$_POST['firstname']."', `last_name` = '".$_POST['firstname']."', `author` = '".$_POST['firstname']."', `content` = '".$_POST['firstname']."', `created` = '".$time."', `modified` = '".$time."' WHERE `posts`.`id` = ".$id."";
      $query= $db->query($req);
      if($query)
      {
        echo "updated";
      }
      else
      {
        echo "ERROR";
      }
      
    }

    public static function delete($id){
      $db = Db::getInstance();
      $id = intval($id);
      $req = "DELETE from posts WHERE id =".$id."";
     // $post = $req->fetch();
      $query= $db->query($req);
      if($query)
      {
        echo "deleted";
      }
      else
      {
        echo "ERROR";
      }
      //return $post;
    }
  }
?>