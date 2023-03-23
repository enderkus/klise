<?php
while (have_posts()):
    the_post(); ?>
<article class="post-item">
          <span class="post-item-date"><?= get_the_date(); ?></span>
          <h4 class="post-item-title">
            <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
          </h4>
</article>
<?php endwhile; ?>