<?php
  class PagesController {
    public function home() {
      $first_name = 'BAP';
      $last_name  = 'Quangnd';
      require_once('views/pages/home.php');
    }
    
    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>