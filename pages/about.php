<?php
$title = "about";
$layout = "default";
$url = "/about";
$content = function($site, $page){
?>
<header class="post-header">
<h1 class="post-title"><?php echo $page->title ?></h1>
</header>
<section>
<p>
xinniw is david minnix.
</p>
<p>
david makes music with synthesizers, samplers, and algorithms.
</p>
<p>
ambient, ambient techno, weird noises, ann arbor, michigan, united states, live
</p>
<h3>
<?php echo $site->booking_message; ?>
</h3>
<!-- {% include support-me-on-kofi.html %} -->
</section>
<?php } ?>
