<?php
$prev_post = get_previous_post();
if ($prev_post) {
    $id = $prev_post->ID;
    $permalink = get_permalink($id);
    ?>
    <a class="post-nav-item post-nav-prev" href="<?= $permalink; ?>">
        <div class="nav-arrow">Previous</div>
        <span class="post-title">
            <?= $prev_post->post_title; ?>
        </span>
    </a>
    <?php
}
?>