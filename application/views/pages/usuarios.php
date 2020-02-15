<h2><?php echo $title; ?></h2>

<?php foreach ($usuarios as $news_item): ?>

   <h3><?php echo $news_item['id_usuario']; ?></h3>
   <div class="main">
      <?php echo $news_item['nm_login']; ?>
   </div>

<?php endforeach; ?>
