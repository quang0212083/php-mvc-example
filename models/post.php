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

      return  $post;
    }
    public function addPost($post)
    {
          $time =date('Y-m-d h:i:sa');
           $db = Db::getInstance();
          
           $data = "INSERT INTO `posts` (`id`, `first_name`, `last_name`, `author`, `content`, `created`, `modified`) VALUES (NULL, '" .$post['first_name']. "', '" .$post['last_name']. "', '" .$post['author']. "', '" .$post['content']. "', '".$time."', '".$time."')";
         $rs = $db->query($data);
         if($rs)
         {
            echo "<p class='alert alert-success'>Thêm thành công</p>";

         }
         else
         {
            echo "<p class='alert alert-danger'> Có lỗi khi thêm</p>";
         }
    }
    public function update($post,$id)
    {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
       $time =date('Y-m-d h:i:sa');
      $query ="UPDATE `posts` SET `first_name` = '" .$post['first_name']. "', `last_name` = '" .$post['last_name']. "', `author` = '" .$post['author']. "', `content` = '" .$post['content']. "', `created` = '2018-06-13 11:13:10', `modified` = '".$time."' WHERE `posts`.`id` = '".$id."'";
      // the query was prepared, now we replace :id with our actual $id value
      $rs = $db->query($query);
         if($rs)
         {
            echo "<p class='alert alert-success'>Sửa thành công</p>";

         }
         else
         {
            echo "<p class='alert alert-danger'> Có lỗi khi Sửa</p>";
         }
    }
    public function delete($id)
    {
          $db = Db::getInstance();
          // we make sure $id is an integer
          $id = intval($id);
          $query = "DELETE FROM `posts` WHERE `id` = '".$id."'";
          // the query was prepared, now we replace :id with our actual $id value
         $rs = $db->query($query);
        if($rs)
         {
            echo "<p class='alert alert-success'>Xóa thành công</p>";

         }
         else
         {
            echo "<p class='alert alert-danger'> Có lỗi khi xóa</p>";
         }
      
    }
  }
?>