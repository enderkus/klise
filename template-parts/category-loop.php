<?php while ( have_posts() ) : the_post(); ?>
<article class="post-item">
        <h3 class="post-item-title">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h3>
</article>
<?php endwhile; ?>
