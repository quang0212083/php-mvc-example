<?php

/**
 * Class PostsController
 */
class PostsController {

    /**
     * Show all post
     */
    public function index() {
      // we store all the posts in a variable
      $posts = Post::all();
      require_once('views/posts/index.php');
    }

    /**
     * Show by id post
     */
    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $post = Post::find($_GET['id']);
      require_once('views/posts/show.php');
    }

      public function add()
      {    
          require_once('views/posts/add.php');
      }
      public function doAdd()
      {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $author = $_POST['author'];
        $content = $_POST['content'];
        $arr  = array(
          'first_name' => $first_name,
          'last_name' => $last_name,
          'author' => $author,
          'content' => $content
        );
        $post = Post::add($arr);
      }

        public function delete()
       {
        if (isset($_POST['id']))
          $post = Post::delete($_POST['id']);
        require_once('views/posts/delete.php');
        }

         public function update()
      {    
          require_once('views/posts/update.php');
      }
      public function doUpdate()
      {
        if (isset($_POST['id']))
         $id = $_POST['id'];
         $first_name = $_POST['first_name'];
         $last_name = $_POST['last_name'];
         $author = $_POST['author'];
         $content = $_POST['content'];
         $arr  = array(
          'id' => $id,
          'first_name' => $first_name,
          'last_name' => $last_name,
          'author' => $author,
          'content' => $content
        );
        $post = Post::update($array);
      }
  }

?>