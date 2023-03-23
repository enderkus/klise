<?php
$next_post = get_next_post();
if ($next_post) {
    $id = $next_post->ID;
    $permalink = get_permalink($id);
    ?>
    <a class="post-nav-item post-nav-next" href="<?= $permalink; ?>">
        <div class="nav-arrow">Next</div>
        <span class="post-title">
            <?= $next_post->post_title; ?>
        </span>
    </a>
    <?php
}
?>