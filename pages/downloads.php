<?php
$title= "downloads";
$layout= "default";
$content = function($site, $page){

?>

<header class="post-header">
<h1 class="post-title"><?php echo $page->title ?></h1>
</header>
    <p>
        Thanks for checking out my work. You are welcome to use the samples and content below royalty free.
        All samples are published here under the Creative Commons CC0 license.
        <!-- If you use the content below consider supporting me on ko-fi.
        {% include support-me-on-kofi.html %} -->
    </p>

<?php foreach($site->data['downloads'] as $download){ ?>
          <section>
                <div>
                <h3 ><?php echo $download->name?>
                    <span class="downloads--a-link"><a  href = "<?php echo $download->link?>">download</a></span>
                </h3>
                </div>
                <p class= "post-content"><?php echo $download->description?></p>
          </section>

<?php } ?>
<?php } ?>
