<p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->author; ?>
    <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>See content</a>
    <a href='?controller=posts&action=delete&id=<?php echo $post->id; ?>'>Delete</a>
  </p>
<?php } ?>