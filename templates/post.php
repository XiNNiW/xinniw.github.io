<!DOCTYPE html>
<html lang="en-US">
<?php include 'templates/head.php';?>
<body>
    <?php include 'templates/header.php';?>
    <p class="bg" ></p>
    <main class="page-content" aria-label="Content">

<div class="wrapper">
<header class="post-header">
<h1 class="post-title"><?php echo $page->title ?></h1>
</header>
<?php

    echo ($page->content)($site, $page);
 ?>
</div>

    <?php include 'templates/footer.php';?>

  </main>
</body>
</html>
