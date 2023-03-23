<div class="author">
  <img class="author-avatar"
    src="<?= !empty(get_theme_mod('author_image')) ? get_theme_mod('author_image') : get_template_directory_uri()."/assets/img/avatar.jpg"; ?>"
    alt="<?= get_theme_mod('author_name'); ?>" />
  <h2 class="author-name">
    <?= get_theme_mod('author_name'); ?>
  </h2>
  <p class="author-bio">
    <?= get_theme_mod('author_bio'); ?>
  </p>
</div>