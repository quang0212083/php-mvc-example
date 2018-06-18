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


    public function add(){
      require_once('views/posts/add.php');
      

    }
    public function doAdd()
    {
      $firstname= $_POST['firstname'];
      $lastname=$_POST['lastname'];
      $author=$_POST['author'];
      $content=$_POST['content'];

      $arr = array(
        'first_name' => $firstname,
        'last_name'=>$lastname,
        'author'=>$author,
        'content'=>$content


      );

        require_once('models/post.php');
        $post = Post::add($arr);
    }
    public function update(){
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $post = Post::find($_GET['id']);
      require_once('views/posts/update.php');
      }

    public function exeUpdate()
    {
      $id = $_POST['id'];
     $firstname= $_POST['firstname'];
       $lastname=$_POST['lastname'];
      $author=$_POST['author'];
       $content=$_POST['content'];

      $arr = array(
        'first_name' => $firstname,
        'last_name'=>$lastname,
        'author'=>$author,
        'content'=>$content


       );

    require_once('models/post.php');
  $post = Post::update($id,$arr);
     }

    public function delete(){
       if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
       require_once('models/post.php');
      $post = Post::delete($_GET['id']);
    
      
    }
  }
?>