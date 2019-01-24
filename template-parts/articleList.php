<article class="articleList-item fadeIn　entry">
  <a class="articleList-wrap" href="<?php the_permalink(); ?>">
    <div class="articleList-image"><?php the_post_thumbnail( 'large' ); ?></div>
    <div class="articleList-noImage"></div>
  </a>
  <a class="articleList-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  <div class="articleList-read">
    <p><?php echo get_post_meta($post->ID , '会社名' ,true); ?></p>
    <p>
      <span><?php echo the_time('Y.m.d'); ?></span><span><?php the_category(' &bull; '); ?></span>
    </p>
  </div>
</article>