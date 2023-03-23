<?php get_header(); ?>
<?php while (have_posts()):
    the_post(); ?>
    <div class="wrapper">
        <header class="header">
            <h1 class="header-title center" itemprop="headline">
                <?php the_title(); ?>
            </h1>
        </header>
        <main class="page-content" aria-label="Content">
            <?php the_content(); ?>
        </main>
    <?php endwhile; ?>
    <?php get_footer(); ?>
</div>
</body>

</html>