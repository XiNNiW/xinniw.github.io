<?php
$layout= "default";
$title = "shows";
$content = function($site, $page){
?>


<header class="post-header">
<h1 class="post-title"><?php echo $page->title ?></h1>
<h3><?php echo $site->booking_message ?></h3>
</header>
<?php foreach($site->data['shows'] as $show){  ?>
        <p class="shows">
           >
           <span class="li--span-date "><?php echo $show->date ?></span>
        <?php if($show->name){ ?>
        <span class="li--span-name "> <span class="li--span-seperator">__</span> <?php echo $show->name ?></span>
        <?php } ?>

            <br>
            <span class="li--span-seperator">...</span>
            <span class="li--span-location "><?php echo $show->location ?></span>
        </p>
<?php } ?>

<?php } ?>
