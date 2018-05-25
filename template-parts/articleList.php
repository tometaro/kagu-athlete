<article class="articleList-item fadeIn">
  <a class="article-wrap" href="<?php the_permalink(); ?>">
    <div class="articleList-image"><?php the_post_thumbnail( 'large' ); ?></div>
    <div class="articleList-noImage"></div>
  </a>
  <a class="articleList-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  <p class="articleList-read"><?php echo the_time('Y.m.d'); ?><?php the_category(' &bull; '); ?></p>
</article>
