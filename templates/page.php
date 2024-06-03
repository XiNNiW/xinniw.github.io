<!DOCTYPE html>
<html lang="en-US">
<?php include 'templates/head.php';?>
<body>
    <?php include 'templates/header.php';?>
    <p class="bg" ></p>
    <main class="page-content" aria-label="Content">
    <div class="background-div--effect">
<?php include "templates/tidal_code.php" ?>
      </div>
<div class="wrapper">
<?php

    echo ($page->content)($site, $page);
 ?>
</div>

    <?php include 'templates/footer.php';?>

  </main>
</body>
</html>
