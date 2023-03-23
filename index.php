<?php get_header(); ?>  
<div class="wrapper">
    <?php get_template_part('template-parts/author', 'bio'); ?>
    <main aria-label="Content">
        <h3 class="posts-item-note" aria-label="<?php _e('Recent Posts','klise'); ?>"><?php _e('Recent Posts','klise'); ?></h3>
        <?php get_template_part('template-parts/post', 'loop'); ?>
    </main>
    <?php get_footer(); ?>
  </div>
</body>
</html>

