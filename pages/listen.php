<?php
$title = "listen";
$layout = "default";
$content = function($site, $page){

?>
<header class="post-header">
<h1 class="post-title"><?php echo $page->title ?></h1>
</header>
<section>
    <h2>live</h2>
    <iframe class = "iframe--player-container" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/482008011&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
    <!-- <iframe class = "iframe--player-container" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/326081022&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
    <iframe class = "iframe--player-container" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/489323352&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe> -->
    <h2>albums</h2>
    <iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=52900400/size=large/bgcol=333333/linkcol=0f91ff/tracklist=false/artwork=small/transparent=true/" seamless><a href="http://xinniw.bandcamp.com/album/collective-memory-decay">Collective Memory Decay by XiNNiW</a></iframe>
    <iframe class = "iframe--player-container" style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=4149752299/size=large/bgcol=333333/linkcol=0f91ff/tracklist=false/artwork=small/transparent=true/" seamless><a href="http://detund.bandcamp.com/album/compression-artifacts">Compression Artifacts by XiNNiW</a></iframe>
</section>

<?php } ?>
