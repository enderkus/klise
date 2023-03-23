<?php $loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => -1)); ?>
<?php
$year_check = '';
while ($loop->have_posts()):
    $loop->the_post();
    $year = get_the_date('Y');
    if ($year != $year_check) {
        ?>
        <h2>
            <?= get_the_date('Y') ?>
        </h2>
        <?php
    }
    ?>
    <article class="post-item">
        <h3 class="post-item-title">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h3>
    </article>
    <?php
    $year_check = $year;
endwhile; ?>