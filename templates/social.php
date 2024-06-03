<ul class="social-media-list">
  <li><a rel="me" href="https://<?php echo $site->social->mst->instance."/".$site->social->mst->username?>"><svg class="svg-icon grey"><use xlink:href="<?php include '/assets/minima-social-icons.svg' ?>"></use></svg> <span class="username"><?php echo $site->social->mst->username ?></span></a></li>
  <li><a href=""><img class="svg-icon" src="<?php '/assets/images/Spotify_Icon_CMYK_Black.png'?>"/> <span class="username"><?php echo $site->social->spotify_username?></span></a></li>
  <li><a href="https://github.com/<?php echo $site->social->github_username| cgi_escape | escape ?>"><svg class="svg-icon grey"><use xlink:href="<?php '/assets/minima-social-icons.svg#github' | relative_url ?>"></use></svg> <span class="username"><?php echo $site->github_username| escape ?></span></a></li>
  <li><a href="https://www.instagram.com/<?php echo $site->social->instagram_username ?>"><svg class="svg-icon grey"><use xlink:href="'/assets/minima-social-icons.svg#instagram'"></use></svg> <span class="username"><?php echo $site->instagram_username ?></span></a></li>
  <li><a href="https://www.youtube.com/channel/<?php echo $site->social->youtube_channel ?>"><svg class="svg-icon grey"><use xlink:href="'/assets/minima-social-icons.svg#youtube'"></use></svg><span class="username"><?php echo $site->social->youtube_channel_name?>YouTube</span></a></li>
  <li><a href="<?php echo $site->url.'/feed.xml'?>"><svg class="svg-icon grey"><use xlink:href="/assets/minima-social-icons.svg#rss"></use></svg> <span><?php echo $site->social->rss ?></span></a></li>
</ul>
