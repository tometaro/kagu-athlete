<li class="fadeIn">
  <a href="<?php the_permalink(); ?>">
    <div class="article-wrap">
      <div class="articleList-image"><?php the_post_thumbnail( 'large' ); ?></div>
      <div class="articleList-noImage"></div>
    </div>
    <div class="articleList-title"><?php the_title(); ?></div>
    <p class="articleList-read"><?php echo the_time('Y.m.d'); ?></p>
  </a>
</li>
