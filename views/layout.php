<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <body>
    <header>
      <a href='?controller=pages&action=home'>Home</a>
      <a href='?controller=posts&action=index'>Posts</a>
      <a href='?controller=posts&action=add'>Add</a>
    </header>

    <?php require_once('routes.php'); ?>

    <footer>
      Copyright
    </footer>
  <body>
<html>