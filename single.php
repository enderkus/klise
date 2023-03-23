<?php get_header(); ?>
<div class="wrapper post">
    <main class="page-content" aria-label="Content">
        <?php while (have_posts()):
            the_post(); ?>
            <article itemscope itemtype="https://schema.org/BlogPosting">
                <header class="header">
                    <?php get_template_part('template-parts/post', 'tags'); ?>
                    <h1 class="header-title" itemprop="headline">
                        <?php the_title(); ?>
                    </h1>

                    <div class="post-meta">
                        <time datetime="<?php get_the_date(); ?>" itemprop="datePublished">
                            <?php the_date(); ?>
                        </time>
                        <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                            <span itemprop="name"><?php printf(get_the_author()); ?></span>
                        </span>
                        <span hidden itemprop="publisher" itemtype="Person"><?php printf(get_the_author()); ?></span>
                        <span hidden itemprop="mainEntityOfPage"><?php the_excerpt(); ?></span>
                    </div>
                </header>

                <div class="page-content" itemprop="articleBody">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </main>
    <nav class="post-nav">
        <?php get_template_part('template-parts/post', 'prev'); ?>
        <?php get_template_part('template-parts/post', 'next'); ?>
    </nav>
    <?php get_footer(); ?>
</div>
</body>

</html>