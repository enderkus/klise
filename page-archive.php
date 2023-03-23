<?php 
/* Template Name: Klise Archive Page */ 
get_header();
?>
<div class="wrapper">
    <header class="header">
      <h1 class="header-title center" itemprop="headline"><?php the_title(); ?></h1>
    </header>
    <main class="page-content" aria-label="Content">
        <div class="search-article">
            <label for="search-input" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="rgba(128,128,128,0.8)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </label>
            <input type="search" id="search-input" placeholder="<?php _e('Find some articles here','klise'); ?>" aria-label="Search">
          </div>
          
          <ul id="search-results"></ul>
          <?php get_template_part('template-parts/archive', 'loop'); ?>
    </main>
     <?php get_footer(); ?>
      <script src="<?= get_template_directory_uri(); ?>/assets/js/search.js"></script>
        <script>
            var sjs = SimpleWpSearch({
            searchInput: document.getElementById('search-input'),
            resultsContainer: document.getElementById('search-results'),
            json: '<?= bloginfo('url') ?>/wp-json/klise/v1/postlist',
            });
        </script>
  </div>
</body>

</html>