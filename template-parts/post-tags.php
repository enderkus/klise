<?php
$post_tags = get_the_tags();
if ( ! empty( $post_tags ) ) {
?>
<div class="tags">
    <span itemprop="keywords">
        <?php foreach( $post_tags as $post_tag ) { ?>
            <a class="tag" href="<?= get_tag_link( $post_tag ) ?>"><?= $post_tag->name; ?></a>
        <?php } ?>
    </span>
</div>
<?php } ?>