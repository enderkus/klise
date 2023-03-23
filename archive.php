<?php get_header(); ?>
<div class="wrapper">
    <?php if (have_posts()): ?>
        <header class="header">
            <h1 class="header-title center" itemprop="headline">
                <?php
                if (is_category()):
                    single_cat_title();

                elseif (is_tag()):
                    single_tag_title();

                elseif (is_author()):
                    printf(__('Author: %s', 'klise'), get_the_author());

                elseif (is_day()):
                    printf(__('Day: %s', 'klise'), get_the_date());

                elseif (is_month()):
                    printf(__('Month: %s', 'klise'), get_the_date(_x('F Y', 'monthly archives date format', 'klise')));

                elseif (is_year()):
                    printf(__('Year: %s', 'klise'), get_the_date(_x('Y', 'yearly archives date format', 'klise')));

                elseif (is_tax('post_format', 'post-format-aside')):
                    _e('Asides', 'klise');

                elseif (is_tax('post_format', 'post-format-gallery')):
                    _e('Galleries', 'klise');

                elseif (is_tax('post_format', 'post-format-image')):
                    _e('Images', 'klise');

                elseif (is_tax('post_format', 'post-format-video')):
                    _e('Videos', 'klise');

                elseif (is_tax('post_format', 'post-format-quote')):
                    _e('Quotes', 'klise');

                elseif (is_tax('post_format', 'post-format-link')):
                    _e('Links', 'klise');

                elseif (is_tax('post_format', 'post-format-status')):
                    _e('Statuses', 'klise');

                elseif (is_tax('post_format', 'post-format-audio')):
                    _e('Audios', 'klise');

                elseif (is_tax('post_format', 'post-format-chat')):
                    _e('Chats', 'klise');

                else:
                    _e('Archives', 'klise');
                endif;
                ?>
            </h1>
        </header>
        <main class="page-content" aria-label="Content">
            <?php get_template_part('template-parts/category', 'loop'); ?>        
        </main>
    <?php endif; ?>
    <?php get_footer(); ?>
</div>
</body>

</html>