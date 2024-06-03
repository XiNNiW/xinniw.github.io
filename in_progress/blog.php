<?php
$title= "blog";
$layout= "default";
$content = function($site, $page){
?>
<header class="post-header">
<h1 class="post-title"><?php echo $page->title ?></h1>
</header>
<section>
    <ul class="post-list">
<?php foreach($site->posts as $post) {?>
      <li>
      <span class="post-meta"><?php echo $post->date ?></span>
        <h3>
        <a class="post-link" href="<?php echo $post->path ?>"><?php echo $post->title?></a>
        </h3>
      </li>
<?php } ?>
    </ul>
</section>
<?php } ?>

