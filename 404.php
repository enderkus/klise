<?php get_header(); ?>
  <div class="wrapper">
    <main aria-label="Content">
      <div class="not-found">
        <div class="container">
          <div class="title">404</div>
          <p class="phrase"><?php _e('😕 Hmm... Seems you lost from my journey.','klise'); ?></p>
          <a class="solution" href="<?php bloginfo('url'); ?>"><?php _e('back home','klise'); ?></a>
        </div>
      </div>
    </main>  
   <?php get_footer(); ?>
  </div>
</body>

</html>
